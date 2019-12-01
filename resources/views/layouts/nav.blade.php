<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Anton|Chilanka|Lobster&display=swap">
    <title></title>
  </head>
  <body>
    @yield('content')
    <nav class="nav">
      <ul class = "ul">
        <li><a class="izquierda a" href= @php view("home")@endphp >Home</a></li>
        <li><a class="izquierda a" href= @php view("profile")@endphp >Perfil</a></li>
        <li> <div class="search">
          <form class="izquierda" action="search.php" method="post">
          <input class="buscador izquierda" type="text" name="query" placeholder="Buscar...">
          <button type="submit" name="submit-search" value="search">Enviar</button>
        </form></div></li>
        <li><a class="derecha a" href="logout.php">Logout</a></li>
      </ul>
      <button id="myBtn" class="refresh" onclick="topFunction()" value="Refresh Page">Refresh</button>
    </nav>
    <script src="{{ asset('js/refresh.js') }}"></script>
  </body>
</html>
