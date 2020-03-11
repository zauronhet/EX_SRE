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

    
    <?php
        $tmp = \App\Intento_de_Examen::where('examen_id','=',$exam->id)
                                    ->where('user_id','=',\Auth::user()->id)
                                    ->where('status','=',1)
                                    ->get();
    ?>


    {{ $exam->nombre }}
    El numero de intentos presentados es {{$intentos}}

    <table style="width:100%">
        <tr>
            <th>Intento</th>
            <th>Calificación</th> 
            <th>Presentar</th>
        </tr>

        @for ($i = 1; $i <= 3; $i++)
            <tr>
                <td>Intento {{$i}}</td>

                @if ($intentos === 0)

                    <td>No presentado</td> 

                @elseif ($intentos >= $i)

                <td>{{ $tmp[$i - 1]->calificacion}}</td>

                @else

                    <td>No presentado</td>

                @endif

                @if($intentos === ($i-1))
                    <td>
                        <button onclick="location.href='{{ url('examenes/'.$exam->id.'/'.\Auth::user()->id.'/'.$i) }}'">
                            Presentar
                        </button>
                    </td> 
                @elseif($intentos < $i-1)
                    <td>  </td>
                @else
                    <td>Examen Presentado</td>
                @endif

            </tr>
        @endfor
    </table>

    <button onclick="location.href='{{ route('examenes')}}'">
                            Regresar
    </button>
    
@endsection