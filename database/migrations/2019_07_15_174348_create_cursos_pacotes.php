<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosPacotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos_pacotes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('id_pacote');
            $table->unsignedBigInteger('id_curso');

            $table->foreign('id_pacote')->references('id')->on('pacotes');
            $table->foreign('id_curso')->references('id')->on('cursos');

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
        Schema::dropIfExists('cursos_pacotes');
    }
}
