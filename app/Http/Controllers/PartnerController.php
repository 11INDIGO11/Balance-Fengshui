<?php

namespace App\Http\Controllers;
use App\birthdata;
use Illuminate\Http\Request;
use Auth;

class PartnerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:partner');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user_contract');
    }

    public function profile()
    {
        return view('partnerProfile', array('user' => Auth::user()));
    }

    public function updateAvatar(Request $request)
    {
        $this->validate($request,
            [
                'avatar'=>'required|mimes:jpeg,jpg,png,gif|max:3048'
            ]
        );

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
//            $file_name = time() . '.' . $avatar->getClientOriginalExtension();
//            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatar/' . $file_name));

            $file_name = time().'.'.$request->avatar->extension();
            $request->avatar->move(public_path('uploads/avatar'),$file_name);

            $user = Auth::user();
            $user->avatar = $file_name;
            $user->save();
        }

        return view('partnerProfile', array('user' => Auth::user()));
    }

}
