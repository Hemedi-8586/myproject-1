<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    //
    public function showRegister(){
        return view('Auth.register');
    }

    public function Register(Request $request){
      
        $request->validate
        ([
        'name'=>'required|string|max:50',
        'username'=>'required|string|max:25|unique:users,username',
        'email'=>'required|string|max:60|email|unique:users,email',
        'phone'=>'required|string|max:50',
        'password'=>'required|string|max:255|confirmed'
       ]);
       
       $user=User::create([
        'name'=>$request->name,
        'username'=>$request->username,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'password'=>Hash::make($request->password)
       ]);
       return redirect()->route('login')->with('status','Registration success');
    }
}
