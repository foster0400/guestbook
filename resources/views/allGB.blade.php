@extends('layouts.app')
<style>
    .row{
        margin-left: auto;
        margin-right: auto;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .item{
        border-bottom: 1px solid #B1A6A4;
    }
    .item:hover{
        background-color: rgba(0,0,0,0.1)!important;
    }
    .col-sm-3 .col-sm-5{
        border: 1px solid black;
    }
    a{
        color: #413f3d!important;
    }
    a:hover{
        color: #B1A6A4!important;
    }
    .bg-header{
        background-color: #697184;
    }
    h5 a{
        text-decoration: underline;
    }
    
</style>
@section('content')
<div class="container">
            <div class="card">
                <div class = "card-header text-center bg-card-header">
                    <h3>{{__('My Guestbook')}}</h3>
                </div>
                <div class = "card-body bg-card-body">
                @if(!$events->isEmpty())
                    <div class="row bg-header text-white">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-3 center-block text-center">
                            <h3><strong>Event ID</strong></h3>
                        </div>
                        <div class="col-sm-5 center-block text-center">
                            <h3><strong>Event Title</strong></h3>
                        </div>
                        <div class="col-sm-2"></div>    
                    </div>
                    @foreach($events as $event)
                    <a href="/sign-guestbook?eventId={{$event->id}}">
                        <div class="row item">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-3 center-block text-center">
                                <strong>{{$event->id}}</strong>
                            </div>
                            <div class="col-sm-5 center-block text-center">
                                <strong>{{$event->title}}</strong>
                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                    </a>
                    @endforeach
                @else
                    <h5>You have not created any guestbook yet, <a href="/create-guestbook">click here to create one</a></h5>
                @endif
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