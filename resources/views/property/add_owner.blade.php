@extends('layouts.app')
@section('reference_n', $reference_n)
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card mb-4">
                    <h5 class="card-header">Cadastro de Imóveis</h5>
                </div>
                <div class="card mb-4">
                    <button type="button" class="card-header" data-bs-toggle="collapse" data-bs-target="#owner">
                        Dados do Proprietário
                    </button>
                    <div class="collapse" id="owner">
                        <form action="{{ route('owner.store') }}" class="container flex-column w-100 d-flex justify-content-evenly" method="POST">
                            @csrf
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="text" id="desc" name="name" class="form-control" required="true">
                            <br>
                            <label for="exampleInputEmail1">CPF</label>
                            <input type="text" id="cpf" name="cpf" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00" data-mask="000.000.000-00" maxlength="14" autocomplete="off" required="true">
                            <br>
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email_owner" class="form-control" required="true">
                            <br>
                            <label for="exampleInputEmail1">Endereço</label>
                            <input type="text" id="address" name="adress" class="form-control" placeholder="Rua" required="true">
                            <br>
                            <label for="exampleInputEmail1">Número</label>
                            <input type="text" id="number" name="number" class="form-control" required="true">
                            <br>
                            <label for="exampleInputEmail1">Bairro</label>
                            <input type="text" id="district" name="district" class="form-control" required="true">
                            <br>
                            <label for="exampleInputEmail1">Cidade</label>
                            <input type="text" id="city" name="city" class="form-control" required="true">
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
                            <input type="submit" class="btn btn-block btn-outline-success float-right" style="width:20%" value="Salvar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection