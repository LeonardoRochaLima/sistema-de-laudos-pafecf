@extends('layouts.app')

@section('content')
    <h1>{{ $title }}</h1>
    <div class="title-body col-md-9">
        <h2 style="color: black; font-weight: bold">Programa Aplicativo Fiscal - Unifil</h2>
        <img src="https://unifil.br/assets/uploads/2020/07/contabilidade.jpg" alt="">
        <br>
        <br>
        <font size="4">
            <p>O Programa Aplicativo Fiscal do Emissor de Cupom Fiscal, mais conhecido pela sigla PAF-ECF, é um programa do
                Governo Federal que tem como objetivo aumentar a fiscalização contra desvios fiscais, como sonegação de
                impostos e prática de caixa dois.</p>
            <br>
            <p>Este programa regulamenta o protocolo de comunicação de sistemas de Ponto de Venda, os PDVs, com os
                equipamentos Emissores de Cupom Fiscal, os ECF, como as famosas impressoras térmicas de caixas de pagamento.
            </p>
            <br>
            <p>Suas normas e regras estão estabelecidas em lei e definidas no Ato Cotepe 06/08 e no Convênio ICMS 15/08,
                ambos do Fisco.</p>
        </font>
        <br>
        <h2 style="color: black; font-weight: bold">Como funciona?</h2>
        <br>
        <font size="4">
            <p>O programa define que, todo sistema de informação que utilize ECF, deve ser certificado por uma instituição
                credenciada, recebendo uma assinatura eletrônica única que o identifica e autoriza a se comunicar com o
                equipamento.</p>
            <br>
            <p>Sem essa assinatura, a impressora rejeita pedidos de operação do computador.</p>
            <br>
            <p>Utilizar um ECF que não possua este mecanismo, ou tentar contorná-lo nas que possuem, é ilegal em alguns
                estados do Brasil.</p>
            <br>
            <p>Mesmo com o acesso legal ao ECF, o sistema precisa seguir um protocolo de operações, que varia conforme a
                finalidade da operação financeira, havendo regras específicas para postos de combustíveis, bares,
                restaurantes, farmácias de manipulação, oficina de consertos, transportes públicos, dentre outros.</p>
            <br>
            <p>Desde 2009, a UniFil é uma instituição credenciada a homologar sistemas pelo PAF-ECF, com emissão de laudo de
                certificação válido pelo CONFAZ, gerando a assinatura digital para seu sistema interfacear com máquinas ECF
                legais.</p>
            <br>
            <p>A Instituição oferece tanto consultoria prévia de atendimento personalizado para tirar dúvidas, quanto
                sessões de avaliação para homologação.</p>
            <br>
            <p>Tais serviços são oferecidos pelo Colegiado dos cursos da área de computação da UniFil, com conhecimento
                técnico de sistemas em geral e infraestrutura de laboratórios de informática.</p>
            <br>
            <p>A atuação é de extrema correção e presteza, com mais de 10 anos de experiência, atendendo mais de 180
                empresas de todo o Brasil, em mais de 600 homologações.</p>
            <br>
            <p>Entre em contato e solicite avaliação de seus sistemas em nossa instituição!</p>
            <br>
            <p>Estão disponíveis ofertas especiais para renovação de laudos, que vencem em dois anos por lei, e para membros
                da APL de Londrina.</p>
        </font>
        <br>
        <h2 style="color: black; font-weight: bold">Empresas Homologadas</h2>
        <br>
        <font size="4">
            <p>"lista de empresas de todos os anos"</p>
        </font>
        <br>
        <b>
        <h2 style="color: black; font-weight: bold">Atendimento</h2>
        </b>
        <br>
        <font size="4">
            <body>
                De segunda a sexta-feira, das 08h às 17h30 <br />
                Av. Juscelino Kubitschek, nº 1626, Vila Ipiranga, Londrina – PR (Campus Sede)<br />
                43 3375 7326<br />
                computacao@unifil.br / paf.ecf@unifil.br<br />
            </body>
        </font>
    </div>
@endsection
