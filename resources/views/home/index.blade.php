@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="position-relative">
    <div id="carouselExampleInterval" class="carousel slide " style="max-height: 500px;" data-bs-ride="carousel">

        <div class="carousel-inner">
            @foreach($viewData['images'] as $key => $image)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="2000">
                <img src="{{ asset('assets/img/home/' . $image)  }}" class="d-block w-100" style="max-height: 500px; opacity: 0.7; object-fit: cover; " alt="Imagnes de imóveis passando na tela em movimento em forma de carrocel">
            </div>
            @endforeach
        </div>
    </div>
    <div class="position-absolute top-50 start-50 translate-middle-x ">
        <img src="{{  asset('assets/img/home/b2h1-2.png')}}" style="width: 10rem;">
    </div>
</div>
<section class="section ">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
                <h2>Destaques</h2>
            </div>
        </div>
        <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
            @foreach($viewData['destaque'] as $key => $detalhe)
            <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
                <a href="{{ route('home.show', ['id' => $detalhe['id'] ] ) }}" class="item-wrap fancybox">
                    <div class="work-info">
                        <h3>{{ $detalhe['title'] }}</h3>
                    </div>
                    <img class="img-fluid" src="{{  $detalhe['photo_image']??$detalhe['photo_url'] }}" style="overflow: hidden;">
                </a>
            </div>
            @endforeach
        </div>
        <div class="row mb-5 align-items-center">
            <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
                <h2>Populares</h2>
            </div>
        </div>
        <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
            @foreach($viewData['popular'] as $key => $detalhe)
            <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
                <a href="{{ route('home.show', ['id' => $detalhe['id'] ] ) }}" class="item-wrap fancybox">
                    <div class="work-info">
                        <h3>{{ $detalhe['title'] }}</h3>
                    </div>
                    <img class="img-fluid" src="{{  $detalhe['photo_image']??$detalhe['photo_url'] }}" style="overflow: hidden;">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection