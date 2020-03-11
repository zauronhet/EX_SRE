@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    Usuario {{ \Auth::user()->name }}             
@endsection

@section('options')

    Este es el intento {{$intento}}
    <?php
        $preguntas = \App\Pregunta_de_Examen::where('examen_id','=',$exam)
                                            ->where('status','=',1)
                                            ->get();   
    ?>

    <form method="POST" action="{{ url('examenes/'.$exam.'/'.\Auth::user()->id.'/'.$intento.'/fin') }}">
        
        @csrf
        
        @foreach ($preguntas as $pregunta)

            <h2>{{$pregunta->pregunta}}</h2>
            <ul>
                <input 
                    type="radio" id="<?php echo $pregunta->id?>"
                    name="<?php echo $pregunta->id?>" 
                    value="resp_1" 
                    required>
                        {{$pregunta->resp_1}}
            </ul>   

            <ul>
                <input 
                    type="radio" id="<?php echo $pregunta->id?>"
                    name="<?php echo $pregunta->id?>" 
                    value="resp_2" 
                    required>
                        {{$pregunta->resp_2}}
            </ul>

            <ul>
                <input 
                    type="radio" id="<?php echo $pregunta->id?>"
                    name="<?php echo $pregunta->id?>" 
                    value="resp_3" 
                    required>
                        {{$pregunta->resp_3}}   
            </ul>

            <ul>
                <input 
                    type="radio" id="<?php echo $pregunta->id?>"
                    name="<?php echo $pregunta->id?>" 
                    value="resp_4" 
                    required>
                        {{$pregunta->resp_4}} 

            
            </ul>
            
        @endforeach
        
        <button type="submit" class="btn btn-primary">
           {{ __('Terminar intento') }}
        </button>