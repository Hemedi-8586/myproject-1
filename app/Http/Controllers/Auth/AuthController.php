<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function showLogin(){
        return view('Auth.login');
    }

      public function Login(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
       
        $credentials=$request->only(['username','password']);

        if(Auth::attempt($credentials)){

            return redirect()->route('DASHBOARD')->with('status','login successfully');
        }

        return back()->withInput()->with('status','Invalid credentials');
    }
}
