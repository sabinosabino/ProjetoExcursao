@extends('Template.app')

@section('conteudo')


<form action="">
      <h1 class="text-center">LISTA DE ASSINANTES</h1>
      <hr class="col-md-10 col-md-offset-1">

        <div class="form-group">
    
            <div class="col-md-2">
              <label for="pesquisa"><h4><strong>Pesquisa:</strong></h4></label>
            </div>

            <div class="col-md-6">
              <input type="text" class="form-control id="pesquisa" name="pesquisa" placeholder="Digite um valor procurado" value="">
            </div>

            <div class="col-md-2">
              <button class="btn btn-primary">Pesquisar</button>
            </div>

            <hr class="col-md-10 col-md-offset-1">
        </div>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">NOME</th>
              <th scope="col">CNPJ</th>
              <th scope="col" class="text-center">ACTIONS</th>
            </tr>
          </thead>
          <tbody>
      
              @foreach ($assinantes as $model)
      
                <tr>
                    <th scope="row">{{ $model->id }}</th>
                    <th>{{ $model->nome }}</th>
                    <th>{{ $model->cnpj }}</th>
                    <th class="text-center">
                      <!--método usado para carregar os dados de acorodo com id-->
                        <a class="btn btn-success" href="{{url("Assinantes/$model->id/edit")}}" role="button">Editar</a>
                        <a class="btn btn-danger" href="#" role="button">Excluir</a>
                    </th>
                </tr>
                
              @endforeach
          </tbody>
        </table>
    </form>


@endsection