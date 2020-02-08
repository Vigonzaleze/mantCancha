<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edicion Tipo de Usuario</title>
</head>
<body>
    <h1>Editar Tipo de Usuario</h1>
    <hr>
    <button><a href="{{URL::route('mantTpUs')}}">Volver</a></button>
    <hr>
    <form action="{{URL::route('editarTpUs')}}" method="POST">
        <input type="hidden" value="{{$tpUs->id}}" name="id">
        <table border="1px">
            <tr>
                <td>Tipo de Usuario</td>
                <td>
                    <input type="text" name="txtTipo" id="txtTipo" value="{{$tpUs->tipo}}" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Editar">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>