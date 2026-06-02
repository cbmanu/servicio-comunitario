@extends('layouts.app', [
    'title' => 'Login - Sistema de Empleados Públicos del Área de Salud en el Táchira',
    'carousel' => true,
    'bodyClass' => 'min-h-screen flex items-center justify-center p-5'
])

@section('content')
    <div class="w-full max-w-125">
        <div class="bg-white p-10 rounded-lg shadow-[0_8px_32px_rgba(0,0,0,0.15)] w-full">
            @include('partials.auth-header')

            @if($errors->any())
                <div class="text-error bg-error-bg p-3 rounded mb-6 text-[0.9rem] border-l-4 border-error" role="alert">
                    {{ $errors->first() }}
                </div>
            @endif

            <div class="bg-success-bg text-success-text p-3 rounded mb-6 text-[0.85rem] border-l-4 border-success">
                <strong class="block mb-1">Credenciales de prueba:</strong>
                Email: admin@example.com<br>
                Contraseña: password
            </div>

            <form method="POST" action="{{ route('login.submit') }}">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-text-dark font-medium text-[0.95rem]">Correo Electrónico</label>
                    <input type="email" id="email" name="email" required autofocus autocomplete="email"
                        class="form-input">
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 text-text-dark font-medium text-[0.95rem]">Contraseña</label>
                    <input type="password" id="password" name="password" required autocomplete="current-password"
                        class="form-input">
                </div>

                <button type="submit" class="btn-primary">Iniciar Sesión</button>
            </form>
        </div>

        <div class="text-center mt-6">
            <a href="{{ route('register') }}" class="btn-success">Registrarse</a>
        </div>
    </div>

    @include('partials.logo-link')
@endsection
