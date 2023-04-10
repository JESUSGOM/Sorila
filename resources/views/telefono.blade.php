<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado General de Telefonos almacenados en la BBDD</title>
</head>
<body>
    <h1>LISTADO General de la tabla RETPOSTO</h1>
    <table>
        <thead>
            <th>Id</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Emisor</th>
            <th>Destinatario</th>
            <th>Mensaje</th>
            <th>Comunicado</th>
            <th>Mensaje</th>
            <th>Fecha de Entrega</th>
            <th>Hora de Entrega</th>
        </thead>
        <tbody>
            @forelse ($telefonos as $telefono )
                <tr>
                    <th>{{ $telefono->TelId }}</th>
                    <th>{{ $telefono->TelCentro }}</th>
                    <th>{{ $telefono->TelFecha }}</th>
                    <th>{{ $telefono->TelHora }}</th>
                    <th>{{ $telefono->TelEmisor }}</th>
                    <th>{{ $telefono->TelDestinatario }}</th>
                    <th>{{ $telefono->TelMensaje }}</th>
                    <th>{{ $telefono->TelComunicado }}</th>
                    <th>{{ $telefono->TelFechaEntrega }}</th>
                    <th>{{ $telefono->TelHoraEntrega }}</th>
                </tr>
            @empty
                <tr><th>No hay datos obtenidos de la tabla de la bbdd</th></tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
