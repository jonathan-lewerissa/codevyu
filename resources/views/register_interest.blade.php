@extends('layouts.master')

@section('title')
    Welcome
@endsection

@section('content')

    <div class="ui container inverted vertical masthead center aligned segment ">
        <div class="ui large secondary inverted pointing menu full height">
            <a class="toc item">
                <i class="sidebar icon"></i>
            </a>

            <div class="right item">
                <a class="ui button" href="{{ route('login') }}">Log in</a>
                <a class="ui button" href="{{ route('register') }}">Sign Up</a>
            </div>
        </div>
        <div class="ui text container">
            <h1 class="ui inverted header">
                Welcome to Codevyu
            </h1>
            <div class="ui huge primary button">Get Started <i class="right arrow icon"></i></div>
        </div>
    </div>
    <form class="ui form">
        <div class="field">
            <label>Full name</label>
            <input type="text" placeholder="Your name" name="name">
        </div>
        <div class="field">
            <label>Email</label>
            <input type="email" placeholder="Your email" name="email">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="field">
            <label>Job opening</label>
        </div>
    </form>

@endsection
 




