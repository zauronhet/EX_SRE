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


    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    Aqui se muestran los intentos del usuario {{ $user->name }} del examen {{ $exam->nombre }}
@endsection
