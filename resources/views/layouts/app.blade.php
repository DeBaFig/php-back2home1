<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light-style layout-menu-fixed" data-theme="theme-default" data-assets-path="{{ asset('/assets') . '/' }}" data-base-url="{{url('/')}}" data-framework="laravel" data-template="vertical-menu-laravel-template-free">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="{{ config('variables.templateDescription') ? config('variables.templateDescription') : '' }}" />


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

    <!-- Include Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/show/css/templatemo.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/show/css/slick.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/show/css/slick-theme.css') }}">
    <!-- Ícones -->
    <script src="https://kit.fontawesome.com/6e7aa9ccc9.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ __('Back2Home1') }}
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
                        <a class="nav-link" href="{{ route('home.buy') }}">{{ __('Comprar') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.rent') }}">{{ __('Alugar') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.about') }}">{{ __('Sobre Nós') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.aboutb2h1') }}">{{ __('Sobre Back2Home1') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif
                    @else

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @if(Auth::check() && auth()->user()->is_admin == 1)
                            <a class="dropdown-item" href="{{ route('owner.add') }}">
                                {{ __('Adicionar Proprietário') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('property.property') }}">
                                {{ __('Adicionar Imóvel') }}
                            </a>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
    <div id="app">
        @yield('content')
    </div>
    <footer class="w-100 py-4 flex-shrink-0">
        <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-10">
                    <img src="/assets/img/logo/b2h1-6.png" width="200" alt="b2h1 Logo">
                    <h3 class="h1 text-white">Back 2 Home 1</h3>
                    <p class="small text-white">Avenida XXXXX, 00 - Sala 00</p>
                    <p class="small text-white">Bairro - Cidade - Estado</p>
                    <br><br>
                    <p class="small text-white mb-0">&copy; Copyrights. All rights reserved.  <a class="text-white" href="https://back2home1.herokuapp.com/"> ---  h2b1</a></p>
                </div>
                <div class="col-lg-3 col-md-10">
                    <h5 class="text-white mb-3">Instituição</h5>
                    <ul class="list-unstyled text-white">
                        <li><a class="text-white" href="{{ route('home.index') }}">Início</a></li>
                        <li><a class="text-white" href="{{ route('home.about') }}">Sobre nós</a></li>
                        <li><a class="text-white" href="{{ route('home.buy') }}">Venda</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-10">
                    <h5 class="text-white mb-3">Imóveis</h5>
                    <ul class="list-unstyled text-white">
                        <!-- <li><a class="text-white" href="#">Cadastre seu Imóvel</a></li> -->
                        <!-- <li><a class="text-white" href="#">Peça um imóvel do seu jeito</a></li> -->
                        <li><a class="text-white" href="{{ route('home.simulador') }}">Financiamentos e bancos</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-10">
                    <h5 class="text-white mb-3">Contato</h5>
                    <ul class="list-unstyled text-white">
                        <li><a class="text-white" href="mailto:h2h1@gmai.com">Fale conosco</a></li>
                        <li><a class="text-white" href="#">Política de privacidade</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>