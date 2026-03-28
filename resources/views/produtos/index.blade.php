<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
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
        <h1 class="mb-4">Produtos Cadastrados</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('produtos.create') }}" class="btn btn-primary mb-3">
            Novo Produto
        </a>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Marca</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produtos as $produto)
                    <tr>
                        <td>{{ $produto->id }}</td>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->categoria }}</td>
                        <td>{{ $produto->marca }}</td>
                        <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                        <td>{{ $produto->quantidade }}</td>
                        <td>
                            <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-warning btn-sm">
                                Editar
                            </a>

                            <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Tem certeza que deseja excluir este produto?')">
                                    Excluir
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>