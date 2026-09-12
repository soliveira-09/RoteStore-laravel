@extends('site/layout')
@section('title', 'Carrinho')
@section('conteudo')

@if ($mensagem = Session::get('sucesso'))
    <div class="card bg-emerald-400 text-white shadow-sm my-4 mx-4 md:mx-12 px-4">
        <div class="card-body">
            <h1 class="card-title text-2xl">Parabéns!</h1>
            <p class="text-lg">{{$mensagem}}</p>
        </div>
    </div>
@endif

<div class="container mx-auto px-4 my-6">
    <h1 class="text-2xl md:text-3xl font-bold mb-6">Seu carrinho possui {{count($itens)}} produtos</h1>

    <!-- Contêiner responsivo para a Tabela -->
    <div class="overflow-x-auto bg-base-100 rounded-box shadow-sm border border-base-200">
        <table class="table w-full min-w-[600px]">
            <thead>
                <tr>
                    <th>Imagem</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($itens as $item)
                <tr>
                    <td><img src="{{$item['img']}}" alt="" class="w-12 h-12 object-cover rounded-full"></td>
                    <td class="font-medium">{{$item['name']}}</td>
                    <td>R$ {{$item['price']}}</td>
                    <td><input type="number" class="input input-bordered input-sm w-20 text-center" min="1" value="{{$item['qnt']}}" name="quantity"></td>
                    <td class="flex justify-center gap-1">
                        <button class="btn btn-sm btn-square btn-ghost"><span class="material-symbols-outlined text-base">add</span></button>
                        <button class="btn btn-sm btn-square btn-ghost"><span class="material-symbols-outlined text-base">remove</span></button>
                        <button class="btn btn-sm btn-square btn-ghost text-error"><span class="material-symbols-outlined text-base">delete</span></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Botões Empilhados no Mobile, Lado a Lado no Desktop -->
    <div class="flex flex-col md:flex-row items-stretch md:items-center justify-start gap-3 mt-6">
        <button class="btn bg-violet-400 hover:bg-violet-500 text-white w-full md:w-auto">
            <span class="material-symbols-outlined">arrow_back</span>
            Continuar Comprando
        </button>
        <button class="btn bg-red-400 hover:bg-red-500 text-white w-full md:w-auto">
            <span class="material-symbols-outlined">delete_forever</span>
            Limpar Carrinho
        </button>
        <button class="btn bg-emerald-400 hover:bg-emerald-500 text-white w-full md:w-auto">
            <span class="material-symbols-outlined">shopping_bag</span>
            Finalizar Pedido
        </button>
    </div>
</div>
@endsection