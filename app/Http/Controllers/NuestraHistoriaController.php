<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NuestraHistoriaController extends Controller
{
    public function index()
    {
        return view('nuestrahistoria.index');
    }
}
