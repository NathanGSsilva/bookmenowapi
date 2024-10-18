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

        .boxLogin {
            max-width: 400px;
            padding: 32px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>

</head>

<body>

    <div class="login-container">

        <div class="boxLogin">
            <div class="login-logo text-center">
                <img src="{{ asset('img/logo.png') }}" width="300" alt="logo">

                <h4>Login</h4>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $erro)
                                <li>{{ $erro }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <form method="post" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" name="password" id="senha" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary btn-block w-100">Entrar</button>

            </form>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
