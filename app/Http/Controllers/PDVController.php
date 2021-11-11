<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\PDV;
use App\Http\Requests\StorePDVRequest;
use App\Models\Laudo;

class PDVController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id)
    {
        $pdv = PDV::find($id);
        $empresa = Empresa::find($pdv->id_empresa);
        $aplicacoes = explode(", ", $pdv->aplicacoes_especiais);
        $forma_impressao = explode(", ", $pdv->forma_impressao);
        $perfis = explode(", ", $pdv->perfis);
        return view('cadastros.PDV.show', ['empresa' => $empresa, 'pdv'=> $pdv, 'aplicacoes' => $aplicacoes, 'forma_impressao' => $forma_impressao, 'perfis' => $perfis]);
    }

    public function create($id){
        $empresa = Empresa::find($id);
        $pdvs = PDV::where([
            ['id_empresa', $id],
            ['validacao', true]
        ])->get();
        return view('cadastros.PDV.create', ['empresa' => $empresa, 'pdvs'=> $pdvs]);
    }

    public function store(StorePDVRequest $request, $id_empresa){
        
        $pdv = new PDV;

        $empresa = Empresa::find($id_empresa);

        $pdv->id_empresa = $empresa->id;
        $pdv->razao_social_empresa = $empresa->razao_social;
        $pdv->nome_comercial = $request->nome_comercial;
        $pdv->versao = $request->versao;
        $pdv->nome_principal_executavel = $request->nome_principal_executavel;
        $pdv->linguagem = $request->linguagem;
        $pdv->sistema_operacional = $request->sistema_operacional;
        $pdv->data_base = $request->data_base;
        $pdv->tipo_desenvolvimento = $request->tipo_desenvolvimento;
        $pdv->tipo_funcionamento = $request->tipo_funcionamento;
        $pdv->nfe = $request->nfe;
        $pdv->sped = $request->sped;
        $pdv->nfce = $request->nfce;
        $pdv->tratamento_interrupcao = $request->tratamento_interrupcao;
        $pdv->integracao_paf = $request->integracao_paf;


        $pdv->aplicacoes_especiais = implode(", ", $request->aplicacoes_especiais);
        $pdv->forma_impressao = implode(", ", $request->forma_impressao);
        $pdv->perfis = implode(", ", $request->perfis);

        $pdv->validacao = true;
        
        $pdv->save();
        return redirect()->back()->with('msg', 'PDV Cadastrado com Sucesso!!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teste  $teste
     * @return \Illuminate\Http\Response
     */
    public function update(StorePDVRequest $request, $id)
    {   
        $pdv = PDV::find($id);
        $laudos = Laudo::where('id_pdv', $id)->get();
        $request->aplicacoes_especiais = implode(", ", $request->aplicacoes_especiais);
        $request->forma_impressao = implode(", ", $request->forma_impressao);
        $request->perfis = implode(", ", $request->perfis);
        if (
            $pdv->nome_comercial == $request->input('nome_comercial') &&
            $pdv->versao == $request->input('versao') &&
            $pdv->nome_principal_executavel == $request->input('nome_principal_executavel') &&
            $pdv->linguagem == $request->input('linguagem') &&
            $pdv->sistema_operacional == $request->input('sistema_operacional') &&
            $pdv->data_base == $request->input('data_base') &&
            $pdv->tipo_desenvolvimento == $request->input('tipo_desenvolvimento') &&
            $pdv->tipo_funcionamento == $request->input('tipo_funcionamento') &&
            $pdv->nfe == $request->input('nfe') &&
            $pdv->sped == $request->input('sped') &&
            $pdv->nfce == $request->input('nfce') &&
            $pdv->tratamento_interrupcao == $request->input('tratamento_interrupcao') &&
            $pdv->integracao_paf == $request->input('integracao_paf') &&
            
            $pdv->aplicacoes_especiais == $request->aplicacoes_especiais &&
            $pdv->forma_impressao == $request->forma_impressao &&
            $pdv->perfis == $request->perfis
        ) 
        {
            return redirect()->back()->with('msgerro', 'Nenhum campo alterado!!');
        } else {
            $pdv->nome_comercial = $request->input('nome_comercial');
            $pdv->versao = $request->input('versao');
            $pdv->nome_principal_executavel = $request->input('nome_principal_executavel');
            $pdv->linguagem = $request->input('linguagem');
            $pdv->sistema_operacional = $request->input('sistema_operacional');
            $pdv->data_base = $request->input('data_base');
            $pdv->tipo_desenvolvimento = $request->input('tipo_desenvolvimento');
            $pdv->tipo_funcionamento = $request->input('tipo_funcionamento');
            $pdv->nfe = $request->input('nfe');
            $pdv->sped = $request->input('sped');
            $pdv->nfce = $request->input('nfce');
            $pdv->tratamento_interrupcao = $request->input('tratamento_interrupcao');
            $pdv->integracao_paf = $request->input('integracao_paf');
            $pdv->aplicacoes_especiais = $request->aplicacoes_especiais;
            $pdv->forma_impressao = $request->forma_impressao;
            $pdv->perfis = $request->perfis;

            if($laudos){
                foreach ($laudos as $laudo) {
                    $laudo->nome_comercial_pdv = $request->input('nome_comercial');
                    $laudo->save();
                }
            }

            $pdv->save();
            return redirect()->back()->with('msg', 'Cadastro do PDV Editado com Sucesso!!');
        }
    }

    public function destroy($id)
    {   
        $pdv = PDV::find($id);
        $empresa = Empresa::find($pdv->id_empresa);
        $empresa_id = $empresa->id;
        $pdv->validacao = false;
        $pdv->save();
        return redirect()->route('cadastroPDV.create', ['empresa' => $empresa_id])->with('msgerro', 'PDV Excluído com Sucesso!!');
    }
}
