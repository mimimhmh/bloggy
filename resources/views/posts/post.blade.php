<article class="post">
    <header>
        <div class="title row">
            <div class="col-sm-10">
                <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
                <p>{{ $post->slug }}</p>
            </div>
            <div class="col-sm-2" style="display: none;">
                @if(auth()->check() && ($post->user->id == auth()->user()->id ))
                    <a title="Edit post" href="/posts/{{ $post->id }}/edit">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                @endif
            </div>
        </div>
        <div class="meta">
            <time class="published"
                  datetime="{{ $post->created_at->toDateString() }}">
                {{ $post->created_at->toFormattedDateString() }}
            </time>
            <a href="#" class="author"><span class="name">{{ $post->user->name }}</span>
                <img src="{{URL::asset($post->user->avatar)}}"  alt="{{ $post->user->name }}"/></a>
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
                       class="fa {{ Auth::check() &&
                       Auth::user()->hasVotedFor($post) ? 'fa-heart':'fa-heart-o' }}
                               form-link">
                        {{ $post->votes->count() }}
                    </a>
                </form>
            </li>
            <li><a href="" class="fa fa-comment">{{ count($post->comments) }}</a></li>
        </ul>
    </footer>
</article>
<script>
    $(".title").mouseover(function() {
        let editLink = $(this).children(".col-sm-2");
        editLink.show();
    });

    $(".title").mouseout(function() {
        let editLink = $(this).children(".col-sm-2");
        editLink.hide();
    });

</script>
