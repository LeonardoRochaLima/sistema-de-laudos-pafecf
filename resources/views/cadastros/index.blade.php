@extends('layouts.app')

@section('content')
    <h1>Empresas Cadastradas</h1>
    <a href="/cadastros/create" class="btn btn-default">Cadastrar Nova Empresa</a>
    @if(count($empresas) > 0)
        @foreach ($empresas as $empresa)
            <div class="well">
                <h3><a href="/cadastros/{{$empresa->id}}">{{$empresa->razao_social}}</a></h3>
                <p>{{$empresa->cnpj}}</p>
                <small>Criado em {{$empresa->created_at}}</small>
            </div>
        @endforeach
        {{$empresas->links()}}
    @else
        <p>Nenhuma empresa cadastrada</p>
    @endif
@endsection