<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class CartController extends Controller
{

    //Controlar mis metodos con el contructor de la clase
    public function __construct()
    {
        //Si existe la variable de sesion car no hacer nada y si no existe crearla con el arreglo
        if(!\Session::has('cart')) \Session::put('cart', array());
    }


    //show cart
    public function show()
    {
        $cart = \Session::get('cart');
        $total = $this->total();
        return view('store.cart', compact('cart', 'total'));

    }

    //add Item

    public function add(Product $product)
    {
        //Recibo mi variable de session cart
        $cart = \Session::get('cart');

        //Agrego la propiedad de Cantidad y la defino en 1
        $product->quantity = 1;

        //El Objeto Producto lo guardo en mi array en la posiscion slug
        $cart[$product->slug] = $product;

        //Actualizar mi variable de sesion
        \Session::put('cart', $cart);

        //Redireccionar a Show
        return redirect()->route('cart-show');



    }

    //Delete Item

    public function delete(Product $product)
    {
        //Traerme mi variable de session
        $cart = \Session::get('cart');

        //Eliminar mis Items
        unset($cart [$product->slug]);

        //Actualizar la variable de Session
        \Session::put('cart', $cart);

        //Regresar a la vista de show
        return redirect()->route('cart-show');
    }


    //Update Item

    public function update(Product $product, $quantity)
    {
        //Me traigo mi arreglo
        $cart = \Session::get('cart');

        //Busque el slug que le estoy pasando
        $cart[$product->slug]->quantity = $quantity;

        //Actualizo mi variable de Session
        \Session::put('cart', $cart);

        //Redirecciono
        return redirect()->route('cart-show');
    }


    //Trash Cart

    public function trash()
    {
        //Elimina lo que contiene la variable de sesion cart
        \Session::forget('cart');

        //Redirigir a la vista
        return redirect()->route('cart-show');


    }


    //Total

    private function total()
    {
        // Me traigo la variable de mi carrito
        $cart = \Session::get('cart');

        //Variable total inicializada en 0
        $total = 0;

        //Recorrer cada item del carrito
        foreach ($cart as $item){
            $total += $item->price * $item->quantity;
        }
        return $total;
    }


    // Order Detail

    public function orderDetail()
    {
        if (count(\Session::get('cart')) <= 0) return redirect()->route('store');
        $cart = \Session::get('cart');
        $total = $this->total();

        return view('store.order-detail', compact('cart','total'));
    }
}
