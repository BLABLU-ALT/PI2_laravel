<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

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

        return redirect()->route('produtos.index')
            ->with('success', 'Produto cadastrado com sucesso!');
    }

    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
    }

    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', compact('produto'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|max:100',
            'categoria' => 'required|max:100',
            'marca' => 'required|max:100',
            'preco' => 'required|numeric',
            'quantidade' => 'required|integer'
        ]);

        $produto = Produto::findOrFail($id);

        $produto->update([
            'nome' => $request->nome,
            'categoria' => $request->categoria,
            'marca' => $request->marca,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade
        ]);

        return redirect()->route('produtos.index')
            ->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return redirect()->route('produtos.index')
            ->with('success', 'Produto excluído com sucesso!');
    }
}