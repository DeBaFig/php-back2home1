@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="position-relative">
    <div id="carouselExampleInterval" class="carousel slide " style="max-height: 500px;" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($viewData['images'] as $key => $image)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="2000">
                <img src="{{ asset('assets/img/home/' . $image)  }}" class="d-block w-100" style="max-height: 500px; opacity: 0.7; object-fit: cover; " alt="...">
            </div>
            @endforeach
        </div>
    </div>
    <div class="position-absolute top-0 start-50 translate-middle-x mt-5">
        <img src="{{  asset('assets/img/home/b2h1-2.png')}}" style="width: 10rem;">
    </div>
    <div class="rounded bg-light p-1 position-absolute top-50 start-50 translate-middle">
        <div class="d-flex justify-content-around">
            <form method="post">
                <div class="input-group row">
                    <div class="col">
                        <select class="form-select" id="purpose_input">
                            <option selected>Propósito</option>
                            <option value="1">Comprar</option>
                            <option value="2">Alugar</option>
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-select " id="property_type">
                            <option selected>Tipo</option>
                            <option value="1">Apartamento</option>
                            <option value="2">Kitnet</option>
                            <option value="3">Cobertura</option>
                            <option value="4">Triplex</option>
                            <option value="5">Casa</option>
                            <option value="6">Chácara</option>
                            <option value="7">Comercial</option>
                            <option value="8">Geminado</option>
                            <option value="9">Loja</option>
                            <option value="10">Pousada</option>
                            <option value="11">Sobrado</option>
                            <option value="12">Terreno</option>
                        </select>
                    </div>
                    <div class="col-4 row">
                        <label class="input-group-text col-3" for="location" style="min-width:80px;">Bairro</label>
                        <input type="text" class="form-control col" id="location" aria-label="location" aria-describedby="location">
                    </div>
                    <button type="submit" class="btn col-1">
                        <img src="{{ asset('assets/img/icons/lupa-de-pesquisa.png') }}" style="width: 1.5rem;">
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection