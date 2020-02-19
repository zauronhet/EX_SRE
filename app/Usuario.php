<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    
    public function intentos_de_examenes()
    {
        return $this->hasMany(Intento_de_Examen::class);
    }
}
