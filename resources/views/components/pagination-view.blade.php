@if ($paginator->hasPages())





    <nav>
        <ul class="pagination  justify-content-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled page-item" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a class="page-link" href="#"  >«</a>
                </li>
            @else
                <li class="page-item">
                    <a href="#" class="page-link" wire:click="previousPage" rel="prev"
                       aria-label="@lang('pagination.previous')">«</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled page-item" aria-disabled="true"><a class="page-link" href="#">{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active page-item" aria-current="page"><a class="page-link" href="#" wire:click="gotoPage({{$page}})">{{ $page }}</a></li>
                        @else
                            <li class="page-item"><a class="page-link" href="#" wire:click="gotoPage({{$page}})">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="#" wire:click="nextPage" rel="next" aria-label="@lang('pagination.next')">»</a>
                </li>
            @else
                <li class="disabled page-item" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <a class="page-link" href="#"  >»</a>
                </li>
            @endif
        </ul>
    </nav>
@endif
