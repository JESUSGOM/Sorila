<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emails enviados</title>
</head>
<body>
    <h1>Relación de email enviados desde la BBDD </h1>
    <table>
        <thead>
            <th>ID</th>
            <th>DESTINATARIO</th>
            <th>FECHA</th>
            <th>HORA</th>
            <th>TEXTO</th>
            <th>EMISOR</th>
        </thead>
        <tbody>
            @forelse ($envioemails as $mail)
                <tr>
                    <td>{{ $mail->EnEmId }}</td>
                    <td>{{ $mail->EnEmDestinatario }}</td>
                    <td>{{ $mail->EnEmFecha }}</td>
                    <td>{{ $mail->EnEmHora }}</td>
                    <td>{{ $mail->EnEmTexto }}</td>
                    <td>{{ $mail->EnEmEmisor }}</td>
                </tr>
            @empty
                <tr><td>No se han obtenido datos de la BBDD</td></tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
