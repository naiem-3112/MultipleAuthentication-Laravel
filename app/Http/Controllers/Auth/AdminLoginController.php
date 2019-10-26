<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Admin;



class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except(['logout']);
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        //validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:3'
        ]);
        //attempt to log user in
        $admin = Admin::where('email', $request->email)->first();
        if($admin->status==0){
            return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors(['msg'=>'You are not an active person, Please contact with admin']);
        }

        elseif (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'status'=>1], $request->remember)) {
            //if successful, then redirect to their intended location

            return redirect()->intended(route('admin.dashboard'));
        }
        //if unsuccessful, then redirect back to login page with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors(['msg'=>'given credentials do not match with database']);


    }


    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
