@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="ui segments">
                    <div class="ui segment">
                        <h2 class="ui header">List of my openings</h2>
                    </div>
                    @if($all->count())
                    <div class="ui segments">
                        @foreach($all as $opening)
                        <div class="ui segment">
                            <h3 class="ui header">{{ $opening->title }}</h3>
                            <p>{{ $opening->description }}</p>
                            <form action="{{ route('opening.show',['id'=>$opening->id]) }}">
                                {{ csrf_field() }}
                                <button class="ui positive button" type="submit">Who is interested?</button>
                            </form>
                            <form action="{{ route('opening.destroy',['id'=>$opening->id]) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="ui negative button" type="submit">Delete opening</button>
                            </form>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="ui secondary segment">
                        <p>None so far!</p>
                    </div>
                    @endif
                    <form action="{{ route('opening.create') }}">
                        <button class="ui button">Create new opening</button>
                    </form>
                </div>

                <br>
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
