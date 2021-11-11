@extends('layouts.app')
@section('content')
    <div class="jumbotron text-center">
        <h1>Bem-vindo ao Sistema de Laudos!</h1>
        <p>
            <a class="btn-primary btn-lg" href="/cadastros/create" role="button">Cadastro de Empresas</a>
            <a class="btn-primary btn-lg" href="/cadastros" role="button">Consultar Cadastro de Empresas</a>
            <a class="btn-primary btn-lg" href="/laudo" role="button">Gerar Laudo</a>
        </p>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            {{ __('Você está logado!') }}
    </div>
@endsection
