<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!--Jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <script src="{{ asset('js/main.js') }}" rel="stylesheet"></script>

    <!--font awesome-->
    <script src="https://kit.fontawesome.com/1ade5e208e.js" crossorigin="anonymous"></script>

    <!--Datatable buscador Boostrap 5-->
    <script  type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script  type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">

    <!--Sweetalert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-black shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                         <li class="nav-item">
                                    <a class="nav-link" href="{{ route('prueba') }}">Nosotros</a>
                                </li>
                        <li class="nav-item">
                                    <a class="nav-link" href="{{ route('nuevaprueba') }}">Tests</a>
                                </li>
                        <li class="nav-item">
                                    <a class="nav-link" href="{{ route('apprentices') }}">Registros</a>
                                </li>

                                <br>

                                      <div class="d-flex align-items-center">
                                        <form class="w-100 me-3" role="search">
                                          <input type="search" class="form-control" placeholder="Buscar..." aria-label="Search">
                                         </form>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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

        <main class="py-4">
            @if(Session::has('message_error'))
                <script type="text/javascript">
                    window.onload=function(){
                        Swal.fire({
                          icon: 'error',
                          title: 'Error',
                          text: '{{Session::get('message_error')}}',
                          footer: '<ul>@foreach($errors->all() as $error)<li>{{$error}}</li>@endforeach<ul>'
                        })
                    }
                </script>
                @endif

            @if(Session::has('message_confirm'))
            <script type="text/javascript">
                window.onload=function(){
                     Swal.fire({
                          position: 'top-end',
                          icon: 'success',
                          title: '{{Session::get('message_confirm')}}',
                          showConfirmButton: false,
                          timer: 1500
                        })
                 }
            </script>
            @endif


            @yield('content')
        </main>
    </div>
</body>
</html>
