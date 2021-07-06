<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\yeardatas;
use App\monthdata;

class birthcalculateController extends Controller
{
    public function index(){
        $Yeardatas = yeardatas::all();
        return view('home',compact('Yeardatas'));
    }

    public function getMonths($id){
        $Monthdatas = monthdata::where('year_id',$id)->pluck("month_num","id");
        return json_encode($Monthdatas);
    }
}
