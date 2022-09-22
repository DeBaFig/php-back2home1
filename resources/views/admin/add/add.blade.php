@extends('layouts.appNavbar')
@section('content')
<!DOCTYPE html>
<html>

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
            <div class="card-header text-center font-weight-bold">
                Cadastro de Imóveis
            </div>
            <div class="card-body">
                <form name="add" id="add" method="post" action="{{url('store-form')}}">
                    @csrf
                    <div class="form-group">
                        <label class="mt-3">Referência:</label>
                        <input type="number" min="1" name="idadeInput" required="true">
                    </div>
                    <div class="col">
                        <label class="form-group">Objetivo:</label>
                        <select class="form-select" id="purpose">
                            <option selected>Selecione</option>
                            <option value="1">Vender</option>
                            <option value="2">Alugar</option>
                        </select>
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
                    <div class="input-group mb-3">
                        <label class="form-group">Valor de Venda: </label>
                        <span class="input-group-text"> R$</span>
                        <input type="text" class="form-control">
                        <span class="input-group-text">.00</span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Descrição:</label>
                        <input type="text" id="title" name="title" class="form-control" required="true">

                        <label for="exampleInputEmail1">Endereço:</label>
                        <input type="text" id="title" name="title" class="form-control" required="true">
                    </div>
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
                    <div>
                        <label class="form-group">Área Útil:</label>
                        <input type="text" name="nomeInput" required="true"> <label> m² </label>
                        <label class="form-group"> Área Privativa: </label>
                        <input type="text" name="nomeInput" required="true"> <label> m² </label>
                        <label class="form-group">Tamanho Total:</label>
                        <input type="text" name="nomeInput" required="true"> <label> m² </label>
                    </div>
                    <div>
                        <label for="exampleInputEmail1">Observações:</label>
                        <textarea name="description" class="form-control" required=""></textarea>
                    </div>
                    <div class="input-group mb-3 mt-3">
                        <label class="">Fotos: </label>
                        <form action="imagem.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="image[]" multiple="multiple"></label>
                            <input type="submit" value="Enviar">
                        </form>
                        <!-- Os colchetes no name do input indicam que os dados serão enviados em forma de array. É necessário para que o servidor receba corretamente os dados de todos os arquivos. -->
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
@endsection
