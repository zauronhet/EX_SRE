@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    User {{ Auth::user()->name }} are logged in!
@endsection

@section('options')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <button onclick="location.href='{{ route('examenes') }}'" type="button">
        Examenes
    </button>

@endsection


