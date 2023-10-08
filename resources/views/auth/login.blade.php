<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="mt-5 mb-20">
        <a href="/">
            <x-application-logo class="w-30 h-30 fill-current" />
        </a>
    </div>

    <form method="POST" action="{{ route('login') }}" novalidate>
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Correo')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-6">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-green-600 shadow-sm focus:ring-green-500 dark:focus:ring-igreenndigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-white dark:text-green-400">{{ __('Recordarme') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-4 mb-7">
            <x-link
                :href="route('register')"
            >
                Crear cuenta
            </x-link>

            <x-link
                :href="route('password.request')"
            >
                Olvidaste tu contraseña?
            </x-link>
        </div>

        <x-primary-button class="w-full justify-center">
            {{ __('Iniciar Sesión') }}
        </x-primary-button>
    </form>
</x-guest-layout>
