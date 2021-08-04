@extends('layouts.app')
<style>
    .card{
        margin: auto;
        padding-bottom: 20px;
    }
    .card-header{
        background-color: #B1a6a4!important;
    }
</style>
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h3>Create Guestbook</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="/create-guestbook">
                    @csrf
        
                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Event Name') }}</label>
        
                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autofocus>
        
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
                            <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }} "autofocus></textarea>
                        </div>
                    </div>
        
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-common">
                                {{ __('Create') }} 
                            </button>
                        </div>
                    </div>
                </form>
            </div> 
        </div>
        
        
    </div>
@endsection