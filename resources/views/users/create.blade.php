<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css'])

    <title>Cadastrar - NathanBoard</title>
</head>

<body>

    <div class="main-container">

        <header class="header">
            <div class="content-header">
                <h2 class="title-logo"><a href="{{ route('dashboard') }}">NathanBoard</a></h2>
                <ul class="list-nav-link">
                    <li><a href="#" class="nav-link">Usuários</a></li>
                    <li><a href="{{ route('dashboard') }}" class="nav-link">Sair</a></li>
                </ul>
            </div>
        </header>

        <div class="content">
            <div class="content-title">
                <h1 class="page-title">Cadastrar Usuário</h1>
                <a href="#" class='btn-primary'>Listar</a>
            </div>




           

        <form action="{{ route('user.store') }}" method='POST' class="form-container">
            @csrf

            <div class="mb-4">
                <label for="name" class="form-label">Nome: </label>
                <input type="text" name="name" id="name" placeholder="Digite seu Nome Completo"
                    value="{{ old('name') }}" required class="form-input">
            </div>

            <div class="mb-4">
                <label for="email" class="form-label">Email: </label>
                <input type="email" name="email" id="email" placeholder="Digite seu melhor e-mail"
                    value="{{ old('email') }}" required class="form-input">


                <div class="mb-4">
                    <label for="password" class="form-label">Senha: </label>
                    <input type="password" name="password" id="password" placeholder="Digite sua senha"
                        value="{{ old('password') }}" required class="form-input">
                </div>

                <button type="submit" class="btn-success">Cadastrar</button>

                @if (session('success'))
                <p style='color:#086'>
                    {{ session('success') }}
    
                </p>
            @endif
    
            @if (session('error'))
                <p style='color:#f00'>
                    {{ session('error') }}
    
                </p>
            @endif

        </form>


        </div>




     




</body>

</html>
