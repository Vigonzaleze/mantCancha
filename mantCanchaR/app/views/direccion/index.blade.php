<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mantenedor Direccion</title>
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
                        <a class="dropdown-item" href="{{URL::route('mantDirs')}}">Direccion</a>
                        {{-- <div class="dropdown-divider"></div> --}}
                        {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::route('reserva')}}">Reservar Cancha</span></a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> -->
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
                <h1>Mantenedor de Direcciones</h1>
                <hr>
                {{-- <button onclick="windows.location.href='{{URL::route('formuAgregarTpUs')}}'">Agregar Tipo de usuarios</button> --}}
                <a href="{{URL::route('formuAgregarDirs')}}" class="btn btn-primary btn-dark" role="button">Agregar Direccion</a>
                <hr>
                <table class="table table-striped table-dark table-bordered">
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
                                    <a href="{{URL::route('formuEditDirs', array($i->id))}}" class="btn btn-primary btn-warning">Editar</a>
                                    <a href="{{URL::route('elimDir', array($i->id))}}" class="btn btn-primary btn-danger">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- <h1>Mantenedor de Direcciones</h1>
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
    </table> -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>