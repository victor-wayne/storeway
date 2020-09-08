<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;


class StoreController extends Controller
{

    public function index(){

        // cargo los productos de la BD yse los pasa a la variable products
        $products = Product::orderBy('id', 'desc')->paginate(16);
        //debuguea para versi nos esta mandando los productos
        //dd($products);

        //me regresa la vista
        return view('store.index', compact('products'));
    }

    public function show($slug){

        $product = Product::where('slug', $slug)->first();
        //dd($product);
        return view('store.show', compact('product'));
    }

    public function contact(){

        return view('store.contact');
    }

    public function tienda(){

        // cargo los productos de la BD yse los pasa a la variable products
        $products = Product::orderBy('id', 'desc')->paginate(16);
        //debuguea para versi nos esta mandando los productos
        //dd($products);

        //me regresa la vista
        return view('store.tienda', compact('products'));

    }
}
