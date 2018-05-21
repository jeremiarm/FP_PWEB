<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validitator;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
    	//dd($request->all());
    	return view('login');
    }

    public function checklogin(Request $request)
    {
    	//dd($request->all());
    	$validate=$request->validate([
    		'username' => 'required',
    		'password' => 'required',
    	]);
    	if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect('/');
        }
        else
        {
        	return back()->with('error','Wrong Login Details');
        }
    }

    public function successlogin(){
    	return view('welcome');
    }

    public function logout(){
    	Auth::logout();
    	return redirect('/login');
    }
}

