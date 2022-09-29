@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="about-section">
  <h1>Sobre Nós</h1>
  <p> Somos alunas do curso de PHP - do Projeto Entra 21 - 2022. </p>
  <p> Gostamos muito de aprender e amamos tecnologia. Tivemos o privilégio de participar deste projeto de capacitação e empregabilidade. E, como presente, recebemos a oportunidade de trabalharmos juntas para desenvolver este projeto para Conclusão de Curso.
  <p>
  <p> Esta é uma aplicação web, desenvolvida com: linguagem de programação PHP; MySql, Laravel, HTML, CSS, Bootstrap e Javascript. Professor orientador do projeto: Adriano Machado. </p>
</div>

<h2 style="text-align:center">❤️ Nosso Time ❤️ </h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="/assets/img/team/team1.jpeg" alt="Adriana" style="width:100%">
      <div class="container">
        <h2>Adriana E F Rocha</h2>
        <p class="title">Administradora</p>
        <p>Penha - SC - Brasil</p>
        <p>adrianalibras@gmail.com</p>
        <div class="container">
          <div class="row">
            <div class="col">
              <a href="https://www.linkedin.com/in/adriana-ewerling-ferreira-da-rocha/" title='LinkedIn'> <i class="fa-brands fa-linkedin"></i></a>
            </div>
            <div class="col">
              <a href="https://github.com/AdrianaEFRocha" title='Github'> <i class="fa-brands fa-square-github"></i></a>
            </div>
            <div class="col">
              <a href="https://whatsa.me/5549999733703" title='Whatsapp'> <i class="fa-brands fa-square-whatsapp"></i></a>
            </div>
            <div class="col">
              <a href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&source=mailto&to=adrianalibras@gmail.com" title='Gmail'> <i class="fa-sharp fa-solid fa-square-envelope"></i></a>
            </div>
          </div>
        </div>
        <p><button class="button">Contato</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/assets/img/team/team2.jpeg" alt="Denize" style="width:100%" class="col-md-11">
      <div class="container">
        <h2>Denize B Figueiredo</h2>
        <p class="title">Desenvolvedora Web</p>
        <p>Joinville - SC - Brasil</p>
        <p>denize.f.bassi@gmail.com</p>
        <div class="container">
          <div class="row">
            <div class="col">
              <a href="#" title='LinkedIn'> <i class="fa-brands fa-linkedin"></i></a>
            </div>
            <div class="col">
              <a href="#" title='Github'> <i class="fa-brands fa-square-github"></i></a>
            </div>
            <div class="col">
              <a href="#" title='Whatsapp'> <i class="fa-brands fa-square-whatsapp"></i></a>
            </div>
            <div class="col">
              <a href="#" title='Gmail'> <i class="fa-sharp fa-solid fa-square-envelope"></i></a>
            </div>
          </div>
        </div>
        <p><button class="button">Contato</button></p>
      </div>
    </div>
  </div>
  @endsection