<div class="mini-posts">
    <!-- Mini Post -->
    <article class="mini-post">
        <header>
            <h3><a href="/posts/{{ $popular['id'] }}">{{ $popular['title'] }}</a></h3>
            <time class="published" datetime="{{ $popular['created_at']->toDateString() }}">
                {{ $popular['created_at']->toFormattedDateString() }}
            </time>
            <a href="#" class="author"><img src="{{ $popular['user']['avatar'] }}" alt="" /></a>
        </header>
        <a href="/posts/{{ $popular['id'] }}"
           class="image">
            <img src="{{ $popular['large_img_url'] }}" alt="{{ $popular['title'] }}" />
        </a>
    </article>
</div>