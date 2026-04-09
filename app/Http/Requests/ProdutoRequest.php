<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:100',
            'categoria' => 'required|string|max:100',
            'marca' => 'required|string|max:100',
            'preco' => 'required|numeric|min:0',
            'quantidade' => 'required|integer|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.string' => 'O nome deve conter apenas texto.',
            'nome.max' => 'O nome pode ter no máximo 100 caracteres.',

            'categoria.required' => 'O campo categoria é obrigatório.',
            'categoria.string' => 'A categoria deve conter apenas texto.',
            'categoria.max' => 'A categoria pode ter no máximo 100 caracteres.',

            'marca.required' => 'O campo marca é obrigatório.',
            'marca.string' => 'A marca deve conter apenas texto.',
            'marca.max' => 'A marca pode ter no máximo 100 caracteres.',

            'preco.required' => 'O campo preço é obrigatório.',
            'preco.numeric' => 'O preço deve ser um número válido.',
            'preco.min' => 'O preço não pode ser negativo.',

            'quantidade.required' => 'O campo quantidade é obrigatório.',
            'quantidade.integer' => 'A quantidade deve ser um número inteiro.',
            'quantidade.min' => 'A quantidade não pode ser negativa.',
        ];
    }
}