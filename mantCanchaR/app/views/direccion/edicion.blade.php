<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edicion Direccion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navegador</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mantenedores
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{URL::route('mantCchas')}}">Canchas</a>
                        <a class="dropdown-item" href="{{URL::route('mantTpUs')}}">Tipo de Usuario</a>
                        <a class="dropdown-item" href="{{URL::route('mantDirs')}}">Direcion</a>
                        {{-- <div class="dropdown-divider"></div> --}}
                        {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::route('reserva')}}">Reservar Cancha</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            {{-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> --}}
        </div>
    </nav>

    <section>
        <div align="center">
            <div align="center" style="padding-top: 5%;height:100vh; background-color: #95A3B3;">
                <h1>Editar Cancha</h1>
                <hr>
                <a href="{{URL::route('mantCchas')}}" class="btn btn-primary btn-dark" role="button">Volver</a>
                <hr>
                <form action="{{URL::route('editarDir')}}" method="POST">
                    <input type="hidden" value="{{$dirEnc->id}}" name="id"> 
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Calle</label>
                            <input type="text" name="txtCalle" id="txtCalle" required class="form-control" value="{{$dirEnc->calle}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Numeracion</label>
                            <input type="number" name="nmbNumeracion" id="nmbNumeracion" required class="form-control" value="{{$dirEnc->numeracion}}">
                        </div>
                    </div>
                    <input type="submit" value="Editar" class="btn btn-primary btn-dark">
                  </form>
            </div>
        </div>
    </section>


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