<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Cancha</title>
</head>
<body>
    <h1>Agregar Cancha</h1>
    <hr>
    <button><a href="{{URL::route('mantCchas')}}">Volver</a></button>
    <hr>
    <form action="{{URL::route('addCcha')}}" method="POST">
        <table border="1px">
            <tr>
                <td>Nombre:</td>
                <td>
                    <input type="text" name="txtNombre" id="txtNombre" required>
                </td>
            </tr>
            <tr>
                <td>Precio:</td>
                <td>
                    <input type="number" name="nmbPrecio" id="nmbPrecio" required>
                </td>
            </tr>
            <tr>
                <td>Direccion:</td>
                <td>
                    <select name="selDir" id="selDir" required>
                        <option disabled="disabled" selected="true" value="">
                            Selecciona una opcion
                        </option>
                        @foreach ($lDirs as $i)
                            <option value="{{$i->id}}">{{$i->calle." #".$i->numeracion}}</option>
                        @endforeach
                    </select>
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