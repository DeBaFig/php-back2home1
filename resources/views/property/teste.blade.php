@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card mb-4">
                    <h5 class="card-header"> Dados dos Imóveis</h5>
                </div>
                <div class="card mb-4">
                <button type="button" class="card-header" data-bs-toggle="collapse" data-bs-target="#immobile">
                    Dados do Imóvel
                </button>
                <div class="collapse" id="immobile">
                    <div class="card-body">
                    @foreach($property as $key => $detalhes)
                            <div class="form-group">
                                <label for="exampleInputEmail1">Imóvel:</label>
                                <textarea name="description" id="description" class="form-control" value="{{ $detalhes  }}"></textarea>
                                <br>   
                        @endforeach
                    </div>    
                </div>        
            </div>
            </div>
    </div>
</div>
@endsection
        