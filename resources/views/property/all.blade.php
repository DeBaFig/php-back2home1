@extends('admin.home')
@section('viewData', $viewData)
@section('table_content')
<table class="table table-success border border-success text-center">
    <thead class="table-success">
        <tr>
            <th scope="col">Título</th>
            <th scope="col">Ref.</th>
            <th scope="col">CEP</th>
            <th scope="col">Valor</th>
            <th scope="col">Proposito</th>
            <th scope="col">Suítes</th>
            <th scope="col">Banheiros</th>
            <th scope="col">Área Total</th>
            <th scope="col">VER</th>
            <th scope="col">EDITAR</th>
            <th scope="col">EXCLUIR</th>
        </tr>
    </thead>
    @foreach($viewData as $property)
    @if($property['isActive'] == 1)
    <tbody class="table-success border border-success">
        <tr>
            <td>{{ $property['title']}}</td>
            <td>{{ $property['reference_n']}}</td>
            <td>{{ $property['cep']}}</td>
            <td>{{ $property['price']}}</td>
            <td>{{ $property['purpose']}}</td>
            <td>{{ $property['master_bedrooms']}}</td>
            <td>{{ $property['bathrooms']}}</td>
            <td>{{ $property['total_size'] . 'm²'}}</td>
            <td><a href="{{ route('property.show', ['id' => $property['id'] ] ) }}"><i class="fa-solid fa-eye"></i></a></td>
            <td><a href="{{ route('property.form.edit', ['id' => $property['id'] ] ) }}"><i class="fa-solid fa-pen"></i></a></td>
            <td><a href="{{ route('property.delete', ['id' => $property['id'] ] ) }}" onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();"><i class="fa-solid fa-trash"></i></a></td>
        </tr>
    </tbody>
    <form id="delete-form" action="{{ route('property.delete', ['id' => $property['id'] ] ) }}" method="POST" class="d-none">
        @csrf
    </form>
    @endif
    @endforeach
</table>
@endsection