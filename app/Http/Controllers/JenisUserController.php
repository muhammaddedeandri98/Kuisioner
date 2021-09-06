<?php

namespace App\Http\Controllers;

use DB;
use App\JenisUser;
use Illuminate\Http\Request;

class JenisUserController extends Controller
{
    public function index()
    {
        $data = JenisUser::all();
        return view ('jenis_user/jenis_user',compact('data'));
    }

    public function create()
    {
        $jenis_user = JenisUser::all();
        return view ('jenis_user/add',compact('jenis_user'));
    }

    public function store(Request $Request)
    {
        $jenis_user = new JenisUser();
        $jenis_user ->id_jenis_user  = $Request->id_jenis_user;
        $jenis_user ->jenis_user     = $Request->jenis_user;
        $jenis_user ->save();
        return redirect('/jenis_user')->with('status', 'Data siswa Berhasil Dihapus');

    }

    public function edit($id)
    {
        $jenis_user = JenisUser::where('id_jenis_user', $id)->first();
        return view('jenis_user.edit', compact('jenis_user'));

    }

    public function update(Request $Request)
    {
        DB::table('tbl_jenis_user')->where('id_jenis_user',$Request->id_jenis_user)->update(
            [
               'jenis_user' => $Request->jenis_user,
            ]);
        return redirect('/jenis_user')->with('status', 'Data siswa Berhasil Diubah');
    }

    public function destroy($id)
    {
        $jenis_user = JenisUser::where('id_jenis_user', $id)->delete();
        return redirect('/jenis_user')->with('status', 'Data Siswa Berhasil DiHapus');

    }

    public function show($id)
    {
        $jenis_user = JenisUser::where('id_jenis_user', $id)->first();
        return view('jenis_user/detail', compact('jenis_user'));

    }
}
