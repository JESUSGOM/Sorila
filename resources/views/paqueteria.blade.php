<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado general de paquetería</title>
</head>
<body>
    <h1>Relación de la tabla paquetería de la BBDD</h1>
    <table>
        <thead>
            <th>ID</th>
            <th>CENTRO</th>
            <th>FECHA</th>
            <th>HORA</th>
            <th>REMITENTE</th>
            <th>DESTINATARIO</th>
            <th>MENSAJERIA</th>
            <th>BULTOS</th>
            <th>TIPO</th>
            <th>COMUNICADO</th>
            <th>TIPO COMUNICADO</th>
            <th>FECHA COMUNICACION</th>
            <th>HORA COMUNICACION</th>
            <th>OPERARIO</th>
            <th>OPERARIO COMUNICA</th>
        </thead>
        <tbody>
            @forelse ($mispaquetes as $paquete)
                <tr>
                    <td>{{ $paquete->PktId }}</td>
                    <td>{{ $paquete->PktId }}</td>
                    <td>{{ $paquete->PktCentro }}</td>
                    <td>{{ $paquete->PktFeha }}</td>
                    <td>{{ $paquete->PktHora }}</td>
                    <td>{{ $paquete->PktEmisor }}</td>
                    <td>{{ $paquete->PktDestinatario }}</td>
                    <td>{{ $paquete->PktMensajeria }}</td>
                    <td>{{ $paquete->PktBultos }}</td>
                    <td>{{ $paquete->PktTipo }}</td>
                    <td>{{ $paquete->PktComunicado }}</td>
                    <td>{{ $paquete->PktTipoComunicado }}</td>
                    <td>{{ $paquete->PktFechaComunicacion }}</td>
                    <td>{{ $paquete->PktHoraComunicacion }}</td>
                    <td>{{ $paquete->PktOperario }}</td>
                    <td>{{ $paquete->PktOperarioComunica }}</td>
                </tr>
            @empty

            @endforelse
            @empty

            @endforelse
        </tbody>
    </table>
</body>
</html>
