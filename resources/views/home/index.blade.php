@extends('layouts.appNavbar')
@section('title', $viewData["title"])
@section('content')
<div id="carouselExampleInterval" class="carousel slide " style="max-height: 500px;" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($viewData['images'] as $key => $image)
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="2000">
            <img src="{{ asset('assets/img/home/' . $image)  }}" class="d-block w-100" style="max-height: 500px; opacity: 0.7; object-fit: cover; " alt="...">
        </div>
        @endforeach
    </div>

</div>
@endsection