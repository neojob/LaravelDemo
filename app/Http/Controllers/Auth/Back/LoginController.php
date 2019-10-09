<?php

namespace App\Http\Controllers\Auth\Back;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    public function Login(){

        return view('s_auth.back.login');
    }

    public function postLogin( Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if(Auth::user()->roles()->first()->name == 'admin'){
                return redirect( route('adminDashboard'));
            }
        }else {
            return redirect()->back()->with(['error' => 'Incorrect Email or Password']);
        }
    }

    public function Logout()
    {
        Auth::logout();
        return redirect( route('Log') );
    }
}

