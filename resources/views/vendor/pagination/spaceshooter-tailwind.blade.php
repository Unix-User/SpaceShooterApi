@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-600 bg-white border border-gray-300 cursor-default leading-5 rounded-md dark:bg-gray-800 dark:text-white">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-600 hover:bg-blue-500 hover:text-white bg-white border border-gray-300 leading-5 rounded-md focus:outline-none focus:ring ring-blue-300 focus:border-blue-500 active:bg-blue-500 active:text-white transition ease-in-out duration-150 dark:bg-gray-800 dark:text-white">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-600 hover:bg-blue-500 hover:text-white bg-white border border-gray-300 leading-5 rounded-md focus:outline-none focus:ring ring-blue-300 focus:border-blue-500 active:bg-blue-500 active:text-white transition ease-in-out duration-150 dark:bg-gray-800 dark:text-white">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-600 bg-white border border-gray-300 cursor-default leading-5 rounded-md dark:bg-gray-800 dark:text-white">
                {!! __('pagination.next') !!}
            </span>
        @endif
    </nav>
@endif
