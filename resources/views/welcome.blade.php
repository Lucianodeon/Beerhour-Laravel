<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Anton|Chilanka|Lobster&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/css/uikit.min.css" />

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
            <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slideshow="animation: push">

                <ul class="uk-slideshow-items">
                    <li>
                        <img src="img/_DSC0109.jpg"  alt="" uk-cover>
                        <div class="uk-position-center uk-position-small uk-text-center uk-light">
                            <h2 class="uk-margin-remove">¿Queres variedad?</h2>
                            <p class="uk-margin-remove">¡Encuentra a los Brewers que se ajusten a tus gustos!</p>
                        </div>
                    </li>
                    <li>
                        <img src="img/_DSC0202.jpg" alt="" uk-cover>
                        <div class="uk-position-bottom uk-position-medium uk-text-center uk-light">
                            <h3 class="uk-margin-remove">¿Buscando gente a quien enseñarle tu cerveza?</h3>
                            <p class="uk-margin-remove">¡Aqui te encontraran ellos primero!</p>
                        </div>
                    </li>
                    <li>
                        <img src="img/mesa-vaso.png" alt="" uk-cover>
                        <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center">
                            <h3 class="uk-margin-remove">¿Sos mayorista?</h3>
                            <p class="uk-margin-remove">¡Este es tu lugar!</p>
                        </div>
                    </li>
                    <li>
                        <img src="img/_DSC0216.jpg" alt="" uk-cover>
                          <div class="uk-overlay uk-overlay-default uk-position-bottom-right uk-position-small">
                            <h3 class="uk-margin-remove">Registrate aca! Barrilete Cosmico!</h3>
                            <p class="uk-margin-remove"><a href="{{ route('register') }}">Register</a></p>
                          </div>
                        </li>

                </ul>

                <div class="uk-light">
                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
                </div>

            </div>




            </div>

        <script src="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/js/uikit-icons.min.js"></script>
    </body>
</html>
