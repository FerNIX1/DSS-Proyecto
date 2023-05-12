<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cuentas</title>
</head>
<body>
    <h1>cuenta</h1>
    <table class="table">
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
    <table>
        <h1>movimientos</h1>
        <thead>
            <tr>
                <th>id_cuenta</th>
                <th>Acciones</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transacciones as $t)
                @if ($t->cuenta_id == $c->id)
                    <tr>
                        <td>{{ $t->cuenta_id}}</td>
                        <td>{{ $t->tipo }}</td>
                        <td>{{ $t->monto }}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</body>
</html>