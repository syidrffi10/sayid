<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-black">
        <div class="w-full max-w-md p-6 bg-gray-900 rounded-lg shadow-md text-white">
            <h1 class="text-2xl font-bold mb-6 text-center">Login</h1>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-4">
                    <x-input-label for="email" :value="'Email'" />
                    <x-text-input id="email" class="block mt-1 w-full bg-gray-800 border-none text-white"
                                  type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400" />
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <x-input-label for="password" :value="'Password'" />
                    <x-text-input id="password" class="block mt-1 w-full bg-gray-800 border-none text-white"
                                  type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400" />
                </div>

                <!-- Remember Me -->
                <div class="mb-4 flex items-center">
                    <input type="checkbox" name="remember" class="mr-2">
                    <label class="text-sm">Ingat saya</label>
                </div>

                <div class="flex items-center justify-between">
                    <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded">Login</button>
                    @if (Route::has('password.request'))
                        <a class="text-sm text-blue-400 hover:underline" href="{{ route('password.request') }}">
                            Lupa Password?
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
