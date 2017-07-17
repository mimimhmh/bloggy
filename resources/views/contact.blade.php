<!DOCTYPE html>
<html lang="en">
<head>
    <title>J Wang | Contact</title>
    @include('layouts.head-links')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>

<!-- preloader -->
<div id="preloader">
    <div id="status"><img src="images/preloader.gif" height="64" width="64" alt=""></div>
</div>

@include('layouts.header')


<!-- Main -->
<div id="main" class="top-margin">
    @include('flash::message')
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

                                    <form method="post" action="/contact">
                                        {{ csrf_field() }}
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-pad-left">
                                            <div class="form-group">
                                                <input value="{{ old('name') }}"
                                                       type="text"
                                                       name="name"
                                                       placeholder="Name"
                                                       required/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 no-pad-right">
                                            <div class="form-group">
                                                <input type="email"
                                                       placeholder="Email"
                                                       name="email"
                                                       value="{{ old('email') }}"
                                                       required/>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pad-right">
                                            <div class="form-group">
                                                <input type="text"
                                                       value="{{ old('subject') }}"
                                                       name="subject"
                                                       placeholder="Subject"
                                                       required/>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                            <div class="form-group">
                                                <textarea name="comment" placeholder="Comment" required>
                                                    {{ old('comment') }}
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                            <div class="form-group contactus-btn">
                                                <button type="submit" class="cntct-btn"> Send Message </button>
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

                @include('layouts.errors')

            </div> <!-- End col-8 -->

            <div class="col-md-4">
                <div class="sidebar" id="sidebar">
                    <!-- About -->
                    <section class="blurb">
                        <h2 class="title">ABOUT ME</h2>

                        <a href="single-post.html" class="image">
                            <img class="img-responsive"
                                 src="images/aboutme.jpg"
                                 alt="about me" />
                        </a>
                        <div class="author-widget">
                            <h4 class="author-name">Jay Wang</h4>
                            <p>
                                <strong>Email:</strong> me@jwang.cc <br><br>
                                <strong>Contact:</strong> 006421669928 <br><br>
                                Contact me.
                            </p>
                        </div>
                        <div class="social">
                            <ul class="icons">
                                <li><a target="_blank"><i class="fa fa-facebook"></i> </a></li>
                                <li><a href="https://github.com/mimimhmh" target="_blank"><i class="fa fa-github"></i> </a></li>
                                <li><a target="_blank"><i class="fa fa-linkedin"></i> </a></li>
                                <li><a target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a target="_blank"><i class="fa fa-instagram"></i> </a></li>
                                <li><a target="_blank"><i class="fa fa-google-plus"></i> </a></li>
                                <li><a target="_blank"><i class="fa fa-tumblr"></i> </a></li>
                                <li><a target="_blank"><i class="fa fa-youtube-play"></i> </a></li>
                                <li><a target="_blank"><i class="fa fa-soundcloud"></i> </a></li>
                            </ul>
                        </div>
                    </section>
                </div> <!-- End Sidebar -->
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