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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/interview', function(){
	return view('interview');
});

Route::get('/appoint', function(){
	return view('appoint');
});

Route::resource('/interview','InterestController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/send', function (){
   $email = "veaca13@gmail.com";
   \Illuminate\Support\Facades\Mail::to($email)->send(new \App\Mail\AppointmentMail());
   return view('home');
});