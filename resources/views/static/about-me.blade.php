@extends('layouts.static-master')

@section('content')
    <article class="post">
        <header>
            <div class="title">
                <h2><a href="#">Jay Wang's Resume</a></h2>
                <p>It's supposed to be hard. If it were easy, everyone would do it.</p>
            </div>
            <div class="meta">
                <time class="published" datetime="{{ Carbon\Carbon::now() }}">
                    {{ Carbon\Carbon::now()->toFormattedDateString() }}
                </time>
                <a href="#" class="author"><span class="name">Jay Wang</span>
                    <img src="images/avatars/jay-wang.jpg" alt=""/></a>
            </div>
        </header>

        <div class="image featured"><img src="images/resume.jpg" alt="" /></div>

        <p>
            Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl.
            Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim,
            ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper.
            Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae,
            ultricies congue gravida diam non fringilla.
        </p>

        <div class="excerpt"><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum exercitation ullamco laboris nisi ut aliquip.</p></div>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
            dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
            Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
            sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
        <blockquote><p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet vultatup
                duista.</p></blockquote>
        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu
            feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum
            zzril.</p>
        <h2>Heading 1</h2>
        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
            commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse lorem ipsum dolor
            sit amet.</p>
        <h2>Heading 2</h2>
        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu
            feugiat nulla facilisis. At vero eos et accusam et justo.</p>
        <h2>Heading 3</h2>
        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
            sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum hendrerit in vulputate velit esse
            molestie.</p>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
            dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
        <p><code>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</code></p>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
            dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
            clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <div class="note">
            <ol>
                <li>Lorem ipsum</li>
                <li>Sit amet vultatup nonumy</li>
                <li>Duista sed diam</li>
            </ol>
            <div class="clear"></div>
        </div>

        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
            sed diam voluptua. At vero eos et accusam et justo duo dolores.</p>

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
                <li><a href="#">General</a></li>
                <li><a href="#" class="icon fa fa-heart">28</a></li>
                <li><a href="#" class="icon fa fa-comment">128</a></li>
            </ul>
        </footer>
    </article>
@endsection