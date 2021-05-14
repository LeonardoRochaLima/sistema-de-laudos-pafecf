@extends('layouts.app')

@section('content')
    <a href="/cadastros" class="btn btn-default">Voltar</a>
    <h1>{{$empresa->razao_social}}</h1>
    <div>
        <h3>{{$empresa->nome_fantasia}}</h3>
    </div>
    <hr>
@endsection