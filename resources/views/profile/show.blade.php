@extends('layouts.app')

@section('content')
       <a href="/home" class="btn btn-default">Voltar</a> 
       <h1>Perfil</h1>
       @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h3>Usuario</h3>
    <form action="{{route('user.update', $user)}}" method="POST" name="perfil_update">
        @csrf
        <div class="form-group control-label col-md-4">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" 
            value="{{$user->name}}">
            @error('nome')
                <div class="invalid-feedback" style="color: red">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group control-label col-md-4">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" 
            value="{{$user->email}}">
            @error('email')
                <div class="invalid-feedback" style="color: red">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <br>
        <div class="form-group col-md-10">
            <input type="submit" class="btn btn-success" value="Salvar Alterações">
        </div>
    </form>
@endsection