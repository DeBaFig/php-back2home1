<!DOCTYPE html>

<html class="light-style layout-menu-fixed" data-theme="theme-default" data-assets-path="{{ asset('/assets') . '/' }}" data-base-url="{{url('/')}}" data-framework="laravel" data-template="vertical-menu-laravel-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('title', $viewData["title"])</title>
    <meta name="description" content="{{ config('variables.templateDescription') ? config('variables.templateDescription') : '' }}" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

    <!-- Include Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}"> -->
</head>

<body>
    <div class="container-fluid mt-2">

        @yield('content')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <footer class="w-100 py-4 flex-shrink-0">
        <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-10">
                    <h3 class="h1 text-white">Back 2 Home 1</h3>
                    <p class="small text-white">Avenida XXXXX, 00 - Sala 00</p>
                    <p class="small text-white">Bairro - Cidade - Estado</p>
                    <br><br>
                    <p class="small text-white mb-0">&copy; Copyrights. All rights reserved. <a class="text-white" href="https://back2home1.herokuapp.com/">h2b1</a></p>
                </div>
                <div class="col-lg-3 col-md-10">
                    <h5 class="text-white mb-3">Instituição</h5>
                    <ul class="list-unstyled text-white">
                        <li><a class="text-white" href="#">Início</a></li>
                        <li><a class="text-white" href="#">Sobre nós</a></li>
                        <li><a class="text-white" href="#">Venda</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-10">
                    <h5 class="text-white mb-3">Imóveis</h5>
                    <ul class="list-unstyled text-white">
                        <li><a class="text-white" href="#">Cadastre seu Imóvel</a></li>
                        <li><a class="text-white" href="#">Peça um imóvel do seu jeito</a></li>
                        <li><a class="text-white" href="#">Financiamentos e bancos</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-10">
                    <h5 class="text-white mb-3">Contato</h5>
                    <ul class="list-unstyled text-white">
                        <li><a class="text-white" href="#">Fale conosco</a></li>
                        <li><a class="text-white" href="#">Política de privacidade</a></li>
                        </ul>
                </div>
            </div>
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                    © Adriana e Denize ❤️ trabalharam juntas para realizar o projeto no 
                    <a href="{{ config('variables.creatorUrl') ? config('variables.creatorUrl') : '' }}" target="_blank" class="footer-link fw-bolder">Entra21 - 2022</a>
                </div>
                <!-- <div>
                    <a href="{{ route('home.about_business') }}" class="footer-link me-4" target="_blank">Sobre a back2home1</a>
                </div> -->
            </div>
        </div>
    </footer>
</body>

</html>