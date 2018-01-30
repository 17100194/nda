<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'National Design Awards')); ?></title>

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('stylesheets/bootstrap.css')); ?>" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('stylesheets/style.css')); ?>">

    <!-- DropZone Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('stylesheets/dropzone.css')); ?>">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('stylesheets/responsive.css')); ?>">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('stylesheets/colors/color5.css')); ?>" id="colors">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('stylesheets/animate.css')); ?>">

    <!--[if lt IE 9]>
    <script src="<?php echo e(asset('javascript/html5shiv.js')); ?>"></script>
    <script src="<?php echo e(asset('javascript/respond.min.js')); ?>"></script>
    <![endif]-->
</head>
<body>

<!-- Boxed -->
<div class="">
    <!-- Header Sidebar -->
    <section class="flat-row site-headerbar">
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="border-right: 2px solid red;">
                    <div class="header-sidebar">
                        <div class="wrapper">
                            <div id="logo" class="logo margin-bottom-10 clearfix">
                                <div class="logo-left">
                                    <a href="<?php echo e(url('/dashboard')); ?>" rel="home" title="National Design Awards">
                                        <img src="<?php echo e(asset('images/logo.png')); ?>" alt="NDA Logo" width="200">
                                    </a>
                                </div>
                                <div class="btn-menu">
                                    <i class="ti-align-right"></i>
                                </div><!-- //mobile menu button -->
                            </div><!-- /.logo -->
                            <div  class="nav-wrap margin-bottom-10">
                                <nav id="mainnav" class="mainnav">
                                    <ul class="menu">
                                        <li class="home">
                                            <a href="<?php echo e(url('/dashboard')); ?>">Dashboard</a>
                                        </li>
                                        <li><a href="#">About</a>
                                        </li>
                                        <li><a href="#">Portfolio</a>
                                        </li>
                                        <li><a href="#">Blog</a>
                                        </li>
                                        <li><a href="#">Contact</a></li>
                                    </ul><!-- /.menu -->
                                </nav><!-- /.mainnav -->
                            </div>
                            <div class="wrap-header-bottom">
                                <div class="flat-socials">
                                    <a href="#"><i class="ti-dribbble"></i><i class="ti-dribbble"></i></a>
                                    <a href="#"><i class="ti-twitter"></i><i class="ti-twitter"></i></a>
                                    <a href="#"><i class="ti-skype"></i><i class="ti-skype"></i></a>
                                </div>
                                <p class="copy-right">Copyright @2018  National Design Awards</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Go Top -->
    <a class="go-top">
        <i class="ti-angle-up"></i>
    </a>
</div>

<!-- Javascript -->
<script type="text/javascript" src="<?php echo e(asset('javascript/jquery.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('javascript/dropzone.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('javascript/loadingoverlay.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('javascript/bootstrap.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('javascript/jquery.easing.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('javascript/jquery-validate.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('javascript/jquery.fancybox.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('javascript/jquery-waypoints.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('javascript/imagesloaded.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('javascript/owl.carousel.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('javascript/jquery.cookie.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('javascript/jquery.isotope.min.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('javascript/parallax.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('javascript/jquery.magnific-popup.min.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('javascript/main.js')); ?>"></script>
</body>
</html>