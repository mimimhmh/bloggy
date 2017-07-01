<!DOCTYPE html>
<html lang="en">
<head>
    <title>Breif | Blogging is Passion</title>
    @include('layouts.head-links')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>

<!-- preloader -->
<div id="preloader">
    <div id="status"><img src="images/preloader.gif" height="64" width="64" alt=""></div>
</div>

@include('layouts.header')

@include('layouts.slider')

<!-- Main -->
<div id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                @yield('content')

            </div> <!-- End col-8 -->

            <div class="col-md-4">

                @include('layouts.sidebar')

            </div><!-- End-col-md-4 -->
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

    @include('layouts.scripts')
</body>
</html>