<?php

namespace App\Http\Controllers;

use App\Interview;
use Illuminate\Http\Request;

class InterviewController extends Controller
{
     $role;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       

        $interview = Interview::all();
        if ($role == 1){
            return view('admin.interview.index', compact('interview'));    
        }
        else {
            return view('user.interview.index', compact('interview'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         if ($role == 1){
            return view('admin.interview.create', compact('interview'));    
        }
        else {
            return view('user.interview.create', compact('interview'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $request->validate(
            [

            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        if ($role == 1){
            $interview = Interview::where('id', $id)->first();
            return view ('admin.interview.show',compact('interview'));
        }
        else {
            $interview = Interview::where('id', $id)->first();
            return view('user.interview.show', compact('interview'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function edit(Interview $interview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Interview $interview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function destroy(Interview $interview)
    {
        //
    }
}
