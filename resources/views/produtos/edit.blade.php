<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
        <body class="container mt-4">
            <h1 class="text-warning mb-4">Cabeçalho do Site</h1>

            <div class="mb-4">
                <a href="/" class="btn btn-warning btn-sm">Home</a>
                <a href="/sobre" class="btn btn-warning btn-sm">Sobre</a>
                <a href="/contato" class="btn btn-warning btn-sm">Contato</a>
                <a href="/perfil/Jeziel" class="btn btn-warning btn-sm">Usuario</a>
                <a href="/produtos" class="btn btn-warning btn-sm">Produto</a>
                <a href="/form" class="btn btn-warning btn-sm">Formulario</a>
            </div>
            <hr>
        <body>



<body>
    <div class="container mt-4">
        <h1 class="mb-4">Editar Produto</h1>

        <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" value="{{ old('nome', $produto->nome) }}">
                @error('nome')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Categoria</label>
                <input type="text" name="categoria" class="form-control" value="{{ old('categoria', $produto->categoria) }}">
                @error('categoria')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Marca</label>
                <input type="text" name="marca" class="form-control" value="{{ old('marca', $produto->marca) }}">
                @error('marca')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Preço</label>
                <input type="number" step="0.01" name="preco" class="form-control" value="{{ old('preco', $produto->preco) }}">
                @error('preco')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Quantidade</label>
                <input type="number" name="quantidade" class="form-control" value="{{ old('quantidade', $produto->quantidade) }}">
                @error('quantidade')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Atualizar Produto</button>
            <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Voltar</a>
        </form>
    </div>
</body>
</html>