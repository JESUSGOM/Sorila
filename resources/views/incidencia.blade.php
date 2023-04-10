<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Incidencias</title>
</head>
<body>
    <h1>Listado de Incidencias desde la BBDD</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>CENTRO</th>
                <th>FECHA</th>
                <th>HORA</th>
                <th>TEXTO</th>
                <th>COMUNICADO A</th>
                <th>MODO</th>
                <th>EMAIL</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($Incidencias as $Incidencia )
                <tr>
                    <td>{{$Incidencia->IncId}}</td>
                    <td>{{$Incidencia->IncCentro}}</td>
                    <td>{{$Incidencia->IncFecha}}</td>
                    <td>{{$Incidencia->IncHora}}</td>
                    <td>{{$Incidencia->IncTexto}}</td>
                    <td>{{$Incidencia->IncComunicadoA}}</td>
                    <td>{{$Incidencia->IncModoComunica}}</td>
                    <td>{{$Incidencia->IncEmailComunica}}</td>
                </tr>
            @empty
                <tr><td>No se han obtenido datos de la BBDD</td></tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
