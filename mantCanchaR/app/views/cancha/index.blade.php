<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mantenedor Canchas</title>
</head>
<body>
    <h1>Mantenedor de Canchas</h1>
    <hr>
    <button><a href="{{URL::route('formAddCcha')}}">Agregar Cancha</a></button>
    <hr>
    <table border="1px">
        <thead>
            <th>Id</th>
            <th>Nombre Cancha</th>
            <th>Reservada</th>
            <th>Precio</th>
            <th>Fecha Ingreso al Sistema</th>
            <th>Direccion</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($lCchas as $i)
                <tr>
                    <td>{{$i->id}}</td>
                    <td>{{$i->nombre}}</td>
                    <td>
                        @if($i->estado === 0) Disponible 
                        @elseif($i->estado === 1) Reservada 
                        @endif
                    </td>
                    <td>{{"$".$i->precio}}</td>
                    <td>{{$i->created_at}}</td>
                    <td>{{$i->direccion->calle." #".$i->direccion->numeracion}}</td>
                    <td>
                        <button><a href="{{URL::route('formEditCcha', array($i->id))}}">Editar</a></button>
                        <button><a href="{{URL::route('elimCcha', array($i->id))}}">Eliminar</a></button>
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
</body>
</html>