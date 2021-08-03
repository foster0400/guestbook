@extends('layouts.app')

@section('content')

@if($message)
    <script>alert("wrong input id")</script>;
    <div class="row justify-content-center">
        <h3>Your inputted event ID can't be found, try another event ID!</h3>
    </div>
@endif

<div class="container">
    <form method="GET" action="/sign-guestbook" class="form-inline my-2 row justify-content-center" style="width:60%">
        
        <input type="search" name="eventId" value="{{$eventId}}" placeholder="Input event ID" class="form-control mr-sm-2" style="width:85%">
        <button type="submit" class="btn btn-common my-2 my-sm-0">Search</button>
    </form>
    
    @if($event)
        <h5>Created by : {{$event->user->name}}</h5>
        @if($isCreator)
            <form method="POST" action="/update-guestbook">
                @csrf
                <input type="hidden" name="eventId" value="{{$event->id}}">
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Event Name') }}</label>

                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$event->title}}" required autofocus>

                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                    <div class="col-md-6">
                        <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="" autofocus>{{$event->description}}</textarea>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Update') }} 
                        </button>
                    </div>
                </div>
            </form>

        @else
            <div class="row justify-content-center">
                <h3>{{$event->title}}</h3>
            </div>
            <div class="row justify-content-center">
                <h5>{{$event->description}}</h3>
            </div>
            @if($isSigned)
                <input type="text" class="form-control col-md-3" value="{{$user->name}}" readonly>
                <input type="text" class="form-control col-md-4" name="address" value="{{$exist->address}}" readonly>
                <input type="text" class="form-control col-md-4" name="message" value="{{$exist->message}}" readonly>

            @if($acceptance)
                @if($isSigned)
                @else
                    <form method="POST" action="/sign-guestbook" class="form-inline my-2 justify-content-between">
                        @csrf
                        <!-- The value will be changed later !!! -->
                        <input type="text" class="form-control col-md-3" value="{{$user->name}}" readonly>
                        <input type="text" class="form-control col-md-4 @error('address') is-invalid @enderror" name="address" value="{{$user->address}}" placeholder ="Address">

                        
                        <input type="text" class="form-control col-md-4 @error('message') is-invalid @enderror" name="message" value="" placeholder="Message">
                        <button type="submit" class="btn btn-primary my-2 my-sm-0"><span class="fas fa-check"></span></button>
                        <input type="hidden" name="eventId" value={{$eventId}}>
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>*{{ $message }}</strong>
                            </span>
                        @enderror
                        @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>*{{ $message }}</strong>
                            </span>
                        @enderror
                    </form>
                @endif
            @else
                <div class="row justify-content-center">
                    <h3>Sorry, The event is currently not accepting any sign</h3>
                </div>
            @endif 
        @endif
    @endif
</div>
@endsection