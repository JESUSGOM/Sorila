<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buscamos un Usuario por DNI</title>
</head>
<body>
    <form action="{{ route('buscarUsuario') }}" method="POST">
        @csrf

        <input type="text" placeholder="Indique su usuario" neme="elUsuDni" value="{{ $usuario->UsuDni}}">Usuario.:/>
        <input type="submit" value="Buscar">
    </form>
</body>
</html>
