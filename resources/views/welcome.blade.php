<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Anton|Chilanka|Lobster&display=swap" rel="stylesheet">
        <title>BEER HOUR</title>
                <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        {{-- <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> --}}

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="beerhour">
            <img src="img/logo.png" alt="logo_beerhour">
            <h1>beer hour</h1>
            <h2>Don´t Worry Beer Happy</h2>
            </div>
            <div class="text3" id="distinto">
              <img src="img/botellas-cerveza.png" alt="foto1r">
              <h2>¿Queres variedad?</h2>
              <h3>¡Encuentra a los Brewers que se ajusten a tus gustos!</h2>
            </div>
            <div class="text3">
              <img src="img/_DSC0202.jpg" alt="foto2">
              <h2>¿Buscando gente a quien enseñarle tu cerveza?</h2>
              <h3>¡Aqui te encontraran ellos primero!</h2>
            </div>
            <div class="text3">
              <img src="img/mesa-vaso.png" alt="fot3">
              <h2>¿Sos mayorista?</h2>
              <h3>¡Este es tu lugar!</h3>
            <a href="{{ route('register') }}">Register</a>
            </div>


            </div>
        </div>
    </body>
</html>
