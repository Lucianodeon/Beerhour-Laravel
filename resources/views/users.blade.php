@extends('layouts.app')


@section('content')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>BEER HOUR</title>
  </head>
  <body>

  </body>
</html>
<script src="{{ asset('js/custom.js') }}" defer></script>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Lista de Usuarios</div>


                <div class="card-body">
                    <div class="row pl-5">
                        @include('userList', ['users'=>$users])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
