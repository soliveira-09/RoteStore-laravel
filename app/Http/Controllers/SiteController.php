<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produto; // Usa o Model para se comunicar com a tabela
use App\Models\Categoria;

class SiteController extends Controller
{
    public function index()
    {
        $produtos = produto::paginate(8); // [= produto::] é o model
        return view('site.home', compact('produtos'));
    }

    public function details($slug)
    {
        $produto = produto::where('slug', $slug)->first();
        return view('site.details', compact('produto'));
    }

    public function categoria($id)
    {
        $categoria = Categoria::find($id);
        $produtos = produto::where('id_categoria', $id)->paginate(4);
        return view('site.categoria', compact('produtos', 'categoria'));
    }

}