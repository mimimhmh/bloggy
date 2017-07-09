<ul class="posts">
    <li>
        <article>
            <header>
                <h3><a href="#">{{ $post['title'] }}</a></h3>
                <time class="published" datetime="{{ $post['created_at']->toDateString() }}">
                    {{ $post['created_at']->toFormattedDateString() }}
                </time>
            </header>
            <a href="#" class="image"><img src="{{ $post['large_img_url'] }}" alt="" /></a>
        </article>
    </li>
</ul>