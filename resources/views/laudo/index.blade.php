@extends('layouts.app')

@section('content')
    <h1>Gerar Laudo</h1>
    <br>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <form action="">
        <div class="form-group control-label col-md-12">
            <label for="select">Selecione a Empresa</label>
            <select name="empresas" id="empresas">
                <option selected>Selecione uma Empresa</option>
                @foreach ($empresas as $empresa)
                    <option value="{{ $empresa->id }}">{{ $empresa->razao_social }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group control-label col-md-12">
            <label for="select">Selecione o PDV Homologado</label>
            <select name="pdv" id="pdv">
                <option selected>Selecione um PDV</option>
                <p>Selecione uma empresa que possua um PDV cadastrado.</p>
            </select>
        </div>
        <script>
            $(document).ready(function(){
                $("#empresas").change(function(){
                    let id = this.value;
                    $.get('/getPDVs?empresas='+id, function(data){
                        $("#pdv").html(data);
                    })
                })
            })
        </script>
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
