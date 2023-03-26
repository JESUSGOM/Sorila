<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show-blade</title>
</head>
<body>
    @if($apellidos)
     <h1>Vista del show-blade desde el controlador recibiendo las variables;
        nombre: {{ $nombres }} y el apellido es {{  $apellidos }}</h1>
    @else
    Vista del show-blade desde el controlador recibiendo las variables;
    nombre: {{ $nombres }}</h1>
    @endif
    <h2>{{ $fecha }}
</body>
</html>
