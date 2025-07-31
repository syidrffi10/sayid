<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-black">
        <div class="w-full max-w-md p-6 bg-gray-900 rounded-lg shadow-md text-white">
            <h1 class="text-2xl font-bold mb-6 text-center">Register</h1>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-4">
                    <x-input-label for="name" :value="'Nama Lengkap'" />
                    <x-text-input id="name" class="block mt-1 w-full bg-gray-800 border-none text-white"
                                  type="text" name="name" :value="old('name')" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-400" />
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <x-input-label for="email" :value="'Email'" />
                    <x-text-input id="email" class="block mt-1 w-full bg-gray-800 border-none text-white"
                                  type="email" name="email" :value="old('email')" required />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="'Password'" />
                    <x-text-input id="password" class="block mt-1 w-full bg-gray-800 border-none text-white"
                                  type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-6">
                    <x-input-label for="password_confirmation" :value="'Konfirmasi Password'" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full bg-gray-800 border-none text-white"
                                  type="password" name="password_confirmation" required />
                </div>

                <div class="flex items-center justify-between">
                    <a class="text-sm text-blue-400 hover:underline" href="{{ route('login') }}">
                        Sudah punya akun?
                    </a>

                    <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
