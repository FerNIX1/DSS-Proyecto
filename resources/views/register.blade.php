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
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario"  name="usuario" required><br>
        <label for="contra">Contraseña:</label>
        <input type="password" id="contra"  name="contra" required><br>
        <label for="contra">Fecha de nacimiento:
        <input type="date" id="contra"  name="fecnac" > 
        </label><br>
        <label for="correos">Correo:
        <input type="mail" id="correo"  name="correo" placeholder="nombre@gmail.com"  pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required></label><br><br>
        <label for="dui">DUI:</label>		
        <input type="text"  id="dui" pattern="\d{8}-\d" name="dui" placeholder="12345678-9" required>
        <input type="submit" value="Registrar" name='submit' >
        
      </form>
    </div>
    
    <br>
</body>
</html>