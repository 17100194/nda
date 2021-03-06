<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Fahad Cheema">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="National Design Awards Pakistan">
    <meta property="og:image" content="{{asset('images/logo.png')}}">
    <meta property="og:url" content="www.ndapakistan.com">
    <meta property="og:description" content="The awards program aims to increase awareness of the impact of design by drawing attention to ways in which design enriches everyday life.">
    <meta property="twitter:title" content="National Design Awards Pakistan">
    <meta property="twitter:image" content="{{asset('images/logo.png')}}">
    <meta name="twitter:site" content="www.ndapakistan.com">
    <meta property="twitter:description" content="The awards program aims to increase awareness of the impact of design by drawing attention to ways in which design enriches everyday life.">
    <meta name="description" content="The annual awards program aims to celebrate design as a vital humanistic tool in shaping the world, and seeks to increase national awareness of the impact of design by drawing national attention to the ways in which design enriches everyday life. The Awards are organized for the recognition of excellence, innovation, and enhancement of the quality of life. They will be launched for the first time at the UXPakistan Conference in 2018 as an official project of UXPakistan in collaboration with NIC.">

    <link href="{{asset('icon/favicon.png')}}" rel="shortcut icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'National Design Awards Pakistan') }}</title>

    <link href="{{asset('admin/assets/global/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/global/css/theme.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/global/css/ui.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/admin/layout2/css/layout.css')}}" rel="stylesheet">

    <!-- BEGIN PAGE STYLE -->
    <link href="{{asset('admin/assets/global/plugins/magnific/magnific-popup.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/global/plugins/hover-effects/hover-effects.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/global/plugins/metrojs/metrojs.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/global/plugins/maps-amcharts/ammap/ammap.css')}}" rel="stylesheet">

    <!-- iziToast Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('stylesheets/iziToast.min.css')}}">

    <!-- END PAGE STYLE -->
    <script src="{{asset('admin/assets/global/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
</head>
<!-- LAYOUT: Apply "submenu-hover" class to body element to have sidebar submenu show on mouse hover -->
<!-- LAYOUT: Apply "sidebar-collapsed" class to body element to have collapsed sidebar -->
<!-- LAYOUT: Apply "sidebar-top" class to body element to have sidebar on top of the page -->
<!-- LAYOUT: Apply "sidebar-hover" class to body element to show sidebar only when your mouse is on left / right corner -->
<!-- LAYOUT: Apply "submenu-hover" class to body element to show sidebar submenu on mouse hover -->
<!-- LAYOUT: Apply "fixed-sidebar" class to body to have fixed sidebar -->
<!-- LAYOUT: Apply "fixed-topbar" class to body to have fixed topbar -->
<!-- LAYOUT: Apply "rtl" class to body to put the sidebar on the right side -->
<!-- LAYOUT: Apply "boxed" class to body to have your page with 1200px max width -->

<!-- THEME STYLE: Apply "theme-sdtl" for Sidebar Dark / Topbar Light -->
<!-- THEME STYLE: Apply  "theme sdtd" for Sidebar Dark / Topbar Dark -->
<!-- THEME STYLE: Apply "theme sltd" for Sidebar Light / Topbar Dark -->
<!-- THEME STYLE: Apply "theme sltl" for Sidebar Light / Topbar Light -->

<!-- THEME COLOR: Apply "color-default" for dark color: #2B2E33 -->
<!-- THEME COLOR: Apply "color-primary" for primary color: #319DB5 -->
<!-- THEME COLOR: Apply "color-red" for red color: #C9625F -->
<!-- THEME COLOR: Apply "color-green" for green color: #18A689 -->
<!-- THEME COLOR: Apply "color-orange" for orange color: #B66D39 -->
<!-- THEME COLOR: Apply "color-purple" for purple color: #6E62B5 -->
<!-- THEME COLOR: Apply "color-blue" for blue color: #4A89DC -->
<!-- BEGIN BODY -->
<body class="sidebar-condensed fixed-topbar fixed-sidebar theme-sdtl color-default dashboard">
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<section>
    <!-- BEGIN SIDEBAR -->
    <div class="sidebar">
        <div class="logopanel">
            <h1>
                <a href="{{url('nda-admin')}}" style="color: white; background: none;">NDA <small>admin panel</small></a>
            </h1>
        </div>
        <div class="sidebar-inner">
            <ul class="nav nav-sidebar">
                <li class="nav-active <?php if(request()->is('nda-admin')):?>active<?php endif?>"><a href="{{url('nda-admin')}}"><i class="icon-users"></i><span>Users</span></a></li>
                <li class="nav-active <?php if(strpos(request()->url(),'nda-admin/submissions')):?>active<?php endif?>"><a href="{{url('nda-admin/submissions')}}"><i class="fa fa-file"></i><span>Submissions</span></a></li>
            </ul>
        </div>
    </div>
    <!-- END SIDEBAR -->
    <div class="main-content">
        <!-- BEGIN TOPBAR -->
        <div class="topbar">
            <div class="header-left">
                <div class="topnav">
                    <a class="menutoggle" href="#" data-toggle="sidebar-collapsed"><span class="menu__handle"><span>Menu</span></span></a>
                </div>
            </div>
            <div class="header-right">
                <ul class="header-menu nav navbar-nav">
                    <!-- BEGIN USER DROPDOWN -->
                    <li class="dropdown" id="user-header">
                        <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <span class="username">Hi, {{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{url('/')}}"><i class="icon-home"></i><span>Visit Site</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-user"></i><span>My Profile</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-settings"></i><span>Account Settings</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-logout"></i><span>Logout</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER DROPDOWN -->
                </ul>
            </div>
            <!-- header-right -->
        </div>
        <!-- END TOPBAR -->
        @yield('content')
    </div>
    <!-- END MAIN CONTENT -->
</section>
<!-- BEGIN PRELOADER -->
<div class="loader-overlay">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- END PRELOADER -->
<a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
<script src="{{asset('admin/assets/global/plugins/jquery/jquery-3.1.0.min.js')}}"></script>
<script src="{{asset('admin/assets/global/plugins/jquery/jquery-migrate-3.0.0.min.js')}}"></script>
<script src="{{asset('admin/assets/global/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/loadingoverlay.min.js')}}"></script>
<script src="{{asset('admin/assets/global/plugins/gsap/main-gsap.min.js')}}"></script>
<script src="{{asset('admin/assets/global/plugins/tether/js/tether.min.js')}}"></script>
<script src="{{asset('admin/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/global/plugins/appear/jquery.appear.js')}}"></script>
<script src="{{asset('admin/assets/global/plugins/jquery-cookies/jquery.cookies.min.js')}}"></script> <!-- Jquery Cookies, for theme -->
<script src="{{asset('admin/assets/global/plugins/jquery-block-ui/jquery.blockUI.min.js')}}"></script> <!-- simulate synchronous behavior when using AJAX -->
<script src="{{asset('admin/assets/global/plugins/bootbox/bootbox.min.js')}}"></script> <!-- Modal with Validation -->
<script src="{{asset('admin/assets/global/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script> <!-- Custom Scrollbar sidebar -->
<script src="{{asset('admin/assets/global/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js')}}"></script> <!-- Show Dropdown on Mouseover -->
<script src="{{asset('admin/assets/global/plugins/charts-sparkline/sparkline.min.js')}}"></script> <!-- Charts Sparkline -->
<script src="{{asset('admin/assets/global/plugins/retina/retina.min.js')}}"></script> <!-- Retina Display -->
<script src="{{asset('admin/assets/global/plugins/select2/dist/js/select2.full.min.js')}}"></script> <!-- Select Inputs -->
<script src="{{asset('admin/assets/global/plugins/icheck/icheck.min.js')}}"></script> <!-- Checkbox & Radio Inputs -->
<script src="{{asset('admin/assets/global/plugins/backstretch/backstretch.min.js')}}"></script> <!-- Background Image -->
<script src="{{asset('admin/assets/global/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script> <!-- Animated Progress Bar -->
<script src="{{asset('admin/assets/global/js/builder.js')}}"></script> <!-- Theme Builder -->
<script src="{{asset('admin/assets/global/js/sidebar_hover.js')}}"></script> <!-- Sidebar on Hover -->
<script src="{{asset('admin/assets/global/js/application.js')}}"></script> <!-- Main Application Script -->
<script src="{{asset('admin/assets/global/js/plugins.js')}}"></script> <!-- Main Plugin Initialization Script -->
<script src="{{asset('admin/assets/global/js/widgets/notes.js')}}"></script> <!-- Notes Widget -->
<script src="{{asset('admin/assets/global/js/pages/search.js')}}"></script> <!-- Search Script -->

<!-- BEGIN PAGE SCRIPT -->
<script src="{{asset('admin/assets/global/plugins/magnific/jquery.magnific-popup.min.js')}}"></script>  <!-- Image Popup -->
<script src="{{asset('admin/assets/global/plugins/isotope/isotope.pkgd.min.js')}}"></script>  <!-- Filter & sort magical Gallery -->
<script src="{{asset('admin/assets/global/plugins/noty/jquery.noty.packaged.min.js')}}"></script>  <!-- Notifications -->
<script src="{{asset('admin/assets/global/plugins/bootstrap-editable/js/bootstrap-editable.min.js')}}"></script> <!-- Inline Edition X-editable -->
<script src="{{asset('admin/assets/global/plugins/bootstrap-context-menu/bootstrap-contextmenu.min.js')}}"></script> <!-- Context Menu -->
<script src="{{asset('admin/assets/global/plugins/multidatepicker/multidatespicker.min.js')}}"></script> <!-- Multi dates Picker -->
<script src="{{asset('admin/assets/global/js/widgets/todo_list.js')}}"></script>
<script src="{{asset('admin/assets/global/plugins/metrojs/metrojs.min.js')}}"></script> <!-- Flipping Panel -->
<script src="{{asset('admin/assets/global/plugins/charts-chartjs/Chart.min.js')}}"></script>  <!-- ChartJS Chart -->
<script src="{{asset('admin/assets/global/plugins/charts-highstock/js/highstock.js')}}"></script> <!-- financial Charts -->
<script src="{{asset('admin/assets/global/plugins/charts-highstock/js/modules/exporting.js')}}"></script> <!-- Financial Charts Export Tool -->
<script src="{{asset('admin/assets/global/plugins/maps-amcharts/ammap/ammap.js')}}"></script> <!-- Vector Map -->
<script src="{{asset('admin/assets/global/plugins/maps-amcharts/ammap/maps/js/worldLow.js')}}"></script> <!-- Vector World Map  -->
<script src="{{asset('admin/assets/global/plugins/maps-amcharts/ammap/themes/black.js')}}"></script> <!-- Vector Map Black Theme -->
<script src="{{asset('admin/assets/global/plugins/skycons/skycons.min.js')}}"></script> <!-- Animated Weather Icons -->
<script src="{{asset('admin/assets/global/plugins/simple-weather/jquery.simpleWeather.js')}}"></script> <!-- Weather Plugin -->
<script src="{{asset('admin/assets/global/js/widgets/widget_weather.js')}}"></script>
<script src="{{asset('admin/assets/global/js/pages/dashboard.js')}}"></script>
<script src="{{asset('admin/assets/global/plugins/datatables/jquery.dataTables.min.js')}}"></script> <!-- Tables Filtering, Sorting & Editing -->
<script src="{{asset('admin/assets/global/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/global/js/pages/table_dynamic.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/iziToast.min.js')}}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<!-- END PAGE SCRIPT -->
@if(request()->is('nda-admin/submissions'))
    <script>
        $('.shortlist').on('click',function () {
            var btn = $(this);
            var id = $(this).closest('tr').find('td:first').text();
            $.ajax({
                type: "POST",
                url: '{{url('shortlist-submission')}}',
                data: {submissionid: id},
                dataType: 'json',
                beforeSend: function() {
                    $('.panel').LoadingOverlay('show');
                },
                success: function (data) {
                    $('.panel').LoadingOverlay('hide');
                    if (data === 'success'){
                        return alert(data);
                        btn.removeClass('shortlist');
                        btn.closest('tr').find('td:nth-child(6)').html('Shortlisted');
                        btn.attr('disabled',true);
                        btn.html('Shortlisted');
                        btn.closest('tr').find('.reject').remove();
                        iziToast.show({
                            title: 'Submission Shortlisted and Email Sent Successfully!',
                            icon: 'fa fa-check',
                            color: 'green',
                            position: 'topRight'
                        });
                    }
                },
                error: function (data) {
                    $('.panel').LoadingOverlay('hide');
                    iziToast.show({
                        title: 'Error!',
                        message: 'Something went wrong. Please try again',
                        icon: 'fa fa-remove',
                        color: 'red',
                        position: 'topRight'
                    });
                }
            });
        });
        $('.reject').on('click',function () {
            var btn = $(this);
            var id = $(this).closest('tr').find('td:first').text();
            $.ajax({
                type: "POST",
                url: '{{url('reject-submission')}}',
                data: {submissionid: id},
                beforeSend: function() {
                    $('.panel').LoadingOverlay('show');
                },
                success: function (data) {
                    $('.panel').LoadingOverlay('hide');
                    if (data === 'success'){
                        return alert(data);
                        btn.removeClass('reject');
                        btn.closest('tr').find('td:nth-child(6)').html('Rejected');
                        btn.attr('disabled',true);
                        btn.html('Rejected');
                        btn.closest('tr').find('.shortlist').remove();
                        iziToast.show({
                            title: 'Submission Rejected and Email Sent Successfully!',
                            icon: 'fa fa-check',
                            color: 'green',
                            position: 'topRight'
                        });
                    }
                },
                error: function (data) {
                    $('.panel').LoadingOverlay('hide');
                    iziToast.show({
                        title: 'Error!',
                        message: 'Something went wrong. Please try again',
                        icon: 'fa fa-remove',
                        color: 'red',
                        position: 'topRight'
                    });
                }
            });
        });
    </script>
@endif
@if(strpos(request()->url(),'nda-admin/submissions/view'))
    <script>
        $('#verify').on('click', function (e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: '{{url('verify-payment')}}',
                data: {submissionid: $(this).data('id')},
                dataType: 'json',
                beforeSend: function() {
                    $.LoadingOverlay('show');
                },
                success: function (data) {
                    $.LoadingOverlay('hide');
                    if (data === 'success'){
                        window.location.reload();
                    }
                },
                error: function (data) {
                    $.LoadingOverlay('hide');
                }
            });
        });
    </script>
@endif
<script src="{{asset('admin/assets/admin/layout2/js/layout.js')}}"></script>
</body>
</html>