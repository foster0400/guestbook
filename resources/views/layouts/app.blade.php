<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
    .btn-outline{
        width: 100px;
        border: 1px solid black;
        color:white;
    }
    .btn-outline:hover{
        border: 1px solid rgba(0,0,0,0.5);
        background: #343a40;
        color: white !important;
    }
    .btn-common{
        background-color: #B1A6A4!important;
        color: #F2F1EF!important;
    }
    .btn-common:hover{
        background-color: #D8CFD0!important;
    }
    .bg-navbar{
        background-color:#B1A6A4;
    }
    .nav-item .nav-link{
        color: #F2F1EF!important;
    }
    .nav-item .nav-link:hover{
        color: black!important;
    }
    .navbar-brand{
        color: #F2F1EF!important;
    }
    .dropdown-menu{
        background-color: #B1A6A4!important;
        border: none;
    }
    .dropdown-item{
        color: #F2F1EF!important;
    }
    input[type="password"]:focus, input[type="search"]:focus, input[type="text"]:focus, input[type="email"]:focus, input[type="password-confirm"]:focus, textarea:focus{
        border-color: #413f3d;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px #413f3d;
        outline : 0 none;
    }

</style>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md bg-navbar navbar-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'AmazonGuestBook') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><span class="fa fa-sign-in-alt"></span> {{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><span class="fas fa-user"></span> {{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="/sign-guestbook"><span class="fa fa-feather-alt" aria-hidden="true"></span> Sign </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/create-guestbook"><span class="fa fa-plus" aria-hidden="true"></span> Create</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/profile"><span class="fas fa-user-circle"></span> {{ ('Profile') }}</a>
                                    <a class="dropdown-item" href="/myguestbook"><span class="fas fa-book"></span> {{ ('My Guestbook') }}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
