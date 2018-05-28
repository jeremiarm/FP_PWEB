<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

//Auth::routes();
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');



// Create Questions Routes..
Route::get('/create','QuestionController@create');
Route::post('/create','QuestionController@store');

// Pick And Answer Questions Routes...
Route::get('/pick','AnswerController@pick');
Route::get('/answer/{id}', ['uses' =>'AnswerController@take' ,'as' => 'choice']);
Route::post('/answer/{id}', ['uses' =>'AnswerController@chosen' ,'as' => 'answer']);

// View and post comment
Route::get('/discussion','CommentController@view');
Route::post('/discussion','CommentController@comment');

Route::get('/home', 'HomeController@index')->name('home');
