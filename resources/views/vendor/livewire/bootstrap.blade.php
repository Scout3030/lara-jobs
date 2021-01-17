@if ($paginator->hasPages())
    <div class="row">
        <div class="col-lg-12 col-md-12">
            {{-- Previous Page Link --}}
            <div class="pagination-area">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())

                @else
                    <button class="prev page-numbers" wire:click="previousPage" wire:loading.attr="disabled" rel="prev" aria-label="@lang('pagination.previous')">
                        <i class="flaticon-left-arrow"></i>
                    </button>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <button type="button" class="page-numbers">{{ $element }}</button>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span class="page-numbers current" aria-current="page" wire:key="paginator-page-{{ $page }}">{{ $page }}</span>
                            @else
                                <button class="page-numbers" wire:click="gotoPage({{ $page }})">{{ $page }}</button>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <button type="button" rel="next" class="next page-numbers" wire:click="nextPage" wire:loading.attr="disabled" aria-label="@lang('pagination.next')">
                        <i class="flaticon-right-arrow"></i>
                    </button>
                @else

                @endif
            </div>
        </div>
    </div>
@endif

