<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado tabla retposto</title>
</head>
<body>
    <table>
        <thead>
            <th>RptId</th>
            <th>RptCentro</th>
            <th>RptNombre</th>
            <th>RptApellidoUno</th>
            <th>RptApellidoDos</th>
            <th>RptEmail</th>
        </thead>
        <tbody>
            @forelse ($retpostos as $retposto )
                <tr>
                    <th>{{ $retposto->RptId }}</th>
                    <th>{{ $retposto->RptCentro }}</th>
                    <th>{{ $retposto->RptNombre }}</th>
                    <th>{{ $retposto->RptApellidoUno }}</th>
                    <th>{{ $retposto->RptApellidoDos }}</th>
                    <th>{{ $retposto->RptEmail }}</th>
                </tr>
            @empty

            @endforelse
        </tbody>
    </table>
</body>
</html>
