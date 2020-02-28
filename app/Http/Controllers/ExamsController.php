<?php


namespace App\Http\Controllers;

use App\Examen;
use App\User;

use Illuminate\Http\Request;

class ExamsController extends Controller
{
    public function examenes()
    {
        return view ('examenes');
    }

    public function int_ex($examen_id,$usaurio_id)
    {
        return view('intentoex', ['user' => User::findOrFail($usaurio_id)],['exam' => Examen::findOrFail($examen_id)]);
    }

    //
}
