@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 style="text-align:center">My Guestbook</h3>
        @if(!$events->isEmpty())
            <div class="row">
                <div class="col-sm-2">
                    <strong>Event ID</strong>
                </div>
                <div class="col">
                    <strong>Event Title</strong>
                </div>
            </div>
            @foreach($events as $event)
                <div class="row">
                    <div class="col-sm-2">
                        <strong>{{$event->id}}</strong>
                    </div>
                    <div class="col">
                        <strong>{{$event->title}}</strong>
                    </div>
                </div>
            @endforeach
        @else
            <h5>You have not created any guestbook yet, <a href="/create-guestbook">click here to create one</a></h5>
        @endif
    </div>
@endsection