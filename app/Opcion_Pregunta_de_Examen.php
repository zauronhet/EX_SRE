<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opcion_Pregunta_de_Examen extends Model
{
    protected $table = 'opciones_preguntas_de_examenes';
    //
    public function examen()
    {
        return $this->belongsTo('App\Examen');
    }

    public function pregunta_de_examen()
    {
        return $this->belongsTo('App\Pregunta_de_Examen');
    }
    
    public function respuestas_por_usuario()
    {
        return $this->hasMany('App\Respuesta_por_Usuario');
    }

}
