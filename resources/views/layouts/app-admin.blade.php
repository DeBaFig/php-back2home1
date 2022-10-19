<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light-style layout-menu-fixed" data-theme="theme-default" data-assets-path="{{ asset('/assets') . '/' }}" data-base-url="{{url('/')}}" data-framework="laravel" data-template="vertical-menu-laravel-template-free">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="{{ config('variables.templateDescription') ? config('variables.templateDescription') : '' }}" />


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="{{asset('assets-admin/css/style.css') }}">
    <script src="https://kit.fontawesome.com/6e7aa9ccc9.js" crossorigin="anonymous"></script>
    
    
</head>

<body>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ route('admin.dashboard') }}"><i class="menu-icon fa fa-laptop"></i>Início</a>
                    </li>
                    <li class="menu-title">Gerenciar</li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa-solid fa-house"></i>Propriedades</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('property.property') }}">Adicionar</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="{{ route('home') }}">Editar</a></li>
                            <li><i class="fa fa-bars"></i><a href="{{ route('home') }}">Excluir</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="{{ route('home') }}">Tornar Destaque</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="{{ route('home') }}">Tornar Popular</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="menu-icon fa-solid fa-user"></i>Proprietários</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('home') }}">Adicionar</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="{{ route('home') }}">Editar</a></li>
                            <li><i class="fa fa-bars"></i><a href="{{ route('home') }}">Excluir</a></li>
                        </ul>
                    </li>
                    <li class="menu-icon">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </li>
                </ul>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </nav>
    </aside>
    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('admin.dashboard') }}"><img  src="{{ asset('assets/img/logo/b2h1-2.png') }}" style="max-width:30px; height:auto;" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="{{ route('admin.dashboard') }}"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                </div>
            </div>
        </header>
        <div class="content">
            @yield('admin_content')
        </div>



        <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
        <script src="{{asset('assets-admin/js/main.js') }}"></script>

       
</body>

</html>