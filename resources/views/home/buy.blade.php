@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<section class="section ">
  <div class="container">
    <div class="row mb-5 align-items-center">
      <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
        <h2>Imovéis para Venda</h2>
      </div>
    </div>
    <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
            @foreach($viewData['comprar'] as $key => $detalhe)
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