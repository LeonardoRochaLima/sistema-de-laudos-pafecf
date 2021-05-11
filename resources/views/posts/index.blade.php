@extends('layouts.app')

@section('content')
    <h1>Postagens</h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Criado em {{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>Nenhuma postagem encontrada</p>
    @endif
@endsection