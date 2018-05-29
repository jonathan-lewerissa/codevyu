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
    if(Auth::check()) {
        return redirect()->route('home');
    }
    return view('welcome');
})->name('welcome');

Route::get('/interview/{id}', 'InterviewController@show')->name('interview_id');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/opening','OpeningController',
    [
        'parameters' => ['user' => 'id']
    ]);

Route::resource('/appointment','AppointmentController');

Route::resource('/get-started','InterestController');