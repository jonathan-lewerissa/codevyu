<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Interest;
use App\Interview;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointment = Appointment::all();
        return view('admin.appointment.index',compact('appointment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.appointment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $request->validate(
//            [
//
//            ]
//        );

        $store = new Appointment();
        $interest = Interest::find($request->interest_id);
        $store->interest_id = $request->interest_id;
        $store->opening_id = $interest->opening->id;
        $store->user_id = $interest->opening->user->id;
        $store->schedule = Carbon::parse($request->date.' '.$request->time);
        $store->save();

        $interview = new Interview();
        $interview->appointment_id = $interest->appointment->id;
        $interview->room_id = str_random(16);
        $interview->save();

        $position = $interest->opening->title;
        $time = Carbon::parse($request->date.' '.$request->time);

//        Mail::to($request->email)->send('appointment_mail',compact('position','time',))
//        Jangan lupa buat kirim email!
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appointment = Appointment::where('id',$id)->first();
        return view('admin.appointment.show',compact('appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Appointment::where('id',$id)->delete();
        return back();
    }
}
