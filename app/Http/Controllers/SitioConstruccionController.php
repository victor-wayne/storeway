<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioConstruccionController extends Controller
{
    public function index()
    {
        return view('construccion.index');
    }
}
