
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
            <a href="/index" class="navbar-brand"><img src="{{URL::asset('images/logo.png')}}" alt="logo"></a>
        </div>
        <div class="collapse navbar-collapse" id="main_nav">
            <div class=" pull-right hidden-xs hidden-sm">
                <ul class="nav social-links">
                    @if(Auth::check())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/profile">profile</a></li>
                                <li><a href="/logout">logout</a></li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
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