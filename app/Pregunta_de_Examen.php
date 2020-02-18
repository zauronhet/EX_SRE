<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta_de_Examen extends Model
{
    protected $table = 'preguntas_de_examenes';
    
    public function opciones_preguntas_de_examenes()
    {
        return $this->hasMany(Opcion_pregunta_de_Examen::class);
    }
}
