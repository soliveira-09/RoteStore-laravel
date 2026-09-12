@extends('site/layout')
@section('title', 'Categoria')
@section('conteudo')

<div class="flex justify my-4 mx-6">
    <h1 class="text-3xl">Categoria: {{ $categoria->nome }} </h1>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 my-6">
    

    @foreach ($produtos as $produto)
        <div class="card bg-base-100 w-full shadow-sm">
            {{-- Imagem produto --}}
            <figure class="px-10 pt-10">
                <img
                src="{{ $produto->imagem }}"
                alt="{{ $produto->nome }}"
                class="rounded-xl" />
            </figure>
            <div class="card-body items-center text-center">
            
                <!-- Informações produto -->
                <h2 class="card-title">{{ $produto->nome }}</h2>
                <p>{{ $produto->descricao }}</p>
                
                <div class="card-actions">
                    <button class="btn bg-violet-400 text-white">Comprar Agora</button>
                </div>
                <div class="card-actions">
                    <a class="btn btn-soft" href="{{ route('site.details', $produto->slug ) }}">
                        <span class="material-symbols-outlined">visibility</span>
                        Ver detalhes
                    </a>
                </div>    
            </div>
        </div>
        @endforeach

</div>

    <div class="w-full flex justify-center my-4"> <!-- [my-4] margin eixo Y 4 tailwind -->
            {{ $produtos->links('custom.pagination') }}
    </div>

@endsection