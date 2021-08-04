@extends('layouts.app')
<style>
    .card{
        width: 80%;
        margin: auto;
        padding-bottom: 10px;
        border: 2px solid black!important;
    }

</style>
@section('content')
<div class="container">
    <div class="card">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <!-- <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div> -->
                    <div class="row">
                        <div class="column">
                            <img class="img-person" src="{{asset('storage/person.png')}}">
                        </div>
                        <div class="column">
                            <div class="card-body">
                                <p>Hello, welcome to .....</p>
                                <h1>AMAZON GUESTBOOK<h1>
                                <h3>Let's get Started</h3>
                                <br>
                                <br>
                                <div class="col-md-10 offset-md-4">
                                    <a class="btn btn-common text-white" href="/create-guestbook">Create guestbook</a>
                                    <a class="btn btn-common text-white" href="/sign-guestbook">Sign guestbook</a>
                                </div>
                            </div>
                        </div>   
                    </div>
                    
            </div>
        </div>
    </div>
</div>
@endsection
