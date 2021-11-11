@extends('layouts.app')
@section('content')
    <script>
        function validarExclusao(frm) {
            var validador = confirm("Tem certeza que deseja excluir essa ECF do registro?");
            if (validador == false) {
                return false;
            } else {
                return true;
            }
        }
    </script>
    <h1>Listagem de ECF's Válidas</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/ecfs" method="POST">
        @csrf
        <div class="form-group col-md-9">
            <div class="form-group control-label col-md-3">
                <label for="marca">Marca</label>
                <input type="text" class="form-control @error('marca') is-invalid @enderror" id="marca" name="marca"
                    placeholder="Marca">
                @error('marca')
                    <div class="invalid-feedback" style="color: red">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group control-label col-md-3">
                <label for="modelo">Modelo</label>
                <input type="text" class="form-control @error('modelo') is-invalid @enderror" id="modelo" name="modelo"
                    placeholder="Modelo">
                @error('modelo')
                    <div class="invalid-feedback" style="color: red">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <input type="submit" class="btn btn-success" value="Adicionar">
            </div>
        </div>
    </form>
    <br>
    <div>
    @if ($ecfs)
        <div class="well form-group col-md-12">
            @foreach ($ecfs as $ecf)
                <div class="well form-group col-md-12">
                    <ul>
                        <li class="form-group col-md-12"> <b> Marca: </b>{{ $ecf->marca }} - <b> Modelo </b>: {{ $ecf->modelo }}
                            <form action="{{ route('ecf.destroy', $ecf) }}" method="post"
                                onsubmit="return validarExclusao();">
                                @csrf
                                <button type="submit" class="btn btn-danger pull-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                        class="bi bi-trash-fill" viewBox="0 0 16 13" style="color: red">
                                        <path
                                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z">
                                        </path>
                                    </svg>
                                    Excluir ECF
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>
    @else
        <small>Nenhuma ECF Cadastrada</small>
    @endif
@endsection
