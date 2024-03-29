<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!--GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!--FONTAWESONE-->
    <link rel="stylesheet" href="{{ asset('css/styleB.css') }}">
    <link rel="stylesheet" href="{{ asset('css/validaciones.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    <title>@yield('title')</title>
</head>
<body>
    <div class="container-fluid g-0">
        <div class="header">
            <nav class="navbar navbar-expand-sm navbar-primary bg-primary px-2">
                <div class="container-fluid nav-title">
                    <div class="side-nav-button me-3 text-light menu" style="padding: 0 0 0 10px">
                        <i class="fa-solid fa-bars "></i>
                        <a class="navbar-brand px-4" href="#">TUTORIAS<span>UG</span> </a>
                    </div>

                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav me-auto">
                        </ul>
                        <div class="dropdown">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('img/profile.jpg') }}" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                <span class="d-none d-sm-inline mx-1">Jose Asencio</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                <li><a class="dropdown-item" href="/home-perfil">Perfil</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-responsive-nav-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                            <a class="dropdown-item" href="#"></a>
                                        </x-responsive-nav-link>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </nav>
        </div>
        <main>
            <div class="sidebar">
                <div class="side-nav-content">
                    <ul class="nav-list">
                        <li class="nav-list-item">
                            <i class="fa-solid fa-users"></i>
                            <span>
                                <a href="/listar-usuarios">Usuarios</a>
                            </span>
                        </li>
                        <li class="nav-list-item">
                            <i class="fa-solid fa-key"></i>
                            <span>
                                <a href="/listar-rol">Roles</a>
                            </span>
                        </li>
                        <li class="nav-list-item">
                            <i class="fa-solid fa-building-columns"></i>
                            <span>
                                <a href="/listar-facultades">Facultades</a>
                            </span>
                        </li>
                        <li class="nav-list-item">
                            <i class="fa-solid fa-book-open"></i>
                            <span>
                                <a href="/listar-asignaturas">Asignaturas</a>
                            </span>
                        </li>
                        <li class="nav-list-item">
                            <i class="fa-solid fa-chalkboard-user"></i>
                            <span>
                                <a href="#" role="button" class="dropdown-toggle" data-bs-toggle="dropdown">Tutorias</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="/listar-tutorias">Tutorias</a></li>
                                    <!-- <li><a class="dropdown-item" href="/home-tutorias-solicitud">Solicitar tutoria</a></li> -->
                                    <li><a class="dropdown-item" href="home-tutorias-buscar">Buscar tutoria</a></li>
                                </ul>
                            </span>
                        </li>
                        <li class="nav-list-item">
                            <i class="fa-solid fa-folder"></i>
                            <span>
                                <a href="#" role="button" class="dropdown-toggle" data-bs-toggle="dropdown">Actividades</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="/home-actividades-manuales">Calificación manual</a></li>
                                    <li><a class="dropdown-item" href="/home-actividades-predefinidas">Calificación predefinida</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </span>
                        </li>
                        <li class="nav-list-item">
                            <i class="fa-solid fa-folder"></i>
                            <span>
                                <a href="#" role="button" class="dropdown-toggle" data-bs-toggle="dropdown">Pruebas</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="/home-pruebas-crear">Crear prueba</a></li>
                                    <li><a class="dropdown-item" href="#">Banco de preguntas</a></li>
                                    <li><a class="dropdown-item" href="/home-notas-evaluacion">Notas de evaluación</a></li>
                                </ul>
                            </span>
                        </li>
                        <li class="nav-list-item">
                            <i class="fa-solid fa-font"></i>
                            <span>
                                <a href="/home-pruebas-crear">Pruebas</a>
                            </span>
                        </li>
                        <li class="nav-list-item">
                            <i class="fa-solid fa-users"></i>
                            <span>
                                <a href="/home-pruebas-crear">Reportes</a>
                            </span>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown d-flex align-items-end">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('img/profile.jpg') }}" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">Jose Asencio</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="/home-perfil">Perfil.</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-responsive-nav-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                        <a class="dropdown-item" href="#"></a>
                                    </x-responsive-nav-link>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="display-area p-3">
                @yield('content')
            </div>
        </main>
    </div>


    <script src="{{ asset('js/home.js') }}"></script>
    <script src="{{ asset('js/alertas.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/dropdown.js') }}"></script>
    <script src="{{ asset('js/validacion.js') }}"></script>
    <script src="{{ asset('js/validacion-rol.js') }}"></script>
    <script src="{{ asset('js/validacion-asig.js') }}"></script>
</body>
</html>