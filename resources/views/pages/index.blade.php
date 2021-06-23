@extends('layouts.app')

@section('content')
        <div class="jumbotron text-center">
            <h1>Bem-vindo ao Sistema de Laudos!</h1>
            <p>
                <a class="btn-primary btn-lg" href="/cadastros/create" role="button">Cadastro de Empresas</a> 
                <a class="btn-primary btn-lg" href="/cadastros" role="button">Consultar Cadastro de Empresas</a>
                <a class="btn-primary btn-lg" href="/laudo" role="button">Gerar Laudo</a>
                <a class="btn-primary btn-lg" href="/assinar" role="button">Assinar Laudo</a>
                <a class="btn-primary btn-lg" href="/consultar_lado" role="button">Consultar Laudo</a>
            </p>
@endsection
