<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relación de centros</title>
</head>
<body>
    <h1>Relación de centros obtenidos de la BBDD</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>DENOMINACION</th>
                <th>DIRECCION</th>
                <th>CODIGO POSTAL</th>
                <th>PROVINCIA</th>
                <th>TELEFONO</th>
                <th>FAX</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($elCentro as $esCentro )
                <tr>
                    <td>{{ $esCentro->CenId }}</td>
                    <td>{{ $esCentro->CenDen }}</td>
                    <td>{{ $esCentro->CenDireccion }}</td>
                    <td>{{ $esCentro->CenCodigoPostal }}</td>
                    <td>{{ $esCentro->CenProvincia }}</td>
                    <td>{{ $esCentro->CenTelefono }}</td>
                    <td>{{ $esCentro->CenFax }}</td>
                </tr>
            @empty
                <tr><td>No se han obtenido datos desde la BBDD</td></tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
