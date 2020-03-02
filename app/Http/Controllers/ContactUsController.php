<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUs;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function contactUS()
    {
        return view('store.contact');
    }

    public function contactUSPost(Request $request)
    {

        $this->validate($request, [
            'email'=> 'required',
            'body' => 'required',
            'message' => 'required'
        ]);



        ContactUs::create($request->all());


        Mail::send('emails.welcome', array(
            'email' => $request->get('email'),
            'body'=> $request->get('body'),
            'user_message' =>$request->get('message')
        ), function($message)
        {
            $message->from('victoritcelaya@gmail.com');
            $message->to('victoritcelaya@gmail.com', 'Admin')->subject('Contacto de Farmacia Herrera');

        });


        return back()->with('success', 'Gracias por contactarnos');

        //$data  = $request->all();
        //dd($data);


    }

}
