<!DOCTYPE html>
<html lang="en">
<head>
	<title>Breif | Blogging is Passion</title>
	<meta charset="utf-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Font Awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css" />

	<!-- Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css" />
	<link rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Main Style -->
	<link rel="stylesheet" href="css/style.css" />


	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,900' rel='stylesheet' type='text/css'>

	<!--[if lte IE 8]><script src="js/ie/html5shiv.js"></script><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
</head>
<body >

<!-- preloader -->
<div id="preloader">
    <div id="status"> <img src="images/preloader.gif" height="64" width="64" alt=""> </div>
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

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>

    <script type="text/javascript">
		// Slider
		jQuery('.owl-carousel').owlCarousel({
			loop:true,
			autoplay:true,
			margin:10,
			nav:true,
			navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
			responsiveClass: true,
			items:1,
			dots:false,
			responsive:{
				0:{
					items:1,
					nav:true
				},	
				600:{
					items:2
				}
			}
		});
     </script>
    <script>
        var abstract = $('.post-article');
        abstract.css('overflow', 'hidden');
        abstract.css('height', '40');
    </script>


</body>
</html>