@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> -->
                <p>Hello, welcome to .....</p>
                <h3>Let's get Started</h3>
                <div class="col-md-8 offset-md-4">
                    <a class="btn bg-dark text-white" href="/create-guestbook">Create guestbook</a>
                    <a class="btn bg-dark text-white" href="/sign-guestbook">Sign guestbook</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
