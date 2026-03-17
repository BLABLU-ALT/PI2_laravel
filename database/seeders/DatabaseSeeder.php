<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    \App\Models\Produto::create([
        'nome' => 'Notebook Dell',
        'categoria' => 'Computador',
        'marca' => 'Dell',
        'preco' => 3500.00,
        'quantidade' => 10
    ]);

    \App\Models\Produto::create([
        'nome' => 'Impressora HP',
        'categoria' => 'Impressora',
        'marca' => 'HP',
        'preco' => 899.90,
        'quantidade' => 5
    ]);

    \App\Models\Produto::create([
        'nome' => 'iPhone 13',
        'categoria' => 'Celular',
        'marca' => 'Apple',
        'preco' => 4200.00,
        'quantidade' => 8
    ]);

    \App\Models\Produto::create([
        'nome' => 'Monitor LG 24',
        'categoria' => 'Monitor',
        'marca' => 'LG',
        'preco' => 950.00,
        'quantidade' => 7
    ]);

    \App\Models\Produto::create([
        'nome' => 'Teclado Redragon',
        'categoria' => 'Periférico',
        'marca' => 'Redragon',
        'preco' => 180.00,
        'quantidade' => 15
    ]);
    }
}
