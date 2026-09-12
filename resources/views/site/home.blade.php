@extends('site/layout')
@section('title', 'Home')
@section('conteudo')

<div class="container mx-auto my-6 px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 my-6 w-full">

        @foreach ($produtos as $produto)

            <div class="card bg-base-100 shadow-sm w-full">
                {{-- Imagem produto --}}
                <figure class="px-10 pt-10">
                    <img
                    src="{{ $produto->imagem }}"
                    alt="{{ $produto->nome }}"
                    class="rounded-xl h-64 w-full object-cover" />
                </figure>

                <div class="card-body items-center text-center">
                    <!-- Informações produto -->
                    <h2 class="card-title text-base">{{$produto->nome}}</h2>
                    <p class="text-sm text-slate-600 line-clamp-3">{{$produto->descricao}}</p>
                    
                    <div class="card-actions">
                        <button type="submit"class="btn bg-violet-400 hover:bg-violet-500 text-white">Comprar Agora</button>
                        <div class="card-actions">
                            <a class="btn btn-soft" href="{{route('site.details', $produto->slug)}}">
                                <span class="material-symbols-outlined">visibility</span>
                                Ver detalhes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

    </div>
</div>

    <!-- Paginação -->
    <div class="w-full flex justify-center my-4"> <!-- [my-4] margin eixo Y 4 tailwind -->
            {{ $produtos->links('custom.pagination') }}
    </div>

@endsection