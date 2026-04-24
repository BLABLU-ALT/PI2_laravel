<!DOCTYPE html>
<html lang="pt-br">
<head>
            <meta charset="UTF-8">
            <title>Cadastro de Produtos</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <head>

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
<div class="container mt-4">

    <h1 class="mb-4">Painel de Cotações</h1>

    @if(session('erro'))
        <div class="alert alert-danger">
            {{ session('erro') }}
        </div>
    @endif

    @if(isset($cotacoes))
        <div class="row">

            <!-- DÓLAR -->
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h4>Dólar</h4>

                        <p><strong>Compra:</strong> R$ {{ number_format((float) $cotacoes['USDBRL']['bid'], 2, ',', '.') }}</p>
                        <p><strong>Venda:</strong> R$ {{ number_format((float) $cotacoes['USDBRL']['ask'], 2, ',', '.') }}</p>
                        <p><strong>Máxima:</strong> R$ {{ number_format((float) $cotacoes['USDBRL']['high'], 2, ',', '.') }}</p>
                        <p><strong>Mínima:</strong> R$ {{ number_format((float) $cotacoes['USDBRL']['low'], 2, ',', '.') }}</p>
                        <p><strong>Atualizado:</strong> {{ $cotacoes['USDBRL']['create_date'] }}</p>
                    </div>
                </div>
            </div>

            <!-- EURO -->
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h4>Euro</h4>

                        <p><strong>Compra:</strong> R$ {{ number_format((float) $cotacoes['EURBRL']['bid'], 2, ',', '.') }}</p>
                        <p><strong>Venda:</strong> R$ {{ number_format((float) $cotacoes['EURBRL']['ask'], 2, ',', '.') }}</p>
                        <p><strong>Máxima:</strong> R$ {{ number_format((float) $cotacoes['EURBRL']['high'], 2, ',', '.') }}</p>
                        <p><strong>Mínima:</strong> R$ {{ number_format((float) $cotacoes['EURBRL']['low'], 2, ',', '.') }}</p>
                        <p><strong>Atualizado:</strong> {{ $cotacoes['EURBRL']['create_date'] }}</p>
                    </div>
                </div>
            </div>

        </div>
    @endif

</div>

</body>
</html>