<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function sobre()
    {
        return view('sobre');
    }
    public function contato()
    {
        return view('contato');
    }
    public function perfil($usuario = 'Visitante')
    {
        return view('usuario', ['usuario' => $usuario]);
    }
    public function produto($nome, $preco)
    {
        return view('produto', [
            'nome' => $nome,
            'preco' => $preco
        ]);
    }
}