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
}
