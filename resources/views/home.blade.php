@extends('layouts.app', [
    'title' => 'Inicio - Sistema de Empleados Públicos del Área de Salud en el Táchira',
    'navbar' => true,
    'activeRoute' => 'inicio'
])

@section('content')
    <div class="max-w-[1200px] mx-4 my-8 lg:mx-auto">
        <div class="rounded-lg border-l-4 border-primary-dark bg-white p-6 shadow-[0_2px_8px_rgba(0,0,0,0.08)] sm:p-8">
            <h2 class="mb-2 text-2xl font-bold text-primary-dark">Información del trabajador</h2>
            <p class="mb-8 text-text-medium">Datos personales y laborales registrados</p>

            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div>
                    <span class="text-sm font-medium text-text-medium">Nombre completo</span>
                    <p class="mt-1 text-base text-text-dark">{{ $trabajador->nombrescompleto }}</p>
                </div>
                <div>
                    <span class="text-sm font-medium text-text-medium">Cédula de identidad</span>
                    <p class="mt-1 text-base text-text-dark">{{ $trabajador->cedula }}</p>
                </div>
                <div>
                    <span class="text-sm font-medium text-text-medium">Cargo</span>
                    <p class="mt-1 text-base text-text-dark">{{ $trabajador->descripcion_cargo }}</p>
                </div>
                <div>
                    <span class="text-sm font-medium text-text-medium">Departamento</span>
                    <p class="mt-1 text-base text-text-dark">{{ $trabajador->departamento }}</p>
                </div>
                <div>
                    <span class="text-sm font-medium text-text-medium">Fecha de nacimiento</span>
                    <p class="mt-1 text-base text-text-dark">{{ $trabajador->fecha_nacimiento?->format('d/m/Y') }}</p>
                </div>
                <div>
                    <span class="text-sm font-medium text-text-medium">Fecha de ingreso</span>
                    <p class="mt-1 text-base text-text-dark">{{ $trabajador->fecha_ingreso?->format('d/m/Y') }}</p>
                </div>
                <div>
                    <span class="text-sm font-medium text-text-medium">Nómina</span>
                    <p class="mt-1 text-base text-text-dark">{{ $trabajador->nomina }}</p>
                </div>
                <div>
                    <span class="text-sm font-medium text-text-medium">Cuenta de nómina</span>
                    <p class="mt-1 text-base text-text-dark">{{ $trabajador->cuenta_nomina }}</p>
                </div>
                <div>
                    <span class="text-sm font-medium text-text-medium">Año</span>
                    <p class="mt-1 text-base text-text-dark">{{ $trabajador->anio }}</p>
                </div>
                <div>
                    <span class="text-sm font-medium text-text-medium">Mes</span>
                    <p class="mt-1 text-base text-text-dark">{{ $trabajador->mes }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
