<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Registro</title>
    @vite("resources/css/style2.css")
</head>
<body>
  <div id="barra">
		<a class="waves-effect waves-light btn ">Banco de agricultura</a>
	</div>
  <br><br>
  <form method="POST" action="{{route('validar-registro')}}">
    @csrf
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre: </label>
      <input type="text" class="form-control" id="nombre" name="name">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Contraseña:</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Fecha de nacimiento:</label>
      <input type="date" class="form-control" id="exampleInputPassword1" name="fecha">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Correo: </label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">DUI:</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="dui">
    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
  </form>
    </div>
    
    <br>
</body>
</html>