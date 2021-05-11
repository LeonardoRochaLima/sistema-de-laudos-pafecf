@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Voltar</a>
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Criado em {{$post->created_at}}</small>
@endsection