
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Menu Cliente</title>
	@vite("resources/css/style3.css")
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Banco de Agricultura</a>
	</nav>

	<div class="container mt-5" style="background:rgba(248, 249, 250,0.7); border-radius:10px; padding:50px; box-shadow:0px 2px 50px 10px black;">
		<div class="row">
			<div class="col-lg-6">
				<h1 style="font-weight:bold;">Menu Cliente:</h1>
				<hr>
				<div class="mb-3" style="opacity:1;">
					<a href="{{ route('Crearcuenta') }}"><button class="btn btn-block mb-2">Crear Cuenta</button></a>
					<button class="btn btn-block mb-2" style="cursor:default;">Su saldo es:</button>
					<button class="btn btn-block mb-2" id="btn-saldo" style="cursor:pointer;">$00.00 </button>
					<button type="button" class="btn btn-outline-primary me-2"><a href="{{ route('logout') }}" style="color:white;">Salir</a></button>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card">
					<table class="table">
						<thead>
							<tr>
								<th>ID</th>
								<th>Tipo de cuenta</th>
								<th>Saldo</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($cuenta as $c)
								<tr style="cursor:pointer;">
									<td>{{ $c->id }}</td>
									<td>{{ $c->TipoDeCuenta }}</td>
									<td class="saldo">{{ $c->monto }}</td>
									<td>
										<a href="{{ route('ver-cuenta', ['id' => $c->id]) }}">Ver</a>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        // Capturar el evento hover en la tabla
        $('table').on('mouseover', 'tbody tr', function() {
            // Obtener el saldo de la fila correspondiente
            var saldo = $(this).find('.saldo').text();

            // Actualizar el contenido del botón con el saldo correspondiente
            $('#btn-saldo').text(saldo);
        });
    });
</script>
</body>
</html>