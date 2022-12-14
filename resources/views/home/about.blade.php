@extends('layouts.app')
@section('content')
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="container-md text-center">
        <div class="card m-1">
          <div class="card-header h1">Sobre Nós</div>
          <div class="container">
            <p>Somos alunas do curso de PHP - do Projeto Entra 21 - 2022.<br></p>
            <p>Gostamos muito de aprender e amamos tecnologia. Tivemos o privilégio de participar deste projeto de capacitação e empregabilidade. E, como presente, recebemos a oportunidade de trabalharmos juntas para desenvolver este projeto para Conclusão de Curso. <br><br></p>
            <p>Esta é uma aplicação web, desenvolvida com: linguagem de programação PHP; MySql, Laravel, HTML, CSS, Bootstrap e Javascript. </p>
            <p>Professor orientador do projeto: Adriano Machado.</p>
          </div>
          <br>
          <h2 style="text-align:center">❤️ Nosso Time ❤️ </h2>


          <!-- ----------------  -->
          <div id="portfolio-grid" class="row  no-gutter" >
            <div class="item web col-sm-6 col-md-4 col-lg-6 mb-4 d-flex align-items-baseline">
              <div class="card text-center justify-content-between">
                <div class="card-header">
                  Adriana E F Rocha
                </div>
                <img src="{{ asset('assets/img/team/team1.jpeg')}}" class="card-img-top" alt="Imagem mostrando a fotografia de uma mulher chamada Adriana">
                <div class="card-body">
                  <p class="card-text">Administradora e Desenvolvedora</p>
                </div>
                <div class="card-footer text-muted">
                  <div class="inline">
                    <a href="mailto:adrianalibras@gmail.com"><img src="{{ asset('assets/img/icons/gmail.png')}}" class="col-2" alt="Imagem mostrando o ícone da aplicação Gmail"></a>
                    <a href="https://www.linkedin.com/in/adriana-ewerling-ferreira-da-rocha/"><img src="{{ asset('assets/img/icons/linkedin.png')}}" class="col-2" alt="Imagem mostrando o ícone da aplicação Linkedin"></a>
                    <a href="https://github.com/AdrianaEFRocha" title='Github'><img src="{{ asset('assets/img/icons/github-sign.png')}}" class="col-2" alt="Imagem mostrando o ícone da aplicação Github"></a>
                    <a href="https://whatsa.me/5549999733703" title='Whatsapp'><img src="{{ asset('assets/img/icons/whatsapp.png')}}" class="col-2" alt="Imagem mostrando o ícone da aplicação Whatsapp"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item web col-sm-6 col-md-4 col-lg-6 mb-4">
              <div class="card text-center justify-content-between">
                <div class="card-header">
                  Denize B Figueiredo
                </div>
                <img src="{{ asset('assets/img/team/team2.jpeg')}}" class="card-img-top" alt="Imagem mostrando a fotografia de uma mulher chamada Denize">
                <div class="card-body">
                  <p class="card-text">Desenvolvedora</p>
                </div>
                <div class="card-footer text-muted">
                  <div class="inline">
                    <a href="mailto:denize.f.bassi@gmail.com"><img src="{{ asset('assets/img/icons/gmail.png')}}" class="col-2" alt="Imagem mostrando o ícone da aplicação Gmail"></a>
                    <a href="https://www.linkedin.com/in/dbfigueiredo/"><img src="{{ asset('assets/img/icons/linkedin.png')}}" class="col-2" alt="Imagem mostrando o ícone da aplicação Linkedin"></a>
                    <a href="https://github.com/DeBaFig" title='Github'><img src="{{ asset('assets/img/icons/github-sign.png')}}" class="col-2" alt="Imagem mostrando o ícone da aplicação Github"></a>
                    <a href="https://whatsa.me/5547988184372" title='Whatsapp'><img src="{{ asset('assets/img/icons/whatsapp.png')}}" class="col-2" alt="Imagem mostrando o ícone da aplicação Whatsapp"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="portfolio-grid" class="row justify-content-around" >
            <div class="item web col-sm-6 col-md-4 col-lg-6 mb-4">
              <div class="card text-center justify-content-between">
                <div class="card-header">
                  Adriano Machado
                </div>
                <img src="{{ asset('assets/img/team/team3.jpg')}}" class="card-img-top" alt="">
                <div class="card-body">
                  <p class="card-text">Instrutor e Desenvolvedor</p>
                </div>
                <div class="card-footer text-muted">
                  <div class="inline">
                    <a href="mailto:adriano@sol.app.br"><img src="{{ asset('assets/img/icons/gmail.png')}}" class="col-2" alt=""></a>
                    <a href="https://www.linkedin.com/in/xadrak/"><img src="{{ asset('assets/img/icons/linkedin.png')}}" class="col-2" alt=""></a>
                    <a href="https://github.com/Machado-tec" title='Github'><img src="{{ asset('assets/img/icons/github-sign.png')}}" class="col-2" alt=""></a>
                    <a href="https://whatsa.me/5567992636781" title='Whatsapp'><img src="{{ asset('assets/img/icons/whatsapp.png')}}" class="col-2" alt=""></a>
                  </div>
                </div>
              </div>
            </div>
          </div>




          <!-- ------------------------  -->

        </div>
      </div>
    </div>
  </div>
</div>

@endsection