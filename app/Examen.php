<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    protected $table = 'examenes';
    //
    public function opciones_pregunta_de_examen()
    {
        return $this->hasMany('App\Opcion_Pregunta_de_Examen');
    }

    public function intentos_de_examen()
    {
        return $this->hasMany('App\Intento_de_Examen');
    }
}
