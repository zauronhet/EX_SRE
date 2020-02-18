<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intento_de_Examen extends Model
{
    protected $table = 'intentos_de_examenes';
    //
    public function respuestas_por_usuario()
    {
        return $this->hasMany(Respuesta_por_Usuario::class);
    }
}
