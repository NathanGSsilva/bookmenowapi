<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - BookMeNow</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        #login {
            flex-basis: 400px;
            flex-grow: 0;
            flex-shrink: 1;
            /* flex: 0 1 400px; */

        }
    </style>

</head>

<body>

    <div class="container">

        <header id="cabecalho" class="bg-secondary">
            <div class="row justify-content-between align-items-center">
                <div class="col-2">
                    <h1 class="ps-3 text-white">ADMIN</h1>
                </div>
                <div class="col-2 text-end pe-4">
                    <a href="{{ route('logout') }}" class="btn btn-primary">Sair</a>
                </div>
            </div>
        </header>

        <main class="row">

            <div id="menu" class="col-md-2">
                <nav>
                    <ul class="list-group mt-3">
                        <li class="list-group-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="list-group-item"><a href="{{ route('categoria.index') }}">Categorias</a></li>
                        <li class="list-group-item"><a href="{{ route('servico.index') }}">Serviços</a></li>
                        <li class="list-group-item"><a href="{{ route('usuario.index') }}">Usuários</a></li>
                    </ul>
                </nav>

            </div>

            <div id="conteudo" class="col-md-10 mt-3">

                @yield('conteudo')

            </div>
        </main>

        <footer class="mt-5 text-center bg-light p-2">
            &copy; 2024 - Todos os direitos são reservados
        </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
