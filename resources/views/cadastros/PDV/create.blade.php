@extends('layouts.app')

@section('content')
    <h1>Cadastro de Ponto de Venda - PDV</h1>
    <h3>{{ $empresa->razao_social }}</h3>
    <p>Lista de PDV's Cadastrados</p>
    <p>Não há nenhum PDV cadastrado com essa empresa</p>
    <form action="cadastros/{{$empresa->id}}">
    </form>
@endsection