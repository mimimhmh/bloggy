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

<!-- Pagination -->


    {{ $posts->appends(request()->query())->links('vendor.pagination.bootstrap-4') }}

<br>

@endsection