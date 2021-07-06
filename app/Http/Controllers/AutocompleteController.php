<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AutocompleteController extends Controller
{

    function search()
    {
        return view('search');

    }
    function fetch(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $datas = DB::table('todos')
                ->where('title', 'LIKE', "%{$query}%")
                ->get();

            $output = '<ul class="container-fluid" style="display:block; position:relative">';
            foreach($datas as $row)
            {
                $output .= '
               <h3><a href="#">'.$row->title.'</a></h3>
               <p>'.$row->content.'</p>
               <p>'.$row->due.'</p>

               <a href="'.url('/todo/'.$row->id).'" class="btn btn-primary form-control">See Detail</a>
               <br>
               ';
            }
            $output .= '</ul>';
            echo $output;
//            return view('fetch')->with('datas',$datas);




//            <li><a href="#">'.$row->title.'</a></li>

        }


    }


}
