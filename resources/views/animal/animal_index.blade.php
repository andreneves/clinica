@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Animal</div>

                <script>
                    function ConfirmDelete() {
                        return confirm('Tem certeza que deseja excluir este registro?');
                    }
                </script>

                <a href="{{ url('/animal/create' ) }}" class="btn btn-success">CRIAR</a>

                @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

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
                                    <a href="{{ url('/animal/' . $value->id . '/edit') }}" class="btn btn-warning">Editar</a>
                                    <form action="{{ url('/animal/' . $value->id) }}" method="post" onsubmit='return ConfirmDelete()'>
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Deletar</button>
                                    </form>
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