@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
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
        </ul>
    </nav>
@endif