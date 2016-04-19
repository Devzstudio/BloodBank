<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blood Bank</title>

    <!-- Fonts -->
    <link href="{{ url('css/font-awesome.min.css') }}" rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ url('bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('sweetalert.css')}}" rel="stylesheet">
    <link href="{{ url('custom.css')}}" rel="stylesheet">
    <link href="{{ url('css/hint.min.css')}}" rel="stylesheet">
    <link href="{{ url('bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <style> .nav-style { border-right: 0px; border-left: 0px;border-top: 0px;}</style>
</head>
<body id="app-layout">
    <div class="container border" >
    <nav class="header-nav navbar navbar-default nav-style">
        
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#spark-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                  <img class="logo" src="{{ url('images/logo-new.png') }}">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="spark-navbar-collapse">
                <!-- Left Side Of Navbar -->
                 
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                     <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/donors') }}">Donors</a></li>
                    <li><a href="{{ url('/camp') }}">Camp</a></li>
                    <li><a href="{{ url('/center') }}">Blood Centres</a></li>
                    <li><a href="{{ url('/request-blood') }}">Request Blood</a></li>
                    <li><a href="{{ url('/who-needs-blood') }}">Who needs Blood ?</a></li>
                     <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ ucwords(Auth::user()->name) }} <span class="caret"></span>
                            </a>
                
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/home') }}"><i class="fa fa-btn fa-envelope"></i>Messages</a></li>
                                <li><a href="{{ url('/change-password') }}"><i class="fa fa-btn fa-asterisk"></i>Change Password</a></li>
                                <li><a href="{{ url('/settings') }}"><i class="fa fa-btn fa-cogs"></i>Settings</a></li>
                                   @if (Auth::user()->is_admin == 1)
                               <li><a href="{{ url('/admin') }}"><i class="fa fa-btn fa-user-secret"></i> Admin Panel</a></li>
                            @endif
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                               
                        </li>
                    @endif
                                      <li><a href="{{ url('/support') }}">Contact</a></li>

                </ul>


            </div>
        </div>
    </nav>

<div class="background">

<div class="container content-min">
    @yield('content')
<hr> 
<div class="pull-right footer-nav">
    
        <a href="{{ url('') }}" class="footer-nav-item">Home</a> 
        <a href="{{ url('api') }}" class="footer-nav-item">API</a> 
        <a href="{{ url('support') }}" class="footer-nav-item">Contact</a> 
 </div> 
    </div>

  

    <!-- JavaScripts -->
    <script src="{{ url('jquery.js') }}"></script>
    <script src="{{ url('bootstrap.min.js') }}"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
<script src="{{ url('sweetalert.min.js') }}"></script>
<script src="{{ url('bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ url('custom.js') }}"></script>

@include('Partials.sweetalert')
    @include('flashy::message')
</body>
</html>
