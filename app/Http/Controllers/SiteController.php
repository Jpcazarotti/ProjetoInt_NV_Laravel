<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function sobreNos()
    {
        return view('sobre_nos');
    }

    public function faq()
    {
        return view('faq');
    }

    public function nt()
    {
        return view('nt');
    }

    public function pdp()
    {
        return view('pdp');
    }

    public function login()
    {
        return view('login');
    }

    public function cadastro()
    {
        return view('cadastro');
    }

    public function recuperarSenha()
    {
        return view('recuperar_senha');
    }
}
