<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    protected $table = 'examenes';
    //
    public function opciones_pregunta_de_examen()
    {
        return $this->hasMany(Opcion_Pregunta_de_Examen::class);
    }

    public function intentos_de_examen()
    {
        return $this->hasMany(Intento_de_Examen::class);
    }
}
