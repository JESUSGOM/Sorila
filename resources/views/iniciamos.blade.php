<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">

    <title>Formulario control de acceso</title>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid" width="100%">
            <a href="" class="navbar-brand"><img src="../storage/img/logoitc-30.png" class="rounded float-left" alt="ITC"></a>
            <a href="" class="navbar-brand rounded float-none" style="font-size: 6px;">Creado y desarrollado por J.G. de la empresa Laborsord, S.L. para el Instituto tecnológico de Canarias.</a>
            <a href="" class="navbar-brand"><img src="../storage/img/logo-laborsord--transparente.png" class="rounded float-right" alt="Laborsord"></a>
        </div>
    </nav>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body">
                    <form action="{{ route('informacioncontacto') }}" method="POST">

                        @csrf
                        <lavel>
                            Usuario.:
                            <input type="text" name="usuario">
                        </lavel>
                        <br>
                        <lavel>
                            Clave.:
                            <input type="password" name="clave">
                        </lavel>
                        <br>
                        <button type="submit">Acceder</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
