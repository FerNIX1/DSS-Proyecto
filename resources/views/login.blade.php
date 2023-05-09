<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style>
      body{
        background-image: url(img/ciudad.jpeg);
        background-size:auto;
      }
      form {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        max-width: 400px;
        margin: 0 auto;
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
      }
      form label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
      }
      form input {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 10px;
        display: block;
        width: 100%;
      }
      form button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
      }
      form button:hover {
        background-color: #45a049;
      }
      .forgot-password {
        margin-top: 10px;
        text-align: right;
      }
      a {
        color: blue;
      }
    </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Banco de Agricultura</a>
	</nav>
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
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
     
    
</body>
</html>