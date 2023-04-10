<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DListado de plantas de los edificios</title>
</head>
<body>
    <h1>Relación de plantas de los edificios de la BBDD</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>CENTRO</th>
                <th>PLANTA</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($plantas as $laPlanta )
                <tr>
                    <td>{{ $laPlanta->PltId }}</td>
                    <td>{{ $laPlanta->PltCentro }}</td>
                    <td>{{ $laPlanta->PltPlanta }}</td>
                </tr>
            @empty
                <tr><td>No hay datos en la bbdd</td></tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
