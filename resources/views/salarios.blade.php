@extends('layouts.app', [
    'title' => 'Salarios - Sistema de Empleados Públicos del Área de Salud en el Táchira',
    'navbar' => true,
    'activeRoute' => 'salarios'
])

@section('content')
    <div class="max-w-[1400px] mx-8 my-8 lg:mx-auto">
        <div class="flex flex-col lg:flex-row gap-6">
            <div class="lg:w-1/4">
                <div class="bg-white p-6 rounded-lg shadow-[0_2px_8px_rgba(0,0,0,0.08)] border-l-4 border-primary sticky top-8">
                    <h3 class="text-primary text-[1.3rem] font-bold mb-4">Menú Rápido</h3>
                    <nav class="space-y-2">
                        <a href="{{ route('salarios') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-300 text-[0.95rem] font-medium bg-primary text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
                                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                            </svg>
                            Historial de Salarios
                        </a>
                        <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-300 text-[0.95rem] font-medium hover:bg-bg-light hover:text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L9.647 8.323a.5.5 0 0 0-.146.354v.921a.5.5 0 0 0 .5.5h.921a.5.5 0 0 0 .354-.146l2.589-2.58a.389.389 0 0 0-.02-.527l-.527-.527z"/>
                                <path d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                            </svg>
                            Calculador de Deducciones
                        </a>
                        <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg transition-all duration-300 text-[0.95rem] font-medium hover:bg-bg-light hover:text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
                                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                            </svg>
                            Historial Completo
                        </a>
                    </nav>
                </div>
            </div>
            <div class="lg:w-3/4">
                <div class="bg-white p-8 rounded-lg shadow-[0_2px_8px_rgba(0,0,0,0.08)] mb-8 border-l-4 border-primary">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-primary text-[2rem] font-bold">Historial de Salarios</h2>
                        <button onclick="descargarSalarios()" class="btn-sm-success flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                            </svg>
                            Descargar PDF
                        </button>
                    </div>

            <p class="text-text-medium text-base mb-6">Salarios de los últimos 5 meses</p>

            <div class="overflow-x-auto">
                <table class="w-full border-collapse" role="table" aria-label="Tabla de salarios">
                    <thead>
                        <tr class="bg-primary-dark text-white">
                            <th class="p-4 text-left font-semibold text-[0.9rem] uppercase tracking-wider border-b border-primary-light">Mes</th>
                            <th class="p-4 text-left font-semibold text-[0.9rem] uppercase tracking-wider border-b border-primary-light">Año</th>
                            <th class="p-4 text-left font-semibold text-[0.9rem] uppercase tracking-wider border-b border-primary-light">Salario Base</th>
                            <th class="p-4 text-left font-semibold text-[0.9rem] uppercase tracking-wider border-b border-primary-light">Bonificaciones</th>
                            <th class="p-4 text-left font-semibold text-[0.9rem] uppercase tracking-wider border-b border-primary-light">Deducciones</th>
                            <th class="p-4 text-left font-semibold text-[0.9rem] uppercase tracking-wider border-b border-primary-light">Salario Neto</th>
                            <th class="p-4 text-center font-semibold text-[0.9rem] uppercase tracking-wider border-b border-primary-light">Estado</th>
                            <th class="p-4 text-center font-semibold text-[0.9rem] uppercase tracking-wider border-b border-primary-light">Descargar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-bg-light even:bg-bg-input even:hover:bg-bg-light border-b border-border-table">
                            <td class="p-4 font-medium">Enero</td>
                            <td class="p-4">2024</td>
                            <td class="p-4">Bs. 15.000,00</td>
                            <td class="p-4 text-success">Bs. 2.500,00</td>
                            <td class="p-4 text-error">Bs. 1.200,00</td>
                            <td class="p-4 font-bold text-primary-dark">Bs. 16.300,00</td>
                            <td class="p-4 text-center">
                                <span class="px-3 py-1 bg-success-bg text-success-text rounded-full text-[0.8rem] font-medium">Pagado</span>
                            </td>
                            <td class="p-4 text-center">
                                <button onclick="descargarPDF('enero-2024')" class="btn-sm-primary flex items-center gap-2 mx-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                    </svg>
                                    PDF
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-bg-light even:bg-bg-input even:hover:bg-bg-light border-b border-border-table">
                            <td class="p-4 font-medium">Febrero</td>
                            <td class="p-4">2024</td>
                            <td class="p-4">Bs. 15.000,00</td>
                            <td class="p-4 text-success">Bs. 2.500,00</td>
                            <td class="p-4 text-error">Bs. 1.200,00</td>
                            <td class="p-4 font-bold text-primary-dark">Bs. 16.300,00</td>
                            <td class="p-4 text-center">
                                <span class="px-3 py-1 bg-success-bg text-success-text rounded-full text-[0.8rem] font-medium">Pagado</span>
                            </td>
                            <td class="p-4 text-center">
                                <button onclick="descargarPDF('febrero-2024')" class="btn-sm-primary flex items-center gap-2 mx-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                    </svg>
                                    PDF
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-bg-light even:bg-bg-input even:hover:bg-bg-light border-b border-border-table">
                            <td class="p-4 font-medium">Marzo</td>
                            <td class="p-4">2024</td>
                            <td class="p-4">Bs. 15.000,00</td>
                            <td class="p-4 text-success">Bs. 2.500,00</td>
                            <td class="p-4 text-error">Bs. 1.200,00</td>
                            <td class="p-4 font-bold text-primary-dark">Bs. 16.300,00</td>
                            <td class="p-4 text-center">
                                <span class="px-3 py-1 bg-success-bg text-success-text rounded-full text-[0.8rem] font-medium">Pagado</span>
                            </td>
                            <td class="p-4 text-center">
                                <button onclick="descargarPDF('marzo-2024')" class="btn-sm-primary flex items-center gap-2 mx-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                    </svg>
                                    PDF
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-bg-light even:bg-bg-input even:hover:bg-bg-light border-b border-border-table">
                            <td class="p-4 font-medium">Abril</td>
                            <td class="p-4">2024</td>
                            <td class="p-4">Bs. 15.000,00</td>
                            <td class="p-4 text-success">Bs. 2.500,00</td>
                            <td class="p-4 text-error">Bs. 1.200,00</td>
                            <td class="p-4 font-bold text-primary-dark">Bs. 16.300,00</td>
                            <td class="p-4 text-center">
                                <span class="px-3 py-1 bg-success-bg text-success-text rounded-full text-[0.8rem] font-medium">Pagado</span>
                            </td>
                            <td class="p-4 text-center">
                                <button onclick="descargarPDF('abril-2024')" class="btn-sm-primary flex items-center gap-2 mx-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                    </svg>
                                    PDF
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-bg-light even:bg-bg-input even:hover:bg-bg-light border-b border-border-table">
                            <td class="p-4 font-medium">Mayo</td>
                            <td class="p-4">2024</td>
                            <td class="p-4">Bs. 15.000,00</td>
                            <td class="p-4 text-success">Bs. 2.500,00</td>
                            <td class="p-4 text-error">Bs. 1.200,00</td>
                            <td class="p-4 font-bold text-primary-dark">Bs. 16.300,00</td>
                            <td class="p-4 text-center">
                                <span class="px-3 py-1 bg-warning-bg text-warning-text rounded-full text-[0.8rem] font-medium">Pendiente</span>
                            </td>
                            <td class="p-4 text-center">
                                <button onclick="descargarPDF('mayo-2024')" class="btn-sm-primary flex items-center gap-2 mx-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                    </svg>
                                    PDF
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-6 p-6 bg-bg-light rounded-lg border-l-4 border-primary-dark">
                <h3 class="text-primary-dark text-[1.2rem] font-semibold mb-4">Resumen del Periodo</h3>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div class="text-center">
                        <p class="text-text-medium text-[0.9rem] font-medium mb-1">Total Salario Base</p>
                        <p class="text-primary-dark text-[1.3rem] font-bold">Bs. 75.000,00</p>
                    </div>
                    <div class="text-center">
                        <p class="text-text-medium text-[0.9rem] font-medium mb-1">Total Bonificaciones</p>
                        <p class="text-success text-[1.3rem] font-bold">Bs. 12.500,00</p>
                    </div>
                    <div class="text-center">
                        <p class="text-text-medium text-[0.9rem] font-medium mb-1">Total Deducciones</p>
                        <p class="text-error text-[1.3rem] font-bold">Bs. 6.000,00</p>
                    </div>
                    <div class="text-center">
                        <p class="text-text-medium text-[0.9rem] font-medium mb-1">Total Neto</p>
                        <p class="text-primary-dark text-[1.3rem] font-bold">Bs. 81.500,00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('js/salarios.js') }}"></script>
    @endpush
@endsection
