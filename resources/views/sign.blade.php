@extends('layouts.app')

@section('content')
<div class="container">
    <form method="GET" action="/sign-guestbook" class="form-inline my-2" style="width:60%">
        
        <input type="text" name="eventId" value="{{$eventId}}" placeholder="Input event ID" class="form-control mr-sm-2" style="width:85%">
        <button type="submit" class="btn btn-primary my-2 my-sm-0">Search</button>
    </form>
    <div class="row">
        <h5>Created by : {{$event->user->name}}</h5>
    </div>
    <div class="row justify-content-center">
        <h3>{{$event->title}}</h3>
    </div>
</div>
@endsection