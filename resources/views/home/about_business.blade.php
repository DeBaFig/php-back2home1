@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container">
  <div class="row">
    <div class="meufundo" style="text-align:center">
      <img src="./assets/img/building/business.jpg" width="200px" height="200px">
      <p class="lead">{{ $viewData["description1"] }}</p><br>
      <p class="lead">{{ $viewData["description2"] }}</p><br>
      <p class="lead">{{ $viewData["description3"] }}</p>
    </div>
  </div>
</div>
@endsection
