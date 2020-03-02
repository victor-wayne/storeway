<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class DermatologiaController extends Controller
{
    public function avene(){

        // cargo los productos de la BD yse los pasa a la variable products
        $products = Product::where('category_id','=', '1')->paginate(20);
        //debuguea para versi nos esta mandando los productos
        //dd($products);

        //me regresa la vista
        return view('dermatologia.avene', compact('products'));

    }

    public function roche(){

        // cargo los productos de la BD yse los pasa a la variable products
        $products = Product::where('category_id','=', '2')->paginate(20);
        //debuguea para versi nos esta mandando los productos
        //dd($products);

        //me regresa la vista
        return view('dermatologia.laroche', compact('products'));
    }

    public function vichy(){

        // cargo los productos de la BD yse los pasa a la variable products
        $products = Product::where('category_id','=', '3')->paginate(20);
        //debuguea para versi nos esta mandando los productos
        //dd($products);

        //me regresa la vista
        return view('dermatologia.vichy', compact('products'));
    }
}
