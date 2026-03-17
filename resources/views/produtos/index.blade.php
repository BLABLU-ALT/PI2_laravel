<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
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

    <h1>Produtos Cadastrados</h1>

    @if(session('success'))
        <div class="sucesso">
            {{ session('success') }}
        </div>
    @endif

    <div class="topo">
        <a class="botao" href="/produtos/cadastro">Novo Produto</a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Marca</th>
            <th>Preço</th>
            <th>Quantidade</th>
        </tr>

        @foreach($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->categoria }}</td>
                <td>{{ $produto->marca }}</td>
                <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                <td>{{ $produto->quantidade }}</td>
            </tr>
        @endforeach
    </table>

</body>
</html>