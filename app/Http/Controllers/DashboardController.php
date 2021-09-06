<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\DataUser;

class DashboardController extends Controller
{
    public function jumlah(){
       $jumlah_user = DataUser::All();
       dd($jumlah_user);
       return view('admin.dashboard');

    }
}
