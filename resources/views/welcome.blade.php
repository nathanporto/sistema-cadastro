<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bem vindo - NathanBoard</title>

    </head>
    <body>
        <h1>Cadastro - Nathan</h1>

        <a href="{{route('user.create') }}">Cadastrar</a>
    </body>
</html>
