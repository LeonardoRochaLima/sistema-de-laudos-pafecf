<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreEmpresaRequest;
use App\Empresa;

class EmpresaController extends Controller
{
    private $objEmpresa;
    
    public function __contruct(){
        $this->objEmpresa = new Empresa();
    }

    public function index(){
        $empresas = Empresa::orderBy('razao_social', 'asc')->paginate(10);
        return view('cadastros.index')->with('empresas', $empresas);
    }

    public function create(){
        return view('cadastros.create');
    }

    public function show($id){
        $empresa = Empresa::find($id);
        return view('cadastros.show')->with('empresa', $empresa);
    }

    public function search(){
        return view('cadastros.search');
    }

    public function store(StoreEmpresaRequest $request){

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

        return redirect('/')->with('msg', 'Empresa Cadastrada com Sucesso!!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teste  $teste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teste $teste)
    {
        //
    }
}
