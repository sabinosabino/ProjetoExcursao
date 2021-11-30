@extends('Template.app')

@section('conteudo')
<form>
    <div class="titulo text-center bg-info">
        <h1>CLIENTES</h1>
    </div>

    <div class="col-md-12">
        <div class="imagem60">
            
        </div>
    </div>
    <div class="form-group col-md-2">
        <label for="id">Id</label>
        <input type="text" class="form-control" readonly id="id" name="id" aria-describedby="id" placeholder="" value="">
    </div>

    <div class="form-group col-md-6">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" required id="nome" name="nome" aria-describedby="nome" placeholder="" value="">
    </div>

    <div class="form-group col-md-4">
        <label for="nomecracha">Nome Crachá</label>
        <input type="text" class="form-control" id="nomecracha" name="nomecracha" aria-describedby="nomecracha" placeholder="" value="">
    </div>

    <div class="form-group col-md-6">
        <label for="end">Endereço</label>
        <input type="text" class="form-control" id="end" name="end" aria-describedby="end" placeholder="" value="">
    </div>

    <div class="form-group col-md-6">
        <label for="cidade">Cidade</label>
        <input type="text" class="form-control" id="cidade" name="cidade" aria-describedby="cidade" placeholder="" value="">
    </div>

    <div class="form-group col-md-3">
        <label for="uf">UF</label>
        <select class="form-control" name="uf" id="uf">
            <option value="0">A</option>
            <option value="0">A</option>
            <option value="0">A</option>
            <option value="0">A</option>
            <option value="0">A</option>
        </select>
    </div>

    <div class="form-group col-md-3">
        <label for="cep">CEP</label>
        <input type="text" class="form-control" id="cep" name="cep" aria-describedby="cep" placeholder="" value="">
    </div>

    <div class="form-group col-md-3">
        <label for="foneresidencial">Telefone Residencial</label>
        <input type="text" class="form-control" id="foneresidencial" name="foneresidencial" aria-describedby="foneresidencial" placeholder="" value="">
    </div>

    <div class="form-group col-md-3">
        <label for="fonecel1">Telefone Celular 1</label>
        <input type="text" class="form-control" required id="fonecel1" name="fonecel1" aria-describedby="fonecel1" placeholder="" value="">
    </div>

    <div class="form-group col-md-3">
        <label for="operadora1">Operadora</label>
        <input type="text" class="form-control" id="operadora1" name="operadora1" aria-describedby="operadora1" placeholder="" value="">
    </div>

    <div class="form-group col-md-3">
        <label for="fone cel2">Telefone Celular 2</label>
        <input type="text" class="form-control" id="fone cel2" name="fone cel2" aria-describedby="fone cel2" placeholder="" value="">
    </div>

    <div class="form-group col-md-3">
        <label for="operadora2">Operadora</label>
        <input type="text" class="form-control" id="operadora2" name="operadora2" aria-describedby="operadora2" placeholder="" value="">
    </div>

    <div class="form-group col-md-3">
        <label for="doc">RG</label>
        <input type="text" class="form-control" id="doc" name="doc" aria-describedby="doc" placeholder="" value="">
    </div>

    <div class="form-group col-md-3">
        <label for="ssp local">SSP Documento</label>
        <select class="form-control" name="uf" id="uf">
            <option value="0">A</option>
            <option value="0">A</option>
            <option value="0">A</option>
            <option value="0">A</option>
            <option value="0">A</option>
        </select>
    </div>

    <div class="form-group col-md-3">
        <label for="dta exp">Data Expedição</label>
        <input type="date" class="form-control" id="dta exp" name="dta exp" aria-describedby="dta exp" placeholder="" value="">
    </div>

    <div class="form-group col-md-6">
        <label for="pai">Nome Pai</label>
        <input type="text" class="form-control" id="pai" name="pai" aria-describedby="pai" placeholder="" value="">
    </div>

    <div class="form-group col-md-6">
        <label for="mae">Nome Mãe</label>
        <input type="text" class="form-control" id="mae" name="mae" aria-describedby="mae" placeholder="" value="">
    </div>

    <div class="form-group col-md-3">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" name="cpf" aria-describedby="cpf" placeholder="" value="">
    </div>

    <div class="form-group col-md-3">
        <label for="datanascimento">Data Nascimento</label>
        <input type="date" class="form-control" id="datanascimento" name="datanascimento" aria-describedby="datanascimento" placeholder="" value="">
    </div>

    <div class="form-group col-md-3">
        <label for="usamedicamentos">Usa Medicamentos?</label>
        <select class="form-control" name="usamedicamentos" id="usamedicamentos">
            <option value="Não">Não</option>
            <option value="Sim">Sim</option>
        </select>
    </div>

    <div class="form-group col-md-9">
        <label for="quais">Quais?</label>
        <input type="text" class="form-control" id="quais" name="quais" aria-describedby="quais" placeholder="" value="">
    </div>

    <div class="form-group col-md-9">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="" value="">
    </div>

    <div class="form-group col-md-3">
        <label for="sexo">Sexo</label>
        <select class="form-control" name="sexo" id="sexo">
            <option value="M">Masculino</option>
            <option value="M">Feminino</option>
            <option value="M">Não Binário</option>
        </select>
    </div>

    <div class="form-group col-md-12">
        <label for="obs">Observação</label>
        <textarea type="text" class="form-control" id="obs" name="obs" aria-describedby="obs" placeholder="" value=""></textarea>
    </div>

    <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
    

</form>
@endsection