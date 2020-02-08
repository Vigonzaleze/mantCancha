<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Tipo de Usuario</title>
</head>
<body>
    <h1>Agregar Tipo de Usuarios</h1>
    <hr>
    <button><a href="{{URL::route('mantTpUs')}}">Volver</a></button>
    <hr>
    <form action="{{URL::route('agregarTpUs')}}" method="POST">
        <table border="1px">
            <tr>
                <td>Tipo de Usuario</td>
                <td>
                    <input type="text" name="txtTipo" id="txtTipo" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Agregar">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>