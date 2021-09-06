<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Divisi;

class DivisiController extends Controller
{
    public function index()
    {
        $data = Divisi::all();
        return view ('divisi/divisi',compact('data'));
    }

    public function create()
    {
        $user = Divisi::all();
        return view ('divisi/add',compact('divisi'));
    }

    public function store(Request $Request)
    {
        $user = new Divisi();
        $user ->id_divisi   = $Request->id_divisi;
        $user ->nama_divisi = $Request->nama_divisi;
        $user ->save();
        return redirect('/divisi')->with('status', 'Data siswa Berhasil Dihapus');

    }

    public function edit($id)
    {
        $divisi = Divisi::where('id_divisi', $id)->first();
        return view('divisi.edit', compact('divisi'));

    }

    public function detail($id)
    {
        $divisi = Divisi::where('id_divisi', $id)->first();
        return view('divisi.detail', compact('divisi'));

    }

    public function update(Request $Request,$id)
    {
        $divisi = Divisi::where('id_divisi', $id)->first();
        $divisi = $Request->id_divisi;
        $divisi->update();
        return redirect('/divisi')->with('status', 'Data siswa Berhasil Diubah');
    }

    public function destroy($id)
    {
        $divisi = Divisi::where('id_divisi', $id)->delete();
        return redirect('/divisi')->with('status', 'Data Divisi Berhasil DiHapus');

    }
}
