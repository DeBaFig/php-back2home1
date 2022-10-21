@extends('admin.home')
@section('viewData', $viewData)
@section('table_content')
<table class="table table-success border border-success text-center">
    <thead class="table-success">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Título</th>
            <th scope="col">Ref.</th>
            <th scope="col">CEP</th>
            <th scope="col">Valor</th>
            <th scope="col">Proposito</th>
            <th scope="col">Suítes</th>
            <th scope="col">Banheiros</th>
            <th scope="col">Área Total</th>
            <th scope="col">Destaque</th>
            <th scope="col">Popular</th>
            <th scope="col">VER</th>
            <th scope="col">EDITAR</th>
            <th scope="col">EXCLUIR</th>
        </tr>
    </thead>
    @foreach($viewData as $property)
    @if($property['isActive'] == 1)
    <tbody class="table-success border border-success">
        <tr>
            <td>{{ $property['id'] }}</td>
            <td>{{ $property['title']}}</td>
            <td>{{ $property['reference_n']}}</td>
            <td>{{ $property['cep']}}</td>
            <td>{{ $property['price']}}</td>
            <td>{{ $property['purpose']}}</td>
            <td>{{ $property['master_bedrooms']}}</td>
            <td>{{ $property['bathrooms']}}</td>
            <td>{{ $property['total_size'] . 'm²'}}</td>
            <td><a href="/admin/property/destaques{{ ($property['destaque']==0)?'On/'. $property['id']:'Off/' . $property['id']}}"><i class="{{ ($property['destaque'] == 1)?'fa-solid':'fa-regular' }} fa-star"></i></a></td>
            <td><a href="/admin/property/popular{{ ($property['popular']==0)?'On/'. $property['id']:'Off/' . $property['id']}}"><i class="fa-solid {{ ($property['popular'] == 1)?'fa-arrow-up':'fa-arrow-down' }}"></i></a></td>
            <td><a href="/admin/property/show/{{$property['id']}}"><i class="fa-solid fa-eye"></i></a></td>
            <td><a href="/admin/property/edit/{{$property['id']}}"><i class="fa-solid fa-pen"></i></a></td>
            <td><a href="/admin/property/delete/{{$property['id']}}"><i class="fa-solid fa-trash"></i></a></td>
        </tr>
    </tbody>

    @endif
    @endforeach
</table>
@endsection