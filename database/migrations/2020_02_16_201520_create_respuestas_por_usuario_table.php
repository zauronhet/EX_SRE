<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespuestasPorUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas_por_usuario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('opcion_pregunta_de_examen_id');
            $table->unsignedBigInteger('intento_de_examen_id');
            $table->integer('status');
            $table->timestamps();

            $table->foreign('opcion_pregunta_de_examen_id')->references('id')->on('opciones_preguntas_de_examenes');
            $table->foreign('intento_de_examen_id')->references('id')->on('intentos_de_examenes');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuestas_por_usuario');
    }
}
