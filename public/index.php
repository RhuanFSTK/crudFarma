<?php
require "../vendor/autoload.php"
?>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            background: #155111;
            background: -webkit-linear-gradient(to right, #155111, #155111);
            background: linear-gradient(180deg, rgba(21,81,17,1) 0%, rgba(21,81,17,0.76234243697479) 25%, rgba(255,255,255,1) 100%);
            color: white;
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
            color: #155111;
            border: 4px solid #086E40;
            border-radius: 25px;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>
<body class="text-center">
    <div class="form-signin bg-light">
        <form action="validacaoLogin" method="POST">
            <img class="mb-4" src="https://yt3.googleusercontent.com/O7o_mLezXaahpOJc75cfiuYRZ7y7eM6vrA2DbMDEgWuW5-sXX1Wj4K6ikfuE3-8aDNEwdw2lnw=s900-c-k-c0x00ffffff-no-rj" alt="" width="72">
            <h1 class="h3 mb-3 fw-normal">Acesse sua conta</h1>
            <div class="form-floating">
                <input type="text" class="form-control" name="usuario" placeholder="name@example.com">
                <label for="floatingInput">Usuário</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="senha" placeholder="Password">
                <label for="floatingPassword">Senha</label>
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Lembrar-me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-dark mb-2" type="submit">Entrar</button>
            <div>
                <a href="#" >Cadastre-se</a>
            </div>
            <p class="mt-4 mb-3 text-muted">&copy; 1961–2023</p>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
</body>
