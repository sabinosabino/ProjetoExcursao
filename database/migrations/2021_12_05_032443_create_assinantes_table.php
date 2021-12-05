<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssinantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assinantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('cnpj');
            $table->string('endereco');
            $table->integer('numero');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('uf');
            $table->string('cep');
            $table->string('nomereponsavel');
            $table->string('cpfresponsavel');
            $table->string('rgresponsavel');
            $table->string('telefone1');
            $table->string('telefone2');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assinantes');
    }
}
