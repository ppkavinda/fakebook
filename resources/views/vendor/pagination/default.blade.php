
@if ($paginator->hasPages())
<nav aria-label="Page navigation example">
    
    <ul class="pagination justify-content-end">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
            <li class="page-item disabled"><a class="page-link" href="#"><span>&laquo;</span></a></li>{{-- my --}}
        @else
            <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>

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
                        {{-- <li class="page-item"><a class="page-link" href="#">{{$page}}</a></li> --}} {{-- MY --}}
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
    {{-- <li class="page-item"><a class="page-link" href="#">{{$page}}</a></li>  --}}{{-- my --}}

                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
    {{-- <li class="page-item"><a class="page-link" href="#">Next</a></li> --}} {{-- my --}}

        @else
            <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
    {{-- <li class="page-item"><a class="page-link" href="#">Next</a></li> --}} {{-- my --}}

        @endif
    </ul>
</nav>


@endif
