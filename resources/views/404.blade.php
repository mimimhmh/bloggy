<!DOCTYPE html>
<html lang="en">
<head>
	<title>Breif | Error Page 404</title>
	<meta charset="utf-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Font Awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css" />

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


	<!--Navigation-->
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_nav" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="master.blade.php" class="navbar-brand"><img src="images/logo.png" alt="logo"></a>
			</div>
			<div class="collapse navbar-collapse" id="main_nav">
				<div class=" pull-right hidden-xs hidden-sm">
					<ul class="nav social-links">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
					</ul>

				</div>
				<ul class="nav navbar-nav navbar-left">
					<li><a href="#" >Life Style</a></li>
					<li><a href="about.html">Fashion</a></li>
					<li><a href="#" >People</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
						<ul class="dropdown-menu">
							<li><a href="leftsidebar.blade.php">left sidebar</a></li>
							<li><a href="fullwidth.blade.php">full width</a></li>
							<li><a href="404.blade.php">error 404</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Post Format</a>
						<ul class="dropdown-menu">
							<li><a href="image-post.blade.php">Image Post</a></li>
							<li><a href="audio-post.blade.php">Audio Post</a></li>
							<li><a href="video-post.blade.php">Video Post</a></li>
							<li><a href="full-post.blade.php">full Post</a></li>
						</ul>
					</li>
					<li><a href="contact.blade.php">contact</a></li>

				</ul>
			</div>
		</div>
	</nav>

	<!-- End navigation -->


	<!-- Main -->
	<div id="main">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="error-page text-align-center pad-top-big pad-bottom-big">
						<h1>404</h1>
						<h2>Oops, This Page Not Be Found!</h2>
						<h3>We are really sorry but the page you requested is missing</h3>
						<div class="error-bottom">
							<a href="master.blade.php" class="home-page-link">go to home page<i class="fa fa-angle-right" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</div> <!-- End row -->
		</div> <!-- End Container -->
		<div id="instagram-footer">
		</div>

		<!--back-to-top-->

		<div id="back-to-top">
			<a href="#top"><i class="fa fa-arrow-up"></i></a>
		</div>

		<footer class="text-center footer">
			<div class="container">
				<div class="row">
					<div class="full">
						<ul class="quick-link">

							<li><a href="#" target="_blank"><i class="fa fa-facebook"></i> </a></li>
							<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-instagram"></i> </a></li>
							<li><a href="#" target="_blank"><i class="fa fa-pinterest"></i> </a></li>
							<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i> </a></li>
							<li><a href="#" target="_blank"><i class="fa fa-tumblr"></i> </a></li>
							<li><a href="#" target="_blank"><i class="fa fa-youtube-play"></i> </a></li>
							<li><a href="#" target="_blank"><i class="fa fa-dribbble"></i> </a></li>
							<li><a href="#" target="_blank"><i class="fa fa-soundcloud"></i> </a></li>
							<li><a href="#" target="_blank"><i class="fa fa-vimeo-square"></i> </a></li>
							<li><a href="#" target="_blank"><i class="fa fa-rss"></i> </a></li>

						</ul>

						<div class="copy-right">
							<p>copyright,&copy; 2017 - All Rights Reserved. <a href="#">Breif</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div><!-- End Main -->

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>