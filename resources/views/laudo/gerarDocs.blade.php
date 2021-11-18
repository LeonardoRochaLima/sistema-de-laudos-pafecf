@extends('layouts.app')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <a href="/laudo/{{ $laudo->id }}" class="btn btn-default">Editar Instância do Laudo</a>
    <div class="form-group col-md-12">
        <h1>Gerar Documentos</h1>
        <h3>Laudo: <b>{{ $laudo->ifl }} - {{ $laudo->razao_social_empresa }}</b></h3>
    </div>
    <form action="/gerarLaudo/{{ $laudo->id }}" method="GET">
        <div class="form-group col-md-5">
            <p>Para <b>gerar os documentos</b> referentes ao laudo em questão, basta clicar no botão ao lado. O
                <b>download</b> dos
                arquivos será automático.</p>
            <p><b style="color: red">Certifique-se</b> que a instância do laudo está correta para não gerar arquivos
                indesejados.</p>
        </div>
        <div class="form-group col-md-6">
            <input type="submit" class="btn btn-success" value="Gerar Arquivos">
        </div>
    </form>
    <form action="">
        <div class="control-label col-md-12">
            <label>Fazer Upload de Arquivos Atualizados: </label>
        </div>
        <div class="form-group col-md-12">
            <p>Você também pode atualizar os arquivos do servidor através de um upload. Selecione os arquivos e clique no
                botão descrito.</p>
        </div>
        <div class="form-group control-label col-md-6">
            <label for="laudo_doc">LaudoDoc.doc</label>
            <input type="hidden" name="laudo_doc" id="laudo_doc">
            <input type="file" accept=".doc">
        </div>
        <div class="form-group control-label col-md-6">
            <label for="laudo_xml">Laudo XML.xml</label>
            <input type="hidden" name="laudo_xml" id="laudo_xml">
            <input type="file" accept=".xml">
        </div>
        <div class="form-group col-md-12">
            <input type="submit" class="btn btn-success" value="Fazer Upload">
        </div>
    </form>
@endsection
