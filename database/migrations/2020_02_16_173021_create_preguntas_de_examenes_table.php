<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasDeExamenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preguntas_de_examenes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('examen_id');
            $table->longText('pregunta');
            $table->longText('resp_1');
            $table->longText('resp_2');
            $table->longText('resp_3');
            $table->longText('resp_4');
            $table->string('respuesta_correcta',10);
            $table->integer('status');
            $table->timestamps();

            $table->foreign('examen_id')->references('id')->on('examenes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preguntas_de_examenes');
    }
}
