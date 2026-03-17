<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
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
    <div class="container">
        <h1>Cadastro de Produtos</h1>

        <form action="/produtos" method="POST">
            @csrf

            <label>Nome:</label>
            <input type="text" name="nome" value="{{ old('nome') }}">
            @error('nome')
                <div class="erro">{{ $message }}</div>
            @enderror

            <label>Categoria:</label>
            <input type="text" name="categoria" value="{{ old('categoria') }}">
            @error('categoria')
                <div class="erro">{{ $message }}</div>
            @enderror

            <label>Marca:</label>
            <input type="text" name="marca" value="{{ old('marca') }}">
            @error('marca')
                <div class="erro">{{ $message }}</div>
            @enderror

            <label>Preço:</label>
            <input type="number" step="0.01" name="preco" value="{{ old('preco') }}">
            @error('preco')
                <div class="erro">{{ $message }}</div>
            @enderror

            <label>Quantidade:</label>
            <input type="number" name="quantidade" value="{{ old('quantidade') }}">
            @error('quantidade')
                <div class="erro">{{ $message }}</div>
            @enderror

            <button type="submit">Cadastrar Produto</button>
        </form>

        <a class="link" href="/produtos">Ver produtos cadastrados</a>
    </div>
</body>
</html>