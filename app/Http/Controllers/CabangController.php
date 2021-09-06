<?php

namespace App\Http\Controllers;

use App\Cabang;
use Illuminate\Http\Request;

class CabangController extends Controller
{
    public function index()
    {
        $data = Cabang::all();
        return view ('cabang/cabang',compact('data'));
    }

    public function create()
    {
        $user = Cabang::all();
        return view ('cabang/add',compact('cabang'));
    }

    public function store(Request $Request)
    {
        $user = new Cabang();
        $user ->id_branch   = $Request->id_branch;
        $user ->code_branch = $Request->code_branch;
        $user ->branch_name = $Request->branch_name;
        $user ->save();
        return redirect('/cabang')->with('status', 'Data siswa Berhasil Dihapus');

    }

    public function destroy($id)
    {
        $user = Cabang::where('id_branch', $id)->delete();
        return redirect('/cabang')->with('status', 'Data Siswa Berhasil DiHapus');

    }

    public function edit($id)
    {
        $cabang = Cabang::where('id_branch', $id)->first();
        return view('cabang.edit', compact('cabang'));

    }

    public function show($id)
    {
        $cabang = Cabang::where('id_branch', $id)->first();
        return view('cabang.detail', compact('cabang'));

    }

    public function update(Request $Request)
    {
        return redirect('/cabang')->with('status', 'Data siswa Berhasil Diubah');
    }
}
