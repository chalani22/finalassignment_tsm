<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
            <a href="{{ url('auth/google') }}" class="btn btn-danger w-100 mt-3">
            <div style="display: flex; justify-content: center; margin-top: 20px;">
                <a href="{{ url('auth/google') }}">
                <a href="{{ url('auth/google') }}" style="
                    display: flex;
                    align-items: center;
                    background: #fff;
                    color: #444;
                    border: 1px solid #ddd;
                    border-radius: 4px;
                    padding: 10px 24px;
                    font-size: 16px;
                    font-weight: 500;
                    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
                    text-decoration: none;
                    transition: box-shadow 0.2s;
                " onmouseover="this.style.boxShadow='0 4px 8px rgba(66,133,244,0.15)';" onmouseout="this.style.boxShadow='0 2px 4px rgba(0,0,0,0.05)';">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="margin-right: 12px;"><g><path fill="#4285F4" d="M12 12v3.6h5.1c-.2 1.1-1.3 3.2-5.1 3.2-3.1 0-5.6-2.6-5.6-5.8s2.5-5.8 5.6-5.8c1.8 0 3 .7 3.7 1.3l2.5-2.4C16.2 4.7 14.3 4 12 4 6.5 4 2 8.5 2 14s4.5 10 10 10c5.5 0 10-4.5 10-10 0-.7-.1-1.4-.2-2H12z"/><path fill="#34A853" d="M12 22c2.7 0 5-1 6.7-2.7l-3.2-2.6c-.9.6-2.1.9-3.5.9-2.7 0-5-1.8-5.8-4.2H2.2v2.6C4.1 19.7 7.7 22 12 22z"/><path fill="#FBBC05" d="M6.2 13.6c-.2-.6-.3-1.2-.3-1.8s.1-1.2.3-1.8V7.4H2.2C1.4 8.9 1 10.4 1 12s.4 3.1 1.2 4.6l4-3z"/><path fill="#EA4335" d="M12 6.8c1.5 0 2.8.5 3.7 1.3l2.5-2.4C16.2 4.7 14.3 4 12 4c-3.1 0-5.6 2.6-5.6 5.8 0 .6.1 1.2.3 1.8l4 3.1V6.8z"/></g></svg>
                    Continue with Google
                </a>
            </div>
    </form>
</x-guest-layout>
