@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled join-item btn btn-primary text-white" aria-disabled="true">
                    <span>@lang('pagination.previous')</span>
                </li>
            @else
                <li class="join-item btn btn-primary text-white">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
                </li>
            @endif
            {{-- Current Page --}}
            <button class="disabled join-item btn">{{$paginator->currentPage()}}</button>
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="join-item btn btn-primary text-white">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                </li>
            @else
                <li class="disabled join-item btn btn-primary text-white" aria-disabled="true">
                    <span>@lang('pagination.next')</span>
                </li>
            @endif
        </ul>
    </nav>
@endif