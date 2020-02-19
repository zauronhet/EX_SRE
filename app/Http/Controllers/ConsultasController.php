<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Examen;
use App\Intento_de_Examen;
use App\Opcion_Pregunta_de_Examen;
use App\Pregunta_de_Examen;
use App\Respuesta_por_Usuario;
use App\Usuario;

class ConsultasController extends Controller
{
    public function Index()
    {
        return view('Index');
    }
    public function Examenes()
    {
        $ex = Examen::all();
        return $ex;
    }

    public function Intento_de_Examenes()
    {
        $in_ex = Intento_de_Examen::all();
        return $in_ex;
    }

    public function Opcion_Pregunta_de_Examen()
    {
        $op_pre_ex = Opcion_Pregunta_de_Examen::all();
        return $op_pre_ex;
    }

    public function Pregunta_de_Examen()
    {
        $pre_ex = Pregunta_de_Examen::all();
        return $pre_ex;
    }

    public function Respuesta_por_Usuario()
    {
        $res_us = Respuesta_por_Usuario::all();
        return $res_us;
    }

    public function Usuario()
    {
        $user = Usuario::all();
        return $user;
    }



}
