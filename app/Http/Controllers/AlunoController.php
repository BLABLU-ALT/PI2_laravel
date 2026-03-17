<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function resultado(Request $request)
    {
        $nome = $request->nome;
        $curso = $request->curso;
        $ano = $request->ano;
        $idade = date("Y") - $ano;
        $primo = true;

        if ($idade < 2){
            $primo = false;
        }
        for ($i = 2; $i < $idade; $i++){
            if($idade % $i == 0){
                $primo = false;
            }
        }
        return view ('resultado', compact('nome','curso','idade','primo'));
    }
}