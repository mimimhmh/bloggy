@extends ('layouts.master')

@section ('content')
<!-- Post -->
@foreach($posts as $post)
    @include('posts.post')
@endforeach

<!-- Pagination -->


    {{ $posts->links('vendor.pagination.bootstrap-4') }}

<br>

@endsection