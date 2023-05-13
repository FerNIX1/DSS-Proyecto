<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Agregar las referencias de Bootstrap 4 -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Crear Cuenta</title>
      @vite("resources/css/style2.css")
    </head> 
   <body>
      <div class="container">
      <h1>Crear Cuenta</h1>
      <form>
         <div class="form-group">
            <label for="monto">Monto:</label>
            <input type="text" class="form-control" id="monto">
         </div>
         <div class="form-group">
            <label for="tipo-cuenta">Tipo de Cuenta:</label>
            <input type="text" class="form-control" id="tipo-cuenta">
         </div>
         <div class="form-group">
            <label for="numero-cuenta">Numero de Cuenta:</label>
            <input type="text" class="form-control" id="numero-cuenta">
         </div>
         <div class="form-group">
            <label for="user-id">User ID:</label>
            <input type="text" class="form-control" id="user-id">
         </div>
         <button type="submit" class="btn btn-primary">Crear Cuenta</button>
      </form>
      </div>

      <br><br>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   </body>
   </html>