<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\PDV;

class PDVController extends Controller
{
    public function index($id)
    {
        $empresa = Empresa::find($id);
        return view('cadastros.PDV.create')->with('empresa', $empresa);
    }

    public function show($id){
        $empresa = Empresa::find($id);
        return view('cadastros.PDV.create')->with('empresa', $empresa);
    }

    public function store($request){
        $pdv = new PDV;

        $pdv->razao_social = $request->razao_social;
        $empresa->save();

        return redirect('/cadastros')->with('msg', 'Empresa Cadastrada com Sucesso!!');
    }

    public function create(){

    }
}
