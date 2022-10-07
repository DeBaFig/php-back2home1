@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card mb-4"> 
                    <h5 class="card-header">Cadastro de Imóveis</h5>
                </div>
                <div class="card mb-4">
                    <form action="{{ route('property.add_owner), ['id'=> $............]') }}" class="container flex-column w-100 d-flex justify-content-evenly" method="POST">
                     <input type="submit" class="btn btn-block btn-outline-success float-right" data-trigger="manual" data-placement="top" data-title="Continue" value="Dados do Proprietário">
                    </form>
                    <form action="{{ route('property.add_property') }}" class="container flex-column w-100 d-flex justify-content-evenly" method="POST">
                     <input type="submit" class="btn btn-block btn-outline-success float-right" data-trigger="manual" data-placement="top" data-title="Continue" value="Dados do Proprietário">
                    </form>
                </div>
            </div>
        </div>    
    </div>           
</div>
           