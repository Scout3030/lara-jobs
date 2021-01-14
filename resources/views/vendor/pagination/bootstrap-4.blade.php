@if ($paginator->hasPages())
    <div class="row">
        <div class="col-lg-12 col-md-12">
            {{-- Previous Page Link --}}
            <div class="pagination-area">

            @if ($paginator->onFirstPage())

            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="prev page-numbers" rel="prev" aria-label="@lang('pagination.previous')">
                    <i class="flaticon-left-arrow"></i>
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <a href="javascript:void(0)" class="page-numbers">{{ $element }}</a>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="page-numbers current" aria-current="page">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}" class="page-numbers">{{ $page }}</a>
                        @endif

                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="next page-numbers" aria-label="@lang('pagination.next')">
                    <i class="flaticon-right-arrow"></i>
                </a>
            @else

            @endif
            </div>
        </div>>
    </div>
@endif
