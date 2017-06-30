<article class="post">
    <header>
        <div class="title">
            <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
            <p>{{ $post->slug }}</p>
        </div>
        <div class="meta">
            <time class="published"
                  datetime="{{ $post->created_at->toDateString() }}">
                {{ $post->created_at->toFormattedDateString() }}
            </time>
            <a href="#" class="author"><span class="name">{{ $post->user->name }}</span>
                <img src="images/author-avatar.png" alt=""/></a>
        </div>
    </header>
    <a href="/posts/{{ $post->id }}" class="image featured">
    <img src="{{ $post->large_img_url }}" alt=""/></a>
    <div class="post-article">
        {{ $post->abstract }}
    </div>
    <br>
    <footer>
        <ul class="actions">
            <li><a href="/posts/{{ $post->id }}" class="button big">Continue Reading</a></li>
        </ul>
        <ul class="stats">
            <li><a href="#">General</a></li>
            <li>
                <form id="voteForm{{ $post->id }}" method="post" action="/votes/{{ $post->id }}">
                    {{ csrf_field() }}
                    <a href="javascript:{}"
                       @if(auth()->check())
                       onclick="document.getElementById('voteForm{{ $post->id }}').submit();return false;"
                       @endif
                       class="fa {{ Auth::check() &&
                       Auth::user()->hasVotedFor($post) ? 'fa-heart':'fa-heart-o' }}">
                        {{ $post->votes->count() }}
                    </a>
                </form>
            </li>
            <li><a href="#" class="fa fa-comment">{{ count($post->comments) }}</a></li>
        </ul>
    </footer>
</article>

