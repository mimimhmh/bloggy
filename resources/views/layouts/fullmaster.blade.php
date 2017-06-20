<!DOCTYPE html>
<html lang="en">
<head>
    <title>Breif | Image Post</title>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}" />

    <!-- Main Style -->
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" />


    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,900' rel='stylesheet' type='text/css'>

    <!--[if lte IE 8]><script src="{{URL::asset('js/ie/html5shiv.js')}}"></script><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="{{URL::asset('css/ie9.css')}}" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="{{URL::asset('css/ie8.css')}}" /><![endif]-->
</head>
<body>

<!-- preloader -->
<div id="preloader">
    <div id="status"> <img src="{{URL::asset('images/preloader.gif')}}" height="64" width="64" alt=""> </div>
</div>


@include('layouts.header')


<!-- Main -->
<div id="main" class="top-margin">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @yield('content')

            </div> <!-- End col-12 -->
        </div> <!-- End row -->
    </div> <!-- End Container -->

    <div id="instagram-footer">
    </div>

    <!--back-to-top-->

    <div id="back-to-top">
        <a href="#top"><i class="fa fa-arrow-up"></i></a>
    </div>

    <footer class="text-center footer">

        @include('layouts.footer')

    </footer>
</div><!-- End Main -->

<script src="{{URL::asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/main.js')}}"></script>
</body>
</html>