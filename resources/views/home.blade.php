@extends('layouts.app')

@section('content')

  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <script src="{{ asset('js/likes.js') }}" defer></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/styles.css">
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Anton|Chilanka|Lobster&display=swap" rel="stylesheet">
      <title>BEER HOUR</title>
    </head>
    <body class="user">

      <main class="usar">
        <div class="content">
      <form class = "centrar" method="POST" action="/addpost" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
          <label class = "ingresar" for="avatar">Ingrese una foto</label><br>
          <input type="file" id="foto" class="form-control" name="foto" value="">
          <span class="small text-danger"></span>
        </div>
        <div class="form-group row">
          <textarea class="redondeo" name="descripcion" rows="8" cols="80" ></textarea>
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

  <div class="content2">
    <div class="content-nav">
  <a href="/profile/{{$post->user->id}}">  <img src="/storage/{{$post->user->avatar}}" alt="foto2"></a>
    <h2>{{ $post->user->email }}</h2>
    </div>
    <div class="content-img">
      <img src="storage/{{$post->foto}}" alt="foto2">
    </div>
    <div class="content-pie">
      <h3>{{ $post->descripcion }}</h3>
      <div class="panel-footer">
                               <h4><a href="#" title="Nature Portfolio">{{ $post->title }}</a></h4>
                               <span class="pull-right like">
                                   <div class="like-btn">
                                       <i id="like{{$post->id}}" class="glyphicon glyphicon-thumbs-up {{ auth()->user()->hasLiked($post) ? 'like-post' : '' }}"></i> <span id="like{{$post->id}}-bs3">{{ $post->likers()->get()->count() }}</span>
                                   </div>
                               </span>
      </div>
      @if ($post->cantidadComentarios==null)
        <h3>{{"No hay comentarios, Soyez le premier!"}}</h3>
      @else @for ($i=0; $i <=$post->cantidadComentarios ; $i++)
        {{$post->$i->descripcion}}
      @endfor
      @endif
        <form class="centro-comentario" method="POST" action="/addcoment" enctype="multipart/form-data">
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
</div>
@endforeach



      </main>
      </div>
    </body>



  </html>


@endsection
