<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\User;
use App\UserSoal;
use Auth;

class AnswerController extends Controller
{
    public function pick()
	{
		if (Auth::check()){
			$questions = Question::all();
			#dd($questions);
			return view('listsoal', compact('questions'));
		} 
		else return redirect('/login');
	}
	public function take($id)
	{
		#dd($id);
		if (Auth::check()){
			$questions = Question::where('id',$id)->first();
			if($questions != null){
				#dd($question);
				return view('listanswer',compact('questions'));
			}
			else return redirect('/pick');
		}
		else return redirect('/login');
	}
	public function chosen($id,Request $request)
	{
		$question = Question::where('id',$id)->first();
		$data = $this->validate($request, [
			'correct_answer'=>'required|integer|between:1,4',
			]);
		#dd($question);
		$check = usersoal::where([['id_soal',$id],['id_user',Auth::user()->id]])->first();
		if($check==null){
			$jawab = new usersoal();
			$jawab->id_soal = $question->id;
			$jawab->id_user = Auth::user()->id;
			$jawab->save();
		}
		if($question->correct_answer == $data['correct_answer']){
			$user = User::where('name',Auth::user()->username)->first();
			if($check==null)$user->currprobsolv = $user->currprobsolv+1;
			$user->save();
			return redirect('/home')->with('success', 'Anda Benar');
		}
		else return redirect('/home')->with('gagal', 'EXPLANATION  :   '.$question->explanation);
	}
}
