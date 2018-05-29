@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="ui segments">
                    <div class="ui segment">
                        <h2 class="ui header">List of interests for {{ $opening->title }}</h2>
                    </div>
                    @if($all->count())
                    <div class="ui segments">
                        @foreach($all as $interest)
                        <div class="ui segment">
                            <h3 class="ui header">{{ $interest->name }}</h3>
                            <p>{{ $interest->email }}</p>
                            @if($interest->appointment == null)
                                {{-- make appointment --}}
                                <form action="{{ route('appointment.store') }}" class="ui form" method="post">
                                    {{ csrf_field() }}
                                    <div class="field">
                                        <label>Interview date</label>
                                        <input type="date" name="date" required>
                                    </div>
                                    <div class="field">
                                        <label>Interview time</label>
                                        <input type="time" name="time" required>
                                    </div>
                                    <input type="number" value="{{ $interest->id }}" name="interest_id" hidden readonly>
                                    <button class="ui positive button" type="submit">Make appointment</button>
                                </form>
                            @else
                                {{-- status sudah acc --}}
                                <h5 class="ui heading">Sudah ada appointment</h5>
                            @endif
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="ui secondary segment">
                        <p>None so far!</p>
                    </div>
                    @endif
                </div>
                <button class="ui secondary button" onclick="location.href='interview'">
                    Go to Interview
                </button>
                <button class="ui button" onclick="location.href='appoint'">
                    Make an Appointment
                </button>
            </div>
        </div>
    </div>
@endsection
