<x-guest-layout>

    <div class="login-heading">Iniciar Sesión</div>

    <p class="login-subheading">
        Ingresa a tu cuenta para continuar.
    </p>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-5">
            <label for="us_email" class="block text-sm font-semibold text-blue-100 mb-2">
                Correo electrónico
            </label>

            <input
                id="us_email"
                type="email"
                name="us_email"
                value="{{ old('us_email') }}"
                required
                autofocus
                autocomplete="username"
                placeholder="ejemplo@correo.com"
                class="w-full rounded-xl border border-blue-400/30 bg-blue-950/50 px-4 py-3 text-white placeholder-blue-300/50 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/30 outline-none"
            >

            @error('us_email')
                <p class="text-red-400 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <label for="us_password" class="block text-sm font-semibold text-blue-100 mb-2">
                Contraseña
            </label>

            <input
                id="us_password"
                type="password"
                name="us_password"
                required
                autocomplete="current-password"
                placeholder="Ingresa tu contraseña"
                class="w-full rounded-xl border border-blue-400/30 bg-blue-950/50 px-4 py-3 text-white placeholder-blue-300/50 focus:border-cyan-400 focus:ring-2 focus:ring-cyan-400/30 outline-none"
            >

            @error('us_password')
                <p class="text-red-400 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-between mb-6">

            <label for="remember_me" class="flex items-center text-sm text-blue-200">
                <input
                    id="remember_me"
                    type="checkbox"
                    name="remember"
                    class="rounded border-blue-400 bg-blue-950 text-cyan-400 focus:ring-cyan-400"
                >
                <span class="ms-2">Recordarme</span>
            </label>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}"
                   class="text-sm text-cyan-400 hover:text-white transition">
                    ¿Olvidaste tu contraseña?
                </a>
            @endif

        </div>

        <button
            type="submit"
            class="w-full rounded-xl bg-gradient-to-r from-blue-600 to-cyan-500 py-3 font-bold text-white shadow-lg shadow-blue-500/30 transition duration-300 hover:scale-[1.02] hover:shadow-cyan-400/40">
            INICIAR SESIÓN →
        </button>

    </form>

</x-guest-layout>
