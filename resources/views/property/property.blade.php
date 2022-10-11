@extends('layouts.app')
@section('reference_n', $reference_n)
@section('content')
<div class="container text-center">
    <div class="row justify-content-center m-5">
        <h2>Adicionar imóvel</h2>
        <div class="col-md-8">
            <form action="{{ route('property.store') }}" class="row g-3 container flex-column w-30 d-flex justify-content-evenly" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-md-2">
                        <label class="mt-3" class="form-label">Referência: {{ $reference_n }}</label>
                        <input type="hidden" name="reference_n" value="{{ $reference_n }}" />
                    </div>
                    <div class="col-md-10">
                        <label for="title" class="form-label">Titúlo do Anúncio:</label>
                        <input type="text" name="title" id="title" class="form-control" required="true">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="price" class="form-label">Valor de Venda</label>
                        <input type="number" min="0" id="price" name="price" class="form-control" placeholder="R$ 0,00">
                    </div>
                    <div class="col-md-6">
                        <label for="purpose" class="form-label">Objetivo:</label>
                        <select class="form-select" id="purpose" name="purpose" required="true">
                            <option value="1">Vender</option>
                            <option value="2">Alugar</option>
                        </select>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="property_type" class="form-label">Tipo do Imóvel:</label>
                        <select class="form-select " id="property_type" name="property_type">
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
                    <div class="col-md-6">
                        <label for="townhouse_price" class="form-label">Valor Condomínio</label>
                        <input type="number" id="townhouse_price" name="townhouse_price" class="form-control" >
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="address_immobile" class="form-label">Endereço</label>
                            <input type="text" id="address" name="adress_immobile" class="form-control" >
                        </div>
                        <div class="col-md-2">
                            <label for="number" class="form-label">Número</label>
                            <input type="number" min="0" id="number" name="number" class="form-control" >
                        </div>
                        <div class="col-md-4">
                            <label for="cep_" class="form-label">CEP</label>
                            <input type="text" id="cep" name="cep" class="form-control" placeholder="Ex: 00000-000" maxlength="15">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="district" class="form-label">Bairro</label>
                            <input type="text" id="district" name="district" class="form-control" >
                        </div>
                        <div class="col-md-4">
                            <label for="city" class="form-label">Cidade</label>
                            <input type="text" id="city_immobile" name="city_immobile" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="state_immobile" class="form-label">Estado</label>
                            <select class="form-select " id="state_immobile" name="state_immobile">
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
                        </div>
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label" for="master_bedrooms">Nº de Suítes:</label>
                                <select class="form-select " id="master_bedrooms" name="master_bedrooms">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5+">5+</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="bedrooms">Nº de Quartos:</label>
                                <select class="form-select " id="bedrooms" name="bedrooms">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5+">5+</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="bathroom">Nº de Banheiros:</label>
                                <select class="form-select " id="bathroom" name="bathroom">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5+">5+</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="parking_lot">Vagas de Garagem:</label>
                                <select class="form-select " id="parking_lot" name="parking_lot">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5+">5+</option>
                                </select>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label for="useful_size" class="form-label">Área Útil:</label>
                                <input type="number" min="0" id="useful_size" name="useful_size" class="form-control" placeholder="m²" >
                            </div>
                            <div class="col-md-3">
                                <label for="private_size" class="form-label"> Área Privada: </label>
                                <input type="number"  min="0" id="private_size" name="private_size" class="form-control" placeholder="m²">
                            </div>
                            <div class="col-md-3">
                                <label for="private_size" class="form-label"> Área Privativa: </label>
                                <input type="number"  min="0" id="private_size" name="private_size" class="form-control" placeholder="m²" >
                            </div>
                            <div class="col-md-3">
                                <label for="total_size" class="form-label">Tamanho Total:</label>
                                <input type="number"  min="0" id="total_size" name="total_size" class="form-control" placeholder="m²" >
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label for="description" class="form-label">Descrição:</label>
                                <textarea name="description" rows="10" id="description" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="comments" class="form-label">Observações:</label>
                                <textarea name="comments" id="comments" class="form-control" ></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="image_property" class="form-label">Imagens do Imóvel:</label>
                                <input type="file" name="image_property" multiple="multiple"></label>
                            </div>
                        </div>

                        <input type="submit" class="btn btn-block btn-outline-success" style="width:20%" value="Salvar">
            </form>
        </div>
    </div>
    @endsection