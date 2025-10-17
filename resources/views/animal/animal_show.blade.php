@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <strong>Nome: </strong> {{ $animal->nome }}</br>
                    <strong>Raça: </strong> {{ $animal->raca }}</br>
                    <strong>Idade: </strong> {{ $animal->idade }}</br>
                    <strong>Nome do Dono: </strong> {{ $animal->nomeDono }}</br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
