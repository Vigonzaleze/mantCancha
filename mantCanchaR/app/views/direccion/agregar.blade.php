<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Direccion</title>
</head>
<body>
    <h1>Agregar Direccion</h1>
    <hr>
    <button><a href="{{URL::route('mantDirs')}}">Volver</a></button>
    <hr>
    <form action="agregarDir" method="POST">
        <table border="1px">
            <tr>
                <td>Calle:</td>
                <td>
                    <input type="text" name="txtCalle" id="txtCalle" required>
                </td>
            </tr>
            <tr>
                <td>Numeracion:</td>
                <td>
                    <input type="number" name="nmbNumeracion" id="nmbNumeracion" required>
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