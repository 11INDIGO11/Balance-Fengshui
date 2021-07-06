<?php


namespace App\Http\Controllers;
use App\date_zodiac;
use App\element;
use App\low_element;
use App\Storedata;
use DB;
use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use mysql_xdevapi\Schema;
use mysql_xdevapi\Table;
use Auth;

class Member1Controller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {

//        ->DB::table('storedatas')
//        Storedata::OrderBy('id','desc')
        $member = DB::table('storedatas')
            ->join('elements','elements.id','storedatas.m_element_id')
            ->join('date_zodiacs','date_zodiacs.id','storedatas.m_birth_data_id')
            ->where('m_user_id',Auth::user()->id)
            ->get();

        $members = Storedata::OrderBy('id','asc')
            ->where('m_user_id',Auth::user()->id)
            ->get();


        return view('member')
            ->with('member',$member)
            ->with('members',$members);
    }

    public function store(Request $request)
    {
        //
        $this->validate($request,
            [
                'm_user_id'=>'required',
                'm_low_element_id'=>'required',
                'm_age_range_id'=>'required',
                'm_element_id'=>'required',
                'm_birth_data_id'=>'required',
                'm_name'=>'required',
                'm_relationship'=>'required',

            ]
        );
        $member1 = new Storedata();
        $member1->m_user_id = $request->input('m_user_id');
        $member1->m_low_element_id = $request->input('m_low_element_id');
        $member1->m_age_range_id = $request->input('m_age_range_id');
        $member1->m_birth_data_id = $request->input('m_birth_data_id');
        $member1->m_element_id = $request->input('m_element_id');
        $member1->m_name = $request->input('m_name');
        $member1->m_relationship = $request->input('m_relationship');

        $member1->save();

        return redirect('/member')->with('success','SUCCESS');
    }

    public function show($id,Request $request)
    {
        $room_id = 1;
        if(!empty($request->get('room_id'))){
            $room_id = $request->get('room_id');
        }
//        dd('This is show funtion99'.$id);
        $member1 = Storedata::find($id);
        $member_datas = DB::table('filters')
            ->join('categories','filters.category_id','categories.id')
            ->where('age_range_id',$member1->m_age_range_id)
            ->where('low_element_id',$member1->m_low_element_id)
            ->where('room_id',$room_id)
            ->first();

        $member_detail = DB::table('storedatas')
            ->join('date_zodiacs','storedatas.m_birth_data_id','date_zodiacs.id')
            ->join('elements','storedatas.m_element_id','elements.id')
            ->join('low_elements','storedatas.m_low_element_id','low_elements.id')
            ->where('m_birth_data_id',$member1->m_birth_data_id)
            ->where('m_element_id',$member1->m_element_id)
            ->where('m_low_element_id',$member1->m_low_element_id)
            ->first();

//        dd($member_detail);

        $text_recommend = DB::table('text_recommends')
            ->where('low_element_id',$member_detail->m_low_element_id)
            ->where('room_id',$room_id)
            ->first();



        $compass = DB::table('compasses')
            ->where('compasses.id',$member_detail->id_zodiac)
            ->first();

        $month = array('ธาตุดิน', 'ธาตุทอง', 'ธาตุน้ำ', 'ธาตุไม้', 'ธาตุไฟ');
        $data  = array($member_detail->earth_element, $member_detail->metal_element, $member_detail->water_element,
            $member_detail->wood_element,$member_detail->fire_element);

        $room_type = '';
        if($room_id == 1){
            $room_type='ห้องนอน';
        }
        if($room_id == 2){
            $room_type='ห้องนั่งเล่น';
        }

        return view('membershow_data')
            ->with('Months',$month)
            ->with('Data',$data)
            ->with('id',$id)
            ->with('member1',$member1)
            ->with('member_datas',$member_datas)
            ->with('text_recommend',$text_recommend)
            ->with('compass',$compass)
            ->with('room_id',$room_id)
            ->with('room_type',$room_type)
            ->with('member_detail',$member_detail);


    }

    public function destroy($id)
    {
        //
        $member1 = Storedata::find($id);
        $member1->delete();
        return redirect('/member')->with('success','Delete Success ID = '.$id);
    }

}
