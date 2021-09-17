<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePdv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdv', function (Blueprint $table) {
            $table->id();
            $table->string('nome_comercial');
            $table->string('versao');
            $table->string('nome_principal_executavel');
            $table->string('perfis');
            $table->string('linguagem');
            $table->string('sistema_operacional');
            $table->string('data_base');
            $table->string('tipo_desenvolvimento');
            $table->string('forma_impressao');
            $table->string('tipo_funcionamento');
            $table->string('sped');
            $table->string('nfe');
            $table->string('nfce');
            $table->string('tratamento_interrupcao');
            $table->string('integracao_paf');
            $table->string('aplicacoes_especiais');
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
        Schema::dropIfExists('pdv');
    }
}
