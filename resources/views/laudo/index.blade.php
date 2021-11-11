@extends('layouts.app')

@section('content')
    <h1>Laudos</h1>
    <form action="/laudo" method="GET">
        <label for="buscar">Buscar Laudo</label>
        <div class="form-group col-md-9 input-group">
            <input type="text" id="buscar" class="col-md-10" name="buscar" placeholder="Digite o número do Laudo...">
            <span class="input-group-btn col-md-2">
                <button type="submit" class="btn btn-default">Pesquisar</button>
            </span>
        </div>
    </form>
    @if ($buscar)
        <div id="div" class="form-group">
            <a href="/laudo" class="btn btn-default cold-md-10">Voltar</a>
        </div>
        <h2>Buscando por: {{ $buscar }}</h2>
        @if (count($laudos) > 0)
            @foreach ($laudos as $laudo)
                <div class="well">
                    <h3><a href="/laudo/{{ $laudo->id }}">{{ $laudo->ifl }} - {{ $laudo->razao_social_empresa }}</a>
                    </h3>
                    <p>PDV: {{ $laudo->nome_comercial_pdv }}</p>
                    <small>Criado em {{ $laudo->created_at }}</small>
                    <br>
                    <br>
                </div>
            @endforeach
            {{ $laudos->links() }}
        @else
            <p>Nenhum laudo encontrado.</p>
        @endif
    @else
        <a href="/laudo/create" class="btn btn-default">Cadastrar Laudo</a>
        <br>
        <br>
        @if (count($laudos) > 0)
            @foreach ($laudos as $laudo)
                <div class="well">
                    <h3><a href="/laudo/{{ $laudo->id }}">{{ $laudo->ifl }} - {{ $laudo->razao_social_empresa }}</a>
                    </h3>
                    <p>PDV: {{ $laudo->nome_comercial_pdv }}</p>
                    <small>Criado em {{ $laudo->created_at }}</small>
                    <br>
                    <br>
                </div>
            @endforeach
            {{ $laudos->links() }}
        @else
            <p>Nenhuma laudo cadastrado.</p>
        @endif
    @endif
@endsection
