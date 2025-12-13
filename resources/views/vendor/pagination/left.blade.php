@if ($paginator->hasPages())
    <nav>
        <ul class="pag">
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link"><img src="{{asset('img/button-icons/left.svg')}}" alt="left"></span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"><img src="{{asset('img/button-icons/left.svg')}}" alt="left"></a>
                </li>
            @endif
        </ul>
    </nav>
@endif