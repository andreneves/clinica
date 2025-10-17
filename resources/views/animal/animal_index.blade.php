@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Animal</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">id</th>
                            <th scope="col">nome</th>
                            <th scope="col">raca</th>
                            <th scope="col">idade</th>
                            <th scope="col">Nome do Dono</th>
                            <th scope="col">Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($animais as $value)
                            <tr>
                                <th>{{ $value->id }}</th>
                                <td>{{ $value->nome }}</td>
                                <td>{{ $value->raca }}</td>
                                <td>{{ $value->idade }}</td>
                                <td>{{ $value->nomeDono }}</td>
                                <td>
                                    <a href="{{ url('/animal/' . $value->id ) }}" class="btn btn-primary">Visualizar</a>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection