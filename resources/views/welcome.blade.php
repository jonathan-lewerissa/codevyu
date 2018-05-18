@extends('layouts.master')

@section('title')
        Welcome
@endsection

@section('content')
    	<div class="ui inverted vertical masthead center aligned segment">

    <div class="ui container inverted vertical masthead center aligned segment ">
      <div class="ui large secondary inverted pointing menu full height">
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
        
        <div class="right item">
          <a class="ui inverted button" href="{{ route('login') }}">Log in</a>
          <a class="ui inverted button" href="{{ route('register') }}">Sign Up</a>
        </div>
      </div>
      <div class="ui text container">
      <h1 class="ui inverted header">
        Welcome to Codevyu
      </h1>
      <div class="ui huge primary button">Get Started <i class="right arrow icon"></i></div>
    </div>
    </div>

    
@endsection
 




