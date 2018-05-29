<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Opening;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_user = Auth::user()->id;
        $appointments = Appointment::where('user_id',$current_user)->get();
        return view('home',compact('appointments'));
    }
}
