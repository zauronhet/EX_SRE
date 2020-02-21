@extends('layouts.app')

@section('content')

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="apellido_paterno" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Paterno') }}</label>
        <input id="apellido_paterno" type="text" class="form-control @error('apellido_paterno') is-invalid @enderror" name="apellido_paterno" value="{{ old('apellido_paterno') }}" required autocomplete="apellido_paterno" autofocus>
        
        @error('apellido_paterno')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="apellido_materno" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Materno') }}</label>
        <input id="apellido_materno" type="text" class="form-control @error('apellido_materno') is-invalid @enderror" name="apellido_materno" value="{{ old('apellido_materno') }}" required autocomplete="apellido_materno" autofocus>
        
        @error('apellido_materno')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
        <label for="direccion_institucional" class="col-md-4 col-form-label text-md-right">{{ __('Direccion Institucional') }}</label>
        <input id="direccion_institucional" type="text" class="form-control @error('direccion_institucional') is-invalid @enderror" name="direccion_institucional" value="{{ old('direccion_institucional') }}" required autocomplete="direccion_institucional" autofocus>
        
        @error('direccion_institucional')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        

        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror                            
                                
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
                            
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            
        <button type="submit" class="btn btn-primary">
            {{ __('Register') }}
        </button>
                                
    </form>
                
@endsection
