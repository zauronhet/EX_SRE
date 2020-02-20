<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
@guest
        <button onclick="location.href='{{ route('login') }}'" type="button">
                    Iniciar Sesión
        </button>

    @if (Route::has('register'))
        
        <button onclick="location.href='{{ route('register') }}'" type="button">
                    Registro de Usuario
        </button>
    @endif
    @else

        {{ Auth::user()->name }} 
 
        <button class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" type="button">
            Logout
        </button>


        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

@endguest
        <main class="py-4">
            @yield('content')
        </main>
</body>
</html>
