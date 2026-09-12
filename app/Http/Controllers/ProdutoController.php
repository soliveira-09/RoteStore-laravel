<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $produtos = produto::paginate(8);

        return view('site.home', compact('produtos'));

        //return('index');

        //$produtos = produto::all(); //::all mostra todos os atributos do model
        //dd($produtos);

        /*
        $nome = 'Rodrigo';
        $idade = 28;
        $frutas = ['banana', 'uva', 'maçã', 'figo', 'lightfruit'];
        $ocupacao = 'Automobs';
        $html = '<h1> Olá, eu sou H1 </h1>';
        */
            
        //return view('site.home', compact('nome', 'idade', 'ocupacao', 'html', 'frutas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
