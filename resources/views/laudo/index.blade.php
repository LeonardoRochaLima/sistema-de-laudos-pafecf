@extends('layouts.app')

@section('content')
    <h1>Gerar Laudo</h1>
    <br>
    <div class="form-group control-label">
        <div>
            <label for="select">Selecione a Empresa</label>
            <select name="Empresas">
                @foreach ($empresas as $empresa)
                    <option value="empresa">{{ $empresa->razao_social }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div>
            <label for="arquivo">Arquivo Empresa</label>
            <input type="hidden" name="300MB" value="4194304">
            <input type="file">
        </div>
    </div>
@endsection
