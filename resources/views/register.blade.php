<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form method="POST" action="{{route('validar-registro')}}">
        @csrf
        <div class="mb-3">
          <label for="nombre" class="form-label">Name</label>
          <input type="text" class="form-control" id="nombre" name="name">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">fecha</label>
          <input type="date" class="form-control" id="exampleInputPassword1" name="fecha">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Dui</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="dui">
        </div>
      
       
     
        <button type="submit" class="btn btn-primary">Registrar</button>
      </form>
    </div>
    
</body>
</html>