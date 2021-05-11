<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel!!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'Sobre Nós';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Serviços',
            'services' => ['Homologação', 'Pré-homologação', 'Consultoria']
        );
        return view('pages.services')->with($data);
    }

    public function cadastro_empresas(){
        $title = 'Cadastro de Empresas';
        return view('pages.cadastro_empresas')->with('title', $title);
    }
}
