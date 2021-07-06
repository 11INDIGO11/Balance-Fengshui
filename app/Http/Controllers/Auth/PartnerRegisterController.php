<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;


class PartnerRegisterController extends Controller
{

    protected $redirectTo = RouteServiceProvider::HOME;

    public function showRegisterForm()
    {
        return view('auth.partner-register');
    }



    protected function register(Request $request)
    {
        $this->validate($request, [
            'partner_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'location' => ['required', 'string', 'max:255'],
            'partner_phonenumber' => ['required', 'string', 'max:255'],
            'contract' => ['required', 'string', 'max:255'],
            'experience' => ['required', 'integer'],
            'partnerType' => ['required', 'string', 'max:255'],
            'workType' => ['required', 'string', 'max:255'],
        ]);
        try {
            $partners = Partner::create([
                'partner_name' => $request->partner_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'location' => $request->location,
                'partner_phonenumber' => $request->partner_phonenumber,
                'contract' => $request->contract,
                'experience' => $request->experience,
                'partnerType' => $request->partnerType,
                'workType' => $request->workType,
            ]);
            return redirect()->to('/partner/login')->with('success','You have no permission for this page!');

        }catch (\Exception $e){
            return redirect()->back()->withInput($request->only('email','remember'));
        }



    }

}
