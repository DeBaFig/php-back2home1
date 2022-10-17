@extends('layouts.app')
@section('reference_n', $reference_n)
@section('content')
<div class="container text-center">
    <div class="row justify-content-center m-5">
        <h2>Adicionar imóvel</h2>
        <div class="col-md-8">
            <form action="{{ route('property.store') }}" class="row g-3 container flex-column w-30 d-flex justify-content-evenly" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-md-2">
                        <label class="mt-3" class="form-label">Referência: {{ $reference_n }}</label>
                        <input type="hidden" name="reference_n" value="{{ $reference_n }}" />
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                    </div>
                    <div class="col-md-10">
                        <label for="title" class="form-label">Titúlo do Anúncio:</label>
                        <input type="text" name="title" id="title" class="form-control" required="true" autofocus>
                    </div>
                    <div class="col-md-10">
                        <label for="title" class="form-label">CPF do proprietário:</label>
                        <input type="text" name="title" id="title" class="form-control" required="true" >
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
                        <input type="number" id="townhouse_price" name="townhouse_price" class="form-control">
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="address" class="form-label">Endereço</label>
                            <input type="text" id="address" name="address" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label for="number" class="form-label">Número</label>
                            <input type="number" min="0" id="number" name="number_property" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="cep_" class="form-label">CEP</label>
                            <input type="text" id="cep" name="cep" class="form-control" placeholder="Ex: 00000-000" maxlength="15">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="district" class="form-label">Bairro</label>
                            <input type="text" id="district" name="district" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="city" class="form-label">Cidade</label>
                            <input type="text" id="city" name="city" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="state" class="form-label">Estado</label>
                            <select class="form-select " id="state" name="state">
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
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
                                <input type="number" min="0" id="useful_size" name="useful_size" class="form-control" placeholder="m²">
                            </div>
                            <div class="col-md-3">
                                <label for="private_size" class="form-label"> Área Privada: </label>
                                <input type="number" min="0" id="private_size" name="private_size" class="form-control" placeholder="m²">
                            </div>
                            <div class="col-md-3">
                                <label for="total_size" class="form-label">Tamanho Total:</label>
                                <input type="number" min="0" id="total_size" name="total_size" class="form-control" placeholder="m²">
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
                                <textarea name="comments" id="comments" class="form-control"></textarea>
                            </div>

                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="inputImage">Adicionar Fotos:</label>
                            <input type="file" name="images[]" id="inputImage" multiple class="form-control @error('images') is-invalid @enderror">
                        </div>
                        <input type="submit" class="btn btn-block btn-outline-success" style="width:20%" value="Salvar Dados">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection