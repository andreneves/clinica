@extends('adminlte::page')

@section('content')
<div class="container">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                <form action="{{ url('/animal') }}" method="post">
                    @csrf
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="string" name="nome" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Especie</label>
                    <input type="string" name="especie" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Raca</label>
                    <input type="string" name="raca" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Idade</label>
                    <input type="string" name="idade" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nome do Dono</label>
                    <input type="string" name="nomeDono" class="form-control">
                </div>

            </div>
                <button type="submit" class="btn btn-primary">CRIAR</button>
                </form>

            </div>
            </div>
        </div>
    </div>
</div>
@endsection


