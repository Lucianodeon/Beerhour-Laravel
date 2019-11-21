@extends('layouts.app')

@section('content')
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/styles.css">
      <link href="https://fonts.googleapis.com/css?family=Anton|Chilanka|Lobster&display=swap" rel="stylesheet">
      <title>BEER HOUR</title>
      <title></title>
    </head>
    <body class="user">

      <main class="usar">
        <div class="content">
      <form method="POST" action="/addpost" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
          <label for="avatar">Ingrese una foto</label><br>
          <input type="file" id="foto" class="form-control" name="foto" value="">
          <span class="small text-danger"></span>
        </div>
        <div class="form-group row">
          <textarea name="descripcion" rows="8" cols="80" ></textarea>
        </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      Enviar
                  </button>
              </div>
          </div>
      </form>
        </div>

@foreach ($posts as $post)

  <div class="content">
    <div class="content-nav">
  <a href="/profile/{{$post->user->id}}">  <img src="storage/{{$post->user->avatar}}" alt="foto2"></a>
    <h2>{{ $post->user->email }}</h2>
    </div>
    <div class="content-img">
      <img src="storage/{{$post->foto}}" alt="foto2">
    </div>
    <div class="content-pie">
      <h3>{{ $post->descripcion }}</h3>

        <form method="POST" action="/addcoment" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
          <textarea name="descripcion" rows="8" cols="80" ></textarea>
        </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      Enviar
                  </button>
              </div>
          </div>
      </form>
    </div>
</div>

@endforeach

        <div class="content">
          <div class="content-nav">
          <img src="img/pp.jpg" alt="foto2"><h2>juancho-kpo</h2>
          </div>
          <div class="content-img">
            <img src="img/alala.jpg" alt="foto2">
          </div>
          <div class="content-pie">
            <h3>Aca tirando magia</h3>
          </div>


      <div class="content">
        <div class="content-nav">
        <img src="img/pp.jpg" alt="foto2"><h2>juancho-kpo</h2>
        </div>
        <div class="content-img">
          <img src="img/alala.jpg" alt="foto2">
        </div>
        <div class="content-pie">
          <h3>Aca tirando magia</h3>
        </div>

      </div>
      <div class="content">
        <div class="content-nav">
        <img src="img/pp.jpg" alt="foto2"><h2>juancho-kpo</h2>
        </div>
        <div class="content-img">
          <img src="img/biru.jpeg" alt="foto2">
        </div>
        <div class="content-pie">
          <h3>ビールを飲みましょうか</h3>
        </div>
      </div>

      </main>
    </body>
    </div>
  </html>


@endsection
