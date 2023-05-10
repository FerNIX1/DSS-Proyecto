<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Menu Cliente</title>
</head>
<body>
    <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4
            border-botton">
            <a class="d-flex align-items-center col-md-3 mb-2 mb-md-0 
            text-dark text-decoration-none">
            <h2>sesion ADMIN</h2>
            </a>
        <div class="col-md-3 text-end">
      <button type="button" class="btn btn-outline-primary me-2">  <a href="{{route('logout')}}">Salir</a></button></a>
        </div>
            </header>
            </div>
            <article class="container">
                

            </article>
           

            {{-- ========================================== --}}
            <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Name</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Name" name="name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
                  </div>
                </div>
               
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputfecha">fecha</label>
                    <input type="date" class="form-control" id="inputCity" name="fecha">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputState">Correo</label>
                    <input type="email" class="form-control" id="inputCity" name="fecha">
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip">Dui</label>
                    <input type="text" class="form-control" id="inputZip" name="dui">
                  </div>
                </div>
               
                <button type="submit" class="btn btn-primary">Agregar</button>
              </form>
</body>
</html>