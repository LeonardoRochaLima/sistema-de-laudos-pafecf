<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;

class LaudoController extends Controller
{
    public function index()
    {
        $empresas = Empresa::where('validacao', true)->orderBy('id', 'desc')->paginate(10);
        print($empresas);
        return view('laudo.index')->with('empresas', $empresas);
    }
}
