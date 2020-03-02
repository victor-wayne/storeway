<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    protected $redirectPath = '/';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('auth', ['except' => 'getLogout']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // cargo los productos de la BD yse los pasa a la variable products
        $products = Product::orderBy('id', 'asc')->paginate(20);
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
}
