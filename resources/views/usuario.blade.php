<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista de Usuarios</title>
</head>
<body>
    <h1>Listado de Usuarios desde la BBDD</h1>
    <table>
        <thead>
            <tr>
                <th>Dni</th>
                <th>Clave</th>
                <th>Centro</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Apellido</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($Usuarios as $elUsuario)
                <tr>
                    <th>{{ $elUsuario->UsuDni }}</th>
                    <th>{{ $elUsuario->UsuClave }}</th>
                    <th>{{ $elUsuario->UsuCentro }}</th>
                    <th>{{ $elUsuario->UsuNombre }}</th>
                    <th>{{ $elUsuario->UsuApellidoUno }}</th>
                    <th>{{ $elUsuario->UsuApellidoDos }}</th>
                    <th>{{ $elUsuario->UsuTipo }}</th>
                </tr>
            @empty
                <tr>
                    <th>Sin datos </th>
                <tr>
            @endforelse

        </tbody>
    </table>
</body>
</html>
