@extends('layouts.app')

@section('content')
    <a href="/cadastros" class="btn btn-default">Voltar</a>
    <h1>Editar Cadastro</h1>
    <style type="text/css">
        #botaoExcluir {
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -110%;
            margin-top: -40%;
        }

    </style>
    <form action="{{ route('cadastroEmpresa.excluirCadastro', $empresa) }}" method="post">
        <button type="submit" class="btn btn-outline-danger">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-trash-fill"
                viewBox="0 0 16 16" style="color: red">
                <path
                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z">
                </path>
            </svg>
            Excluir Cadastro
        </button>
    </form>
    <small>Os campos obrigatórios estão representados com um asterisco (*).</small>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div>
        <h3>{{ $empresa->razao_social }}</h3>
    </div>
    <form action="{{ route('cadastroEmpresa.update', $empresa) }}" method="post" name="formulario">
        @csrf
        <div class="form-group control-label col-md-7">
            <label for="razao_social">Razão Social</label>
            <input type="text" class="form-control" id="razao_social" name="razao_social" placeholder="Razão Social"
                value="{{ $empresa->razao_social }}">

            @error('razao_social')
                <div class="invalid-feedback" style="color: red">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group control-label col-md-5">
            <label for="nome_fantasia">Nome Fantasia</label>
            <input type="text" class="form-control" id="nome_fantasia" name="nome_fantasia" placeholder="Nome Fantasia"
                value="{{ $empresa->nome_fantasia }}">
            @error('nome_fantasia')
                <div class="invalid-feedback" style="color: red">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group control-label col-md-6">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço"
                value="{{ $empresa->endereco }}">
            @error('endereco')
                <div class="invalid-feedback" style="color: red">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group control-label col-md-6">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro"
                value="{{ $empresa->bairro }}">
            @error('bairro')
                <div class="invalid-feedback" style="color: red">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group control-label col-md-6">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade"
                value="{{ $empresa->cidade }}">
            @error('cidade')
                <div class="invalid-feedback" style="color: red">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group control-label col-md-2">
            <label for="uf">UF</label>
            <input type="text" class="form-control" id="uf" name="uf" placeholder="UF" value="{{ $empresa->uf }}">
            @error('uf')
                <div class="invalid-feedback" style="color: red">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group control-label col-md-4">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" value="{{ $empresa->cep }}">
            @error('cep')
                <div class="invalid-feedback" style="color: red">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group control-label col-md-6">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone"
                value="{{ $empresa->telefone }}">
            @error('telefone')
                <div class="invalid-feedback" style="color: red">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group control-label col-md-6">
            <label for="celular">Celular</label>
            <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular"
                value="{{ $empresa->celular }}">
            @error('celular')
                <div class="invalid-feedback" style="color: red">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group control-label col-md-4">
            <label for="cnpj">CNPJ</label>
            <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ"
                value="{{ $empresa->cnpj }}">
            @error('cnpj')
                <div class="invalid-feedback" style="color: red">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label for="inscricao_estadual">Inscrição Estadual</label>
            <input type="text" class="form-control" id="inscricao_estadual" name="inscricao_estadual"
                placeholder="Inscrição Estadual" value="{{ $empresa->inscricao_estadual }}">
        </div>
        <div class="form-group col-md-4">
            <label for="inscricao_municipal">Inscrição Municipal</label>
            <input type="text" class="form-control" id="inscricao_municipal" name="inscricao_municipal"
                placeholder="Inscriação Municipal" value="{{ $empresa->inscricao_municipal }}">
        </div>
        <div class="form-group control-label col-md-4">
            <label for="representante">Representante Legal da Empresa</label>
            <input type="text" class="form-control" id="representante" name="representante"
                placeholder="Representante Legal da Empresa" value="{{ $empresa->representante }}">
            @error('representante')
                <div class="invalid-feedback" style="color: red">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group control-label col-md-4">
            <label for="cpf_representante">CPF do Responsável</label>
            <input type="text" class="form-control" id="cpf_representante" name="cpf_representante"
                placeholder="CPF do Representante" value="{{ $empresa->cpf_representante }}">
            @error('cpf_representante')
                <div class="invalid-feedback" style="color: red">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group control-label col-md-4">
            <label for="rg_representante">RG do Representante</label>
            <input type="text" class="form-control" id="rg_representante" name="rg_representante"
                placeholder="RG do Representante" value="{{ $empresa->rg_representante }}">
            @error('rg_representante')
                <div class="invalid-feedback" style="color: red">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group control-label col-md-12">
            <label for="email_representante">Email de Contato - Representante</label>
            <input type="text" class="form-control" id="email_representante" name="email_representante" placeholder="Email"
                value="{{ $empresa->email_representante }}">
            @error('email_representante')
                <div class="invalid-feedback" style="color: red">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group col-md-2">
            <input type="submit" class="btn btn-success" value="Salvar Alterações">
        </div>
    </form>
@endsection
