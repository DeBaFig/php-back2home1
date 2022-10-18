@extends('layouts.app')
@section('content')
<div class="container text-center">
    <div class="row justify-content-center m-5">
        <h2>Adicionar Proprietário</h2>
        <div class="col-md-8">
            <form action="{{ route('owner.store') }}" class="row g-3 container flex-column w-30 d-flex justify-content-evenly" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nome:</label>
                        <input type="text" name="name" id="name" class="form-control" required="true" autofocus>
                    </div>
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                    <div class="col-md-6">
                        <label for="cpf" class="form-label">CPF:</label>
                        <input type="text" name="cpf" id="cpf" class="form-control" required="true">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" id="email" name="email" class="form-control" require="true">
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Telefone</label>
                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Somente números">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="address" class="form-label">Endereço</label>
                            <input type="text" id="address" name="address" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label for="number_owner" class="form-label">Número</label>
                            <input type="number_owner" min="0" id="number" name="number_owner" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="cep" class="form-label">CEP</label>
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
                            <label class="form-label">Estado</label>
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
                        </div>
                        <div class="row g-3">
                            <input type="submit" class="btn btn-block btn-outline-success" style="width:20%" value="Salvar Dados">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection