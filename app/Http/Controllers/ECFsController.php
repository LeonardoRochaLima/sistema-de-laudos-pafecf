<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreECFRequest;
use App\Models\Ecfs;

class ECFsController extends Controller
{   
    /**
     * Função responsável por limitar as funções dessa classe somente para usuários logados.
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Função responsável por chamar a view inicial do cadastro de ECF.
     * Mostra também o formulário de cadastro de ECF's.
     * @return view - * Mostra todas as ECF's cadastradas numa listagem.
     */
    public function index(){
        $ecfs = Ecfs::orderBy('marca')->paginate(10);
        return view('ecfs.index', ['ecfs' => $ecfs]);
    }

    /**
     * Função responsável por escrever as informações cadastradas no banco de dados.
     * @param \Requests\StoreECFRequest $request - Objeto com todas as informações preenchidas no formulário. Os campos são validados pela classe StoreECFRequest.
     * @return view - Volta para a mesma página inicial com uma mensagem de êxito do cadastro efetuado.
     */
    public function store(StoreECFRequest $request){
        $ecf = new Ecfs;
        $ecfsExistentes = Ecfs::all();
        foreach ($ecfsExistentes as $ecfAtual) {
            if ($ecfAtual->marca == $request->marca &&
                $ecfAtual->modelo == $request->modelo) {
                    return redirect('/ecfs')->with('msgerro', 'ECF já Cadastrada Anteriormente!!');
            }
        }
        $ecf->marca = $request->marca;
        $ecf->modelo = $request->modelo;

        $ecf->save();
        return redirect('/ecfs')->with('msg', 'ECF cadastrada com Sucesso!!');
    }

    /**
     * Função responsável por excluir o registro da ECF.
     * @param Integer $id - identificador da ECF.
     * @return view - Volta para a página inicial do cadastro de ECFs com uma mensagem de êxito.
     */
    public function destroy($id){
        $ecf = Ecfs::find($id);
        $ecf->delete();
        return redirect()->route('ecfs.index')->with('msgerro', 'ECF Excluída com Sucesso!!');
    }
}
