@extends('layouts.app')

@section('content')
    <a href="/cadastros" class="btn btn-default">Voltar</a>
    <h1>Editar Cadastro</h1>
    <div>
        <h3>{{$empresa->razao_social}}</h3>
    </div>
    <div class="form-group col-md-7">
        <label for="razao_social">Razão Social</label>
        <input type="text" class="form-control" id="razao_social" name="razao_social" placeholder="Razão Social" value="{{ $empresa->razao_social }}">
    </div>
    <div class="form-group col-md-5">
        <label for="nome_fantasia">Nome Fantasia</label>
        <input type="text" class="form-control" id="nome_fantasia" name="nome_fantasia" placeholder="Nome Fantasia" value="{{ $empresa->nome_fantasia }}">
    </div>
    <div class="form-group col-md-6">
        <label for="endereco">Endereço</label>
        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço"
            value="{{$empresa->endereco}}">
    </div>
    <div class="form-group col-md-6">
        <label for="bairro">Bairro</label>
        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" value="{{ $empresa->bairro }}">
    </div>
    <div class="form-group col-md-6">
        <label for="cidade">Cidade</label>
        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" value="{{ $empresa->cidade }}">
    </div>
    <div class="form-group col-md-2">
        <label for="uf">UF</label>
        <input type="text" class="form-control" id="uf" name="uf" placeholder="UF" value="{{$empresa->uf}}">
    </div>
    <div class="form-group col-md-4">
        <label for="cep">CEP</label>
        <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" value="{{$empresa->cep}}">
    </div>
    <div class="form-group col-md-6">
        <label for="telefone">Telefone</label>
        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" value="{{$empresa->telefone}}">
    </div>
    <div class="form-group col-md-6">
        <label for="celular">Celular</label>
        <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular" value="{{$empresa->celular}}">
    </div>
    <div class="form-group col-md-4">
        <label for="cnpj">CNPJ</label>
        <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ" value="{{$empresa->cnpj}}">
    </div>
    <div class="form-group col-md-4">
        <label for="inscricao_estadual">Inscrição Estadual</label>
        <input type="text" class="form-control" id="inscricao_estadual" name="inscricao_estadual" placeholder="Inscrição Estadual" value="{{$empresa->inscricao_estadual}}">
    </div>
    <div class="form-group col-md-4">
        <label for="inscricao_municipal">Inscrição Municipal</label>
        <input type="text" class="form-control" id="inscricao_municipal" name="inscricao_municipal" placeholder="Inscriação Municipal" value="{{$empresa->inscricao_municipal}}">
    </div>
    <div class="form-group col-md-4">
        <label for="representante">Representante Legal da Empresa</label>
        <input type="text" class="form-control" id="representante" name="representante" placeholder="Representante Legal da Empresa" value="{{$empresa->representante}}">
    </div>
    <div class="form-group col-md-4">
        <label for="cpf_representante">CPF do Responsável</label>
        <input type="text" class="form-control" id="cpf_representante" name="cpf_representante" placeholder="CPF do Representante" value="{{$empresa->cpf_representante}}">
    </div>
    <div class="form-group col-md-4">
        <label for="rg_representante">RG do Representante</label>
        <input type="text" class="form-control" id="rg_representante" name="rg_representante" placeholder="RG do Representante" value="{{$empresa->rg_representante}}">
    </div>
    <div class="form-group col-md-12">
        <label for="email_representante">Email de Contato - Representante</label>
        <input type="text" class="form-control" id="email_representante" name="email_representante" placeholder="Email" value="{{$empresa->email_representante}}">
    </div>
    <div class="form-group col-md-2">
        <input type="submit" class="btn btn-success" value="Salvar Alterações">
    </div>
@endsection
