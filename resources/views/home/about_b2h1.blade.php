@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="container">
  <div class="row">
    <div style="text-align:center">
      <p class="lead">{{ $viewData["description1"] }}</p>
      <p class="lead">{{ $viewData["description2"] }}</p>
      <p class="lead">{{ $viewData["description3"] }}</p>
    </div>
  </div>
</div>
@endsection
