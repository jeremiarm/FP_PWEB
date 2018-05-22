<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validitator;
use Auth;
use App\Model\User;


class RegisterController extends Controller
{
    public function store(){
    	$user = new User;
    	$user->username="abcdefg";
    	$user->password=bcrypt("abcd");
    	$user->email="jeremia5@gmail.com";
    	$user->name="Jeremia";
    	$user->save();
    }
}
