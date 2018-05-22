<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
	public function create()
	{
		return view('questionmaker');
	}
	public function store(Request $request)
	{
		$question = new Question();
		$data = $this->validate($request, [
			'soal'=>'required',
			'explanation'=> 'required',
			'creator_username' => 'required',
			]);

		$question->soal = $data['soal'];
        $question->explanation = $data['explanation'];
        $question->creator_username = $data['creator_username'];
        $question->save();
		return redirect('/home')->with('success', 'New question has been created!');
	}
}
