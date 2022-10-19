@extends('layouts.app')
@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            @foreach($user as $key => $data)
            <img class=" mx-1 p-1" src="{{ $data['avatar'] }}" alt="" srcset="">
            {{ $data['name'] }} <br>
            {{ $data['email'] }} <br>
            {{ $data['phone'] }} <br>
            {{ $data['cep'] }} <br>
            {{ $data['cpf'] }} <br>
            {{ $data['facebook'] }} <br>
            {{ $data['instagram'] }} <br> <br>
            @endforeach
            <br>ANUNCIOS:<br>
            <!-- anuncios -->
            @foreach($viewData as $key => $detalhes)
            {{ $detalhes['title'] }} <br>
            {{ $detalhes['description'] }} <br>
            <br><br>
            @endforeach

        </div>
    </div>
</div>
@endsection