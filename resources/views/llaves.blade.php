<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado General de llaves</title>
</head>
<body>
    <h1>Listado de llaves obtenido de la BBDD</h1>
    <table>
        <thead>
            <tr>
                <th>Orden</th>
                <th>Código</th>
                <th>Centro</th>
                <th>Puerta</th>
                <th>Planta</th>
                <th>Cajetin</th>
                <th>Restricción</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($Llaveros as $Llave)
                <tr>
                    <td> {{ $Llave->LlvOrden  }} </td>
                    <td> {{ $Llave->LlvCodigo  }} </td>
                    <td> {{ $Llave->LlvCentro  }} </td>
                    <td> {{ $Llave->LlvPuerta  }} </td>
                    <td> {{ $Llave->LlvPlanta  }} </td>
                    <td> {{ $Llave->LlvCajetin  }} </td>
                    <td> {{ $Llave->LlvRestricciojn  }} </td>
                </tr>
            @empty

            @endforelse

        </tbody>
    </table>
</body>
</html>
