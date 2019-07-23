<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('id_cursos_pacotes');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_status');

            $table->foreign('id_cursos_pacotes')->references('id')->on('cursos_pacotes');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_status')->references('id')->on('status_matriculas');

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
        Schema::dropIfExists('matriculas');
    }
}
