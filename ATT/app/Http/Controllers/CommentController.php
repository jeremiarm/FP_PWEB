<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\comment;

class CommentController extends Controller
{
    public function view(){
    	$liat = comment::all()->sortBy('created_at');
    	#dd($liat);
    	return view('discussion',compact('liat'));
    }

    public function comment(Request $request){
    	if(Auth::check()){
    		$input = new comment();
    		$data = $this->validate($request, [
			'komentar'=>'required',
			]);
    		$input->komentar=$data['komentar'];
    		$input->username=Auth::user()->username;
    		$input->save();
    		return redirect('/discussion')->with('success', 'Comment Inserted');
    	}
    	else return redirect('/discussion')->with('gagal','Mohon Login');
    }
}
