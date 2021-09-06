<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    
    public function login(){
        return view ('/pengguna/login');
    }

    public function register(){
        return view ('pengguna.register');
    }

    public function postlogin(Request $Request)
    {
        $ingat = $Request->remember ? true : false;
        $up    = $Request->only('email','password');

        if(Auth::attempt($up,$ingat)){
          return redirect('/dashboard');
        }
        return redirect('login');
    }

    public function logout(Request $Request)
    {
        Auth::logout();
        return redirect('/login');
    }

    public function not_found(){
        return view ('/not_found');
    }
  
      public function forgot(){
        return view ('/forgot_password');
    }
  
      public function change_password(){
        return view ('/change_password');
    }
}
