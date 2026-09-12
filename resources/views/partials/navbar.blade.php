<nav class="bg-gradient-to-r from-primary-dark to-primary-light p-[1.2rem_2rem] flex justify-between items-center shadow-[0_2px_8px_rgba(0,0,0,0.1)]" role="navigation" aria-label="Navegación principal">
   
    <div class="w-full flex items-center justify-between gap-4">
        <span class="text-white text-[0.95rem] font-medium">Bienvenido, {{ auth()->user()->name }}</span>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="px-6 py-[0.6rem] bg-error text-white border-none rounded-md cursor-pointer transition-all duration-300 text-[0.9rem] font-medium hover:bg-[#a93226] hover:-translate-y-px">Cerrar Sesión</button>
        </form>
    </div>
</nav>
