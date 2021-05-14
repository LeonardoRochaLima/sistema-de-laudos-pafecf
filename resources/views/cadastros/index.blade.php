@extends('layouts.app')

@section('content')
    <h1>Empresas Cadastradas</h1>
    @if(count($empresas) > 0)
        @foreach ($empresas as $empresa)
            <div class="well">
                <h3><a href="/empresas/{{$empresa->id}}">{{$empresa->razao_social}}</a></h3>
                <small>Criado em {{$empresa->created_at}}</small>
            </div>
        @endforeach
        {{$empresas->links()}}
    @else
        <p>Nenhuma empresa cadastrada</p>
    @endif
@endsection