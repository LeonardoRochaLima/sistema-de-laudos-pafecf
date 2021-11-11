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
        $ecfs = Ecfs::all()->sortBy('marca');
        return view('ecfs.index', ['ecfs' => $ecfs]);
    }

    public function store(StoreECFRequest $request){
        $ecf = new Ecfs;
        $ecf->marca = $request->marca;
        $ecf->modelo = $request->modelo;

        $ecf->save();

        return redirect('/ecfs')->with('msg', 'ECF cadastrada com Sucesso!!');
    }

    public function destroy($id){
        $ecf = Ecfs::find($id);
        $ecf->delete();
        return redirect()->route('ecfs.index')->with('msg', 'ECF Excluída com Sucesso!!');
    }
}
