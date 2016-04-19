<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Admin Panel</title>

    <!-- Fonts -->
    <link href="{{ url('css/font-awesome.min.css') }}" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ url('bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('sweetalert.css')}}" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        .border-fix { border-radius: 0px; }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-inverse border-fix">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#spark-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/admin') }}">
                    Admin Panel
                </a>
            </div>

            <div class="collapse navbar-collapse" id="spark-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Frontend</a></li>

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/admin') }}">Users</a></li>
                    <li><a href="{{ url('/admin/center') }}">Blood Centers</a></li>
                    <li><a href="{{ url('/admin/camps') }}">Camps</a></li>
                    <li><a href="{{ url('/admin/support') }}">Support</a></li>

                    
                </ul>
            </div>
        </div>
    </nav>

<div class="container">
    @yield('content')
</div>
    <!-- JavaScripts -->
    <script src="{{ url('jquery.js') }}"></script>
    <script src="{{ url('bootstrap.min.js') }}"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
<script src="{{ url('sweetalert.min.js') }}"></script>

@include('Partials.sweetalert')
    @include('flashy::message')
</body>
</html>
