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
            $table->string('historico',300)->nullable();

            $table->unsignedBigInteger('id_pacote')->unique();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_status');

            $table->foreign('id_pacote')->references('id')->on('pacotes');
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
