<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laudo;
use App\Models\Empresa;
use App\Models\PDV;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class LaudoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('laudo.index');
    }

    public function create()
    {
        $empresas = Empresa::where('validacao', true)->orderBy('id', 'desc')->get();
        $pdvs = PDV::all();
        return view('laudo.create', ['empresas' => $empresas, 'pdvs' => $pdvs]);
    }

    public function gerarIFL()
    {
        $ano_atual = Carbon::now()->year;
        $ultimo_laudo =  Laudo::latest('id')->first();
        $ano_ultimo_laudo = $ultimo_laudo->select('created_at')->first();
        $ano_ultimo_laudo = \Carbon\Carbon::parse($ano_ultimo_laudo->created_at)->year;

        $numero_laudo = 1;

        if ($ano_atual == $ano_ultimo_laudo) {
            $numero_laudo = $ultimo_laudo->numero_laudo + 1;
            return $numero_laudo;
        }else{
            return $numero_laudo;
        }
    }

    public function store(Request $request)
    {   
        $laudo = new Laudo;
        $user = auth()->user();
        $ano_atual = Carbon::now()->year;

        $laudo->numero_laudo = $this->gerarIFL();

        if($laudo->numero_laudo < 10){
            $laudo->ifl .= "IFL00".$laudo->numero_laudo.$ano_atual;
        }else{
            $laudo->ifl .= "IFL0".$laudo->numero_laudo.$ano_atual;
        }

        

        $laudo->razao_social_empresa = $request->empresa;
        $laudo->nome_comercial_pdv = $request->pdv;
        $laudo->homologador = $user->name;
        $laudo->data_inicio = $request->data_inicio;
        $laudo->data_termino = $request->data_termino;
        $laudo->versao_er = $request->versao_er;
        $laudo->envelope_seguranca_marca = $request->envelope_seguranca_marca;
        $laudo->envelope_seguranca_modelo = $request->envelope_seguranca_modelo;
        $laudo->numero_envelope = $request->numero_envelope;
        $laudo->requisitos_executados_sgbd = $request->requisitos_executados_sgbd;
        $laudo->executavel_sgbd = $request->executavel_sgbd;
        $laudo->funcao_sped = $request->funcao_sped;
        $laudo->executavel_sped = $request->executavel_sped;
        $laudo->executavel_nfe = $request->executavel_nfe;
        $laudo->parecer_conclusivo = $request->parecer_conclusivo;
        $laudo->ecf_analise_marca = $request->ecf_analise_marca;
        $laudo->ecf_analise_modelo = $request->ecf_analise_modelo;
        $laudo->relacao_ecfs = $request->relacao_ecfs;
        $laudo->comentarios = $request->comentarios;

        $laudo->save();

        return redirect('/laudo')->with('msg', 'Laudo Cadastrado com Sucesso!!');
    }
  
    public function getPDVs(){
        $id_empresa = request('empresa');
        $pdvs = PDV::where('id_empresa', $id_empresa)->get();
        $option = "<option value=''>Selecione um PDV</option>";
        foreach ($pdvs as $pdv) {
            $option .= '<option value="'.$pdv->id.'">'.$pdv->nome_comercial.'</option>';
        }
        return $option;
    }

    public function getObject($id_empresa){
        $pdvs = PDV::where('id_empresa', $id_empresa)->get();
        return $pdvs;
    }
}
