<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    // Exibe os itens salvos na sessão
    public function carrinhoLista() 
    {
        $itens = session()->get('carrinho', []);
        return view('site.carrinho', compact('itens'));
    }

    // Adiciona um novo item ou incrementa a quantidade se já existir
    public function adicionaCarrinho(Request $request) 
    {
        $carrinho = session()->get('carrinho', []);
        $id = $request->id;

        if (isset($carrinho[$id])) {
            $carrinho[$id]['qnt'] += $request->qnt;
        } else {
            $carrinho[$id] = [
                'id' => $request->id,
                'name' => $request->name,
                'price' => $request->price,
                'qnt' => $request->qnt,
                'img' => $request->img
            ];
        }

        session()->put('carrinho', $carrinho);

        return redirect()->route('site.carrinho')->with('sucesso', 'Produto adicionado ao carrinho com sucesso!');
    }

    // Remove um item do carrinho
    public function removeCarrinho(Request $request)
    {
        $carrinho = session()->get('carrinho', []);

        if (isset($carrinho[$request->id])) {
            unset($carrinho[$request->id]);
            session()->put('carrinho', $carrinho);
        }

        return redirect()->route('site.carrinho')->with('sucesso', 'Item removido com sucesso!');
    }

    // Limpa todo o carrinho
    public function limparCarrinho()
    {
        session()->forget('carrinho');
        return redirect()->route('site.carrinho')->with('sucesso', 'Carrinho esvaziado!');
    }
}