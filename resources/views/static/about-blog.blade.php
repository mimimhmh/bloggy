@extends('layouts.static-master')

@section('content')

    <article class="post">
        <header>
            <div class="title">
                <h2><a href="#">About JWang's Blog</a></h2>
                <p>Blog features</p>
            </div>
            <div class="meta">
                <time class="published" datetime="2017-07-21 02:40:19">
                    Jul 21, 2017
                </time>
                <a href="#" class="author"><span class="name">Jay Wang</span>
                    <img src="images/avatars/jay-wang.jpg" alt=""/></a>
            </div>
        </header>

        <div class="image featured"><img src="images/slider/slider-1.png" alt="" /></div>

        <h1 style="color: #5e9ca0;">J Wang's Blog</h1>
        <h2>Source code:
            <a href="https://github.com/mimimhmh/bloggy"  target="_blank">
                https://github.com/mimimhmh/bloggy
            </a>
        </h2>
        <hr>
        <h2 style="color: #2e6c80;">Projecct structures</h2>
        <p>
            Laravel 5.4 + PHP 7 + Mysql -&gt; Forge (Changed from AWS Elasticbean Stalk)
        </p>
        <br>
        <h2 style="color: #2e6c80;">Frontend design:</h2>
        <p>Resiponsive design:&nbsp;bootstrap +&nbsp;jQuery +&nbsp;Font Awesome icons&nbsp;</p>
        <br>
        <h2 style="color: #2e6c80;"><strong>Main features</strong></h2>
        <h3>&nbsp;1. Posts:&nbsp;</h3>
        <ul>
            <li>Publish a post by login.&nbsp;</li>
            <li>Frola Editor. （WYSIWYG）</li>
            <li>Specific post showing. (Route Model Binding)</li>
            <li>Posts can be shown by date or popularity</li>
        </ul>

        <h3>2. Comments:</h3>
        <ul>
            <li>Comment a post</li>
            <li>Reply a comment (Ajax)</li>
        </ul>

        <h3>3. Vote or like a post</h3>
        <ul>
            <li>You can like or cancel 'Like' for posts. ( Ajax)</li>
        </ul>

        <h3>4.&nbsp;Contact</h3>
        <ul>
            <li>Mailing</li>
        </ul>

        <h3 class="okmemo-dragging">5. Auth</h3>
        <ul>
            <li>&nbsp;User avatar</li>
        </ul>
        <hr />
        <p>Blogs keep updating frequently, checkout often.</p>

        <footer>

            <div class="social actions">
                <ul class="icons">
                    <li><a target="_blank"><i class="fa fa-facebook"></i> </a></li>
                    <li><a href="https://github.com/mimimhmh" target="_blank"><i class="fa fa-github"></i> </a></li>
                    <li><a target="_blank"><i class="fa fa-linkedin"></i> </a></li>
                    <li><a target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a target="_blank"><i class="fa fa-instagram"></i> </a></li>
                    <li><a target="_blank"><i class="fa fa-google-plus"></i> </a></li>

                </ul>
            </div>

            <ul class="stats">
                <li><a href="#">Thanks J Wang.</a></li>
            </ul>
        </footer>
    </article>

@endsection