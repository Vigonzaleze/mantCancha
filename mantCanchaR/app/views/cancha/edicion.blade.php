<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edicion Cancha</title>
</head>
<body>
    <h1>Editar Cancha</h1>
    <hr>
    <button><a href="{{URL::route('mantCchas')}}">Volver</a></button>
    <hr>
    <form action="{{URL::route('editCcha')}}" method="POST">
        <input type="hidden" value="{{$cchaEnc->id}}" name="id">
        <table border="1px">
            <tr>
                <td>Nombre:</td>
                <td>
                    <input type="text" name="txtNombre" id="txtNombre" value="{{$cchaEnc->nombre}}" required>
                </td>
            </tr>
            <tr>
                <td>Precio:</td>
                <td>
                    <input type="number" name="nmbPrecio" id="nmbPrecio" value="{{$cchaEnc->precio}}" required>
                </td>
            </tr>
            {{-- <tr>
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
            </tr> --}}
                <td>
                    <input type="submit" value="Editar">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>