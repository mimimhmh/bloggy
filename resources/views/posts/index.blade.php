@extends ('layouts.master')

@section ('content')
    <ul class="nav nav-tabs">
        <li class="{{ request()->exists('popular')? '' : 'active' }}">
            <a href="{{ request()->url() }}">Most Recent</a>
        </li>

        <li class="{{ request()->exists('popular')? 'active' : '' }}">
            <a href="?popular=1">Most Popular</a>
        </li>
    </ul>

    <!-- Post -->
    @foreach($posts as $post)
        @include('posts.post')
    @endforeach

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".form-link").click(function () {
            @if(! auth()->check())
                alert('Login first to like the post!');
            @else
                let url = $(this).parent().get(0).getAttribute('action');
                let clickedLink = $(this);
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {},
                    success: function (data) {
                        clickedLink.removeClass();
                        let flag = false;
                        if (data.result.attached.length){
                            flag = true;
                        }
                        let style = flag ? "fa-heart":"fa-heart-o";
                        clickedLink.addClass("fa " + style +
                            " form-link");
                        clickedLink.text(" " + data.votes_count);
                        console.log(data + "\n" + flag);
                    }
                });
            @endif
        });
    </script>


    <!-- Pagination -->


    {{ $posts->appends(request()->query())->links('vendor.pagination.bootstrap-4') }}

    <br>

@endsection