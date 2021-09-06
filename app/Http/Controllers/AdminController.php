<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataUser;
use App\JenisUser;
use App\Cabang;
use App\Divisi;
use Carbon;
class AdminController extends Controller
{

    public function jumlah()
    {

        $jumlah_user       = DataUser::count();
        $jumlah_jenis_user = JenisUser::count();
        $jumlah_cabang     = Cabang::count();
        $jumlah_divisi     = Divisi::count();
        $mytime            = Carbon\Carbon::now();
        return view ('admin/dashboard',compact('jumlah_user','jumlah_jenis_user','jumlah_cabang','jumlah_divisi','mytime'));
    }

}
