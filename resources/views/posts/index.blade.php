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
            let url = $(this).parent().get(0).getAttribute('action');
            let obj1 = $(this);
            $.ajax({
                type: "POST",
                url: url,
                data: {},
                success: function (data) {
                    obj1.removeClass();
                    let flag = false;
                    if (data.result.attached.length && {{ Auth::check() }}){
                        flag = true;
                    }
                    let style = flag ? "fa-heart":"fa-heart-o";
                    obj1.addClass("fa " + style +
                        " form-link");
                    obj1.text(" " + data.votes_count);
                    console.log(data + "\n" + flag);
                }
            });
        });
    </script>


    <!-- Pagination -->


    {{ $posts->appends(request()->query())->links('vendor.pagination.bootstrap-4') }}

    <br>

@endsection