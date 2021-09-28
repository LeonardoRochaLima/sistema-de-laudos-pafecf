@extends('layouts.app')

@section('content')

    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <h1>{{ $title }}</h1>
    @if (count($services) > 0)
        <ul class="list-group">
            @foreach ($services as $service)
                <li class="list-group-item">{{ $service }}</li>
            @endforeach
        </ul>
    @endif
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">First Panel</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Second Panel</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Third Panel</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tabs-1" role="tabpanel">
            <div class="form-group control-label col-md-5">
                <label for="forma_impressao">Forma de Impressão de Item em Cupom Fiscal:</label>
                <div>
                    <input type="checkbox" id="concomitante" name="concomitante">
                    <label for="concomitante">Concomitante</label>
                </div>
                <div>
                    <input type="checkbox" id="nao_concomitante" name="nao_concomitante">
                    <label for="nao_concomitante">Não Concomitante com Impressão de DAV</label>
                </div>
                <div>
                    <input type="checkbox" id="perfil_t" name="perfil_t">
                    <label for="perfil_t">Não Concomitante com contrle de Pré-venda</label>
                </div>
                <div>
                    <input type="checkbox" id="perfil_u" name="perfil_u">
                    <label for="perfil_u">Não Concomitante com controle de Conta de Cliente</label>
                </div>
                <div>
                    <input type="checkbox" id="dav_sem_impressao" name="dav_sem_impressao">
                    <label for="dav_sem_impressao">DAV - Emitido sem possibilidade de Impressão</label>
                </div>
                <div>
                    <input type="checkbox" id="dav_impresso_nao_fiscal" name="dav_impresso_nao_fiscal">
                    <label for="dav_impresso_nao_fiscal">DAV - Impresso em Impressora Não Fiscal</label>
                </div>
                <div>
                    <input type="checkbox" id="dav_impresso_ecf" name="dav_impresso_ecf">
                    <label for="dav_impresso_ecf">DAV - Impresso em ECF</label>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tabs-2" role="tabpanel"><p>Second Panel</p></div>
        <div class="tab-pane" id="tabs-3" role="tabpanel"><p>Third Panel</p></div>
    </div>
@endsection
