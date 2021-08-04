@extends('layouts.app')
<style>
    .card{
        margin: auto;
        padding-top: 20px;
        padding-bottom: 20px;
    }
    .card-header{
        background-color: #B1a6a4!important;
    }
</style>
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>My Profile</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="/update-profile">
                    @csrf
        
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
        
                        <div class="col-md-6">
                            <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autofocus placeholder="">
        
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
        
                    <div class="form-group row">
                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Main Address') }}</label>
        
                        <div class="col-md-6">
                            <input id="address" type="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{$user->address}}" placeholder=""autofocus>
        
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
        
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-common">
                                {{ __('Update') }} 
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        
        </div>
        
    </div>
@endsection