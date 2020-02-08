<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mantenedor Usuario</title>
</head>
<body>
    <h1>Mantenedor Tipos de Usuario</h1>
    <hr>
{{-- <button onclick="windows.location.href='{{URL::route('formuAgregarTpUs')}}'">Agregar Tipo de usuarios</button> --}}
    <button><a href="{{URL::route('formuAgregarTpUs')}}">Agregar Tipo de Usuario</a></button>
    <hr>
    <table border="1px">
        <thead>
            <th>Id</th>
            <th>Tipo Usuario</th>
            <th>Fecha Creacion</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($lTps as $i)
                <tr>
                    <td>{{$i->id}}</td>
                    <td>{{$i->tipo}}</td>
                    <td>{{$i->created_at}}</td>
                    <td>
                        <button><a href="{{URL::route('formuEditTpUs', array($i->id))}}">Editar</a></button>
                        <button><a href="{{URL::route('elimTpUs', array($i->id))}}">Eliminar</a></button>
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
</body>
</html>