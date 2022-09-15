@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="container text-center">
  <div class="container-xxl container-p-y">
    <div class="misc-wrapper">
      <h1 class="mb-2 mx-2">EM CONSTRUÇÃO</h1>
      <p class="mb-4 mx-2">Pedimos desculpa pela inconveniência!</p>
      <div class="mt-4">
        <img src="{{ asset('assets\img\building\building.png')}}" alt="Imagem mostrando uma desenho de contrução de site" width="500" class="img-fluid"/>
      </div>
    </div>
  </div>
</div>
@endsection
