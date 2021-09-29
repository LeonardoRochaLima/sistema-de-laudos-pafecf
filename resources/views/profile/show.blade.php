@extends('layouts.app')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <a href="/home" class="btn btn-default">Voltar</a>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h2 class="card-header">Perfil do Usuário</h2>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#base" role="tab">Informações Básicas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#senha" role="tab">Alterar Senha</a>
                        </li>
                    </ul>
                    <div class="card-body tab-content">
                        <div class="tab-pane active" id="base" role="tabpanel">
                            <h3>Alterar Informações Básicas</h3>
                            <br>
                            <form action="{{ route('user.perfil', $user) }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="nome"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome"
                                            value="{{ $user->name }}">
                                        @error('nome')
                                            <div class="invalid-feedback" style="color: red">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Endereço de Email') }}</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="email" name="email"
                                            placeholder="Email" value="{{ $user->email }}">
                                        @error('email')
                                            <div class="invalid-feedback" style="color: red">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row col-md-4">
                                    <input type="submit" class="btn btn-success" value="Alterar Perfil">
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="senha" role="tabpanel">
                            <h3>Alterar Senha</h3>
                            <br>
                            <form action="{{ route('user.update', $user) }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label for="current_password"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Senha Atual') }}</label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control" id="current_password"
                                            name="current_password" placeholder="Senha Atual">
                                        @error('current_password')
                                            <div class="invalid-feedback" style="color: red">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Nova Senha') }}</label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Nova Senha">
                                        @error('password')
                                            <div class="invalid-feedback" style="color: red">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password-confirm"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Senha') }}</label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control" id="password-confirm"
                                            name="password-confirm" placeholder="Confirmar Senha">
                                        @error('password-confirm')
                                            <div class="invalid-feedback" style="color: red">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row col-md-4">
                                    <input type="submit" class="btn btn-success" value="Alterar Senha">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
