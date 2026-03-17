<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<style>
.primo{
font-size:30px;
font-weight:bold;
}
</style>
</head>
<body>
    
<h1 style="text-align:center;">
    {{ strtoupper($curso) }}
</h1><p>Idade: {{ $idade }}</p><hr>

@for ($i = 0; $i < $idade; $i++)
@if ($primo)

<div class="primo">{{ $nome }}</div>
@else

<div>{{ $nome }}</div>
@endif
@endfor

</body>
</html>