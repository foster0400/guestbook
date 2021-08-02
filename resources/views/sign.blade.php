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
        <div class="row">
            <h5>Created by : {{$event->user->name}}</h5>
        </div>
        <div class="row justify-content-center">
            <h3>{{$event->title}}</h3>
        </div>

        @if($acceptance)
            <form method="POST" action="/sign-guestbook" class="form-inline my-2 justify-content-between">
                @csrf
                <!-- The value will be changed later !!! -->
                <input type="text" class="form-control col-md-3" value=" AMSDMASK AKSDKAK HACIALLALAL PERKITWIIWWI" readonly>
                <input type="text" class="form-control col-md-4" name="address" value="Jl. Abdul Rozak no 120 Palembang ilirilir" placeholder ="Address">
                <input type="text" class="form-control col-md-4" name="message" value="Semoga dihari yang berbahagia ini dapat selalu berbahagia huahauhauhauhaua">
                <button type="submit" class="btn btn-primary my-2 my-sm-0"><span class="fas fa-check"></span></button>
                <input type="hidden" name="eventId" value={{$eventId}}>
            </form>
        @else
            <div class="row justify-content-center">
                <h3>Sorry, The event is currently not accepting any sign</h3>
            </div>
        @endif
        
    @endif
</div>
@endsection