<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <!-- Barra de navegación superior -->
        <nav class="navbar navbar-expand-md navbar-light bg-primary shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="{{ route('horario') }}">Laboratorio de Idiomas</a>
                <ul class="navbar-nav ms-auto">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link text-white dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <!-- Menú lateral -->
                @auth
                    @if (Auth::user()->rol === 'Admin') <!-- Verifica si el usuario es Admin -->
                        <nav class="col-md-2 d-md-block bg-light sidebar shadow" style="height: 100vh; position: fixed;">
                            <div class="position-sticky">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('maestros.index') }}">Maestros</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('grupos.index') }}">Grupos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('modulos.index.nuevo') }}">Módulos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('horarios-oficiales.index') }}">Horario oficial</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('solicitudes.index') }}">Solicitudes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('modificaciones.index') }}">Modificaciones</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('notificaciones.index') }}">Notificaciones</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('historial-horarios.index') }}">Historial de Horarios</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    @endif
                @endauth

                <!-- Contenido principal -->
                <main class="@guest col-md-12 d-flex justify-content-center align-items-center @else col-md-10 ms-sm-auto px-md-4 py-10 @endguest">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>

    <!-- Scripts necesarios -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>



</html>