@extends('layouts.app')

@section('content')
    <h1>Empresas Cadastradas</h1>
    <form action="/cadastros" method="GET" name="formulario">
        <label for="buscar">Buscar Empresa</label>
        <div class="form-group col-md-9 input-group">
            <input type="text" id="buscar" class="col-md-10" name="buscar" placeholder="Digite o nome da empresa...">
            <span class="input-group-btn col-md-2">
                <button type="submit" class="btn btn-default">Pesquisar</button>
            </span>
        </div>
    </form>
        @if ($buscar)
            <div id="div" class="form-group">
            <a href="/cadastros" class="btn btn-default cold-md-10">Voltar</a>
            </div>
            <h2>Buscando por: {{ $buscar }}</h2>
        @else
            <a href="/cadastros/create" class="btn btn-default">Cadastrar Nova Empresa</a>
            <br>
            <br>
            @if (count($empresas) > 0)
                @foreach ($empresas as $empresa)
                    <div class="well">
                        <h3><a href="/cadastros/{{ $empresa->id }}">{{ $empresa->razao_social }}</a></h3>
                        <p>{{ $empresa->cnpj }}</p>
                        <small>Criado em {{ $empresa->created_at }}</small>
                    </div>
                @endforeach
                {{ $empresas->links() }}
            @else
                <p>Nenhuma empresa cadastrada</p>
            @endif
        @endif
@endsection
