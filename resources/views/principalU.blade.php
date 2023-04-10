<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
    crossorigin="anonymous">
    <title>Principal Usuario</title>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid" width="100%">
            <a href="index.php" class="navbar-brand"><img src="img/logoitc-30.png" class="rounded float-left" alt="ITC"></a>
            <a href="" class="navbar-brand rounded float-none" style="font-size: 6px;">Creado y desarrollado por J.G. de la empresa Laborsord, S.L. para el Instituto tecnológico de Canarias.</a>
            <a href="" class="navbar-brand"><img src="img/logo-laborsord--transparente.png" class="rounded float-right" alt="Laborsord"></a>
        </div>
    </nav>
    <div class="container p4">
        <div class="row">

        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            <input type="submit" class="btn btn-success btn-block"
                            name="visitan" value="Entrada Visitantes">
                        </form>
                        <form action="" method="POST">
                            <input type="submit" class="btn btn-success btn-block"
                            name="salidas" value="Salida Visitantes">
                        </form>
                        <form action="" method="POST">
                            <input type="submit" class="btn btn-success btn-block"
                            name="informesVisitas" value="Informes Visitantes">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-body">
                    <form action="" method="POST">
                        <input type="submit" class="btn btn-success btn-block"
                        name="visitan" value="Entrega de Llaves">
                    </form>
                    <form action="" method="POST">
                        <input type="submit" class="btn btn-success btn-block"
                        name="salidas" value="Recogida de Llaves">
                    </form>
                    <form action="" method="POST">
                        <input type="submit" class="btn btn-success btn-block"
                        name="informesVisitas" value="Informes de Llaves">
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-body">
                    <form action="" method="POST">
                        <input type="submit" class="btn btn-success btn-block"
                        name="visitan" value="Llamadas Telef&oacute;nicas">
                    </form>
                    <form action="" method="POST">
                        <input type="submit" class="btn btn-success btn-block"
                        name="salidas" value="Comunicar llamadas">
                    </form>
                    <form action="" method="POST">
                        <input type="submit" class="btn btn-success btn-block"
                        name="informesVisitas" value="Informes Llamadas">
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body">
                    <form action="" method="POST">
                        <input type="submit" class="btn btn-success btn-block"
                        name="entroincidencia" value="Entrada Incidencias">
                    </form>
                    <form action="" method="POST">
                        <input type="submit" class="btn btn-success btn-block"
                        name="entroincidencia" value="Comsultar Incidencias">
                    </form>
                    <form action="" method="POST">
                        <input type="submit" class="btn btn-success btn-block"
                        name="informesVisitas" value="Informes Incidencias">
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-body">
                    <form action="" method="POST">
                        <input type="submit" class="btn btn-success btn-block"
                        disabled name="" value="">
                    </form>
                    <form action="" method="POST">
                        <input type="submit" class="btn btn-success btn-block"
                        name="envioemail" value="Enviar Un Correo Electrónico">
                    </form>
                    <form action="" method="POST">
                        <input type="submit" class="btn btn-success btn-block"
                        disabled name="" value="">
                    </form>
                </div>
            </div><div class="col-md-4">
                <div class="card card-body">
                    <form action="{{ route view('entradavisitas') }}" method="POST">
                        <input type="submit" class="btn btn-success btn-block"
                        name="mensajeria" value="Correspondencia">
                    </form>
                    <form action="" method="POST">
                        <input type="submit" class="btn btn-success btn-block"
                    name="paqueteria" value="Entrego Correspondencia">
                    </form>
                    <form action="" method="POST">
                        <input type="submit" class="btn btn-success btn-block"
                        name="expedicion" value="Informes Correspondencia">
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-body">
                    <form action="" method="POST">
                        <input type="submit" class="btn btn-success btn-block"
                        name="comunicoturno" value="Comuinco Siguiente Turno">
                    </form>
                    <form action="" method="POST">
                        <input type="submit" class="btn btn-success btn-block"
                        name="leocomunicacion" value="Leer Comunicaci&oacute;n Turno Anterior">
                    </form>
                    <form action="" method="POST">
                        <input type="submit" class="btn btn-success btn-block"
                    name="informecomunicacioin" value="Informes Entre Turnos">
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-body">
                </div>
            </div>
        </div>

    </div>

</body>
</html>
