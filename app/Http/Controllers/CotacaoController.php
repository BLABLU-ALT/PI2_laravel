<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;

class CotacaoController extends Controller
{
    public function index()
    {
        try {
            $resposta = Http::timeout(5)
                ->get("https://economia.awesomeapi.com.br/json/last/USD-BRL,EUR-BRL");
            if ($resposta->successful()) {
                $dados = $resposta->json();
                return view('cotacoes.index', ['cotacoes' => $dados]);
            }
            return back()->with('erro', 'Falha ao conectar com a API.');

        } catch (ConnectionException $e) {
            return back()->with('erro', 'A API demorou para responder.');
        }
    }
}