<?php


namespace App\Http\Controllers;

use App\Examen;
use App\User;
use App\Intento_de_Examen;
use Illuminate\Http\Request;


class ExamsController extends Controller
{
    public function examenes()
    {
        return view ('examenes');
    }

    public function int_ex($examen_id,$usuario_id)
    {
        $intentos = Intento_de_Examen::where('examen_id','=',$examen_id)
                                        ->where('user_id','=',$usuario_id)
                                        ->count();
        return view
                    ('intentoex', 
                    ['intentos' => $intentos],
                    ['exam' => Examen::findOrFail($examen_id)]
                    );
    }

    public function presentarintento($examen_id,$usuario_id,$intento_id)
    {
        return view
                    ('tryexam',
                        ['intento' => $intento_id],
                        ['exam' => $examen_id]
                    );
    }

    //
}