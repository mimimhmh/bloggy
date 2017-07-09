<div class="sidebar" id="sidebar">

@include('layouts.about')

<!-- Mini Posts -->
    <section>
        <h2 class="title">POPULAR POSTS</h2>

        @foreach($populars as $popular)
            @include('layouts.mini-posts')
        @endforeach
    </section>
    <!-- Posts List -->
    <section>
        <h2 class="title">LATEST POSTS</h2>

        @foreach($latest_posts as $post)
            @include('layouts.latest-posts')
        @endforeach

    </section>

    <section>
        <div class="widget HTML">
            <h2 class="title">INSTGRAM</h2>
                @include('layouts.widget')
        </div>
    </section> <!-- End inta -->

</div> <!-- End Sidebar -->