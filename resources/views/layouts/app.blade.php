<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <header> <!-- Encabezadp -->
    <nav class="main-nav">

      <a href=@php view("home") @endphp><h2 class="logo"><img src="img/logo.png" alt="logo_beerhour"> BEER HOUR</h2></a>

      <ul class="menu access">
        <li><a class="usuarios" href="{{ route('users') }}"> Users </a></li>
        <li><a href=><img src="img/profile.png" alt="profile"></a></li>
        <li><a href="{{ route('logout') }}"><img src="img/exit.png" alt="logout"></a></li>
      </ul>

    </nav>
  </header>

  @yield('content')

</body>
</html>
