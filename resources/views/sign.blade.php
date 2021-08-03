@extends('layouts.app')

@section('content')

@if($message)
    <script>alert("wrong input id")</script>;
@endif

<div class="container">
    <form method="GET" action="/sign-guestbook" class="form-inline my-2" style="width:60%">
        
        <input type="text" name="eventId" value="{{$eventId}}" placeholder="Input event ID" class="form-control mr-sm-2" style="width:85%">
        <button type="submit" class="btn btn-primary my-2 my-sm-0">Search</button>
    </form>
    
    @if($event)
        <!-- <div class="row"> -->
            <h5>Created by : {{$event->user->name}}</h5>
        <!-- </div> -->
        <div class="row justify-content-center">
            <h3>{{$event->title}}</h3>
        </div>
        <div class="row justify-content-center">
            <h5>{{$event->description}}</h3>
        </div>

        @if($acceptance)
            <form method="POST" action="/sign-guestbook" class="form-inline my-2 justify-content-between">
                @csrf
                <!-- The value will be changed later !!! -->
                <input type="text" class="form-control col-md-3" value="{{$user->name}}" readonly>
                <input type="text" class="form-control col-md-4" name="address" value="{{$user->address}}" placeholder ="Address">
                <input type="text" class="form-control col-md-4" name="message" value="" placeholder="Message">
                <button type="submit" class="btn btn-primary my-2 my-sm-0"><span class="fas fa-check"></span></button>
                <input type="hidden" name="eventId" value={{$eventId}}>
            </form>
        @else
            <div class="row justify-content-center">
                <h3>Sorry, The event is currently not accepting any sign</h3>
            </div>
        @endif
    @else 
        <div class="row justify-content-center">
            <h3>Your inputted event ID can't be found, try another event ID!</h3>

        </div>
        
    @endif
</div>
@endsection