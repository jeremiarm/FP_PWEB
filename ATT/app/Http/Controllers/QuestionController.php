<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use Auth;

class QuestionController extends Controller
{
	public function create()
	{
		if (Auth::check()){
			if(Auth::user()->rank>=1) return view('questionmaker');
			else return redirect('/home')->with('gagal',"Rank Tidak Cukup");
		}
		else return redirect('/login')->with('gagal',"Login Terlebih Dahulu");
	}
	public function store(Request $request)
	{	
		
		$question = new Question();
		$data = $this->validate($request, [
			'soal'=>'required',
			'choice1'=>'required',
			'choice2'=>'required',
			'choice3'=>'required',
			'choice4'=>'required',
			'correct_answer'=>'required|integer|between:1,4',
			'explanation'=> 'required',
			]);
		#dd($data);
		$question->soal = $data['soal'];
		$question->choice_1 = $data['choice1'];
		$question->choice_2 = $data['choice2'];
		$question->choice_3 = $data['choice3'];
		$question->choice_4 = $data['choice4'];
		$question->correct_answer = $data['correct_answer'];
        $question->explanation = $data['explanation'];
        $question->creator_username = Auth::user()->username;
        $question->save();
		return redirect('/home')->with('success', 'New question has been created!');
	}
}
