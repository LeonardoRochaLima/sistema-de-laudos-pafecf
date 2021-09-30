<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\PDV;

class PDVController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index($id)
    {
        $empresa = Empresa::find($id);
        return view('cadastros.PDV.create')->with('empresa', $empresa);
    }

    public function store(Request $request){
        
        $pdv = new PDV;
        //$empresa = Empresa::find($id);
        $pdv->id_empresa = 1;
        $pdv->nome_comercial = $request->nome_comercial;
        $pdv->versao = $request->versao;
        $pdv->nome_principal_executavel = $request->nome_principal_executavel;
        $pdv->linguagem = $request->linguagem;
        $pdv->sistema_operacional = $request->sistema_operacional;
        $pdv->data_base = $request->data_base;
        $pdv->tipo_desenvolvimento = $request->tipo_desenvolvimento;
        $pdv->tipo_funcionamento = $request->tipo_funcionamento;
        $pdv->nfe = $request->nfe;
        $pdv->sped = $request->sped;
        $pdv->nfce = $request->nfce;
        $pdv->tratamento_interrupcao = $request->tratamento_interrupcao;
        $pdv->integracao_paf = $request->integracao_paf;


        $pdv->aplicacoes_especiais = implode(" ", $request->aplicacoes_especiais);
        $pdv->forma_impressao = implode(" ", $request->forma_impressao);
        $pdv->perfis = implode(" ", $request->perfis);
        
        $pdv->save();
        return redirect()->back()->with('msg', 'PDV Cadastrado com Sucesso!!');
    }

    public function create(){

    }
}
