<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AllController extends Controller
{
     function index()
    {
        return view('all.index');
    }

    function fetch(Request $request)
    {
        if ($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('producto')
                ->where('descripcion', 'LIKE', "%{$query}%")
                ->get();
            //dd($data);
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach($data as $row)
            {
                $output .= '<li><a href="#">'.$row->descripcion.'</a></li>';
            }
            $output .= '</ul>';
            echo $output;


        }

    }
}
