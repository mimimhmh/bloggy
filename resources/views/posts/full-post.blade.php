@extends ('layouts.fullmaster')

@section ('content')

    <!-- Post -->
    <article class="post">
        <header>
            <div class="title">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->slug }}</p>
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
        <hr>
        <div class="fr-view">
            {!! html_entity_decode($post->body) !!}
        </div>

        <footer>

            <div class="social actions">
                <ul class="icons">
                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i> </a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i> </a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-instagram"></i> </a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i> </a></li>
                </ul>
            </div>

            <ul class="stats">
                <li><a href="#">General</a></li>
                <li>
                    <form id="voteForm{{ $post->id }}" method="post" action="/votes/{{ $post->id }}">
                        {{ csrf_field() }}
                        <a href="javascript:{}"
                           onclick="document.getElementById('voteForm{{ $post->id }}').submit();return false;"
                           class="fa {{ Auth::check() &&
                       Auth::user()->hasVotedFor($post) ? 'fa-heart':'fa-heart-o' }}"
                                {{Auth::guest()? 'disabled' : ''  }}>
                            {{ $post->votes->count() }}
                        </a>
                    </form>
                </li>
                <li><a href="#blog-comments" class="fa fa-comment">{{ count($post->comments) }}</a></li>
            </ul>
        </footer>
    </article>

    <!-- Pagination -->
        @include('posts.post-related')
    <!-- Blog Pagination Ends -->

    <!-- Blog Comments Begins -->
        @include('posts.post-comment')
    <!-- Blog Pagination Ends -->

@endsection