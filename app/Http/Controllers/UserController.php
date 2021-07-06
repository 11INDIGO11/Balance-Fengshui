<?php

namespace App\Http\Controllers;

use Faker\Provider\Image;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profile()
    {
        return view('userProfile', array('user' => Auth::user()));
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

        return view('userProfile', array('user' => Auth::user()));
    }
}




