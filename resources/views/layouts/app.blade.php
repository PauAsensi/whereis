<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    @yield('css')
    <style>
        html{
            overflow-x:hidden;
        }
        
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
            <img src="/imgs/logo.png" style="border-radius:50%;width:50px;margin-right:3%">
                <a class="navbar-brand" style="font-size:30px;" href="{{ url('/') }}">
                    ¿Where is?
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    &nbsp&nbsp&nbsp&nbsp&nbsp
                        <a class="navbar-brand" href=" {{ route('sitios.index')  }}">
                           Buscar
                        </a>
                        @auth
                            &nbsp&nbsp&nbsp&nbsp&nbsp
                            <a class="navbar-brand" href=" {{ route('sitios.create')  }}">
                            Añadir Local
                            </a>

                        @endauth
                        &nbsp&nbsp&nbsp&nbsp&nbsp
                       <a class="navbar-brand" href=" {{ url('/contacto')  }}">
                           Contacto
                        </a>
                    
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Session') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('home') }}">Perfil</a>
                                    <a class="dropdown-item" href="{{ route('sitios.missitios') }}">Mis sitios</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div id="content">
            @yield('content')
       </div>
         <div class="footer">
    <footer >
        <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="h1 text-white">Where Is</h5>
                    <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. <a class="text-primary" href="#">WhereIs</a></p>
                </div>
                <div class="col-lg-4 col-md-8">
                    <h5 class=" h1 text-white mb-3">Redes Sociales</h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="https://es-es.facebook.com" style="text-decoration: none;"><i class="fa-brands fa-facebook"></i> Facebook</a></li>
                        
                        <li><a href="https://twitter.com/?lang=es" style="text-decoration: none;"><i class="fa-brands fa-twitter"></i> Twiter </a></li>
                        <li><a href="https://www.youtube.com" style="text-decoration: none;"><i class="fa-brands fa-youtube"></i> YouTube</a></li>
                        <li><a href="https://github.com" style="text-decoration: none;"><i class="fa-brands fa-github"></i> GitHub</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <h5 class="h1 text-white mb-3">Integrar zonas</h5>
                    <p class="small text-muted">Si desea realizar una implementacion de su ciudad, pueblo ,etc... Pongase en contacto con nosotrs atraves de el formulario que hay en el apratado de contacto.</p>
                    <form action="#">
                        <div class="input-group mb-3">
                            <a class="btn btn-light" href="{{ url('/contacto') }}" style="width:50%;">Contacto</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    </div>
     <!-- FOOTER -->
    
</body>
</html>
