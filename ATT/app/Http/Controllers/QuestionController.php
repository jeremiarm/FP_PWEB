<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use Auth;

class QuestionController extends Controller
{
	public function create()
	{
		if (Auth::check()) return view('questionmaker');
	}
	public function store(Request $request)
	{
		$question = new Question();
		$data = $this->validate($request, [
			'soal'=>'required',
			'explanation'=> 'required',
			]);

		$question->soal = $data['soal'];
        $question->explanation = $data['explanation'];
        $question->creator_username = Auth::user()->username;
        $question->save();
		return redirect('/home')->with('success', 'New question has been created!');
	}
}
