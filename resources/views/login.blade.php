@extends('layouts.app')


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Banco de Agricultura</title>
    @vite("resources/css/style1.css")
</head>
<body>

  <br><br><br>

    @if($errors->any())
      <div class="alert alert-danger" role="alert" style="background-color: #2a5298; border-color: #2a5298; color: #c6cfd0; padding:0.3rem 1.5rem; border-radius: 0.25rem;">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
    <form method="POST" action="{{route('inicia-sesion')}}">
        @csrf
      
            <div class="form-group">
              <label for="exampleInputEmail1">Correo</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="email" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" >
              
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">contraseña</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" name="password">
            </div>
            
            <button type="submit" class="btn btn-primary">Ingresar</button>
          </form>

          
</body>
</html>

@endsection