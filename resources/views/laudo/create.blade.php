@extends('layouts.app')

@section('content')
    <h1>Gerar Laudo</h1>
    <br>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <form action="/laudo" method="POST" name="formulario">
        @csrf
        <div class="form-group control-label col-md-12">
            <label for="empresa">Selecione a Empresa</label>
            <select name="empresa" id="empresa">
                <option selected>Selecione uma Empresa</option>
                @foreach ($empresas as $empresa)
                    <option value="{{ $empresa->id }}">{{ $empresa->razao_social }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group control-label col-md-12">
            <label for="pdv">Selecione o PDV Homologado</label>
            <select name="pdv" id="pdv">
                <option selected>Selecione um PDV</option>
                <p>Selecione uma empresa que possua um PDV cadastrado.</p>
            </select>
        </div>
        <script>
            $(document).ready(function() {
                $("#empresa").change(function() {
                    let id = this.value;
                    $.get('/getPDVs?empresa=' + id, function(data) {
                        $("#pdv").html(data);
                    })
                })
            })
        </script>
        <script>
            $(function() {
                var hoje = new Date();

                var mes = hoje.getMonth() + 1;
                var dia = hoje.getDate();
                var ano = hoje.getFullYear();
                if (mes < 10)
                    mes = '0' + mes.toString();
                if (dia < 10)
                    dia = '0' + dia.toString();

                var maxDate = ano + '-' + mes + '-' + dia;
                ano = ano - 1;
                var minDate = ano + '-' + mes + '-' + dia;

                $('#data_inicio').attr('max', maxDate);
                $('#data_inicio').attr('min', minDate);
                $('#data_termino').attr('max', maxDate);
                $('#data_termino').attr('min', minDate);
            });
        </script>
        <div class="form-group control-label col-md-3">
            <label for="data_inicio">Data e Hora de Início do Serviço</label>
            <input id="data_inicio" type="date" class="form-control" name="data_inicio" required
                onkeydown="return false" />
        </div>
        <div class="form-group control-label col-md-3">
            <label for="data_termino">Data e Hora de Término do Serviço</label>
            <input id="data_termino" type="date" class="form-control" name="data_termino" required
                onkeydown="return false" />
        </div>
        <div class="form-group control-label col-md-4">
            <label for="versao_er">Versão da Especificação de Requisitos</label>
            <input type="text" class="form-control @error('versao_er') is-invalid @enderror" id="versao_er" name="versao_er"
                placeholder="Versão ER" value="02.06">
            @error('versao_er')
                <div class="invalid-feedback" style="color: red">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="control-label col-md-12">
            <label>Identificação do Envelope de Segurança: </label>
        </div>
        <div class="form-group control-label col-md-4">
            <label for="envelope_seguranca_marca">Marca</label>
            <input type="text" class="form-control @error('envelope_seguranca_marca') is-invalid @enderror"
                id="envelope_seguranca_marca" name="envelope_seguranca_marca" placeholder="Marca" value="Starlock">
            @error('envelope_seguranca_marca')
                <div class="invalid-feedback" style="color: red">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group control-label col-md-3">
            <label for="envelope_seguranca_modelo">Modelo</label>
            <input type="text" class="form-control @error('envelope_seguranca_modelo') is-invalid @enderror"
                id="envelope_seguranca_modelo" name="envelope_seguranca_modelo" placeholder="Modelo" value="7">
            @error('envelope_seguranca_modelo')
                <div class="invalid-feedback" style="color: red">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group control-label col-md-3">
            <label for="numero_envelope">Número do Envelope</label>
            <input type="text" class="form-control @error('numero_envelope') is-invalid @enderror" id="numero_envelope"
                name="numero_envelope" placeholder="Número">
            @error('numero_envelope')
                <div class="invalid-feedback" style="color: red">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <br>
        <div class="control-label col-md-12">
            <label>Carregue os Arquivos Gerados na Homologação: </label>
        </div>
        <div class="form-group control-label col-md-6">
            <label for="relacao">Arquivo relacao.txt</label>
            <input type="hidden" name="relacao" id="relacao">
            <input type="file" accept=".txt">
        </div>
        <br>
        <div class="form-group control-label col-md-6">
            <label for="relacao2">Arquivo relacao2.txt</label>
            <input type="hidden" name="relacao2" id="relacao2">
            <input type="file" accept=".txt">
        </div>
        <div class="form-group control-label col-md-6">
            <label for="md5">Arquivo md5.txt</label>
            <input type="hidden" name="md5" id="md5">
            <input type="file" accept=".txt">
        </div>
        <br>
        <div class="form-group control-label col-md-6">
            <label for="bytes">Arquivo bytes.txt</label>
            <input type="hidden" name="bytes" id="bytes">
            <input type="file" accept=".txt">
        </div>
        <br>
        <div class="control-label col-md-12">
            <label>Identificação do Sistema de Gestão ou Retaguarda que executa pelo menos um dos Requisitos Atribuídos ao
                PAF-ECF, que funciona integrado ao PAF-ECF: </label>
        </div>
        <div class="form-group control-label col-md-2">
            <label for="requisitos_executados_sgbd">Requisitos Executados</label>
            <input type="text" class="form-control @error('requisitos_executados_sgbd') is-invalid @enderror"
                id="requisitos_executados_sgbd" name="requisitos_executados_sgbd" placeholder="Requisitos" value="II">
            @error('requisitos_executados_sgbd')
                <div class="invalid-feedback" style="color: red">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group control-label col-md-7">
            <label for="executavel_sgbd">Escolha o Arquivo Executável Responsável pelo SGBD e seu Respectivo MD5</label>
            <select name="executavel_sgbd" id="executavel_sgbd">
                <option selected>Selecione o Executável</option>
            </select>
        </div>
        <br>
        <div class="control-label col-md-12">
            <label>Identificação dos Sistemas de PED (SPED/SINTEGRA/DOCUMENTOS/LIVROS) que Funcionam integrados ao PAF-ECF:
            </label>
        </div>
        <div class="form-group control-label col-md-4">
            <label for="funcao_sped">Função</label>
            <input type="text" class="form-control @error('funcao_sped') is-invalid @enderror" id="funcao_sped"
                name="funcao_sped" placeholder="Requisitos" value="SPED/SINTEGRA/DOCUMENTO E LIVROS">
            @error('funcao_sped')
                <div class="invalid-feedback" style="color: red">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group control-label col-md-7">
            <label for="executavel_sped">Escolha o Arquivo Executável Responsável pelo SPED e seu Respectivo MD5</label>
            <select name="executavel_sped" id="executavel_sped">
                <option selected>Selecione o Executável</option>
            </select>
        </div>
        <div class="control-label col-md-12">
            <label>Identificação dos Sistemas de PED que geram a NF-e e funcionam integrados ao PAF-ECF: </label>
        </div>
        <div class="form-group control-label col-md-7">
            <label for="executavel_nfe">Escolha o Arquivo Executável Responsável pelo gerador de NF-e e seu Respectivo
                MD5</label>
            <select name="executavel_nfe" id="executavel_nfe">
                <option selected>Selecione o Executável</option>
            </select>
        </div>
        <div class="control-label col-md-12">
            <label>Identificação dos Equipamentos ECF Utilizados para a Análise Funcional: </label>
        </div>
        <div class="form-group control-label col-md-3">
            <label for="ecf_analise_marca">Marca</label>
            <select name="ecf_analise_marca" id="ecf_analise_marca">
                <option selected>Selecione a Marca</option>
            </select>
        </div>
        <div class="form-group control-label col-md-6">
            <label for="ecf_analise_modelo">Modelo</label>
            <select name="ecf_analise_modelo" id="ecf_analise_modelo">
                <option selected>Selecione o Modelo</option>
            </select>
        </div>
        <div class="control-label col-md-12">
            <label>Relação de marcas e modelos de equipamentos ECF compatíveis com o PAF-ECF: </label>
        </div>
        <div class="form-group control-label col-md-4">
            <label for="relacao_ecfs">Marcas e Modelos Compatíveis e Utilizados</label>
            <select name="relacao_ecfs" id="relacao_ecfs">
                <option selected>Selecione as Marcas e Modelos</option>
            </select>
        </div>
        <div class="control-label col-md-12">
            <label for="parecer_conclusivo">Parecer conclusivo: </label>
            <div>
                <input type="radio" id="nao_conformidade" name="parecer_conclusivo" value="0">
                <label for="nao_conformidade">Constatada(s) “Não Conformidade” relacionada(s) no campo “Relatório de Não
                    Conformidade”.</label>
            </div>
            <div>
                <input type="radio" id="em_conformidade" name="parecer_conclusivo" value="1">
                <label for="em_conformidade">Não se constatou “Não Conformidade” em nenhum dos testes aplicados. O sistema
                    passou em todas as especificações e testes.
                </label>
            </div>
        </div>
        <div class="control-label col-md-12">
            <label>Relatório de não conformidade: </label>
        </div>
        <div class="form-group control-label col-md-4">
            <label for="comentarios">Comentários</label>
            <textarea type="text" class="form-control" id="comentarios" name="comentarios"
                placeholder="Comentários"></textarea>
        </div>
        <div class="form-group col-md-12">
            <input type="submit" class="btn btn-primary" value="Cadastrar Laudo">
        </div>
    </form>
@endsection
