@extends('layouts.app')

@section('content')
<div class="container-box">
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
                <div class="box-content">
                <p>Hello, welcome to .....</p>
                <h1>AMAZON GUESTBOOK<h1>
                <h3>Let's get Started</h3>
                <br>
                <br>
                <div class="col-md-8 offset-md-4">
                    <a class="btn btn-common text-white" href="/create-guestbook">Create guestbook</a>
                    <a class="btn btn-common text-white" href="/sign-guestbook">Sign guestbook</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
