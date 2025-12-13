@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link"><img src="{{asset('img/button-icons/left.svg')}}" alt="left"></span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"><img src="{{asset('img/button-icons/left.svg')}}" alt="left"></a>
                </li>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link">{{ $element }}</span>
                    </li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page">
                                <div class="active-circle1"><span class="page-link"></span></div>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $url }}"><div class="inactive-circle"></div></a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"><img src="{{asset('img/button-icons/right.svg')}}" alt="right"></a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link"><img src="{{asset('img/button-icons/right.svg')}}" alt="right"></span>
                </li>
            @endif
        </ul>
    </nav>
@endif