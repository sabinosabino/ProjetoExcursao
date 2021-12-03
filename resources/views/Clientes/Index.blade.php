@extends('Template.app')

@section('conteudo')

<h1 class="text-cent">CRUD</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">NOME</th>
        <th scope="col">NOME CRACHÁ</th>
        <th scope="col" class="text-center">ACTIONS</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $model)
        <tr>
            <th scope="row">{{ $model->id }}</th>
            <th>{{ $model->nome }}</th>
            <th>{{ $model->nomecracha }}</th>
            <th class="text-center">
                <a class="btn btn-default" href="#" role="button">Visualizar</a>
                <a class="btn btn-success" href="#" role="button">Editar</a>
                <a class="btn btn-danger" href="#" role="button">Excluir</a>
            </th>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection