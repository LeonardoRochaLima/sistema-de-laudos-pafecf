<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\PDV;

class LaudoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $empresas = Empresa::where('validacao', true)->orderBy('id', 'desc')->paginate(10);
        $pdvs = PDV::all();
        return view('laudo.index', ['empresas' => $empresas, 'pdvs' => $pdvs]);
    }
}
