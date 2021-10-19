<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Empresa;
use App\Models\PDV;

class LaudoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $empresas = Empresa::where('validacao', true)->orderBy('id', 'desc')->get();
        $pdvs = PDV::all();
        return view('laudo.index', ['empresas' => $empresas, 'pdvs' => $pdvs]);
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

    public function getObject(){
        $id_empresa = request('empresa');
        $empresa = Empresa::find($id_empresa);
        $pdvs = PDV::where('id_empresa', $id_empresa)->get();
        foreach ($pdvs as $pdv) {
            if($pdv->id_empresa == $empresa->id){
                $pdvs = $pdv;
            }
        }
        return ['empresas' => $empresa, 'pdvs' => $pdvs];
    }
}
