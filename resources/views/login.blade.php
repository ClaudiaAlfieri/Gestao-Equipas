<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="shortcut icon" href="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('icons/favicon-16x16.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('icons/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('icons/favicon-192x192.png')}}">
    {{--Aple--}}
    <link rel="apple-touch-icon" href="{{asset('icons/apple-touch-icon.png')}}">

    <link rel="manifest" href="{{asset('icons/site.webmanifest')}}">

    <title>Gestão de Equipas</title>
    @vite(['resources/sass/app.scss','resources/js/app.js',])

    <style>
        .login-image {
            background-image: url('{{asset('imgs/login.png')}}');
            background-size: cover;
            background-position: center;
        }
        .login-form {
            max-width: 500px;
            min-width:400px;
            margin: auto;
        }
    </style>
</head>
<body>
<main class="main" id="top">
    <!-- Menu de topo -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center text-dark" href="#">
                <img src="{{asset('imgs/logo_base.png')}}" alt="Logo" width="40" height="40" class="me-2">
                <strong>Gestão de Equipas</strong>
            </a>
            <div class="ms-auto">
                <a href="#" class="btn btn-outline-primary">Entrar</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid min-vh-100 d-flex">
        <div class="row flex-grow-1 w-100">

            <!-- Coluna da Imagem -->
            <div class="col-md-6 d-none d-md-block login-image"></div>

            <!-- Coluna do Formulário -->
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="login-form p-4">
                    <h2 class="mb-4 text-center">Iniciar Sessão</h2>
                    <form method="POST" action="#">
                        <div class="mb-3">
                            <label for="email" class="form-label">Endereço de Email</label>
                            <input type="email" class="form-control" id="email" name="email" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Palavra-passe</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label" for="remember">Lembrar-me</label>
                        </div>
                        <button type="submit" class="btn btn-success w-100 mb-3">Entrar</button>
                        <a class="btn btn-info w-100 mb-3" href="#">Login como Admin</a>
                        <a class="btn btn-warning w-100 mb-3" href="#">Login como Treinador</a>
                        <a class="btn btn-danger w-100 mb-3" href="#">Login como Atleta</a>
                    </form>

                </div>
            </div>

        </div>
    </div>
</main>
</body>
</html>

