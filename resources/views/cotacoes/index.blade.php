<!DOCTYPE html>
<html lang="pt-br">
<head>
            <meta charset="UTF-8">
            <title>Cadastro de Produtos</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <head>
        <body>
            <body class="container mt-4">
            <h1 class="text-warning mb-4">Cabeçalho do Site</h1>

            <div class="mb-4">
                <a href="/" class="btn btn-warning btn-sm">Home</a>
                <a href="/sobre" class="btn btn-warning btn-sm">Sobre</a>
                <a href="/contato" class="btn btn-warning btn-sm">Contato</a>
                <a href="/perfil/Jeziel" class="btn btn-warning btn-sm">Usuario</a>
                <a href="/produtos" class="btn btn-warning btn-sm">Produto</a>
                <a href="/form" class="btn btn-warning btn-sm">Formulario</a>
                <a href="/cotacoes" class="btn btn-warning btn-sm">Cotação</a>
            </div>
            <hr>
        <body>
<h1>Painel de Cotações</h1>

@if(session('erro'))
    <p style="color:red;">
        {{ session('erro') }}
    </p>
@endif

@if(isset($cotacoes))
    <h2>Dólar</h2>
    <p>Compra: {{ $cotacoes['USDBRL']['bid'] }}</p>
    <p>Venda: {{ $cotacoes['USDBRL']['ask'] }}</p>

    <h2>Euro</h2>
    <p>Compra: {{ $cotacoes['EURBRL']['bid'] }}</p>
    <p>Venda: {{ $cotacoes['EURBRL']['ask'] }}</p>
@endif

</body>
</html>