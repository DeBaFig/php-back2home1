@extends('layouts.app-admin')
@section('admin_content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">1</span></div>
                                <div class="stat-heading">Visitantes</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color">
                            <i class="fa-solid fa-house"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">1</span></div>
                                <div class="stat-heading">Propriedades</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color">
                            <i class="fa-solid fa-key"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">1</span></div>
                                <div class="stat-heading">Corretores</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">1</span></div>
                                <div class="stat-heading">Proprietários</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="box-title my-2"> {{ 'Olá, ' . Auth::user()->name . ". Aqui você pode acessar as opções de administrador."}} </h4>
                   
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-body">
                            @yield('table_content')
                        </div>
                    </div>

                </div>

            </div>
        </div><!-- /# column -->
    </div>

</div>

@endsection