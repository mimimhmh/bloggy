<!DOCTYPE html>
<html lang="en">
<head>
    <title>Breif | Post</title>
    @include('layouts.head-links')
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

    @include('layouts.scripts')

</body>
</html>