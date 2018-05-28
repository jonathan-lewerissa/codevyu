<?php

namespace App\Http\Controllers;

use App\Opening;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OpeningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $all = User::find($user_id)->opening;
        return view('list',compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Opening  $opening
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $all = Opening::find($id)->interest;
        return view('list2',compact('all'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Opening  $opening
     * @return \Illuminate\Http\Response
     */
    public function edit(Opening $opening)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Opening  $opening
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Opening $opening)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Opening  $opening
     * @return \Illuminate\Http\Response
     */
    public function destroy(Opening $opening)
    {
        //
    }
}
