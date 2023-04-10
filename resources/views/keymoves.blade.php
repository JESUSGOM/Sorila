<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KeyMoves</title>
</head>
<body>
    <h1>Listado de KeyMoves desde la BBDD</h1>
    <table>
        <thead>
            <th>ORDEN</th>
            <th>LLAVE</th>
            <th>CENTRO</th>
            <th>FECHA ENTREGA</th>
            <th>HORA ENTREGA</th>
            <th>NOMBRE</th>
            <th>APELLIDO UNO</th>
            <th>APELLIDO DOS</th>
            <th>FECHA RECEPCION</th>
            <th>HORA RECEPCION</th>
        </thead>
        <tbody>
            @forelse (@KeyMoves as @km )
                <tr>
                    <td>{{ @km->KeyOrden }}</td>
                    <td>{{ @km->KeyLlvOrden }}</td>
                    <td>{{ @km->KeyCentro }}</td>
                    <td>{{ @km->KeyFechaEntrega }}</td>
                    <td>{{ @km->KeyHoraEntrega }}</td>
                    <td>{{ @km->KeyNombre }}</td>
                    <td>{{ @km->KeyApellidoUno }}</td>
                    <td>{{ @km->KeyApellidoDos }}</td>
                    <td>{{ @km->KeyFechaRecepcion }}</td>
                    <td>{{ @km->KeyHoraRecepcion }}</td>
                </tr>
            @empty
                <tr><td>No hay movimientos de llaves en la BBDD</td></tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
