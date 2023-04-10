<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado General Movadoj</title>
</head>
<body>
    <h1>Listado General Movadoj</h1>
    <table>
        <thead>
            <tr>
                <th>Orden</th>
                <th>Centro</th>
                <th>Nombre</th>
                <th>ApellidoUno</th>
                <th>ApellidoDos</th>
                <th>Procedencia</th>
                <th>Destino</th>
                <th>Planta</th>
                <th>Fecha Entrada</th>
                <th>Hora Entrada</th>
                <th>Fecha Salida</th>
                <th>Hora Salida</th>
                <th>Vehiculo</th>
                <th>Motivo</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($Movimientos as $movimiento)
                <tr>
                    <td>{{ $movimiento->MovOrden }}</td>
                    <td>{{ $movimiento->MovCentro }}</td>
                    <td>{{ $movimiento->MovNombre }}</td>
                    <td>{{ $movimiento->MovApellidoUno }}</td>
                    <td>{{ $movimiento->MovApellidoDos }}</td>
                    <td>{{ $movimiento->MovProcedencia }}</td>
                    <td>{{ $movimiento->MovDestino }}</td>
                    <td>{{ $movimiento->MovPlanta }}</td>
                    <td>{{ $movimiento->MovFechaEntrada }}</td>
                    <td>{{ $movimiento->MovHoraEntrada }}</td>
                    <td>{{ $movimiento->MovFechaSalida }}</td>
                    <td>{{ $movimiento->MovHoraSalida }}</td>
                    <td>{{ $movimiento->MovVehiculo }}</td>
                    <td>{{ $movimiento->MovMotivo }}</td>
                </tr>
            @empty
                <tr><td>No hay datos en la bbdd</td></tr>
            @endforelse

        </tbody>
    </table>
</body>
</html>
