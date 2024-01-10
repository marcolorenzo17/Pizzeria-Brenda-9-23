<x-guest-layout>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"
    integrity="sha256-/H4YS+7aYb9kJ5OKhFYPUjSJdrtV6AeyJOtTkw6X72o=" crossorigin="anonymous"></script>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    {{--
        <p id="msg1"></p>
        <p id="msg2"></p>
        <p id="msg3"></p>
    --}}
    <form method="POST" action="{{ route('login') }}" name="login">
        @csrf

        <div class="text-center">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('register') }}">
                {{ __('¿Aún no tienes una cuenta?') }}
            </a>
            <br><br>
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Correo electrónico')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Recuérdame') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('¿Te has olvidado de tu contraseña?') }}
                </a>
            @endif

            <x-primary-button class="ml-3" onclick="return storeValues();">
                {{ __('Iniciar sesión') }}
            </x-primary-button>
        </div>
    </form>
    <script>
        // Original JavaScript code by Chirp Internet: www.chirpinternet.eu
        // Please acknowledge use of this code by including this header.

        var storeValues = function() {
            localStorage.email = CryptoJS.AES.encrypt(document.forms["login"]["email"].value, "Secret Passphrase");
            localStorage.password = CryptoJS.AES.encrypt(document.forms["login"]["password"].value, "Secret Passphrase");
            return true;
        };

        if (localStorage.email) {
            document.forms["login"]["email"].value = CryptoJS.AES.decrypt(localStorage.email, "Secret Passphrase").toString(CryptoJS.enc.Utf8);
        };

        if (localStorage.password) {
            document.forms["login"]["password"].value = CryptoJS.AES.decrypt(localStorage.password, "Secret Passphrase").toString(CryptoJS.enc.Utf8);
        }
    </script>
    {{--
    <script>
        var encriptado = CryptoJS.AES.encrypt("Mensaje", "Secret Passphrase");
        var desencriptado = CryptoJS.AES.decrypt(encriptado, "Secret Passphrase");

        document.getElementById("msg1").innerHTML = encriptado;
        document.getElementById("msg2").innerHTML = desencriptado;
        document.getElementById("msg3").innerHTML = desencriptado.toString(CryptoJS.enc.Utf8);
    </script>
    --}}
</x-guest-layout>
