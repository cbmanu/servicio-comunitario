@extends('layouts.app', [
    'title' => 'Inicio - Sistema de Empleados Públicos del Área de Salud en el Táchira',
    'navbar' => true,
    'activeRoute' => 'inicio'
])

@section('content')
    <div class="max-w-[1200px] mx-8 my-8 pb-1 lg:mx-auto">
        <div class="bg-white p-8 rounded-lg shadow-[0_2px_8px_rgba(0,0,0,0.08)] mb-16 border-l-4 border-primary-dark">
            <h2 class="text-primary-dark mb-6 text-[2rem] font-bold">Información Personal del Trabajador</h2>

            <div class="flex flex-col lg:flex-row gap-6 mb-6">
                <div class="lg:w-1/4 flex flex-col items-center">
                    <div class="w-48 h-48 rounded-full bg-bg-light border-4 border-primary flex items-center justify-center mb-4 overflow-hidden shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="var(--color-primary)" viewBox="0 0 16 16" class="opacity-50">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        </svg>
                    </div>
                    <p class="text-text-medium text-[0.9rem] font-medium text-center">Foto del Empleado</p>
                    <button class="mt-2 px-4 py-2 bg-primary text-white border-none rounded-sm cursor-pointer transition-all duration-300 text-[0.85rem] font-semibold hover:bg-primary-dark">
                        Cambiar Foto
                    </button>
                </div>
                <div class="lg:w-3/4 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-bg-light p-6 rounded-lg border-l-4 border-primary-dark">
                    <h3 class="text-primary-dark text-[1.1rem] font-semibold mb-4">Datos Personales</h3>
                    <div class="space-y-3">
                        <div>
                            <span class="text-text-medium text-[0.9rem] font-medium">Nombre Completo:</span>
                            <p class="text-text-dark text-[1rem]">Juan Pérez García</p>
                        </div>
                        <div>
                            <span class="text-text-medium text-[0.9rem] font-medium">Cédula de Identidad:</span>
                            <p class="text-text-dark text-[1rem]">15.234.567</p>
                        </div>
                        <div>
                            <span class="text-text-medium text-[0.9rem] font-medium">Fecha de Nacimiento:</span>
                            <p class="text-text-dark text-[1rem]">15/03/1985</p>
                        </div>
                        <div>
                            <span class="text-text-medium text-[0.9rem] font-medium">Estado Civil:</span>
                            <p class="text-text-dark text-[1rem]">Casado(a)</p>
                        </div>
                    </div>
                </div>

                <div class="bg-bg-light p-6 rounded-lg border-l-4 border-primary-dark">
                    <h3 class="text-primary-dark text-[1.1rem] font-semibold mb-4">Información Laboral</h3>
                    <div class="space-y-3">
                        <div>
                            <span class="text-text-medium text-[0.9rem] font-medium">Cargo:</span>
                            <p class="text-text-dark text-[1rem]">Médico General</p>
                        </div>
                        <div>
                            <span class="text-text-medium text-[0.9rem] font-medium">Departamento:</span>
                            <p class="text-text-dark text-[1rem]">Medicina Interna</p>
                        </div>
                        <div>
                            <span class="text-text-medium text-[0.9rem] font-medium">Fecha de Ingreso:</span>
                            <p class="text-text-dark text-[1rem]">01/02/2010</p>
                        </div>
                        <div>
                            <span class="text-text-medium text-[0.9rem] font-medium">Tipo de Contrato:</span>
                            <p class="text-text-dark text-[1rem]">Fijo</p>
                        </div>
                    </div>
                </div>

                <div class="bg-bg-light p-6 rounded-lg border-l-4 border-success">
                    <h3 class="text-success text-[1.1rem] font-semibold mb-4">Contacto</h3>
                    <div class="space-y-3">
                        <div>
                            <span class="text-text-medium text-[0.9rem] font-medium">Teléfono:</span>
                            <p class="text-text-dark text-[1rem]">0414-123-4567</p>
                        </div>
                        <div>
                            <span class="text-text-medium text-[0.9rem] font-medium">Correo Electrónico:</span>
                            <p class="text-text-dark text-[1rem]">juan.perez@corposalud.gob.ve</p>
                        </div>
                        <div>
                            <span class="text-text-medium text-[0.9rem] font-medium">Dirección:</span>
                            <p class="text-text-dark text-[1rem]">Av. Principal, Calle 10, San Cristóbal</p>
                        </div>
                    </div>
                </div>

                <div class="bg-bg-light p-6 rounded-lg border-l-4 border-warning">
                    <h3 class="text-warning text-[1.1rem] font-semibold mb-4">Información Adicional</h3>
                    <div class="space-y-3">
                        <div>
                            <span class="text-text-medium text-[0.9rem] font-medium">Código de Nómina:</span>
                            <p class="text-text-dark text-[1rem]">NOM-2024-001</p>
                        </div>
                        <div>
                            <span class="text-text-medium text-[0.9rem] font-medium">Unidad de Adscripción:</span>
                            <p class="text-text-dark text-[1rem]">Hospital Central de San Cristóbal</p>
                        </div>
                        <div>
                            <span class="text-text-medium text-[0.9rem] font-medium">Turno de Trabajo:</span>
                            <p class="text-text-dark text-[1rem]">Mixto</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
