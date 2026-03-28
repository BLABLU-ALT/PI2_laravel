<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ProdutoController;

Route::get('/', [PageController::class, 'home']);
Route::get('/sobre', [PageController::class, 'sobre']);
Route::get('/contato', [PageController::class, 'contato']);

Route::get('/perfil/{usuario?}', [PageController::class, 'perfil']);
Route::get('/produto/{nome}/{preco}', [PageController::class, 'produto']);

Route::get('/form', [AlunoController::class, 'form']);
Route::post('/resultado', [AlunoController::class, 'resultado']);

Route::get('/produtos/cadastro', [ProdutoController::class, 'create']);
Route::post('/produtos', [ProdutoController::class, 'store']);
Route::get('/produtos', [ProdutoController::class, 'index']);

Route::get('/produtos/cadastro', [ProdutoController::class, 'create'])->name('produtos.create');
Route::post('/produtos', [ProdutoController::class, 'store'])->name('produtos.store');
Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');

Route::get('/produtos/{id}/editar', [ProdutoController::class, 'edit'])->name('produtos.edit');
Route::put('/produtos/{id}', [ProdutoController::class, 'update'])->name('produtos.update');
Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');