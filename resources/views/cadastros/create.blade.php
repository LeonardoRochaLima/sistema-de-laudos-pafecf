@extends('layouts.app')

@section('content')
    <a href="/cadastros" class="btn btn-default">Voltar</a>
    <h1>Cadastrar Empresa</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div id="cadastrar-empresa-create-container">
        <form action="/cadastros" method="POST" name="formulario">
            @csrf
            <div class="form-group col-md-7">
                <h3>Empresa Desenvolvedora Requerente: </h3>
            </div>
            <div class="title-body">
                <form class="row">
                    <div class="form-group col-md-7">
                        <label for="razao_social">Razão Social</label>
                        <input type="text" class="form-control @error('razao_social') is-invalid @enderror"
                            id="razao_social" name="razao_social" placeholder="Razão Social">
                        @error('razao_social')
                            <div class="invalid-feedback" style="color: red">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-5">
                        <label for="nome_fantasia">Nome Fantasia</label>
                        <input type="text" class="form-control" id="nome_fantasia" name="nome_fantasia"
                            placeholder="Nome Fantasia">
                        @error('nome_fantasia')
                            <div class="invalid-feedback" style="color: red">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-7">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço">
                        @error('endereco')
                            <div class="invalid-feedback" style="color: red">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-5">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
                        @error('bairro')
                            <div class="invalid-feedback" style="color: red">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
                        @error('cidade')
                            <div class="invalid-feedback" style="color: red">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-2">
                        <label for="uf">UF</label>
                        <input type="text" class="form-control" id="uf" name="uf" placeholder="UF">
                        @error('uf')
                            <div class="invalid-feedback" style="color: red">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP">
                        @error('cep')
                            <div class="invalid-feedback" style="color: red">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
                        @error('telefone')
                            <div class="invalid-feedback" style="color: red">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="celular">Celular</label>
                        <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular">
                        @error('celular')
                            <div class="invalid-feedback" style="color: red">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="cnpj">CNPJ</label>
                        <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ">
                        @error('cnpj')
                            <div class="invalid-feedback" style="color: red">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inscricao_estadual">Inscrição Estadual</label>
                        <input type="text" class="form-control" id="inscricao_estadual" name="inscricao_estadual"
                            placeholder="Inscrição Estadual">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inscricao_municipal">Inscrição Municipal</label>
                        <input type="text" class="form-control" id="inscricao_municipal" name="inscricao_municipal"
                            placeholder="Inscriação Municipal">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="representante">Representante Legal da Empresa</label>
                        <input type="text" class="form-control" id="representante" name="representante"
                            placeholder="Representante Legal da Empresa">
                        @error('representante')
                            <div class="invalid-feedback" style="color: red">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="cpf_representante">CPF do Responsável</label>
                        <input type="text" class="form-control" id="cpf_representante" name="cpf_representante"
                            placeholder="CPF do Representante">
                        @error('cpf_representante')
                            <div class="invalid-feedback" style="color: red">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="rg_representante">RG do Representante</label>
                        <input type="text" class="form-control" id="rg_representante" name="rg_representante"
                            placeholder="RG do Representante">
                        @error('rg_representante')
                            <div class="invalid-feedback" style="color: red">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-12">
                        <label for="email_representante">Email de Contato - Representante</label>
                        <input type="text" class="form-control" id="email_representante" name="email_representante"
                            placeholder="Email">
                        @error('email_representante')
                            <div class="invalid-feedback" style="color: red">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-2">
                        <input type="submit" class="btn btn-success" value="Finalizar Cadastro">
                    </div>
                    <br>
                </form>
            </div>
        </form>
    </div>
@endsection
