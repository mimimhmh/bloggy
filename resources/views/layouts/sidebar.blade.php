<div class="sidebar" id="sidebar">

@include('layouts.about')

<!-- Mini Posts -->
    <section>
        <h2 class="title">POPULAR POSTS</h2>

        @include('layouts.miniposts')

    </section>
    <!-- Posts List -->
    <section>
        <h2 class="title">LATEST POSTS</h2>

        @include('layouts.latestposts')

    </section>

    <section>
        <div class="widget HTML">
            <h2 class="title">INSTGRAM</h2>
                @include('layouts.widget')
        </div>
    </section> <!-- End inta -->

</div> <!-- End Sidebar -->