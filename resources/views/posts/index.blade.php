@extends ('layouts.master')

@section ('content')
<!-- Post -->
<article class="post">
    <header>
        <div class="title">
            <h2><a href="single-post.html">women camping hiking travel</a></h2>
            <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
        </div>
        <div class="meta">
            <time class="published" datetime="2017-01-14">November 1, 2017</time>
            <a href="#" class="author"><span class="name">CATHERINE DOE</span><img src="images/author-avatar.png" alt="" /></a>
        </div>
    </header>
    <a href="single-post.html" class="image featured"><img src="images/large-post01.jpg" alt="" /></a>
    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
    <footer>
        <ul class="actions">
            <li><a href="single-post.html" class="button big">Continue Reading</a></li>
        </ul>
        <ul class="stats">
            <li><a href="#">General</a></li>
            <li><a href="#" class="icon fa-heart">28</a></li>
            <li><a href="#" class="icon fa-comment">128</a></li>
        </ul>
    </footer>
</article>

<!-- Pagination -->
<ul class="actions pagination">
    <li><a href="" class="disabled button big previous">Previous Page</a></li>
    <li><a href="#" class="button big next">Next Page</a></li>
</ul>

@endsection