<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:100',
            'categoria' => 'required|max:100',
            'marca' => 'required|max:100',
            'preco' => 'required|numeric',
            'quantidade' => 'required|integer'
        ]);

        Produto::create([
            'nome' => $request->nome,
            'categoria' => $request->categoria,
            'marca' => $request->marca,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade
        ]);

        return redirect('/produtos')->with('success', 'Produto cadastrado com sucesso!');
    }

    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
    }
}
