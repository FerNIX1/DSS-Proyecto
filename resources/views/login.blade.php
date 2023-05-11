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
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Banco de Agricultura</a>
	</nav>

  <br><br><br>
    <form method="POST" action="{{route('inicia-sesion')}}">
        @csrf
      
            <div class="form-group">
              <label for="exampleInputEmail1">Correo</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="email">
              
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">contraseña</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" name="password">
            </div>
            <div>
                <p>No tienes cuenta? <a href="{{route('registro')}}">Registrarme</a></p>
            </div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
          </form>
     
    
</body>
</html>