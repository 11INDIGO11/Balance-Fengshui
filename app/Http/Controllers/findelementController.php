<?php

namespace App\Http\Controllers;


use App\date_zodiac;
use App\low_element;
use mysql_xdevapi\Schema;
use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use DB;
use App\element;


class findelementController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('birth_calculate');
    }

    function search()
    {
        return view('birth_calculate');
    }

    public function show($id,$ageRange ,Request $request)//***************************
    {

//        ฟังก์ชันนี้ก็ดึงข้อมูลไปโชวเหมือนกันต่อจากฟังก์ชัน search
        $room_id = 1;
        if(!empty($request->get('room_id'))){
            $room_id = $request->get('room_id');
        }
        $birth_datas = DB::table('date_zodiacs')
            ->join('elements','date_zodiacs.id_element','elements.id')
            ->join('low_elements','elements.id_lowElement','low_elements.id');

        $birth_datas = date_zodiac::find($id);
        $element = element::find($id);
        $low_element = low_element::find($id);

        $current_element = '';
        if ($low_element->low_element=='4'){
            $current_element='ดิน';
        }if ($low_element->low_element=='5'){
            $current_element='ทอง';
        }if ($low_element->low_element=='1'){
            $current_element='น้ำ';
        }if ($low_element->low_element=='3'){
            $current_element='ไฟ';
        }if ($low_element->low_element=='2'){
            $current_element='ไม้';
        }

        $room_type = '';
        if($room_id == 1){
            $room_type='ห้องนอน';
        }
        if($room_id == 2){
            $room_type='ห้องนั่งเล่น';
        }



        $bedroom = DB::table('filters')
            ->join('categories','filters.category_id','categories.id')
            ->where('age_range_id',$ageRange)//นำตัวแปรช่วงอายุมาใส่ตรงนี้ ***************************
            ->where('low_element_id',$low_element->low_element)
            ->where('room_id',$room_id)
            ->first();



        $text_recommend = DB::table('text_recommends')
            ->where('low_element_id',$low_element->low_element)
            ->where('room_id',$room_id)
            ->first();

        $compass = DB::table('compasses')
            ->where('compasses.id',$birth_datas->id_zodiac)
            ->first();

        $month = array('ธาตุดิน', 'ธาตุทอง', 'ธาตุน้ำ', 'ธาตุไม้', 'ธาตุไฟ');
        $data  = array($element->earth_element, $element->metal_element, $element->water_element,
            $element->wood_element,$element->fire_element);


        return view('fengshuishow_data')
            ->with('element',$element)
            ->with('birth_datas',$birth_datas)
            ->with('low_element',$low_element)
            ->with('bedroom',$bedroom)
            ->with('Months',$month)
            ->with('Data',$data)
            ->with('id',$id)
            ->with('room_id',$room_id)
            ->with('compass',$compass)
            ->with('text_recommend',$text_recommend)
            ->with('current_element',$current_element)
            ->with('room_type',$room_type)
            ->with('ageRange',$ageRange);

    }

//ในฟังก์ชันนี้สำหรับดึงข้แมูลจากดาต้าเบสตอน Search ในฟังก์ชันนี้ใน้ <script> ร่วมกันในหน้า .blade ด้วย
    public function fetch(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $datas = DB::table('low_elements')
                ->join('elements','elements.id_lowElement','low_elements.id')
                ->join('date_zodiacs','date_zodiacs.id_element','elements.id')
                ->select('*')
                ->where('year_month_day', 'LIKE', "%{$query}%")
                ->get();


            $output = '';
            foreach($datas as $row)
            {
                $output .= '

                <style>
                    .col{
                        text-align: center;
                        margin-right: 5vw;
                        margin-top: 2vw;
                        padding: 0;
                        -webkit-box-shadow: 0px 3px 13px -6px rgba(0,0,0,0.56);
                        -moz-box-shadow: 0px 3px 13px -6px rgba(0,0,0,0.56);
                        box-shadow: 0px 3px 13px -6px rgba(0,0,0,0.56);
                        width: 100%;
                    }
                    .card-body{
                        text-align: center;
                    }
                    .card{
                        background-color: #252525;
                    }
                    .btn{
                        background-color: #F9C414;
                    }
                    @media only screen and (min-width: 200px) {
                        .col-12{
                            text-align: center;
                            margin-right: 0;
                            margin-left: 0;
                            margin-top: 2vw;
                            padding: 0;

                        }
                        .card-body{
                            text-align: center;

                        }
                        .card{
                            background-color: #252525;
                            text-align: center;
                            -webkit-box-shadow: 0px 3px 13px -6px rgba(0,0,0,0.56);
                            -moz-box-shadow: 0px 3px 13px -6px rgba(0,0,0,0.56);
                            box-shadow: 0px 3px 13px -6px rgba(0,0,0,0.56);
                        }
                        .btn{
                            background-color: #F9C414;
                        }
                        .btn-link{
                            color: #252525;
                            text-underline: none;
                        }
                    }
                    @media only screen and (min-width: 1025px) {
                        .col-12{
                            text-align: center;
                            margin-right: 0;
                            margin-left: 0;
                            margin-top: 2vw;
                            padding: 0;

                        }
                        .card-body{
                            text-align: center;

                        }
                        .card{
                            background-color: #252525;
                            text-align: center;
                            -webkit-box-shadow: 0px 3px 13px -6px rgba(0,0,0,0.56);
                            -moz-box-shadow: 0px 3px 13px -6px rgba(0,0,0,0.56);
                            box-shadow: 0px 3px 13px -6px rgba(0,0,0,0.56);
                        }
                        .btn{
                            background-color: #F9C414;
                        }
                        .btn-link{
                            color: #252525;
                            text-underline: none;
                        }
                    }

                </style>

                <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">'.($row->year_month_day).'</h5>
                        <h3 style="color: white;">'.$row->duration.'</h3>
                        <p class="card-text">'.$row->zodiac_data.'</p>
                        <a href="'.url('/birth_data/'.$row->id).'"  class="btn btn-link form-control">See Detail</a>
                      </div>
                    </div>
                </div>

               ';
            }

            $output .= '</ul>';
            echo $output;

        }

    }

}
