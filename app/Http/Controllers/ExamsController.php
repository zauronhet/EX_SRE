<?php


namespace App\Http\Controllers;

use App\Examen;
use App\User;
use App\Intento_de_Examen;
use App\Pregunta_de_Examen;

use App\Respuesta_por_Usuario;

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
                                        ->where('status','=',1)
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

    public function insert_tryexam(Request $request,$examen_id,$usuario_id,$intento_id)
    {
        
        $preguntas = Pregunta_de_Examen::where('examen_id','=',$examen_id)
                                        ->where('status','=',1)
                                        ->get();
        $num_preg = count($preguntas);
        $res_corr = 0;
        $calificacion = 0;
        $opciones_id = array();
        
        for($i = 0; $i < $num_preg; $i ++)
        {
            if($request[$preguntas[$i]['id']] == 'resp_1')
            {
                $opciones_id[] = 'resp_1';
            }

            if($request[$preguntas[$i]['id']] == 'resp_2')
            {
                $opciones_id[] = 'resp_2';
            }

            if($request[$preguntas[$i]['id']] == 'resp_3')
            {
                $opciones_id[] = 'resp_3';
            }

            if($request[$preguntas[$i]['id']] == 'resp_4')
            {
                $opciones_id[] = 'resp_4';
                
            }
            $resp_corr = $preguntas[$i]['respuesta_correcta'];
            if($opciones_id[$i] == $resp_corr)
            {
                $res_corr++;
            }

        }
        
        if($res_corr!=0)
        {
            $calificacion = number_format(($res_corr*10/$num_preg),2);
        }
        else
        {
            $calificacion = 0;   
        }

            $intento = new Intento_de_Examen;
            $intento->user_id = $usuario_id;
            $intento->examen_id = $examen_id;
            $intento->intento = $intento_id;
            $intento->status = 1;
            $intento->calificacion = $calificacion;
            $intento->save();

            $lastId = $intento->id;
            
            for($i = 0; $i < $num_preg; $i ++)
            {
                $user_ans = new Respuesta_por_Usuario;
                $user_ans->pregunta_de_examen_id = $preguntas[$i]['id'];
                $user_ans->intento_de_examen_id =  $lastId;
                $user_ans->res_user = $opciones_id[$i];
                $user_ans->status = 1;
                $user_ans->save();
            }

        return redirect()->route('home');
    }
    //
}