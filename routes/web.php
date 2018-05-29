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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/interview', function(){
	return view('interview');
});

Route::get('/appoint', function(){
	return view('appoint');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/opening','OpeningController',
    [
        'parameters' => ['user' => 'id']
    ]);

Route::resource('/appointment','AppointmentController');

Route::resource('/get-started','InterestController');

Route::get('/send', function (){
   $email = "veaca13@gmail.com";
   \Illuminate\Support\Facades\Mail::to($email)->send(new \App\Mail\AppointmentMail());
   return view('home');
});