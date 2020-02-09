<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edicion Direccion</title>
</head>
<body>
    <h1>Editar Direccion</h1>
    <hr>
    <button><a href="{{URL::route('mantDirs')}}">Volver</a></button>
    <hr>
    <form action="{{URL::route('editarDir')}}" method="POST">
        <input type="hidden" value="{{$dirEnc->id}}" name="id">
        <table border="1px">
            <tr>
                <td>Calle</td>
                <td>
                    <input type="text" name="txtCalle" id="txtCalle" value="{{$dirEnc->calle}}" required>
                </td>
            </tr>
            <tr>
                <td>Numeracion:</td>
                <td>
                    <input type="number" name="nmbNumeracion" id="nmbNumeracion" value="{{$dirEnc->numeracion}}" 
                    required>
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