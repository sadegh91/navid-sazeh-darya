<!DOCTYPE html>
<html class="loading" lang="fa" data-textdirection="rtl" dir="rtl">

<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>نوید سازه دریا</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('logo.png')}}">
    <meta name="theme-color" content="#5A8DEE">

    @include('base.css')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static  " data-open="click"
      data-menu="vertical-menu-modern" data-col="2-columns">

@include('base.navbar')
@include('base.base_sidebar')


<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-body">

        @yield('content')
        </div>

    </div>
</div>
<!-- END: Content-->


<div class="sidenav-overlay"></div>
<div class="drag-target"></div>


@include('base.footer')
@include('base.scripts')

</body>
<!-- END: Body-->

</html>
