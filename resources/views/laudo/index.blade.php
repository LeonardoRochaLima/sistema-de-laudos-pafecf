@extends('layouts.app')

@section('content')
    <h1>Gerar Laudo</h1>
    <br>
    <form action="">
        <div class="form-group control-label col-md-12">
            <label for="select">Selecione a Empresa</label>
            <select name="empresas" onselect="mostrarPdvs()">
                @foreach ($empresas as $empresa)
                    <option value="empresa">{{ $empresa->razao_social }}</option>
                @endforeach
            </select>
        </div>
        
        <script>
            function mostrarPdvs(){
                console.log("selecionou");
            }
        </script>
        <div class="form-group control-label col-md-12">
            <label for="select">Selecione o PDV Homologado</label>
            <select name="pdv">
                @foreach ($pdvs as $pdv)
                    @if ($pdv->id_empresa == $empresa->id)
                        <option value="pdv">{{ $pdv->nome_comercial }}</option>
                    @else
                        <p>Selecione uma empresa que possua um PDV cadastrado.</p>
                    @endif
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group control-label col-md-12">
            <label for="md5">Arquivo md5.txt</label>
            <input type="hidden" name="md5" id="md5">
            <input type="file" accept=".txt">
        </div>
        <br>
        <div class="form-group control-label col-md-12">
            <label for="relacao">Arquivo relacao.txt</label>
            <input type="hidden" name="relacao" id="relacao">
            <input type="file" accept=".txt">
        </div>
        <br>
        <div class="form-group control-label col-md-12">
            <label for="relacao2">Arquivo relacao2.txt</label>
            <input type="hidden" name="relacao2" id="relacao2">
            <input type="file" accept=".txt">
        </div>
        <div class="form-group control-label col-md-12">
            <label for="bytes">Arquivo bytes.txt</label>
            <input type="hidden" name="bytes" id="bytes">
            <input type="file" accept=".txt">
        </div>
        <div class="form-group col-md-12">
            <input type="submit" class="btn btn-primary" value="Validar Arquivos">
        </div>
    </form>
@endsection
