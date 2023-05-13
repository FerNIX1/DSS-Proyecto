<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>crear cuenta</title>
</head>
<body>
    <form method="POST" action="{{ route('guardar-cuenta') }}">
        @csrf
    
        <h1>Crear cuenta</h1>
    
        <label for="monto">Monto:</label>
        <input type="text" name="monto" id="monto">
    
        <label for="tipo-cuenta">Tipo de cuenta:</label>
        <select name="tipo-cuenta" id="tipo-cuenta">
            <option value="corriente">Cuenta corriente</option>
            <option value="ahorro">Cuenta de ahorro</option>
            <option value="nomina">Cuenta nómina</option>
        </select>
    
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
