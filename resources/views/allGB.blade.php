@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>My Guestbook</h3>
        <div class="row">
            <div class="col">
                <strong>Event ID</strong>
            </div>
            <div class="col">
                <strong>Event Title</strong>
            </div>
        </div>
        @foreach($events as $event)
            <div class="row">
                <div class="col">
                    <strong>$event->id</strong>
                </div>
                <div class="col">
                    <strong>$event->title</strong>
                </div>
            </div>
        @endforeach

    </div>
@endsection