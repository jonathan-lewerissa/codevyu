@extends('layouts.master')

@section('title')
    Welcome
@endsection

@section('content')

    <div class="ui container">
        @foreach($openings as $opening)
            <h3 class="ui header">{{ $opening->title }}</h3>
            <h4 class="ui header">{{ $opening->description }}</h4>
            <h5 class="ui header">by: {{ $opening->user->name }}</h5>
            <form class="ui form" action="{{ route('get-started.store') }}" method="post">
                {{ csrf_field() }}
                <div class="field">
                    <label>Full name</label>
                    <input type="text" placeholder="Your name" name="name" required>
                </div>
                <div class="field">
                    <label>Email</label>
                    <input type="email" placeholder="Your email" name="email" required>
                    @if ($errors->has('email'))
                        <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                    @endif
                </div>
                <input hidden name="opening_id" value="{{ $opening->id }}">
                <button class="ui positive button">Apply</button>
            </form>
            <div class="ui divider"></div>
        @endforeach
    </div>

@endsection
 




