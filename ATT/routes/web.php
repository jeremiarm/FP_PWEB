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
    return App\Model\User::all();
});

Route::get('/testing','RegisterController@store');

Route::get('/login', 'LoginController@index');
Route::post('/login/checklogin', 'LoginController@checklogin');
Route::get('/login/successlogin', 'LoginController@successlogin');
Route::get('/login/logout', 'LoginController@logout');
