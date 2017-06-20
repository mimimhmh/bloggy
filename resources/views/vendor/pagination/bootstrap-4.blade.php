@if ($paginator->hasPages())
    <div class="blog-pagination numeric-pagination clearfix">
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li><a><i class="fa fa-angle-left"></i> Previous</a></li>
            {{--<li class="page-item disabled"><span class="page-link">&laquo;</span></li>--}}
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">
                    <i class="fa fa-angle-left"></i> Previous
                </a></li>
            {{--<li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>--}}
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a rel="next" href="{{ $paginator->nextPageUrl() }}">
                    Next <i class="fa fa-angle-right"></i>
                </a></li>
{{--            <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>--}}
        @else
            <li><a>
                    Next <i class="fa fa-angle-right"></i>
                </a></li>
            {{--<li class="page-item disabled"><span class="page-link">&raquo;</span></li>--}}
        @endif
    </ul>

        <div class="page-count pull-right">
            <span>Page {{ $paginator->currentPage() }} of {{ count($element) }}</span>
        </div>
    </div>
@endif
