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
            $table->string('nome', 100);
            $table->string('cnpj', 20);
            $table->string('endereco', 100);
            $table->integer('numero');
            $table->string('complemento', 30);
            $table->string('bairro', 100);
            $table->string('cidade', 100);
            $table->string('uf');
            $table->string('cep');
            $table->string('nomeresponsavel', 100);
            $table->string('cpfresponsavel', 100);
            $table->string('rgresponsavel',  15);
            $table->string('telefone1', 20);
            $table->string('telefone2', 20);
            $table->string('email', 100);
            $table->text('obs');
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
