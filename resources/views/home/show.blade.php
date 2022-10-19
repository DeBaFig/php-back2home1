@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<section class="bg-light">
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-5 mt-5">
                <div class="row">

                    <!--Start Carousel Wrapper-->
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($viewData['photos'] as $key => $image)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <img src="{{ asset($image['photo_image'])  }}" class="d-block w-100">
                            </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- col end -->
            <div class="col-lg-7 mt-5">
                <div class="card">
                    <div class="card-body">
                        @foreach($viewData['property'] as $key => $detalhes)

                        <h3>{{ $detalhes['title']}}</h3>
                        <p>Ref.{{ $detalhes['reference_n']}}</p>
                        <p class="h4 py-1">Valor {{ $detalhes['purpose'] == 'comprar' ?'de venda':'do aluguel' }}: {{ number_format((float)($detalhes['price'] / 100), 2, ',', '') }}</p>
                        <p>{{ ($detalhes['purpose'] == 'alugar' && $detalhes['townhouse_price'] < 0)? ('Valor do condomínio:' . $detalhes['townhouse_price']): " "}}</p>
                        <h5>Cidade: {{ $detalhes['city'] . "-" . $detalhes['state'] }}</h5>
                        <h5>Bairro: {{ $detalhes['district'] }}</h5><br>
                        <div class="row align-items-center col-7">
                            @if($detalhes['master_bedrooms'] >= 1)
                            <div class="col-2">
                                <small><img src="{{asset('assets/img/icons/bed-solid.svg')}}"></small>
                                <p class="text-center">{{ $detalhes['master_bedrooms'] }}</p>
                            </div>
                            @endif
                            @if($detalhes['parking_lot'] >= 1)
                            <div class="col-2">
                                <small><img src="{{asset('assets/img/icons/car-solid.svg')}}"></small>
                                <p class="text-center">{{ $detalhes['parking_lot']}}</p>
                            </div>
                            @endif
                            @if($detalhes['bedrooms'] >= 1)
                            <div class="col-2">
                                <small><img src="{{asset('assets/img/icons/bed-solid.svg')}}"></small>
                                <p class="text-center">{{ $detalhes['bedrooms'] }}</p>
                            </div>
                            @endif
                            @if($detalhes['bathroom'] >= 1)
                            <div class="col-2">
                                <small><img src="{{asset('assets/img/icons/shower-solid.svg')}}"></small>
                                <p class="text-center">{{ $detalhes['bathroom'] }}</p>
                            </div>
                            @endif
                            @if($detalhes['private_size'] >= 1) <div class="col-2">
                                <small><img src="{{asset('assets/img/icons/ruler-solid.svg')}}"></small>
                                <p class="text-center">{{ number_format((float)($detalhes['private_size'] / 100), 2, ',', '') . 'm²'}}</p>
                            </div>
                            @endif
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
        <!-- termina card -->
    </div>

</section>
<section class="bg-light">
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-5 mt-5">
                <div class="card">
                    <div class="card-body">
                        @foreach($viewData['property'] as $key => $detalhes)

                        <h4>Descrição</h4>
                        <p>{{ $detalhes['description']}}</p>
                        <br>
                        <h4>Metragem:</h4>
                        <p>Área terreno: {{ number_format((float)($detalhes['total_size'] / 100), 2, ',', ''). 'm²' }}<br>
                            Área útil: {{ number_format((float)($detalhes['useful_size'] / 100), 2, ',', ''). 'm²' }}<br>
                            Área privativa: {{ number_format((float)($detalhes['private_size'] / 100), 2, ',', ''). 'm²' }}</p>
                        <h4>Outras Informações</h4>
                        <p>{{ $detalhes['comments']}}</p>
                        @endforeach
                    </div>
                </div>
                <!-- termina card -->
            </div>
            <div class="col-lg-7 mt-5">
                <div class="card">
                    <!-- map  -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="google-map">
                                    <div id="map"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection