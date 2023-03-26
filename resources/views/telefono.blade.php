<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado General de Telefonos almacenados en la BBDD</title>
</head>
<body>
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
            @forelse ($Telefonos as $Telefono)
                <tr>{{ $telefono->TelId }}</tr>
                <tr>{{ $telefono->TelCentro }}</tr>
                <tr>{{ $telefono->TelFecha }}</tr>
                <tr>{{ $telefono->TelHora }}</tr>
                <tr>{{ $telefono->TelEmisor }}</tr>
                <tr>{{ $telefono->TelDestinatario }}</tr>
                <tr>{{ $telefono->TelMensaje }}</tr>
                <tr>{{ $telefono->TelComunicado }}</tr>
                <tr>{{ $telefono->TelFechaEntrega }}</tr>
                <tr>{{ $telefono->TelHoraEntrega }}</tr>
            @empty

            @endforelse
        </tbody>
    </table>
</body>
</html>
