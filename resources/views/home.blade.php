@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            <div class="ui segments">
                <div class="ui segment">
                    <h1 class="ui header">Your appointments</h1>
                </div>
                @if($appointments->count())
                    <div class="ui segments">
                        @foreach($appointments as $appointment)
                            <div class="ui segment">
                                <h2 class="ui header">{{ $appointment->interest->name  }}</h2>
                                <p>applied for: {{ $appointment->opening->title }}</p>
                                <p>Interview on: {{ \Carbon\Carbon::parse($appointment->schedule)->format('l jS \\of F Y h:i:s A') }}</p>
                                <a href="{{ route('interview_id',['id'=>$appointment->interview->room_id]) }}" class="ui positive button">Interview now</a>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="ui secondary segment">
                        <p>No appointments so far!</p>
                    </div>
                @endif
            </div>
            <button class="ui secondary button" onclick="location.href='interview'">
                Go to Interview
            </button>
            <button class="ui button" onclick="location.href='appoint'">
                Make an Appointment
            </button>
            <form action="{{ route('opening.index') }}" method="get">
                {{ csrf_field() }}
                <button type="submit" class="ui button">View Openings</button>
            </form>
        </div>
    </div>
</div>
@endsection
