<?php

namespace App\Http\Controllers;

use App\contactRequest;
use App\Partner;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactUserController extends Controller
{
    public function __construct(){
        $this->middleware('auth:partner');
    }

    public function index(){
//        $user_contact = contactRequest::OrderBy('id','asc')
////            ->join('users','users.id','$user_contact.user_id')
//            ->where('partner_id',Auth::user()->id)
//            ->get();

        $user_contact = DB::table('users')
            ->join('contact_requests','contact_requests.user_id','users.id')
            ->where('partner_id',Auth::user()->id)
            ->get();



        return view('contact_list_forpartner')
            ->with('user_contact',$user_contact);
    }

    public function edit($id)
    {
        //
        $detail_users = contactRequest::find($id);
        $detail_data = DB::table('users')
            ->where('id',$detail_users->user_id)
            ->first();

        return view('user_detail')
            ->with('detail_users',$detail_users)
            ->with('detail_data',$detail_data);
    }
    public function update(Request $request, $id)
    {
        $detail_users = contactRequest::find($id);
        $detail_users->user_id = $request->input('user_id');
        $detail_users->partner_id = $request->input('partner_id');
        $detail_users->title = $request->input('title');
        $detail_users->detail = $request->input('detail');
        $detail_users->budget = $request->input('budget');
        $detail_users->status = $request->input('status');

        $detail_users->save();

        // return .. go to index and send message


        return redirect('/user_contact')
            ->with('success','ดำเนินรายการ'.$detail_users->title);
    }
}
