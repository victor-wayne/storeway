<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApoyoDeporteController extends Controller
{
    public function index()
    {
        return view('apoyodeporte.index');
    }
}
