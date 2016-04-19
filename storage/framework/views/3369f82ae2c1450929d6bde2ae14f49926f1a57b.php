<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blood Bank</title>

    <!-- Fonts -->
    <link href="<?php echo e(url('css/font-awesome.min.css')); ?>" rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="<?php echo e(url('bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('sweetalert.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('custom.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('css/hint.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('bootstrap-datetimepicker.min.css')); ?>" rel="stylesheet">
    <?php /* <link href="<?php echo e(elixir('css/app.css')); ?>" rel="stylesheet"> */ ?>
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
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                  <img class="logo" src="<?php echo e(url('images/logo-new.png')); ?>">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="spark-navbar-collapse">
                <!-- Left Side Of Navbar -->
                 
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                     <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                    <li><a href="<?php echo e(url('/donors')); ?>">Donors</a></li>
                    <li><a href="<?php echo e(url('/camp')); ?>">Camp</a></li>
                    <li><a href="<?php echo e(url('/center')); ?>">Blood Centres</a></li>
                    <li><a href="<?php echo e(url('/request-blood')); ?>">Request Blood</a></li>
                    <li><a href="<?php echo e(url('/who-needs-blood')); ?>">Who needs Blood ?</a></li>
                     <!-- Authentication Links -->
                    <?php if(Auth::guest()): ?>
                        <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                        <li><a href="<?php echo e(url('/register')); ?>">Register</a></li>
                    <?php else: ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <?php echo e(ucwords(Auth::user()->name)); ?> <span class="caret"></span>
                            </a>
                
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo e(url('/home')); ?>"><i class="fa fa-btn fa-envelope"></i>Messages</a></li>
                                <li><a href="<?php echo e(url('/change-password')); ?>"><i class="fa fa-btn fa-asterisk"></i>Change Password</a></li>
                                <li><a href="<?php echo e(url('/settings')); ?>"><i class="fa fa-btn fa-cogs"></i>Settings</a></li>
                                   <?php if(Auth::user()->is_admin == 1): ?>
                               <li><a href="<?php echo e(url('/admin')); ?>"><i class="fa fa-btn fa-user-secret"></i> Admin Panel</a></li>
                            <?php endif; ?>
                                <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                               
                        </li>
                    <?php endif; ?>
                                      <li><a href="<?php echo e(url('/support')); ?>">Contact</a></li>

                </ul>


            </div>
        </div>
    </nav>

<div class="background">

<div class="container content-min">
    <?php echo $__env->yieldContent('content'); ?>
<hr> 
<div class="pull-right footer-nav">
    
        <a href="<?php echo e(url('')); ?>" class="footer-nav-item">Home</a> 
        <a href="<?php echo e(url('api')); ?>" class="footer-nav-item">API</a> 
        <a href="<?php echo e(url('support')); ?>" class="footer-nav-item">Contact</a> 
 </div> 
    </div>

  

    <!-- JavaScripts -->
    <script src="<?php echo e(url('jquery.js')); ?>"></script>
    <script src="<?php echo e(url('bootstrap.min.js')); ?>"></script>
    <?php /* <script src="<?php echo e(elixir('js/app.js')); ?>"></script> */ ?>
<script src="<?php echo e(url('sweetalert.min.js')); ?>"></script>
<script src="<?php echo e(url('bootstrap-datetimepicker.min.js')); ?>"></script>
<script src="<?php echo e(url('custom.js')); ?>"></script>

<?php echo $__env->make('Partials.sweetalert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('flashy::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>
