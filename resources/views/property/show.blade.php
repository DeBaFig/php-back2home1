@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card mb-4">
                    <h5 class="card-header"> Dados dos Imóveis</h5>
                </div>
                <div class="card mb-4">
                    <button type="button" class="card-header" data-bs-toggle="collapse" data-bs-target="#owner">
                        Dados do Proprietário
                    </button>
                    <div class="collapse" id="owner">
                        <!-- <form action="{{ route('owner.store') }}" class="container flex-column w-100 d-flex justify-content-evenly" method="POST"> -->
                            <!-- @csrf  -->
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="text" id="desc" name="name" class="form-control" value="{{ $owner->name }}">
                            <br>
                            <label for="exampleInputEmail1">CPF</label>
                            <input type="text" id="cpf" name="cpf" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00" data-mask="000.000.000-00" maxlength="14" autocomplete="off" value="{{ $owner->cpf }}">
                            <br>
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email_owner" class="form-control" value="{{ $owner->email_owner }}">
                            <br>
                            <label for="exampleInputEmail1">Endereço</label>
                            <input type="text" id="address" name="adress" class="form-control" placeholder="Rua" value="{{ $owner->address }}">
                            <br>
                            <label for="exampleInputEmail1">Número</label>
                            <input type="text" id="number" name="number" class="form-control" value="{{ $owner->number }}">
                            <br>
                            <label for="exampleInputEmail1">Bairro</label>
                            <input type="text" id="district" name="district" class="form-control" value="{{ $owner->district }}">
                            <br>
                            <label for="exampleInputEmail1">Cidade</label>
                            <input type="text" id="city" name="city" class="form-control" value="{{ $owner->city }}">
                            <br>
                            <label class="form-group">Estado</label>
                            <select class="form-select " id="state" value="{{ $owner->state }}">
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
                            <input type="text" id="cep" name="cep" class="form-control" placeholder="Ex: 00000-000" data-mask="00000-000" maxlength="15" autocomplete="off" value="{{ $owner->cep }}">
                            <br>
                            <label for="exampleInputEmail1">Telefone</label>
                            <input type="text" id="phone1" name="phone1" class="form-control" placeholder="Ex: (00) 00000-0000" data-mask="(00) 00000-0000" maxlength="15" autocomplete="off" value="{{ $owner->phone1 }}">
                            <br>
                            <label for="exampleInputEmail1">Celular</label>
                            <input type="text" id="phone2" name="phone2" class="form-control" placeholder="Ex: (00) 00000-0000" data-mask="(00) 00000-0000" maxlength="15" value="{{ $owner->phone2 }}">
                            <br>

                            <!-- <input type="submit" class="btn btn-block btn-outline-success float-right" style="width:20%" value="Salvar"> -->
                        <!-- </form> -->
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <button type="button" class="card-header" data-bs-toggle="collapse" data-bs-target="#immobile">
                    Dados do Imóvel
                </button>
                <div class="collapse" id="immobile">
                    <div class="card-body">
                        <!-- <form action="{{ route('property.store') }}" class="container flex-column w-30 d-flex justify-content-evenly" method="POST"> -->
                            <!-- @csrf     -->
                            <div class="form-group">
                                <label class="mt-3">Referência: "Aqui colocar o ID automático"</label>
                                <br>
                                <!-- Ver aqui como fazer o campo Referência: se é colocado aleatório do se é gerado automaticamente. -->
                                <label for="exampleInputEmail1">Imóvel:</label>
                                <textarea name="title" id="title" class="form-control" value="{{ $property->title }}"></textarea>
                                <br>
                            </div>
                            <label for="exampleInputEmail1">Valor de Venda</label>
                            <input type="text" id="price" name="price" class="form-control" placeholder="R$ 0,00" value="{{ $property->price }}">
                            <br>
                            <div class="col">
                                <label class="form-group">Objetivo:</label>
                                <select class="form-select" id="purpose" name="purpose" value="{{ $property->purpose }}">
                                    <option selected>Selecione</option>
                                    <option value="1">Vender</option>
                                    <option value="2">Alugar</option>
                                </select>
                                <br>
                                <label class="form-group">Tipo do Imóvel:</label>
                                <select class="form-select " id="property_type" name="property_type" value="{{ $property->property_type }}">
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
                                <label for="exampleInputEmail1">Imóvel:</label>
                                <textarea name="description" id="description" class="form-control" value="{{ $property->description }}"></textarea>
                                <br>
                                <label for="exampleInputEmail1">Endereço</label>
                                <input type="text" id="address_immobile" name="adress_immobile" class="form-control" placeholder="Rua" value="{{ $property->address_immobile }}">
                                <br>
                                <label for="exampleInputEmail1">Número</label>
                                <input type="text" id="number_immobile" name="number_immobile" class="form-control" value="{{ $property->number_immobile }}">
                                <br>
                                <label for="exampleInputEmail1">Bairro</label>
                                <input type="text" id="district_immobile" name="district_immobile" class="form-control" value="{{ $property->districti_immobile}}">
                                <br>
                                <label for="exampleInputEmail1">Cidade</label>
                                <input type="text" id="city_immobile" name="city_immobile" class="form-control" value="{{ $property->city_immobile}}">
                                <br>
                                <label class="form-group">Estado</label>
                                <select class="form-select " id="state_immobile" name="state_immobile" value="{{ $property->state_immobile }}">
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
                                <input type="text" id="cep_immobile" name="cep_immobile" class="form-control" placeholder="Ex: 00000-000" data-mask="00000-000" maxlength="15" autocomplete="off" value="{{ $property->cep_immobile }}">
                                <br>
                            </div>
                            <br>
                            <div class="col">
                                <label class="form-group">Quantidade de Suítes:</label>
                                <select class="form-select " id="master_bedrooms" name="master_bedrooms" value="{{ $property->master_bedrooms }}">
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
                                <select class="form-select " id="bedrooms" name="bedrooms" value="{{ $property->bedrooms }}">
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
                                <label class="form-group">Quantidade de Banheiros:</label>
                                <select class="form-select " id="bathroom" name="bathroom" value="{{ $property->bathroom }}">
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
                                <select class="form-select " id="parking_lot" name="parking_lot" value="{{ $property->parking_lot }}">
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
                                <input type="text" id="useful_size" name="useful_size" class="form-control" placeholder="m²" data-mask="m²" maxlength="15" autocomplete="off" value="{{ $property->usefull_size }}">
                                <br>
                                <label for="exampleInputEmail1"> Área Privativa: </label>
                                <input type="text" id="private_size" name="private_size" class="form-control" placeholder="m²" data-mask="m²" maxlength="15" autocomplete="off" value="{{ $property->private_size }}">
                                <br>
                                <label for="exampleInputEmail1">Tamanho Total:</label>
                                <input type="text" id="total_size" name="total_size" class="form-control" placeholder="m²" data-mask="m²" maxlength="15" autocomplete="off" value="{{ $property->total_size }}">
                            </div>
                            <br>
                            <div>
                                <label for="exampleInputEmail1">Observações:</label>
                                <textarea name="comments" class="form-control" value="{{ $property->comments }}"></textarea>
                            </div>
                            <br>
                            <!-- <input type="submit" class="btn btn-block btn-outline-success float-right" style="width:20%" value="Salvar"> -->
                        <!-- </form> -->
                    </div>    
                </div>        
            </div>
            <!-- <div class="card mb-4">
                <button type="button" class="card-header" data-bs-toggle="collapse" data-bs-target="#photos">
                    Fotos do Imóvel
                </button>
                <div class="wrapper">
                    <label class="upload__button"> Fotos: </label>
                    <form action="imagem.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="image[]" multiple="multiple"></label>
                        <input type="submit" form="frm" class="btn btn-block btn-outline-success float-right" style="width:20%" value="Enviar">
                    </form>
                         Os colchetes no name do input indicam que os dados serão enviados em forma de array. É necessário para que o servidor receba corretamente os dados de todos os arquivos. 
                </div>
                <br><br>
            </div> -->
            
            <!-- Upload Button -->

            <!-- <div class="row mt-2">
                <div class="col-md-4 offset-md-8 text-center mb-4"> 
                    <button id="btnContinue" type="submit" form="frm" class="btn btn-block btn-outline-success float-right"  data-toggle="tooltip" data-trigger="manual" data-placement="top" data-title="Continue">
                        Continue<span id="btnContinueIcon" class="fa fa-chevron-circle-right ml-2"></span><span id="btnContinueLoading" class="fa fa-spin fa-spinner ml-2" style="display:none"></span>
                    </button>
                </div>
            </div>   -->
        </div>
    </div>
</div>
@endsection