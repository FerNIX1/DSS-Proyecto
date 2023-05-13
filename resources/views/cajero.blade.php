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
        <h2>Cajero</h2>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li><a href="{{route('cliente')}}">Ingresar nuevo cliente o prestamista</a></li>
                    <li><a href="{{route('dependientes')}}">Agregar dependientes del banco</a></li>
                    <li><a href="{{route('ingresarretirar')}}">Ingresar o retirar dinero a una cuenta</a></li>
                </ul>
            </div>
        </div>
    </div>

</body>
</html>