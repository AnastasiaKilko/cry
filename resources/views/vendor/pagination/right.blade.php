@if ($paginator->hasPages())
    <nav>
        <ul class="pag">
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