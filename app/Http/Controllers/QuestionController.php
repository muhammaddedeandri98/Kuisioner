<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $question = Question::All();
        return view('question.question',compact('question'));
    }

    public function show()
    {

    }

    public function create()
    {
        $question = Question::All();
        return view ('question.add',compact('question'));
    }

    public function store(Request $Request)
    {
        $question = new Question();
        $question->id_subject     = $Request->id_subject;
        $question->judul          = $Request->judul;
        $question->jenis          = $Request->jenis;
        $question->question       = $Request->question;
        $question->save();
        return redirect('/question');
        
    }

    public function edit($id)
    {
        $question = Question::where('id_question', $id)->first();
        return view('question.edit', compact('question'));
     
    }

    public function detail($id)
    {
        $divisi = Divisi::where('id_divisi', $id)->first();
        return view('divisi.detail', compact('divisi'));

    }

    public function update(Request $Request,$id)
    {
        $question = Question::where('id_question', $id)->first();
        $question = $Request->id_question;
        $question->update();
        return redirect('/question')->with('status', 'Data siswa Berhasil Diubah');
    }

    public function destroy($id)
    {
        $question = Question::where('id_question', $id)->delete();
        return redirect('/question')->with('status', 'Data Divisi Berhasil DiHapus');

    }
}
