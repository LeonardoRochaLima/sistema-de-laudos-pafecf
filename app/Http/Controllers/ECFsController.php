<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreECFRequest;
use App\Models\Ecfs;

class ECFsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $ecfs = Ecfs::orderBy('marca')->paginate(10);
        return view('ecfs.index', ['ecfs' => $ecfs]);
    }

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

    public function destroy($id){
        $ecf = Ecfs::find($id);
        $ecf->delete();
        return redirect()->route('ecfs.index')->with('msgerro', 'ECF Excluída com Sucesso!!');
    }
}
