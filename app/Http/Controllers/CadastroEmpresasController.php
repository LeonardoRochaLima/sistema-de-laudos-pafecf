<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroEmpresasController extends Controller
{
    public function index(){
        $title = 'Cadastro de Empresas';
        return view('cadastros.index')->with('title', $title);
    }
}
