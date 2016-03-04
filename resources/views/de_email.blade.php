<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/app.css"/>

        <style type="text/css">
            body {
                padding: 1em;;
                background-color: #52d3aa;
            }
            .container {
                padding: 2.5em;
                margin: 0 auto 2.5em;
                background-color: #ffffff;
            }
            .link {
                display: table;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Curso-PHP-Laravel-Completo-E-Total</h1>

            <p>Olá, <strong>{{$params['para_usuario_github']}}</strong></p>
            <p>O seu amigo <strong>{{$params['de_usuario_github']}}</strong> quer lhe conviar para conhecer o curso de Laravel
                totalmente de graça fornecido pela <a href="https://github.com/Webschool-io/Curso-PHP-Laravel-Completo-E-Total" target="_blank">webschool.io</a>.
            </p>

            <p>Esse é um convite especial enviado pelo seu amigo que deseja concorrer ao sorteio que vamos realizar. </p>

            <h2><a href="{{asset(sprintf('/curso/confirmar-participacao/%s/%s', $params['token'], $params['de_usuario_github']))}}" target="_blank">Para confirmar o convite enviado clique aqui</a></h2>
        </div>
        <div class="container">
            <h1>Realização e apoio</h1>

            <a href="" class="link">
                <img src="http://webschool.io/assets/images/logo-webschool.png" width="250"/>
            </a>
        </div>
    </body>
</html>
