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

        $empresa = new Empresa;

        $empresa->razao_social = $request->razao_social;
        $empresa->nome_fantasia = $request->nome_fantasia;
        $empresa->endereco = $request->endereco;
        $empresa->bairro = $request->bairro;
        $empresa->cidade = $request->cidade;
        $empresa->uf = $request->uf;
        $empresa->cep = $request->cep;
        $empresa->telefone = $request->telefone;
        $empresa->celular = $request->celular;
        $empresa->cnpj = $request->cnpj;
        $empresa->inscricao_estadual = $request->inscricao_estadual;
        $empresa->inscricao_municipal = $request->inscricao_municipal;
        $empresa->representante = $request->representante;
        $empresa->cpf_representante = $request->cpf_representante;
        $empresa->rg_representante = $request->rg_representante;
        $empresa->email_representante = $request->email_representante;

        $empresa->save();

        return redirect('/')->with('msg', 'Empresa Cadastrada com Sucesso!!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teste  $teste
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEmpresaRequest $request, $id)
    {
        //Edit Empresa
        $empresa = Empresa::find($id);


        $empresa->razao_social = $request->input('razao_social');
        $empresa->nome_fantasia = $request->input('nome_fantasia');
        $empresa->endereco = $request->input('endereco');
        $empresa->bairro = $request->input('bairro');
        $empresa->cidade = $request->input('cidade');
        $empresa->uf = $request->input('uf');
        $empresa->cep = $request->input('cep');
        $empresa->telefone = $request->input('telefone');
        $empresa->celular = $request->input('celular');
        $empresa->cnpj = $request->input('cnpj');
        $empresa->inscricao_estadual = $request->input('inscricao_estadual');
        $empresa->inscricao_municipal = $request->input('inscricao_municipal');
        $empresa->representante = $request->input('representante');
        $empresa->cpf_representante = $request->input('cpf_representante');
        $empresa->rg_representante = $request->input('rg_representante');
        $empresa->email_representante = $request->input('email_representante');

        $empresa->save();

        return redirect('/cadastros/index')->with('msg', 'Cadastro Editado com Sucesso!!');
    }
}