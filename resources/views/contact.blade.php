<!DOCTYPE html>
<html lang="en">
<head>
	<title>Breif | contact</title>
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
<body>

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
	<div id="main" class="top-margin">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<!--////////////////////////////////////Container-->
					<div id="container">
						<div class="wrap-container">
							<!-- Content-Box -->
							<section class="content-box contact-form">
								<div class="row wrap-box"><!--Start Box-->
									<h3 class="text-center">Contact Form</h3>
									<div class="contact-form ">

										<form>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-pad-left">
												<div class="form-group">
													<input type="text" placeholder="Name" />
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-pad-right">
												<div class="form-group">
													<input type="email" placeholder="Email" />
												</div>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pad-right">
												<div class="form-group">
													<input type="text" placeholder="Subject" />
												</div>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
												<div class="form-group">
													<textarea placeholder="Comment"></textarea>
												</div>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
												<div class="form-group contactus-btn">
													<a href="javascript:void(0)" class="cntct-btn"> Send Message </a>
												</div>
											</div>
										</form>
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">

										</div>
									</div>
								</div>
							</section>

						</div>
					</div>
				</div> <!-- End col-8 -->

				<div class="col-md-4">
					<div class="sidebar" id="sidebar">
						<!-- About -->
						<section class="blurb">
							<h2 class="title">ABOUT ME</h2>

							<a href="single-post.html" class="image"><img class="img-responsive" src="images/aboutme.jpg" alt="about me" /></a>
							<div class="author-widget">
								<h4 class="author-name">Catherine Doe</h4>
								<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
							</div>
							<div class="social">
								<ul class="icons">
									<li><a href="#" target="_blank"><i class="fa fa-facebook"></i> </a></li>
									<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" target="_blank"><i class="fa fa-instagram"></i> </a></li>
									<li><a href="#" target="_blank"><i class="fa fa-pinterest"></i> </a></li>
									<li><a href="#" target="_blank"><i class="fa fa-google-plus"></i> </a></li>
									<li><a href="#" target="_blank"><i class="fa fa-tumblr"></i> </a></li>
									<li><a href="#" target="_blank"><i class="fa fa-youtube-play"></i> </a></li>
									<li><a href="#" target="_blank"><i class="fa fa-dribbble"></i> </a></li>
									<li><a href="#" target="_blank"><i class="fa fa-soundcloud"></i> </a></li>

								</ul>
							</div>
						</section>
					</div> <!-- End Sidebar -->
				</div><!-- End-col-md-4 -->
			</div><!-- End-col-md-4 -->
		</div> <!-- End row -->
	</div> <!-- End Container -->
	<div id="instagram-footer">
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
						<p>copyright,&copy; 2017 - All Rights Reserved. <a href="#">Brief</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>