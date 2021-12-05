@extends('Template.app')

@section('conteudo')
<form class="form-horizontal">
    <div class="titulo text-center bg-info">
        <h1>ASSINANTES</h1>
    </div>
    <div class="form-group">


        <!--ID-->
        <div class="col-md-2">
            <label for="id">Id</label>
            <input type="text" class="form-control" readOnly id="id" name="id" placeholder="" value="">
        </div>

        <!--NOME-->
        <div class="col-md-6">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" Required id="nome" name="nome" placeholder="" value="">
        </div>

        <!--CNPJ-->
        <div class="col-md-3">
            <label for="cnpj">CNPJ</label>
            <input type="text" class="form-control" Required id="cnpj" name="cnpj" placeholder="Insira CNPJ" value="">
        </div>

        <!--ENDERECO-->
        <div class="col-md-6">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" Required id="endereco" name="endereco" placeholder="Insira Endereço" value="">
        </div>

        <!--NUMERO-->
        <div class="col-md-2">
            <label for="numero">Nº</label>
            <input type="text" class="form-control" Required id="numero" name="numero" placeholder="Insira Nº" value="">
        </div>

        <!--COMPLEMENTO-->
        <div class="col-md-6">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Insira Complemento" value="">
        </div>

        <!--BAIRRO-->
        <div class="col-md-6">
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" Required id="bairro" name="bairro" placeholder="Insira Bairro" value="">
        </div>

        <!--CIDADE-->
        <div class="col-md-6">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" Required id="cidade" name="cidade" placeholder="Insira Cidade" value="">
        </div>

        <!--CEP-->
        <div class="col-md-3">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" Required id="cep" name="cep" placeholder="Insira CEP" value="">
        </div>

        <!--NOMERESPONSAVEL-->
        <div class="col-md-6">
            <label for="nomeresponsavel">Nome do Responsável</label>
            <input type="text" class="form-control" Required id="nomeresponsavel" name="nomeresponsavel" placeholder="Insira Nome do Responsável" value="">
        </div>

        <!--CPFRESPONSAVEL-->
        <div class="col-md-3">
            <label for="cpfresponsavel">CPF Responsável</label>
            <input type="text" class="form-control" Required id="cpfresponsavel" name="cpfresponsavel" placeholder="Insira CPF Responsável" value="">
        </div>

        <!--RGRESPONSAVEL-->
        <div class="col-md-3">
            <label for="rgresponsavel">RG Responsável</label>
            <input type="text" class="form-control" id="rgresponsavel" name="rgresponsavel" placeholder="Insira RG Responsável" value="">
        </div>

        <!--TELEFONE1-->
        <div class="col-md-3">
            <label for="telefone1">Telefone 1</label>
            <input type="text" class="form-control" Required id="telefone1" name="telefone1" placeholder="Insira Telefone 1" value="">
        </div>

        <!--TELEFONE2-->
        <div class="col-md-3">
            <label for="telefone2">Telefone 2</label>
            <input type="text" class="form-control" id="telefone2" name="telefone2" placeholder="Insira Telefone 2" value="">
        </div>

        <!--EMAIL-->
        <div class="col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" Required id="email" name="email" placeholder="Insira Email" value="">
        </div>

        <!--UF-->
        <div class="col-md-2">
            <label for="uf">UF</label>
            <select class="form-control" name="uf" id="uf">
                <option value="0">Option</option>
            </select>
        </div>
        <!--OBS-->
        <div class="col-md-12">
            <label for="obs">Observações</label>
            <textarea class="form-control" id="obs" name="obs" placeholder=""></textarea>
        </div>
    </div>
    <a href="#" class="btn btn-light btn-lg"><< Cancelar</a>
    <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
</form>
@endsection
