@extends('Template.app')

@section('conteudo')
<form>
    <div class="titulo text-center">
        <h1>CLIENTES</h1>
    </div>

    <div class="form-group">
        <label for="id">Id</label>
        <input type="text" class="form-control" id="id" name="id" aria-describedby="id" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" aria-describedby="nome" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="nomecracha">Nome Crachá</label>
        <input type="text" class="form-control" id="nomecracha" name="nomecracha" aria-describedby="nomecracha" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="end">Endereço</label>
        <input type="text" class="form-control" id="end" name="end" aria-describedby="end" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="cidade">Cidade</label>
        <input type="text" class="form-control" id="cidade" name="cidade" aria-describedby="cidade" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="uf">UF</label>
        <input type="text" class="form-control" id="uf" name="uf" aria-describedby="uf" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="cep">CEP</label>
        <input type="text" class="form-control" id="cep" name="cep" aria-describedby="cep" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="foneresidencial">Telefone Residencial</label>
        <input type="text" class="form-control" id="foneresidencial" name="foneresidencial" aria-describedby="foneresidencial" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="fonecel1">Telefone Celular 1</label>
        <input type="text" class="form-control" id="fonecel1" name="fonecel1" aria-describedby="fonecel1" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="operadora1">Operadora</label>
        <input type="text" class="form-control" id="operadora1" name="operadora1" aria-describedby="operadora1" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="fone cel2">Telefone Celular 2</label>
        <input type="text" class="form-control" id="fone cel2" name="fone cel2" aria-describedby="fone cel2" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="operadora2">Operadora</label>
        <input type="text" class="form-control" id="operadora2" name="operadora2" aria-describedby="operadora2" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="doc">RG</label>
        <input type="text" class="form-control" id="doc" name="doc" aria-describedby="doc" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="ssp local">SSP Documento</label>
        <input type="text" class="form-control" id="ssp local" name="ssp local" aria-describedby="ssp local" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="dta exp">Data Expedição</label>
        <input type="text" class="form-control" id="dta exp" name="dta exp" aria-describedby="dta exp" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="pai">Nome Pai</label>
        <input type="text" class="form-control" id="pai" name="pai" aria-describedby="pai" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="mae">Nome Mãe</label>
        <input type="text" class="form-control" id="mae" name="mae" aria-describedby="mae" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" name="cpf" aria-describedby="cpf" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="datanascimento">Data Nascimento</label>
        <input type="text" class="form-control" id="datanascimento" name="datanascimento" aria-describedby="datanascimento" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="usamedicamentos">Usa Medicamentos?</label>
        <input type="text" class="form-control" id="usamedicamentos" name="usamedicamentos" aria-describedby="usamedicamentos" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="quais">Quais?</label>
        <input type="text" class="form-control" id="quais" name="quais" aria-describedby="quais" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" aria-describedby="email" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="sexo">Sexo</label>
        <input type="text" class="form-control" id="sexo" name="sexo" aria-describedby="sexo" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="obs">Observação</label>
        <input type="text" class="form-control" id="obs" name="obs" aria-describedby="obs" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="caminhoimagen">Caminho Imagem</label>
        <input type="text" class="form-control" id="caminhoimagen" name="caminhoimagen" aria-describedby="caminhoimagen" placeholder="" value="">
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection