<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index-Blade</title>
</head>
<body>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body">
                    <form action="consultados.php" method="POST">
                        <div class="form-gruup">
                            <input type="text" name="usuario" class="form-control"
                            placeholder="Usuario"
                            pattern="[0-9]{8}[A-Za-z]{1}" minlength="9" maxlength="9"
                            autofocus>
                            <input type="password" name="clave" class="form-control"
                            placeholder="Contraseña" minlength="4" maxlength="9">
                        </div>
                        <input type="submit" class="btn btn-success btn-block"
                        name="entrada" value="Acceder">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
