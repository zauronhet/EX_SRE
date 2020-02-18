<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opcion_Pregunta_de_Examen extends Model
{
    protected $table = 'opciones_preguntas_de_examenes';
    //
    public function respuestas_por_usuario()
    {
        return $this->hasMany(Respuesta_por_Usuario::class);
    }
}
