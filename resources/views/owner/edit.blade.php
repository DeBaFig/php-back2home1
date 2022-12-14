@extends('layouts.app-admin')
@section('ownerData', $ownerData)
@section('admin_content')
<div class="row g-3 text-center">
    <p class="h4 col-md-12">Editar Proprietário</p>
</div>
<div class="container text-center">
    <div class="row justify-content-center m-5">
        <div class="col-md-8">
            @foreach($ownerData as $owner)
            <form action="{{ route('owner.edit', ['id' => $owner['id'] ] ) }}" class="row g-3 container flex-column w-30 d-flex justify-content-evenly" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nome:</label>
                        <input type="text" name="name" id="name" value="{{ $owner['name'] }}" class="form-control" required="true" autofocus>
                        <input type="hidden" name="id" value="{{ $owner['id'] }}" />
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                    </div>
                    <div class="col-md-6">
                        <label for="cpf" class="form-label">CPF:</label>
                        <input type="text" name="cpf" id="cpf" value="{{ $owner['cpf'] }}" class="form-control" required="true">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" id="email" name="email" value="{{ $owner['email'] }}" class="form-control" require="true">
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Telefone</label>
                        <input type="text" id="phone" name="phone" value="{{ $owner['phone'] }}" class="form-control" placeholder="Somente números">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="address" class="form-label">Endereço</label>
                        <input type="text" id="address" value="{{ $owner['address_owner'] }}" name="address_owner" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <label for="number_owner" class="form-label">Número</label>
                        <input type="number_owner" min="0" value="{{ $owner['number_owner'] }}" id="number" name="number_owner" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="cep" class="form-label">CEP</label>
                        <input type="text" id="cep" value="{{ $owner['cep_owner'] }}" name="cep_owner" class="form-control" placeholder="Ex: 00000-000" maxlength="15">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="district" class="form-label">Bairro</label>
                        <input type="text" value="{{ $owner['district_owner'] }}" id="district" name="district_owner" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="city" class="form-label">Cidade</label>
                        <input type="text" value="{{ $owner['city_owner'] }}" id="city" name="city_owner" class="form-control">
                    </div>
                    <div class="col-md-4 mt-2">
                        <label class="form-label" for="state">Estado</label>
                        <select class="form-select " name="state_owner" value="{{ $owner['state_owner'] }}" id="state">
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
                </div>
                <div class="row g-3">
                    <div class="col-md-12 mt-5">
                        <input type="submit" class="btn btn-block btn-outline-success" value="Atualizar Dados">
                    </div>
                </div>
        </div>
    </div>
    @endforeach
    </form>
</div>

@endsection