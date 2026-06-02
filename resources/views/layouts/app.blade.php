<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Sistema de Empleados Públicos del Área de Salud en el Táchira' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="{{ $bodyClass ?? 'min-h-screen bg-bg-light text-text-dark' }}">
    @if($carousel ?? false)
        @include('partials.carousel')
    @endif

    @if($navbar ?? false)
        @include('partials.navbar', ['activeRoute' => $activeRoute ?? null])
    @endif

    <div class="pb-0">
        @yield('content')
    </div>

    @include('partials.footer')

    @stack('scripts')
</body>
</html>
