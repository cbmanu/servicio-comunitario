@extends('layouts.app', [
    'title' => 'Registro - Sistema de Empleados Públicos del Área de Salud en el Táchira',
    'carousel' => true,
    'bodyClass' => 'min-h-screen flex items-center justify-center p-5'
])

@section('content')
    <div class="w-full max-w-125">
        <div class="bg-white p-10 rounded-lg shadow-[0_8px_32px_rgba(0,0,0,0.15)] w-full">
            @include('partials.auth-header', ['subtitle' => 'Registro de Empleados Públicos del Área de Salud en el Táchira'])

            @if($errors->any())
                <div class="text-error bg-error-bg p-3 rounded mb-6 text-[0.9rem] border-l-4 border-error" role="alert">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-text-dark font-medium text-[0.95rem]">Nombre Completo</label>
                    <input type="text" id="name" name="name" required autofocus autocomplete="name"
                        class="form-input">
                </div>

                <div class="mb-6">
                    <label for="email" class="block mb-2 text-text-dark font-medium text-[0.95rem]">Correo Electrónico</label>
                    <input type="email" id="email" name="email" required autocomplete="email"
                        class="form-input">
                </div>

                <div class="mb-6">
                    <label for="cedula" class="block mb-2 text-text-dark font-medium text-[0.95rem]">Cédula de Identidad</label>
                    <input type="text" id="cedula" name="cedula" required autocomplete="cedula"
                        class="form-input">
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 text-text-dark font-medium text-[0.95rem]">Contraseña</label>
                    <input type="password" id="password" name="password" required autocomplete="new-password"
                        class="form-input">
                </div>

                <div class="mb-6">
                    <label for="password_confirmation" class="block mb-2 text-text-dark font-medium text-[0.95rem]">Confirmar Contraseña</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password"
                        class="form-input">
                </div>

                <button type="submit" class="btn-primary">Registrarse</button>
            </form>

        </div>

        <div class="text-center mt-6">
            <a href="{{ route('login') }}" class="btn-success">Iniciar Sesión</a>
        </div>
    </div>

    @include('partials.logo-link')
@endsection
