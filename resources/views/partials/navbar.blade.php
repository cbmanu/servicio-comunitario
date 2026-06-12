<nav class="bg-gradient-to-r from-primary-dark to-primary-light p-[1.2rem_2rem] flex justify-between items-center shadow-[0_2px_8px_rgba(0,0,0,0.1)]" role="navigation" aria-label="Navegación principal">
    <div class="flex items-center gap-4">
        <h1 class="text-white text-[1.5rem] font-bold" style="font-family: 'Futura', 'Futura Bold', sans-serif; -webkit-text-stroke: 1px white; text-shadow: 0 0 0 3px var(--color-primary);">CORPOSALUD TÁCHIRA</h1>
        <a href="{{ route('home') }}" class="px-6 py-[0.6rem] {{ $activeRoute === 'inicio' ? 'bg-white text-primary' : 'bg-white/15 text-white' }} border border-white/30 rounded-md cursor-pointer transition-all duration-300 text-[0.9rem] font-medium hover:bg-white/25 hover:-translate-y-px">Inicio</a>
        <a href="{{ route('salarios') }}" class="px-6 py-[0.6rem] {{ $activeRoute === 'salarios' ? 'bg-white text-primary' : 'bg-white/15 text-white' }} border border-white/30 rounded-md cursor-pointer transition-all duration-300 text-[0.9rem] font-medium hover:bg-white/25 hover:-translate-y-px">Salarios</a>
    </div>
    <div class="flex items-center gap-4">
        <span class="text-white text-[0.95rem] font-medium">Bienvenido, {{ session('user.name') ?? 'Usuario' }}</span>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="px-6 py-[0.6rem] bg-error text-white border-none rounded-md cursor-pointer transition-all duration-300 text-[0.9rem] font-medium hover:bg-[#a93226] hover:-translate-y-px">Cerrar Sesión</button>
        </form>
    </div>
</nav>
