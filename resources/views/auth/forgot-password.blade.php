<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('¿Te has olvidado de tu contraseña? No pasa nada. Tan solo escribe tu correo electrónico y una nueva contraseña, y te enviaremos a tu bandeja de entrada un enlace donde podrás confirmar los cambios.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" name="password_email" onsubmit="return validate()">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Correo electrónico')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                onfocusout="validate_email()" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            <p id="error_email" style="color:red;"></p>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Nueva contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" placeholder="{{ __('Debe tener al menos 8 caracteres.') }}"
                onfocusout="validate_password()" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            <p id="error_password" style="color:red;"></p>
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar nueva contraseña')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password"
                onfocusout="validate_password_confirmation()" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            <p id="error_password_confirmation" style="color:red;"></p>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Enviar enlace') }}
            </x-primary-button>
        </div>
    </form>

    <script>
        function validate() {
            if (!(validate_email() && validate_password() && validate_password_confirmation())) {
                return false;
            }
        }

        function validate_email() {
            var email = document.forms["password_email"]["email"].value;
            if (email == "") {
                document.getElementById("error_email").innerHTML =
                    "{{ __('El campo de correo electrónico es obligatorio.') }}";
                return false;
            } else if (!(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g.test(email))) {
                document.getElementById("error_email").innerHTML =
                    "{{ __('El formato del correo electrónico debe ser "ejemplo@ejemplo.com"') }}";
                return false;
            } else if (email.length > 255) {
                document.getElementById("error_email").innerHTML =
                    "{{ __('El correo electrónico no puede tener más de 255 caracteres.') }}";
                return false;
            } else {
                document.getElementById("error_email").innerHTML = "";
                return true;
            }
        }

        function validate_password() {
            var password = document.forms["password_email"]["password"].value;
            if (password == "") {
                document.getElementById("error_password").innerHTML = "{{ __('El campo de nueva contraseña es obligatorio.') }}";
                return false;
            } else if (password.length < 8) {
                document.getElementById("error_password").innerHTML =
                    "{{ __('La nueva contraseña debe tener al menos 8 caracteres.') }}";
                return false;
            } else {
                document.getElementById("error_password").innerHTML = "";
                return true;
            }
        }

        function validate_password_confirmation() {
            var password = document.forms["password_email"]["password"].value;
            var password_confirmation = document.forms["password_email"]["password_confirmation"].value;
            if (password != password_confirmation) {
                document.getElementById("error_password_confirmation").innerHTML =
                    "{{ __('Las contraseñas introducidas no coinciden.') }}";
                return false;
            } else {
                document.getElementById("error_password_confirmation").innerHTML = "";
                return true;
            }
        }
    </script>
</x-guest-layout>
