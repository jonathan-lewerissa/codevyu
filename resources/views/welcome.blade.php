@extends('layouts.master')

@section('title')
    Welcome
@endsection

@section('content')

    <div class="ui container inverted vertical masthead center aligned segment " style="height: 100vh; width: 100vw;">
        <div class="ui large secondary inverted pointing menu full height">
            <a>
                <img class="logoimg" src="{{ asset('images/logo-codevyu.png') }}">
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
            <a class="ui huge primary button" href="{{ route('get-started.index') }}">Get Started <i class="fa fa-arrow-right"></i></a>
        </div>
    </div>


@endsection