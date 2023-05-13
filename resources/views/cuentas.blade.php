<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cuentas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @vite("resources/css/style2.css")
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Banco de Agricultura</a>
	</nav>
<br><br>
    <div class="container " style="background:white; border-radius:10px;">
        <div class="row">
          <div class="col-md-6" style="border: 1px solid #a1a6ad">
            <h2 class="text-center p-4">Cuentas</h2>
            <table class="table table-striped" >
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Tipo de cuenta</th>
                  <th>Saldo</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($cuentas as $c)
                <tr>
                  <td>{{ $c->id }}</td>
                  <td>{{ $c->TipoDeCuenta }}</td>
                  <td>{{ $c->monto }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="col-md-6" style="border: 1px solid #a1a6ad">
            <h2 class="text-center p-4" >Movimientos</h2>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Acciones</th>
                  <th>Cantidad</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($transacciones as $t)
                  @if ($t->cuenta_id == $c->id)
                  <tr>
                    <td>{{ $t->tipo }}</td>
                    <td>{{ $t->monto }}</td>
                  </tr>
                  @endif
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <br><br><br><br><br><br><br><br><br><br><br><br> <br>
</body>
</html>