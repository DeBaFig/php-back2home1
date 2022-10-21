@extends('admin.home')
@section('viewData', $viewData)
@section('table_content')
<table class="table table-success border border-success text-center">
    <thead class="table-success">
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">E-mail</th>
            <th scope="col">Telefone</th>
            <th scope="col">Cidade - Estado</th>
            <th scope="col">CEP</th>
            <th scope="col">VER</th>
            <th scope="col">EDITAR</th>
            <th scope="col">EXCLUIR</th>
        </tr>
    </thead>
    @foreach($viewData as $owner)
    @if($owner['isActive'] == 1)
    <tbody class="table-success border border-success">
        <tr>
            <td>{{ $owner['name']}}</td>
            <td>{{ $owner['cpf']}}</td>
            <td>{{ $owner['email']}}</td>
            <td>{{ $owner['phone']}}</td>
            <td>{{ $owner['city_owner'] . "-" . $owner['state_owner'] }}</td>
            <td>{{ $owner['cep_owner']}}</td>
            <td><a href="/admin/owner/show/{{$owner['id']}}"><i class="fa-solid fa-eye"></i></a></td>
            <td><a href="/admin/owner/form/{{$owner['id']}}"><i class="fa-solid fa-pen"></i></a></td>
            <td><a href="/admin/owner/delete/{{$owner['id']}}"><i class="fa-solid fa-trash"></i>
                </a></td>
        </tr>
    </tbody>
    @endif
    @endforeach
</table>

@endsection