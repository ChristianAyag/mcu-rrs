<title>Login</title>
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="adminID" :value="__('Username')" />
            <x-text-input id="adminID" class="block mt-1 w-full" type="text" name="adminID" :value="old('adminID')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('adminID')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="adminPassword" :value="__('Password')" />
            <x-text-input id="adminPassword" class="block mt-1 w-full" type="password" name="adminPassword" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('adminPassword')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded" name="remember">
                <span class="ms-2 text-sm text-[var(--primary)]">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('register'))
                <a class="mr-auto text-sm text-primary hover:text-secondary duration-200"
                    href="{{ route('register') }}">
                    {{ __('Create an account') }}
                </a>
            @endif

            @if (Route::has('password.request'))
                <a class="text-sm text-primary hover:text-secondary duration-200"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <!-- di pa final tong route since inaayos ko pa -->
            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>