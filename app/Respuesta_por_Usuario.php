<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta_por_Usuario extends Model
{
    protected $table = 'respuestas_por_usuario';
    //
    public function opcion_pregunta_de_examen()
    {
        return $this->belongsTo('App\Opcion_Pregunta_de_Examen');
    }

    public function intento_de_examen()
    {
        return $this->belongsTo('App\Intento_de_Examen');
    }
}
