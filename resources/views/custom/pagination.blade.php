@if ($paginator->hasPages())
    <div class="join">
        {{-- Botão Anterior --}}
        @if ($paginator->onFirstPage())
            <button class="join-item btn disabled" aria-disabled="true">«</button>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="join-item btn">«</a>
        @endif

        {{-- Elementos / Links das Páginas --}}
        @foreach ($elements as $element)
            {{-- Três pontos (...) --}}
            @if (is_string($element))
                <button class="join-item btn disabled" aria-disabled="true">{{ $element }}</button>
            @endif

            {{-- Array de Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <button class="join-item btn btn-active">{{ $page }}</button>
                    @else
                        <a href="{{ $url }}" class="join-item btn">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Botão Próximo --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="join-item btn">»</a>
        @else
            <button class="join-item btn disabled" aria-disabled="true">»</button>
        @endif
    </div>
@endif