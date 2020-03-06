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
        $tmp = \App\Examen::all();
    ?>

    @foreach ($tmp as $examen)

        <button onclick="location.href='{{ url('examenes/'.$examen->id.'/'.\Auth::user()->id) }}'">
                {{ $examen->nombre }}
        </button>

    @endforeach

@endsection