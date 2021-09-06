<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
use Hash;
use Crypt;


class RegisterController extends Controller
{
    public function store(Request $Request)
    {
        $register=new Register();
        $register->name           = $Request ->name;
        $register->email          = $Request ->email;
        $register->password       = $Request ->password;
        $register->level          = $Request ->level;
        $register->remember_token = $Request ->remember_token;
        $register->save();
        return redirect('/login');
    }
}
