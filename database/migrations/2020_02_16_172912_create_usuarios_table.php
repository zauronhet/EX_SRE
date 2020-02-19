<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nombre', 35);	
            $table->char('apellido_paterno', 35);
            $table->char('apellido_materno', 35);	
            $table->char('direccion_institucional', 35);
            $table->char('email')->unique();
            $table->char('nombre_de_usuario')->unique();
            $table->boolean('rol');
            $table->integer('status');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('usuarios');
    }
}
