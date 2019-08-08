<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo',150);
            $table->string('conteudo',300);
            $table->string('capa',300);
            $table->string('descricao',500);
            $table->integer('acessos')->nullable();
            $table->enum('status',['1','0'])->nullable();
            
            //Chave estrangeira para Categorias
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('categorias');
            //Chave estrangeira para SubCategorias
            $table->unsignedBigInteger('id_sub_categoria');
            $table->foreign('id_sub_categoria')->references('id')->on('sub_categorias');
            //Chave estrangeira para Usuário
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('admins');

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
        Schema::dropIfExists('post');
    }
}
