@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 style="text-align:center; padding-bottom:50px;padding-top:50px">My Guestbook</h3>
        @if(!$events->isEmpty())
            <div class="row justify-content-center">
                <div class="col-sm-3 center-block text-center">
                    <strong>Event ID</strong>
                </div>
                <div class="col-sm-5 center-block text-center">
                    <strong>Event Title</strong>
                </div>
            </div>
            @foreach($events as $event)
                <div class="row justify-content-center">
                    <div class="col-sm-3 center-block text-center">
                        <strong>{{$event->id}}</strong>
                    </div>
                    <div class="col-sm-5 center-block text-center">
                        <strong>{{$event->title}}</strong>
                    </div>
                </div>
            @endforeach
        @else
            <h5>You have not created any guestbook yet, <a href="/create-guestbook">click here to create one</a></h5>
        @endif
    </div>
@endsection