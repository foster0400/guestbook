@extends('layouts.app')
<style>
    .card{
        width: 100%;
        margin: auto;
        padding: 5%;
        border: 2px solid black!important;
    }
    .col-sm-3 img{
        max-width:auto;
        max-height:fit-content;
    }  
    .row-man{
        display: flex;
        flex-direction: row;
        margin: auto;
        width: fit-content;
        justify-content: space-around;
    }
    .col-btn{
        margin:10px;
    }
    .col-man-40{
        display: flex;
        direction: column;
        width: 40%;
    }
    .col-man-45{
        display: flex;
        direction: column;
        width: 45%;
    }
    .col-btn a{
        font-size: 1.5vw;
    }
    h1{
        text-align: center;
    }

</style>
@section('content')
<div class="container">
    <div class="card">
        <div class="row-man">
            <div class="col-man-40">
                <img class="img-person" src="{{asset('storage/person.png')}}">
            </div>
            <div>
                <div class="row-man"><h3 style="font-size:2vw;">Hello, welcome to .....</h3></div>
                <div class="row-man"><h1 style="font-size:4vw;">AWS GUESTBOOK<h1></div>
                <div class="row-man"><h3 style="font-size:2vw;">Let's get Started</h3></div>
                <div class="row-man">
                    <div class="col-btn">
                        <a class="btn btn-common text-white" href="/create-guestbook">Create guestbook</a>
                    </div>
                    <div class="col-btn">
                        <a class="btn btn-common text-white" href="/sign-guestbook">Sign guestbook</a>
                    </div>
                </div>
                
            </div>   
                    
                    
            
        </div>
    </div>
</div>
@endsection
