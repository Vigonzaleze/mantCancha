<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mantenedor Direccion</title>
</head>
<body>
    <h1>Mantenedor de Direcciones</h1>
    <hr>
{{-- <button onclick="windows.location.href='{{URL::route('formuAgregarTpUs')}}'">Agregar Tipo de usuarios</button> --}}
    <button><a href="{{URL::route('formuAgregarDirs')}}">Agregar Direccion</a></button>
    <hr>
    <table border="1px">
        <thead>
            <th>Id</th>
            <th>Calle</th>
            <th>Fecha Ingreso</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($lDirs as $i)
                <tr>
                    <td>{{$i->id}}</td>
                    <td>{{$i->calle." #".$i->numeracion}}</td>
                    <td>{{$i->created_at}}</td>
                    <td>
                        <button><a href="{{URL::route('formuEditDirs', array($i->id))}}">Editar</a></button>
                        <button><a href="{{URL::route('elimDir', array($i->id))}}">Eliminar</a></button>
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
</body>
</html>