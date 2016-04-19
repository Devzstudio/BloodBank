<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <title>Admin Panel</title>

    <!-- Fonts -->
    <link href="<?php echo e(url('css/font-awesome.min.css')); ?>" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="<?php echo e(url('bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('sweetalert.css')); ?>" rel="stylesheet">
    <?php /* <link href="<?php echo e(elixir('css/app.css')); ?>" rel="stylesheet"> */ ?>

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
                <a class="navbar-brand" href="<?php echo e(url('/admin')); ?>">
                    Admin Panel
                </a>
            </div>

            <div class="collapse navbar-collapse" id="spark-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo e(url('/')); ?>">Frontend</a></li>

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo e(url('/admin')); ?>">Users</a></li>
                    <li><a href="<?php echo e(url('/admin/center')); ?>">Blood Centers</a></li>
                    <li><a href="<?php echo e(url('/admin/camps')); ?>">Camps</a></li>
                    <li><a href="<?php echo e(url('/admin/support')); ?>">Support</a></li>

                    
                </ul>
            </div>
        </div>
    </nav>

<div class="container">
    <?php echo $__env->yieldContent('content'); ?>
</div>
    <!-- JavaScripts -->
    <script src="<?php echo e(url('jquery.js')); ?>"></script>
    <script src="<?php echo e(url('bootstrap.min.js')); ?>"></script>
    <?php /* <script src="<?php echo e(elixir('js/app.js')); ?>"></script> */ ?>
<script src="<?php echo e(url('sweetalert.min.js')); ?>"></script>

<?php echo $__env->make('Partials.sweetalert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('flashy::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>
