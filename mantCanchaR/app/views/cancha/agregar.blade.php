<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Cancha</title>
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
                    <a class="nav-link" href="#">Reservar Cancha</span></a>
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
            <div align="center" style="padding-top: 5%;height:100vh; background-color: #95A3B3; border-radius: 0.5%" >
                <h1>Agregar Cancha</h1>
                <hr>
                <a href="{{URL::route('mantCchas')}}" class="btn btn-primary btn-dark" role="button">Volver</a>
                <hr>

                <form action="{{URL::route('addCcha')}}" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Nombre</label>
                            <input type="text" name="txtNombre" id="txtNombre" required class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Precio</label>
                            <input type="number" name="nmbPrecio" id="nmbPrecio" required class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Direccion</label>
                        <select name="selDir" id="selDir" required class="form-control">
                            <option disabled="disabled" selected="true" value="">
                                Selecciona una opcion
                            </option>
                            @foreach ($lDirs as $i)
                                <option value="{{$i->id}}">{{$i->calle." #".$i->numeracion}}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="submit" value="Agregar" class="btn btn-primary btn-dark">
                  </form>

                {{-- <form action="{{URL::route('addCcha')}}" method="POST" >
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
                                <input type="submit" value="Agregar" class="btn btn-primary btn-dark">
                            </td>
                        </tr>
                    </table>
                </form> --}}
            </div>
        </div>
    </section>

    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>