@extends('Template.app')

@section('conteudo')
<form class="form-horizontal">
    <div class="titulo text-center bg-info">
        <h1>CLIENTES</h1>
    </div>
    <div class="form-group">

        <div class="col-md-12">
            <div class="imagem60">
                  IMAGEM  
            </div>
        </div>
        <!--ID-->
        <div class="col-md-2">
            <label for="id">Id</label>
            <input type="text" class="form-control" readOnly id="id" name="id" aria-describedby="id" placeholder="" value="">
        </div>

        <!--NOME-->
        <div class="col-md-6">
            <label for="nome">Nome</label>
            <input type="text" required class="form-control" id="nome" name="nome" aria-describedby="id" placeholder="" value="">
        </div>

        <!--NOMECRACHA-->
        <div class="col-md-4">
            <label for="nomecracha">Nome Crachá</label>
            <input type="text" class="form-control" id="nomecracha" name="nomecracha" aria-describedby="id" placeholder="" value="">
        </div>

        <!--END-->
        <div class="col-md-6">
            <label for="end">Endereço</label>
            <input type="text" class="form-control" id="end" name="end" aria-describedby="id" placeholder="" value="">
        </div>

        <!--CIDADE-->
        <div class="col-md-6">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" aria-describedby="id" placeholder="" value="">
        </div>

        <!--UF-->
        <div class="col-md-3">
            <label for="uf">UF</label>
            <select class="form-control" name="uf" id="uf">
                <option value="0">Option</option>
            </select>
        </div>

        <!--CEP-->
        <div class="col-md-3">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" aria-describedby="id" placeholder="" value="">
        </div>

        <!--FONERESIDENCIAL-->
        <div class="col-md-3">
            <label for="foneresidencial">Telefone Residencial</label>
            <input type="text" class="form-control" id="foneresidencial" name="foneresidencial" aria-describedby="id" placeholder="" value="">
        </div>

        <!--FONECEL1-->
        <div class="col-md-3">
            <label for="fonecel1">Telefone Celular 1</label>
            <input type="text" required class="form-control" id="fonecel1" name="fonecel1" aria-describedby="id" placeholder="" value="">
        </div>

        <!--OPERADORA1-->
        <div class="col-md-3">
            <label for="operadora1">Operadora</label>
            <select class="form-control" name="operadora1" id="operadora1">
                <option value="0">Option</option>
            </select>
        </div>

        <!--FONE CEL2-->
        <div class="col-md-3">
            <label for="fone cel2">Telefone Celular 2</label>
            <input type="text" class="form-control" id="fone cel2" name="fone cel2" aria-describedby="id" placeholder="" value="">
        </div>

        <!--OPERADORA2-->
        <div class="col-md-3">
            <label for="operadora2">Operadora</label>
            <select class="form-control" name="operadora2" id="operadora2">
                <option value="0">Option</option>
            </select>
        </div>

        <!--DOC-->
        <div class="col-md-4">
            <label for="doc">RG</label>
            <input type="text" class="form-control" id="doc" name="doc" aria-describedby="id" placeholder="" value="">
        </div>

        <!--SSP LOCAL-->
        <div class="col-md-4">
            <label for="ssp local">SSP Documento</label>
            <select class="form-control" name="ssp local" id="ssp local">
                <option value="0">Option</option>
            </select>
        </div>

        <!--DTA EXP-->
        <div class="col-md-3">
            <label for="dta exp">Data Expedição</label>
            <input type="date" class="form-control" id="dta exp" name="dta exp" aria-describedby="id" placeholder="" value="">
        </div>

        <!--PAI-->
        <div class="col-md-6">
            <label for="pai">Nome Pai</label>
            <input type="text" class="form-control" id="pai" name="pai" aria-describedby="id" placeholder="" value="">
        </div>

        <!--MAE-->
        <div class="col-md-6">
            <label for="mae">Nome Mãe</label>
            <input type="text" class="form-control" id="mae" name="mae" aria-describedby="id" placeholder="" value="">
        </div>

        <!--CPF-->
        <div class="col-md-3">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" aria-describedby="id" placeholder="" value="">
        </div>

        <!--DATANASCIMENTO-->
        <div class="col-md-3">
            <label for="datanascimento">Data Nascimento</label>
            <input type="date" class="form-control" id="datanascimento" name="datanascimento" aria-describedby="id" placeholder="" value="">
        </div>

        <!--USAMEDICAMENTOS-->
        <div class="col-md-3">
            <label for="usamedicamentos">Usa Medicamentos?</label>
            <select class="form-control" name="usamedicamentos" id="usamedicamentos">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>

        <!--QUAIS-->
        <div class="col-md-12">
            <label for="quais">Quais?</label>
            <input type="text" class="form-control" id="quais" name="quais" aria-describedby="id" placeholder="" value="">
        </div>

        <!--EMAIL-->
        <div class="col-md-6">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" aria-describedby="id" placeholder="" value="">
        </div>

        <!--SEXO-->
        <div class="col-md-3">
            <label for="sexo">Sexo</label>
            <select class="form-control" name="sexo" id="sexo">
                <option value="0">Option</option>
            </select>
        </div>

        <!--OBS-->
        <div class="col-md-12">
            <label for="obs">Observação</label>
            <textarea type="text" class="form-control" id="obs" name="obs" aria-describedby="id" placeholder="" value=""></textarea>
        </div>

        <!--CAMINHOIMAGEN-->
        <div class="col-md-2" hidden>
            <label for="caminhoimagen">Caminho Imagem</label>
            <input type="text" class="form-control" id="caminhoimagen" name="caminhoimagen" aria-describedby="id" placeholder="" value="">
        </div>
    </div>
    <a href="#" class="btn btn-light btn-lg"><< Cancelar</a>
    <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
</form>


@endsection