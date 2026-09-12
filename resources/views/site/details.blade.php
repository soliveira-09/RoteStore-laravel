@extends('site/layout')
@section('title', 'Detalhes do produto')
@section('conteudo')

<div class="container mx-auto my-8 px-4">
    <div class="flex flex-col md:flex-row itens-center justify-center gap-8">
        <!-- Imagem -->
        <div class="w-full md:w-1/2 flex justify-center">
            <img src="{{$produto->imagem}}" class="rounded-xl max-w-md w-full object-cover shadow-md">
        </div>
    
        <!-- Informações -->
        <div class="w-full md:w-1/2 space-y-4">
            <h1 class="text-4xl font-bold"> {{$produto->nome }}</h1>
            <h1 class="text-4xl"> R$ {{number_format($produto->preco, 2, ',', '.' )}}</h1>
            <p class="text-xl leading-relaxed"> {{$produto->descricao }} </p>
            <p class="text-xl leading-relaxed">
                Postado por: {{$produto->user->firstname}} <br>
                Categoria: {{$produto->categoria->nome}}
            </p>
            <form action="{{route('site.addcarrinho')}}" class="space-y-4" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$produto->id}}">
                <input type="hidden" name="name" value="{{$produto->nome}}">
                <input type="hidden" name="price" value="{{$produto->preco}}">
                <input type="hidden" name="img" value="{{$produto->imagem}}">
                
                <div class="flex items-center gap-3">
                    <label for="qnt" class="font-medium">Quantidade:</label>
                    <input type="number" name="qnt" value="1" min="1" class="input input-bordered w-40 text-center font-bold">
                </div>
                
                <div>
                    <button type="submit"class="btn bg-violet-400 hover:bg-violet-500 text-white">
                        Comprar Agora
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection