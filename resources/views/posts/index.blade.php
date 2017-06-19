@extends ('layouts.master')

@section ('content')
<!-- Post -->
@foreach($posts as $post)
    @include('posts.post')
@endforeach

<!-- Pagination -->
<ul class="actions pagination">
    {{--<li><a href="" class="disabled button big previous">Previous Page</a></li>--}}
    {{ $posts->links('vendor.pagination.bootstrap-4') }}
    {{--<li><a href="#" class="button big next">Next Page</a></li>--}}
</ul>

@endsection