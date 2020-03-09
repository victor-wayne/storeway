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

    public function isdin(){

        // cargo los productos de la BD yse los pasa a la variable products
        $products = Product::where('category_id','=', '4')->paginate(20);
        //debuguea para versi nos esta mandando los productos
        //dd($products);

        //me regresa la vista
        return view('dermatologia.isdin', compact('products'));
    }

    public function patente(){

        // cargo los productos de la BD yse los pasa a la variable products
        $products = Product::where('category_id','=', '5')->paginate(20);
        //debuguea para versi nos esta mandando los productos
        //dd($products);

        //me regresa la vista
        return view('dermatologia.patente', compact('products'));
    }

    public function genericos(){

        // cargo los productos de la BD yse los pasa a la variable products
        $products = Product::where('category_id','=', '6')->paginate(20);
        //debuguea para versi nos esta mandando los productos
        //dd($products);

        //me regresa la vista
        return view('dermatologia.generico', compact('products'));
    }

    public function otc(){

        // cargo los productos de la BD yse los pasa a la variable products
        $products = Product::where('category_id','=', '7')->paginate(20);
        //debuguea para versi nos esta mandando los productos
        //dd($products);

        //me regresa la vista
        return view('dermatologia.otc', compact('products'));
    }
}
