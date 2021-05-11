@extends('layouts.app')

@section('content')
    <h1>{{ $title }}</h1>
    <h3>Empresa Desenvolvedora Requerente: </h3>
    <div class="title-body">
        <form class="row">
            <div class="form-gorup col-md-6">
                <label for="razao_social" class="control-label">Razão Social</label>
                <input id="razao_social" class="form-control" type="text" required x-moz-errormessage="Ops.
                                        Não esqueça de preencher este campo.">
            </div>
            <div class="form-group col-md-6">
                <label class="control-label">Nome Fantasia</label>
                <input class="form-control" type="text">
            </div>
        </form>
        <form class="row">
            <div class="form group col-md-6">
                <label class="control-label">Endereço</label>
                <input class="form-control" type="text">
            </div>
            <div class="form group col-md-6">
                <label class="control-label">Bairro</label>
                <input class="form-control" type="text">
            </div>
        </form>
        <form class="row">
            <div class="form group col-md-4">
                <label class="control-label">Cidade</label>
                <input class="form-control" type="text">
            </div>
            <div class="form group col-md-4">
                <label class="control-label">UF</label>
                <input class="form-control" type="text">
            </div>
            <div class="form group col-md-4">
                <label class="control-label">CEP</label>
                <input class="form-control" required="required" type="number" type="cellphone">
            </div>
        </form>
        <form class="row">
            <div class="form group col-md-6">
                <label class="control-label">Telefone</label>
                <input class="form-control" pattern="^\d{4}-\d{3}-\d{4}$" type="tel">
            </div>
            <div class="form group col-md-6">
                <label class="control-label">Celular</label>
                <input class="form-control" pattern="^\d{4}-\d{3}-\d{4}$" type="tel">
            </div>
        </form>
        <form class="row">
            <div class="form group col-md-4">
                <label class="control-label">CNPJ</label>
                <input class="form-control" type="text">
            </div>
            <div class="form group col-md-4">
                <label class="control-label">Inscrição Estadual</label>
                <input class="form-control" type="text">
            </div>
            <div class="form group col-md-4">
                <label class="control-label">Inscrição Municipal</label>
                <input class="form-control" type="text">
            </div>
        </form>
        <form class="row">
            <div class="form group col-md-4">
                <label class="control-label">Responsável pela Assinatura</label>
                <input class="form-control" type="text">
            </div>
            <div class="form group col-md-4">
                <label class="control-label">CPF do Responsável</label>
                <input class="form-control" type="text">
            </div>
            <div class="form group col-md-4">
                <label class="control-label">RG do Responsável</label>
                <input class="form-control" type="text">
            </div>
        </form>
        <form class="row">
            <div class="form group col-md-12">
                <label class="control-label">Email do responsável</label>
                <input class="form-control" type="email">
            </div>
        </form>
        <form class="row">
            <div class="form group col-md-12">
                <label class="control-label">Responsável pela Acompanhamento dos Testes</label>
                <input class="form-control" type="text">
            </div>
        </form>
    </div>
    <br>
    <h3>Órgão Técnico Credenciado: </h3>
    <div class="title-body">
        <form class="row">
            <div class="form-gorup col-md-12">
                <b>
                    <p>IFL - Instituto Filadélfia de Londrina - UNIFIL</p>
                </b>
            </div>
        </form>
    </div>
    <h3>Identificação do Programa Aplicativo Fiscal (PAF-ECF): </h3>
    <div class="title-body">
        <form class="row">
            <div class="form-gorup col-md-12">
                <label class="control-label">Nome Comercial</label>
                <input class="form-control" type="text">
            </div>
        </form>
        <form class="row">
            <div class="form-gorup col-md-6">
                <label class="control-label">Versão</label>
                <input class="form-control" type="text">
            </div>
            <div class="form-group col-md-6">
                <label class="control-label">Data da Versão</label>
                <input class="form-control" type="text">
            </div>
        </form>
        <form class="row">
            <div class="form-gorup col-md-12">
                <label class="control-label">Principal Arquivo Executável</label>
                <input class="form-control" type="text">
            </div>
        </form>
        <br>
        <form class="row">
            <div class="form-gorup col-md-12">
                <label class="control-label">Perfis a serem homologados</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Perfil V</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Perfil W</label>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">Perfil T</label>
                </div>
            </div>
        </form>
    </div>
    <h3>Características do Programa Aplicativo FIscal: </h3>
    <div class="title-body">
        <form class="row">
            <div class="form-gorup col-md-4">
                <label class="control-label">Linguagem de Programação</label>
                <input class="form-control" type="text">
            </div>
            <div class="form-gorup col-md-4">
                <label class="control-label">Sistem Operacional</label>
                <input class="form-control" type="text">
            </div>
            <div class="form-gorup col-md-4">
                <label class="control-label">Banco de Dados</label>
                <input class="form-control" type="text">
            </div>
        </form>
        <br>
        <form class="row">
            <div class="form-gorup col-md-12">
                <label class="control-label">Tipo de Desenvolvimento</label>
                <div class="form-check">
                    <input type="radio" id="comercializavel" name="lista" value="comercializavel">
                    <label for="comercializavel">Comercializável</label>
                    <input type="radio" id="exclusivoP" name="lista" value="exclusivoP">
                    <label for="exclusivoP">Exclusivo Próprio</label>
                    <input type="radio" id="exclusivoT" name="lista" value="exclusivoT">
                    <label for="exclusivoT">Exclusivo Tercerizado</label>
                </div>
            </div>
    </div>
    </form>
    <br>
    <form class="row">
        <div class="form-gorup col-md-12">
            <label class="control-label">Forma de impressão de um item em cupom fiscal (Concomitância com
                dispositivos de visualização do registro do item): </label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">Concomitante.</label>
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">Não Concomitante com Impressão de DAV.</label>
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">Não concomtante com controle de
                    Pré-Venda.</label>
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">Não concomtante com controle de Conta
                    Cliente.</label>
                <br>
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">DAV - emitido sem possibilidade de
                    impressão.</label>
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">DAV - impresso em impressora não fiscal.</label>
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">DAV - Impresso em ECF.</label>
            </div>
        </div>
    </form>
    <br>
    <form class="row">
        <div class="form-gorup col-md-12">
            <label class="control-label">Tipo de Funcionamento: </label>
            <div class="form-check">
                <input type="radio" id="standAlone" name="lista" value="standAlone">
                <label for="standAlone">Exclusivamente Stand Alone</label>
                <input type="radio" id="rede" name="lista" value="rede">
                <label for="rede">Em rede</label>
                <input type="radio" id="parametrizavel" name="lista" value="parametrizavel">
                <label for="parametrizavel">Parametrizável</label>
            </div>
        </div>
    </form>
    <br>
    <form class="row">
        <div class="form-gorup col-md-12">
            <label class="control-label">Geração do Arquivo SINTEGRA ou EFD(SPED): </label>
            <div class="form-check">
                <input type="radio" id="pelopaf" name="lista" value="pelopaf">
                <label for="pelopaf">Pelo PAF</label>
                <input type="radio" id="retaguarda" name="lista" value="retaguarda">
                <label for="retaguarda">Pelo Sistema de Retaguarda</label>
                <input type="radio" id="pedefd" name="lista" value="pedefd">
                <label for="pedefd">Pelo Sistema PED ou EFD</label>
            </div>
        </div>
    </form>
    <br>
    <form class="row">
        <div class="form-gorup col-md-12">
            <label class="control-label">Emite Nota Fiscal Eletrônica - NF-e: </label>
            <div class="form-check">
                <input type="radio" id="yes" name="lista">
                <label for="yes">Sim</label>
                <input type="radio" id="no" name="lista">
                <label for="no">Não</label>
            </div>
        </div>
        <div class="form-gorup col-md-12">
            <label class="control-label">Emite Nota Fiscal Consumidor Eletrônica - NFC-e: </label>
            <div class="form-check">
                <input type="radio" id="yes" name="lista2">
                <label for="yes">Sim</label>
                <input type="radio" id="no" name="lista2">
                <label for="no">Não</label>
            </div>
        </div>
    </form>
    <br>
    <form class="row">
        <div class="form-gorup col-md-12">
            <label class="control-label">Tratamento de Interrupção durante a emissão do cupom fiscal: </label>
            <div class="form-check">
                <input type="radio" id="recupera" name="lista">
                <label for="recupera">Recuperação de Dados</label>
                <input type="radio" id="cancela" name="lista">
                <label for="cancela">Cancelamento Automático</label>
                <input type="radio" id="bloqueia" name="lista">
                <label for="bloqueia">Bloqueio de Funções</label>
            </div>
        </div>
    </form>
    <br>
    <form class="row">
        <div class="form-gorup col-md-12">
            <label class="control-label">Integração do Programa Aplicativo Fiscal: </label>
            <div class="form-check">
                <input type="radio" id="retaguarda" name="lista">
                <label for="retaguarda">Com Sistema de Gestão ou Retaguarda</label>
                <input type="radio" id="ped" name="lista">
                <label for="ped">Com Sistema PED</label>
                <input type="radio" id="ambos" name="lista">
                <label for="ambos">Com Ambos</label>
                <input type="radio" id="nIntegrado" name="lista">
                <label for="nIntegrado">Não Integrado</label>
            </div>
        </div>
    </form>
    <br>
    <form class="row">
        <div class="form-gorup col-md-12">
            <label class="control-label">Aplicações Especiais: </label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">Posto Revendedor de Combustível COM sistema de
                    Interligação de Bombas.</label>
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">Posto Revendedor de Combustível SEM sistema de
                    Interligação de Bombas.</label>
                <br>
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">Oficina de Conserto COM DAV-OS.</label>
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">Oficina de Conserto COM CONTA DE
                    CLIENTE.</label>
                <br>
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">Bar, Restaurante e estabelecimento similar com
                    utilização de ECF-RESTAURANTE e balança interligada.</label>
                <br>
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">Bar, Restaurante e estabelecimento similar com
                    utilização de ECF-NORMAL e balança interligada.</label>
                <br>
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">Bar, Restaurante e estabelecimento similar com
                    utilização de ECF-RESTAURANTE SEM balança interligada.</label>
                <br>
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">Bar, Restaurante e estabelecimento similar com
                    utilização de ECF-NORMAL SEM balança interligada.</label>
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">Farmácia de Manipulação.</label>
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">Transporte de Passageiros.</label>
                <br>
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">Posto de Pedágio.</label>
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">Estacionamento, Motéis e Similares, que
                    pratiquem o
                    Controle de Tráfego de Veículos ou Pessoas.</label>
                <br>
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">Prestador de Serviço de Cinema, Espetáculos ou
                    Similares.</label>
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">Demais Atividades.</label>
                <br>
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">Estabelecimento Enquadrado no SIMPLES NACIONAL
                    (Art.
                    5º do Ato COPETE da ER-PEF-ECF).</label>
            </div>
        </div>
    </form>
    <br>
    <h3>Identificação do Sistema de Gestão ou Retaguarda que executa pelo menos um dos requisitos atribuídos ao
        PAF-ECF e que, obrigatória e exclusivamente, funciona integrado ao PAF-ECF: </h3>
    <div class="title-body">
        <form class="row">
            <div class="form-gorup col-md-6">
                <label class="control-label">Empresa Desenvolvedora: (Denominação e CNPJ):</label>
                <input class="form-control" type="text">
            </div>
            <div class="form-gorup col-md-6">
                <label class="control-label">Nome do Sistema: </label>
                <input class="form-control" type="text">
            </div>
        </form>
        <form class="row">
            <div class="form-gorup col-md-12">
                <label class="control-label">Requisitos(s) Executado(s):</label>
                <input class="form-control" type="text">
            </div>
        </form>
    </div>
    <br>
    <h3>Identificação dos Sistemas de PED (SPED/SINTEGRA/DOCUMENTOS/LIVROS) que Funcionam Integrados ao PAF-ECF:
    </h3>
    <div class="title-body">
        <form class="row">
            <div class="form-gorup col-md-6">
                <label class="control-label">Empresa Desenvolvedora: (Denominação e CNPJ):</label>
                <input class="form-control" type="text">
            </div>
            <div class="form-gorup col-md-6">
                <label class="control-label">Nome do Sistema: </label>
                <input class="form-control" type="text">
            </div>
        </form>
        <form class="row">
            <div class="form-gorup col-md-12">
                <label class="control-label">Nome do arquivo Executável:</label>
                <input class="form-control" type="text">
            </div>
        </form>
    </div>
    <br>
    <h3>Identificação dos Sistemas de PED que geram a NF-e e funcionam integrados ao PAF-ECF: </h3>
    <div class="title-body">
        <form class="row">
            <div class="form-gorup col-md-6">
                <label class="control-label">Empresa Desenvolvedora: (Denominação e CNPJ):</label>
                <input class="form-control" type="text">
            </div>
            <div class="form-gorup col-md-6">
                <label class="control-label">Nome do Sistema: </label>
                <input class="form-control" type="text">
            </div>
        </form>
        <form class="row">
            <div class="form-gorup col-md-12">
                <label class="control-label">Nome do arquivo Executável:</label>
                <input class="form-control" type="text">
            </div>
        </form>
    </div>
    <br>
    <!Nessa seção eu irei puxar a listagem de ECFs válidas para adicionar no formulário –>
        <h3>Identificação dos Equipamentos ECF Utilizados para a Análise Funcional: </h3>
        <div class="title-body">
            <form class="row">
                <div class="form-gorup col-md-6">
                    <label class="control-label">Marca/Modelo:</label>
                    <select name="ecf">
                        <option value=""></option>
                        <option value="BEMATECH">BEMATECH - MP-3000 TH FI</option>
                        <option value="BEMATECH">BEMATECH - MP-4000 TH FI</option>
                        <option value="BEMATECH">BEMATECH - MP-4200 TH FI</option>
                        <option value="BEMATECH">BEMATECH - MP-4200 TH FI II</option>
                        <option value="EPSON">EPSON - TM-T88 FB</option>
                        <option value="EPSON">EPSON - TM-T81 FBII</option>
                        <option value="EPSON">EPSON - TM-T800F</option>
                        <option value="EPSON">EPSON - TM-T900F</option>
                        <option value="SWEDA">SWEDA - IF ST120</option>
                        <option value="SWEDA">SWEDA - IF ST200</option>
                        <option value="SWEDA">SWEDA - IF ST2000</option>
                        <option value="SWEDA">SWEDA - IF ST2500</option>
                    </select>
                </div>
            </form>
        </div>
        <br>
        <!Nessa seção eu irei puxar a listagem de ECFs válidas para adicionar no formulário –>
            <h3>Relação de marcas e modelos de equipamentos ECF compatíveis com o PAF-ECF: </h3>
            <div class="title-body">
                <form class="row">
                    <div class="form-gorup col-md-6">
                        <label class="control-label">Marca/Modelo:</label>
                        <select name="ecf">
                            <option value=""></option>
                            <option value="BEMATECH">BEMATECH - MP-3000 TH FI</option>
                            <option value="BEMATECH">BEMATECH - MP-4000 TH FI</option>
                            <option value="BEMATECH">BEMATECH - MP-4200 TH FI</option>
                            <option value="BEMATECH">BEMATECH - MP-4200 TH FI II</option>
                            <option value="EPSON">EPSON - TM-T88 FB</option>
                            <option value="EPSON">EPSON - TM-T81 FBII</option>
                            <option value="EPSON">EPSON - TM-T800F</option>
                            <option value="EPSON">EPSON - TM-T900F</option>
                            <option value="SWEDA">SWEDA - IF ST120</option>
                            <option value="SWEDA">SWEDA - IF ST200</option>
                            <option value="SWEDA">SWEDA - IF ST2000</option>
                            <option value="SWEDA">SWEDA - IF ST2500</option>
                        </select>
                    </div>
                </form>
            </div>
            <h3>Conclusão: </h3>
            <div class="title-body">
                <form class="row">
                    <div class="form-gorup col-md-12">
                        <b>
                            <p>Este procedimento tem como referência o documento de Especificação de Requisitos do
                                PAF-ECF(ER-PAF-ECF) versão ER 02.06, aprovado pelo Ato COPETE/ICMS 37, de 13 de Junho de
                                2018.</p>
                        </b>
                    </div>
                </form>
            </div>
            <br>
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="control-label">Confirmar: </label>
            <label class="form-check-label" for="defaultCheck1">DECLARO PARA OS DEVIDOS FINS, QUE AS INFORMAÇÕES
                CONTIDAS NESTE FORMULÁRIO SÃO VERDADEIRAS E ESTOU CIENTE QUE SERÃO TRASNCRITAS PARA O "LAUDO DE ANÁLISE
                FUNCIONAL DO PAF-ECF".</label>
            <br>
            <br>
            <div class="form-group col-md-0 align-self-end">
                <button class="btn btn-primary" type="button"> <i
                        class="fa fa-fw fa-lg fa-check-circle"></i>Cadastrar</button>
            </div>
@endsection
