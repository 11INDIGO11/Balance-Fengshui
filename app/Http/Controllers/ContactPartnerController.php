<?php

namespace App\Http\Controllers;
use App\contactRequest;
use App\Partner;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ContactPartnerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $partners = Partner::OrderBy('id','asc')->get();
        return view('partner_contract')->with('partners',$partners);
    }
    public function create()
    {
        return view('partner_detail');
    }

    public function store(Request $request){
        $this->validate($request,
            [
                'user_id'=>'required',
                'partner_id'=>'required',
                'title'=>'required',
                'detail'=>'required',
                'budget'=>'required',
                'user_phonenumber'=>'required',
                'file'=>'required|mimes:jpeg,jpg,png,gif|max:2048'
            ]
        );
        $file_name = time().'.'.$request->file->extension();
        $request->file->move(public_path('uploads'),$file_name);

        $contactRequest = new contactRequest();
        $contactRequest->user_id = $request->input('user_id');
        $contactRequest->partner_id = $request->input('partner_id');
        $contactRequest->title = $request->input('title');
        $contactRequest->detail = $request->input('detail');
        $contactRequest->user_phonenumber = $request->input('user_phonenumber');
        $contactRequest->budget = $request->input('budget');

        $contactRequest->file_name = $file_name;

        $contactRequest->save();

        return redirect('/contact_list_foruser')->with('success','SUCCESS');
    }

    public function contact_list_foruser(){
        $partner_contact = DB::table('partners')
            ->join('contact_requests','contact_requests.partner_id','partners.id')
            ->where('user_id',Auth::user()->id)
            ->get();

//        $partnerRequest = DB::table('partners')
//            ->join('contact_requests','contact_requests.partner_id','partners.id')
//            ->where('user_id',Auth::user()->id)
//            ->first();




        return view('contact_list_foruser')
            ->with('partner_contact',$partner_contact);
    }

    public function show($id){
        $detail_partners = Partner::find($id);

        $detail_request = DB::table('contact_requests')
            ->join('partners','partners.id','contact_requests.partner_id')
            ->where('partner_id',$detail_partners->id)
            ->where('user_id',Auth::user()->id)
            ->get();



        return view('partner_detail')
            ->with('detail_partners',$detail_partners)
            ->with('detail_request',$detail_request);
    }


//    public function backto_partner($id){
//        $partner_contact_back = DB::table('partners')
//            ->join('contact_requests','contact_requests.partner_id','partners.id')
//            ->where('user_id',Auth::user()->id)
//            ->get();
//
//        return view('contact_list_foruser')
//            ->with('partner_contact_back',$partner_contact_back);
//    }
}
