<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style type="text/css">
		body {
			background-image: url(../img/WhatsApp\ Image\ 2023-04-29\ at\ 7.29.05\ PM.jpeg);
			background-size:auto;

			background-repeat: no-repeat;
			font-family: Arial, sans-serif;
			color: #333;
			margin: 0;
			padding: 0;
		}
		
		hr {
			border: 0;
			height: 1px;
			background-color: #ddd;
			margin: 20px 0;
		}
		button {
			background-color: #2c3e50;
			border: none;
			color: #fff;
			padding: 12px 24px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
			border-radius: 4px;
			transition: all 0.2s ease-in-out;
			box-shadow: 0 2px 5px rgba(0,0,0,0.1);
		}
		button:hover:nth-child(1) {
			background-color: #1c6383;
			box-shadow: 0 2px 5px rgba(0,0,0,0.2);
		}
		button:hover:nth-child(4) {
			background-color: #1c6383;
			box-shadow: 0 2px 5px rgba(0,0,0,0.2);
		}
		table {
			border-collapse: collapse;
			width: 100%;
			margin: 20px 0;
		}
		th, td {
			text-align: left;
			padding: 8px;
		}
		tr:nth-child(even){background-color: #f2f2f2}
		th {
			background-color: #2980b9;
			color: #fff;
			
		}
	</style>
</head>
<body>
	<?php
	echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">';
	echo '<a class="navbar-brand" href="#">Banco de Agricultura</a>';

	echo '</div>';
	echo '</nav>';
	
	echo '<div class="container mt-5" style="background:rgba(248, 249, 250,0.7); border-radius:10px; padding:50px; box-shadow:0px 2px 50px 10px black;">';
	echo '<div class="row">';
	echo '<div class="col-lg-6">';
	echo '<h1 style="font-weight:bold;">Menu Cliente</h1>';
	echo '<hr>';
	echo '<div class="mb-3" style="opacity:1;">';
	echo '<a href="crearCuentaCliente.php"><button class="btn  btn-block mb-2">Crear Cuenta</button></a>';
	echo '<button class="btn btn-block mb-2" style="cursor:default;">Su saldo es:</button>';
	echo '<button class="btn btn-block mb-2" style="cursor:default;">$00.00 </button>';
    echo '<button type="button" class="btn btn-outline-primary me-2"><a href="' . route('logout') . '">Salir</a></button>';
	echo '</div>';
	echo '</div>';
	echo '<div class="col-lg-6">';
	echo '<div class="card">';
	echo '<table class="table">';
	echo '<thead>';
	echo '<tr>';
	echo '<th>Movimientos</th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';
	echo '<tr>';
	echo '<td>.</td>';
	echo '</tr>';

	echo '</tbody>';
	echo '</table>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
	echo '</div>';	
	?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>