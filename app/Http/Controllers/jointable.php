<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class jointable extends Controller
{
    public function show(){
        return DB::table('elements')
            ->join('date_zodiacs','date_zodiacs.id_element','elements.id')
            ->select('*')
            ->get();
    }
}
