@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="ui segments">
                    <div class="ui segment">
                        <h1 class="ui header">Create a new opening</h1>
                    </div>
                    <div class="ui secondary segment">
                        <form class="ui form" action="{{route('opening.store')}}" method="post">
                            {{ csrf_field() }}
                            <div class="field">
                                <label>Job Opening Title</label>
                                <input type="text" name="title" required>
                            </div>
                            <div class="field">
                                <label>Job Opening Description</label>
                                <input type="text" name="description" required>
                            </div>
                            <input type="text" hidden name="user_id" value="{{ \Illuminate\Support\Facades\Auth::user()->id }}">
                            <button class="ui button" type="submit">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
