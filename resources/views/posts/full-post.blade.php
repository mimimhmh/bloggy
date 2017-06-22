@extends ('layouts.fullmaster')

@section ('content')

    <!-- Post -->
    <article class="post">
        <header>
            <div class="title">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->abstract }}</p>
            </div>
            <div class="meta">
                <time class="published"
                      datetime="{{ $post->created_at->toDateString() }}">
                    {{ $post->created_at->toFormattedDateString() }}
                </time>
                <a href="#" class="author"><span class="name">{{ $post->user->name }}</span>
                    <img src="{{URL::asset($post->user->picture_url)}}" alt="{{ $post->user->name }}" /></a>
            </div>
        </header>
        <div class="image featured"><img src="{{URL::asset($post->large_img_url)}}" alt="" /></div>

        {!! html_entity_decode($post->body) !!}

        <footer>

            <div class="social actions">
                <ul class="icons">
                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i> </a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-instagram"></i> </a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i> </a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i> </a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-tporblr"></i> </a></li>


                </ul>
            </div>

            <ul class="stats">
                <li><a href="#">General</a></li>
                <li><a href="#" class="fa fa-heart">28</a></li>
                <li><a href="#" class="fa fa-comment">128</a></li>
            </ul>
        </footer>
    </article>

    <!-- Pagination -->
        @include('posts.post-related')
    <!-- Blog Pagination Ends -->

    <!-- Blog Comments Begins -->
        @include('posts.post-comment')
    <!-- Blog Pagination Ends -->

    <!-- Blog Contact Form Begins -->
        @include('posts.blog-contact')
    <!-- Blog Contact Form Ends -->

@endsection