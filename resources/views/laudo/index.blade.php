@extends('layouts.app')

@section('content')
    <h1>Laudos e Documentos</h1>
    <form action="/cadastros" method="GET">
        <label for="buscar">Buscar Laudo</label>
        <div class="form-group col-md-9 input-group">
            <input type="text" id="buscar" class="col-md-10" name="buscar"
                placeholder="Digite o número do Laudo...">
        </div>
        <a href="/laudo/create" class="btn btn-default">Gerar Laudo</a>
    </form>
@endsection