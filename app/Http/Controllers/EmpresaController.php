<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class EmpresaController extends Controller
{
    public function index(){
        $title = 'Cadastro de Empresas';
        return view('cadastros.create')->with('title', $title);
    }

    public function create(){
        return view('cadastros.create');
    }

    public function store(Request $request){

        $cadastro = new Empresa;

        $cadastro->razao_social = $request->razao_social;
        $cadastro->nome_fantasia = $request->nome_fantasia;
        $cadastro->endereco = $request->endereco;
        $cadastro->bairro = $request->bairro;
        $cadastro->cidade = $request->cidade;
        $cadastro->uf = $request->uf;
        $cadastro->cep = $request->cep;
        $cadastro->telefone = $request->telefone;
        $cadastro->celular = $request->celular;
        $cadastro->cnpj = $request->cnpj;
        $cadastro->inscricao_estadual = $request->inscricao_estadual;
        $cadastro->inscricao_municipal = $request->inscricao_municipal;
        $cadastro->representante = $request->representante;
        $cadastro->cpf_representante = $request->cpf_representante;
        $cadastro->rg_representante = $request->rg_representante;
        $cadastro->email_representante = $request->email_representante;

        $cadastro->save();

        return redirect('/');
    }
}
