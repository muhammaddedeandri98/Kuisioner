<?php

namespace App\Http\Controllers;
use DB;
use App\DataUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = DataUser::all();
        return view ('user/user',compact('data'));
    }

    public function create()
    {
        $user = DataUser::all();
        return view ('user/add',compact('user'));
    }

    public function store(Request $Request)
    {
        $user = new DataUser();
        $user ->id_user  = $Request->id_user;
        $user ->username = $Request->username;
        $user ->password = $Request->password;
        $user ->status   = $Request->status;
        $user ->save();
        return redirect('/user')->with('status', 'Data siswa Berhasil Dihapus');

    }

    public function edit($id)
    {
        $user = DataUser::where('id_user', $id)->first();
        return view('user.edit', compact('user'));

    }

    public function detail($id)
    {
        $user = DataUser::where('id_user', $id)->first();
        return view('user.detail', compact('user'));

    }

    public function update(Request $Request)
    {
        DB::table('tbl_user')->where('id_user',$Request->id_user)->update(
        [
           'username' => $Request->username,
           'password' => $Request->password,
           'status'   => $Request->status,
        ]);
        
      return redirect('/user')->with('status', 'Data siswa Berhasil Diubah');
    }

    public function destroy($id)
    {
        $user = DataUser::where('id_user', $id)->delete();
        return redirect('/user')->with('status', 'Data Siswa Berhasil DiHapus');

    }

}
