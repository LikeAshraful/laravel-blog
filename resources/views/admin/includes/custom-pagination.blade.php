<div class="my-4">
    <ul class="flex justify-center space-x-2">
        @if ($paginator->onFirstPage())
            <li class="px-2 py-1 text-gray-300 cursor-not-allowed">Previous</li>
        @else
            <li class="px-2 py-1 hover:bg-gray-200">
                <a href="{{ $paginator->previousPageUrl() }}">Previous</a>
            </li>
        @endif

        @foreach ($elements as $element)
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="px-2 py-1 bg-blue-500 text-danger">{{ $page }}</li>
                    @else
                        <li class="px-2 py-1 hover:bg-gray-200">
                            <a href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li class="px-2 py-1 hover:bg-gray-200">
                <a href="{{ $paginator->nextPageUrl() }}">Next</a>
            </li>
        @else
            <li class="px-2 py-1 text-gray-300 cursor-not-allowed">Next</li>
        @endif
    </ul>
</div>
