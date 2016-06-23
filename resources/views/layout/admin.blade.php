<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Edgar Sandoval">

    <title>CP Panda store</title>

    <!-- CSS's -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.5.2/metisMenu.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/1.0.8/css/sb-admin-2.css">
    {{ Html::style( asset('css/panel.css')) }}

    <!-- JS's  -->

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.5.2/metisMenu.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/1.0.8/js/sb-admin-2.js"></script>

</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ URL::to('/admin') }}"><i class="fa fa-columns" aria-hidden="true"></i>&nbsp;Panel de Control - PANDA</a>
            </div>
           
            <ul class="nav navbar-top-links navbar-right">
                @if(Auth::check())
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        {!!Auth::user()->name!!}<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="disabled">
                            <a href="#" ><i class="fa fa-gear fa-fw"></i> Ajustes</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{!!URL::to('/logout')!!}"><i class="fa fa-sign-out fa-fw"></i> Salir </a>
                        </li>
                    </ul>
                </li>
                @else
                    <li class="btn-logout">
                        <a href="{{ url('/') }}" class="btn btn-primary"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;Regresar al inicio</a>
                    </li>
                @endif
            </ul>


            <div class="navbar-default sidebar {{ Auth::guest() ? 'hidden' : '' }}" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Usuario<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/usuario/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/usuario')!!}"><i class='fa fa-list-ol fa-fw'></i> Usuarios</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-film fa-fw"></i> Pelicula<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="#"><i class='fa fa-list-ol fa-fw'></i> Peliculas</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-child fa-fw"></i> Genero<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="#"><i class='fa fa-list-ol fa-fw'></i> Generos</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

    @if(Auth::guest())
        <div class="container" style="margin-top: 40px;">
            @yield('content')
        </div>
    @else
        <div id="page-wrapper">
            @yield('content')
        </div>
    @endif

    </div>

</body>
</html>
