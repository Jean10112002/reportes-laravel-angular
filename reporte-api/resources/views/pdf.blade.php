<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte</title>
    <style>

    </style>
</head>
<body>
    <div >
        <table >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre Articulo</th>
                    <th>Descripcion Articulo </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articulos as $iten)
                <tr>
                    <td> {{$iten->id}} </td>
                    <td>{{$iten->nombre}} </td>
                    <td>{{$iten->descripcion}} </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>
</html>
