<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intento_de_Examen extends Model
{
    protected $table = 'intentos_de_examenes';
    //
    
    public function examen()
    {
        return $this->belongsTo('App\Examen');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function respuestas_por_usuario()
    {
        return $this->hasMany('App\Respuesta_por_Usuario');
    }
}
