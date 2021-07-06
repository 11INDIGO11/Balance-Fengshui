<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class PartnerLoginController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('guest');
    }
    public function showLoginForm()
    {
        return view('auth.partner-login');
    }
    public function login(Request $request)
    {
        //validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        //Attemp to log a user in
        if (Auth::guard('partner')->attempt(['email'=>$request->email,'password'=>$request->password], $request->remember)){
            //if successful then redirect to their intended location
//            return redirect()->intended(route('partner.dashboard'));
            return redirect('/user_contact');

        }
        //if unsuccessful then redirect to the login with form data
        return redirect()->back()->withInput($request->only('email','remember'));

    }
}
