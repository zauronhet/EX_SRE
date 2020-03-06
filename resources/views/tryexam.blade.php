@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    Usuario {{ \Auth::user()->name }}             
@endsection

@section('options')

    este es el intento {{$intento}}
    <?php
        $preguntas = \App\Pregunta_de_Examen::where('examen_id','=',$exam)->get();
        
    ?>

@foreach ($preguntas as $pregunta)

<h2>{{$pregunta->pregunta}}</h2>
   
   <?php
        $opciones = \App\Opcion_Pregunta_de_Examen::where('pregunta_de_examen_id','=',$pregunta->id)->get();
    ?> 

    <ul>
        @foreach ($opciones as $opcion)

        <li><input type="radio" name=<?php $pregunta->id ?>  value=<?php $pregunta->id ?>>{{$opcion->opcion}}</li>
        
    
        @endforeach
    </ul>
@endforeach
    
@endsection
