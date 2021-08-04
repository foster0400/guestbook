@extends('layouts.app')

@section('content')
<div class="container">
    <div class = "row justify-content-center">
        <div class = "col-md">
            <div class="card">
                <div class = "card-header">{{__('My Guestbook')}}</div>
                <div class = "card-body bg-white">
                @if(!$events->isEmpty())
                    <div class="row justify-content-center">
                        <div class="col-sm-3 center-block text-center"style="border:1px solid black">
                            <strong>Event ID</strong>
                        </div>
                        <div class="col-sm-5 center-block text-center"style="border:1px solid black">
                            <strong>Event Title</strong>
                        </div>
                    </div>
                    @foreach($events as $event)
                        <div class="row justify-content-center">
                            <div class="col-sm-3"style="border:1px solid black">
                                <strong>{{$event->id}}</strong>
                            </div>
                            <div class="col-sm-5"style="border:1px solid black">
                                <strong>{{$event->title}}</strong>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h5>You have not created any guestbook yet, <a href="/create-guestbook">click here to create one</a></h5>
                @endif
                </div>
            </div>
        </div>
    </div>

</div>
    <!-- <div class="container">
        <h3 style="text-align:center; padding-bottom:25px;padding-top:25px">My Guestbook</h3>
        @if(!$events->isEmpty())
            <div class="row justify-content-center">
                <div class="col-sm-3 center-block text-center"style="border:1px solid black">
                    <strong>Event ID</strong>
                </div>
                <div class="col-sm-5 center-block text-center"style="border:1px solid black">
                    <strong>Event Title</strong>
                </div>
            </div>
            @foreach($events as $event)
                <div class="row justify-content-center">
                    <div class="col-sm-3"style="border:1px solid black">
                        <strong>{{$event->id}}</strong>
                    </div>
                    <div class="col-sm-5"style="border:1px solid black">
                        <strong>{{$event->title}}</strong>
                    </div>
                </div>
            @endforeach
        @else
            <h5>You have not created any guestbook yet, <a href="/create-guestbook">click here to create one</a></h5>
        @endif
    </div> -->
@endsection