@extends('layouts.app')

@section('content')
    <a href="/empresas" class="btn btn-default">Voltar</a>
    <h1>{{$empresas->razao_social}}</h1>
    <div>
        {{$empresas->razao_social}}
    </div>
    <hr>
@endsection