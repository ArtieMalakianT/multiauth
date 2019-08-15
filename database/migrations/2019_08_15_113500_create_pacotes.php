<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacotes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome',200);
            $table->string('descricao',200);
            $table->string('duracao',100);
            $table->enum('status',['1','0']);
            $table->integer('ordem')->unique();
            $table->unsignedBigInteger('id_cor');

            //Relação com a tabela categorias
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('categorias');

            $table->foreign('id_cor')->references('id')->on('cores');

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
        Schema::dropIfExists('pacotes');
    }
}
