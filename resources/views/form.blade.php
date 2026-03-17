<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body class="container mt-4">

    <h2 class="mb-4">Cadastro</h2>
    <form method="POST" action="/resultado">
        @csrf
        <x-input label="Nome" name="nome" type="text" />
        <x-input label="Ano de nascimento" name="ano" type="number" />
        <x-input label="Curso" name="curso" type="text" />
    <x-button>
       Enviar
     </x-button>
     </form>
</body>
</html>