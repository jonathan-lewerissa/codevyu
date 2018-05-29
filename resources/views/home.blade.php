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
