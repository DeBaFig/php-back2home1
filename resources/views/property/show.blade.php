@extends('admin.home')
@section('propertyData', $propertyData)
@section('ownerData', $ownerData)
@section('admin_content')
@foreach($propertyData as $key => $property)
<div class="card item web col-sm-10 col-md-10 col-lg-10 m-4 ">
    <h4 class="card-header">{{ (($property['purpose'] == 'comprar')?'Vender':'Alugar') . " - " . $property['title'] }}</h4>
    <div class="p-2">
        <div class="row pb-3">
            <div class=" col-md-6 ">
                <h5 class="card-title">{{ 'Área total: ' . number_format((float)($property['total_size'] / 100), 2, ',', '') . 'm²' }}</h5>
                <h5 class="card-title">{{ 'Área Útil: ' . number_format((float)($property['useful_size'] / 100), 2, ',', '') . 'm²' }}</h5>
                <h5 class="card-title">{{ 'Área Privada: ' . number_format((float)($property['private_size'] / 100), 2, ',', '') . 'm²' }}</h5>
            </div>
            <div class=" col-md-6 ">
                <h5 class="card-title">{{'Endereço: ' . $property['address'] . ' Num: ' . $property['number_owner'] }}</h5>
                <h5 class="card-title">{{'Bairro: ' . $property['district'] }}</h5>
                <h5 class="card-title">{{'Cidade: ' . $property['city'] . '-'. $property['state'] }}</h5>
                <h5 class="card-title">{{'CEP: ' . $property['cep']}}</h5>
            </div>
        </div>
        <hr style="margin:0 auto;max-width:250px;">
        <div class="row py-3">
            <div class=" col-md-5 ">
                <h5 class="card-title">{{ 'Valor: R$ ' . number_format((float)($property['price'] / 100), 2, ',', '') }}</h5>
                <h5 class="card-title">{{ 'Condominio: R$ ' . number_format((float)($property['townhouse_price'] / 100), 2, ',', '') }}</h5>
            </div>
            <div class="row col-md-7 ">
                <div class="col-md-5">
                    <h5 class="card-title">{{'Suítes: ' . $property['address'] }}</h5>
                    <h5 class="card-title">{{'Quartos: ' . $property['bathroom'] }}</h5>
                </div>
                <div class="col-md-7">
                    <h5 class="card-title">{{'Banheiros: ' . $property['bedrooms'] }}</h5>
                    <h5 class="card-title">{{'Vagas Garagem: ' . $property['parking_lot'] }}</h5>
                </div>
            </div>
        </div>
        <hr style="margin:0 auto; max-width:250px;">
        <div class="row pt-3">
            <div class=" col-md-12">
                <h5 class="card-title">{{ 'Tipo de Imóvel:' . $property['property_type'] }}</h5>
                <h5 class="card-title">{{ 'Descrição:' .  $property['description']}}</h5>
                <h5 class="card-title">{{ 'Observação:' .  $property['comments']}}</h5>
            </div>
        </div>
    </div>
</div>
@endforeach
@foreach($ownerData as $key => $owner)
<div class="card item web col-sm-10 col-md-10 col-lg-10 m-4 ">
    <h4 class="card-header">{{ 'Proprietário: ' . $owner['name'] }}</h4>
    <div class="row my-1 p-2">
        <div class="col-md-6 ">
            <h5 class="card-title">{{'Nome: ' . $owner['name'] }}</h5>
            <h5 class="card-title">{{'E-mail: ' . $owner['email'] }}</h5>
            <h5 class="card-title">{{'CPF: ' . $owner['cpf'] }}</h5>
            <h5 class="card-title">{{'Telefone: ' . $owner['phone'] }}</h5>
        </div>
        <div class=" col-md-6 ">
            <h5 class="card-title">{{'Endereço: ' . $owner['address'] . ' Num: ' . $owner['number_owner'] }}</h5>
            <h5 class="card-title">{{'Bairro: ' . $owner['district'] }}</h5>
            <h5 class="card-title">{{'Cidade: ' . $owner['city'] . '-'. $owner['state'] }}</h5>
            <h5 class="card-title">{{'CEP: ' . $owner['cep']}}</h5>
        </div>
    </div>
</div>
@endforeach
<div>
    <a href="{{ route('property.all') }}" class="btn btn-success">Voltar</a>
</div>
@endsection