<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('listaDePlacasDeVideo');
      
    }

    public function login()
    {
        return view('login');
    }

    public function edit()
    {
        return view('edicao');
    }

    public function register()
    {
        return view('cadastro');
    }
}

