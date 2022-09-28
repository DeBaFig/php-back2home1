@extends('layouts.appNavbar')
@section('content')
<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
  
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>  

  <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Acoredeon -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  
    <!-- Upload photo -->

  <link rel="stylesheet" href="/path/to/cdn/bootstrap.min.css" />
<script src="/path/to/cdn/jquery.min.js"></script>
<script src="/path/to/cdn/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js" crossorigin="anonymous"></script><br type="_moz">
<link rel="stylesheet" href="./jquery.imagesloader.css" />
<script src="./jquery.imagesloader.js"></script>
  
</body>

<head>
    <title>Cadastro de Imóveis</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="card">
            <div class="card mb-4">
                <h5 class="card-header">Cadastro de Imóveis</h5>
            </div>
            <div class="card mb-4">
                <button type="button" class="card-header" data-bs-toggle="collapse" data-bs-target="#owner">
                    Dados do Proprietário
                </button>
                <div class="collapse"id="owner">
                    <form class="container flex-column w-100 d-flex justify-content-evenly" method="POST">
                        <label for="exampleInputEmail1">Nome</label>
                        <input type="text" id="desc" name="descrition" class="form-control" required="true">
                        <br>
                        <label for="exampleInputEmail1">CPF</label>
                        <input type="text" id="cpf" name="cpf"  class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00" data-mask="000.000.000-00" maxlength="14" autocomplete="off" required="true">
                        <br>
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="emailInput" class="form-control" required="true">
                        <br>
                        <label for="exampleInputEmail1">Endereço</label>
                        <input type="text" id="adress" name="adress" class="form-control" placeholder="Rua" required="true">
                        <br>
                        <label for="exampleInputEmail1">Número</label>
                        <input type="text" id="number" name="number" class="form-control" required="true">
                        <br>
                        <label for="exampleInputEmail1">Bairro</label>
                        <input type="text" id="district" name="district" class="form-control" required="true">
                        <br>
                        <label for="exampleInputEmail1">Cidade</label>
                        <input type="text" id="city" name="city" class="form-control"  required="true">
                        <br>
                        <label class="form-group">Estado</label>
                        <select class="form-select " id="state">
                            <option selected>Selecione</option>
                            <option value="1">Acre</option>
                            <option value="2">Alagoas</option>
                            <option value="3">Amapá</option>
                            <option value="4">Amazonas</option>
                            <option value="5">Bahia</option>
                            <option value="6">Ceará</option>
                            <option value="7">Distrito Federal</option>
                            <option value="8">Espírito Santo</option>
                            <option value="9">Goiás</option>
                            <option value="10">Maranhão</option>
                            <option value="11">Mato Grosso</option>
                            <option value="12">Mato Grosso do Sul</option>
                            <option value="13">Minas Gerais</option>
                            <option value="14">Pará</option>
                            <option value="15">Paraíba</option>
                            <option value="16">Paraná</option>
                            <option value="17">Pernambuco</option>
                            <option value="18">Piauí</option>
                            <option value="19">Rio de Janeiro</option>
                            <option value="20">Rio Grande do Norte</option>
                            <option value="21">Rio Grande do Sul</option>
                            <option value="22">Rondônia</option>
                            <option value="23">Roraima</option>
                            <option value="24">Santa Catarina</option>
                            <option value="25">São Paulo</option>
                            <option value="26">Sergipe</option>
                            <option value="27">Tocantins</option>
                        </select>
                        <br>
                        <label for="exampleInputEmail1">CEP</label>
                        <input type="text" id="cep" name="cep" class="form-control" placeholder="Ex: 00000-000" data-mask="00000-000" maxlength="15" autocomplete="off" required="true">
                        <br>
                        <label for="exampleInputEmail1">Telefone</label>
                        <input type="text" id="phone1" name="phone1" class="form-control" placeholder="Ex: (00) 00000-0000" data-mask="(00) 00000-0000" maxlength="15" autocomplete="off" required="true">
                        <br>
                        <label for="exampleInputEmail1">Celular</label>
                        <input type="text" id="phone2" name="phone2" class="form-control" placeholder="Ex: (00) 00000-0000" data-mask="(00) 00000-0000" maxlength="15" required="true">
                        <br>

                        <input type="submit" form="frm" class="btn btn-block btn-outline-success float-right" style="width:20%" value="Salvar">
                    </form>
                </div>    
            </div>
        </div>
            
        <div class="card mb-4">
            <button type="button" class="card-header" data-bs-toggle="collapse" data-bs-target="#immobile">
                Dados do Imóvel
            </button>
            <div class="collapse"id="immobile">          
            <div class="card-body">
                <form class="container flex-column w-30 d-flex justify-content-evenly" method="POST">
                    <div class="form-group">
                        <label class="mt-3">Referência: "Aqui colocar o ID automático"</label>
                        <!-- Ver aqui como fazer o campo Referência: se é colocado aleatório do se é gerado automaticamente. -->
                    </div>
                    <label for="exampleInputEmail1">Valor de Venda</label>
                    <input type="text" id="prize" name="prize" class="form-control" placeholder="R$ 0,00" required="true">
                    <br>   
                    <div class="col">
                        <label class="form-group">Objetivo:</label>
                        <select class="form-select" id="purpose">
                            <option selected>Selecione</option>
                            <option value="1">Vender</option>
                            <option value="2">Alugar</option>
                        </select>
                        <br>
                        <label class="form-group">Tipo do Imóvel:</label>
                        <select class="form-select " id="property_type">
                            <option selected>Selecione</option>
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
                    <br>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Descrição:</label>
                        <textarea name="description" id="description" class="form-control" required=""></textarea>
                        <br>
                        <label for="exampleInputEmail1">Endereço</label>
                        <input type="text" id="adress_immobile" name="adress_immobile" class="form-control" placeholder="Rua" required="true">
                        <br>
                        <label for="exampleInputEmail1">Número</label>
                        <input type="text" id="number_immobile" name="number_immobile" class="form-control" required="true">
                        <br>
                        <label for="exampleInputEmail1">Bairro</label>
                        <input type="text" id="district_immobile" name="district_immobile" class="form-control" required="true">
                        <br>
                        <label for="exampleInputEmail1">Cidade</label>
                        <input type="text" id="city_immobile" name="city_immobile" class="form-control"  required="true">
                        <br>
                        <label class="form-group">Estado</label>
                        <select class="form-select " id="state_immobile">
                            <option selected>Selecione</option>
                            <option value="1">Acre</option>
                            <option value="2">Alagoas</option>
                            <option value="3">Amapá</option>
                            <option value="4">Amazonas</option>
                            <option value="5">Bahia</option>
                            <option value="6">Ceará</option>
                            <option value="7">Distrito Federal</option>
                            <option value="8">Espírito Santo</option>                                    <option value="9">Goiás</option>
                            <option value="10">Maranhão</option>
                            <option value="11">Mato Grosso</option>
                            <option value="12">Mato Grosso do Sul</option>
                            <option value="13">Minas Gerais</option>
                            <option value="14">Pará</option>
                            <option value="15">Paraíba</option>
                            <option value="16">Paraná</option>
                            <option value="17">Pernambuco</option>
                            <option value="18">Piauí</option>
                            <option value="19">Rio de Janeiro</option>
                            <option value="20">Rio Grande do Norte</option>
                            <option value="21">Rio Grande do Sul</option>
                            <option value="22">Rondônia</option>
                            <option value="23">Roraima</option>
                            <option value="24">Santa Catarina</option>
                            <option value="25">São Paulo</option>
                            <option value="26">Sergipe</option>
                            <option value="27">Tocantins</option>
                        </select>
                        <br>
                        <label for="exampleInputEmail1">CEP</label>
                        <input type="text" id="cep_immobile" name="cep_immobile" class="form-control" placeholder="Ex: 00000-000" data-mask="00000-000" maxlength="15" autocomplete="off" required="true">
                        <br>
                    </div>
                    <br>
                    <div class="col">
                        <label class="form-group">Quantidade de Suítes:</label>
                        <select class="form-select " id="master_bedrooms">
                            <option selected>Selecione</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                        <br>
                        <label class="form-group">Quantidade de Quartos:</label>
                        <select class="form-select " id="bedrooms">
                            <option selected>Selecione</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                        <label class="form-group">Quantidade de Banheiros:</label>
                        <select class="form-select " id="bathroom">
                            <option selected>Selecione</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                        <br>
                        <label class="form-group">Vagas de Garagem:</label>
                        <select class="form-select " id="parking_lot">
                            <option selected>Selecione</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Área Útil:</label>
                        <input type="text" id="useful" name="useful" class="form-control" placeholder="m²" data-mask="m²" maxlength="15" autocomplete="off" required="true">  
                        <br>
                        <label for="exampleInputEmail1"> Área Privativa: </label>
                        <input type="text" id="private" name="private" class="form-control" placeholder="m²" data-mask="m²" maxlength="15" autocomplete="off" required="true">  
                        <br>
                        <label for="exampleInputEmail1">Tamanho Total:</label>
                        <input type="text" id="full_size"name="full_size" class="form-control" placeholder="m²" data-mask="m²" maxlength="15" autocomplete="off" required="true">  
                    </div>
                    <br>
                    <div>
                        <label for="exampleInputEmail1">Observações:</label>
                        <textarea name="comments" class="form-control" required=""></textarea>
                    </div>
                    <br>
                    <div class="wrapper">
                        <label class="upload__button"> Fotos: </label>
                        <form action="imagem.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="image[]" multiple="multiple"></label>
                            <input type="submit" form="frm" class="btn btn-block btn-outline-success float-right" style="width:20%" value="Enviar">
                        </form>
                    <!-- Os colchetes no name do input indicam que os dados serão enviados em forma de array. É necessário para que o servidor receba corretamente os dados de todos os arquivos. -->
                    </div>
                </form>
                <br><br>

                <!-- Upload Button -->

                <div class="row mt-2">
                    <div class="col-md-4 offset-md-8 text-center mb-4">
                        <button id="btnContinue" type="submit" form="frm" class="btn btn-block btn-outline-success float-right" data-toggle="tooltip" data-trigger="manual" data-placement="top" data-title="Continue">
                            Continue<span id="btnContinueIcon" class="fa fa-chevron-circle-right ml-2"></span><span id="btnContinueLoading" class="fa fa-spin fa-spinner ml-2" style="display:none"></span>
                        </button>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</body>

</html>


<!-- ver instruções upload de arquivo em https://www.jqueryscript.net/form/multi-image-uploader-bootstrap.html -->
@endsection