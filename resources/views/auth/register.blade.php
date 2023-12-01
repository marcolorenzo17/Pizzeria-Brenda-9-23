<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" name="register" onsubmit="return validate()">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombre de usuario')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" placeholder="{{ __('Tu nombre de usuario.') }}"
                onfocusout="validate_name()" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

            <p id="error_name" style="color:red;"></p>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Correo electrónico')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" placeholder="{{ __('ejemplo@ejemplo.com') }}"
                onfocusout="validate_email()" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            <p id="error_email" style="color:red;"></p>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" placeholder="{{ __('Debe tener al menos 8 caracteres.') }}"
                onfocusout="validate_password()" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <p id="error_password" style="color:red;"></p>
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password"
                onfocusout="validate_passwordconf()" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

            <p id="error_passwordconf" style="color:red;"></p>
        </div>

        <!-- Dirección -->
        <br>
        <div>
            <x-input-label for="direccion" :value="__('Dirección')" />
            <x-text-input id="direccion" class="block mt-1 w-full" type="text" name="direccion" :value="old('direccion')"
                required autofocus autocomplete="direccion" placeholder="{{ __('Tu dirección de envío a domicilio.') }}"
                onfocusout="validate_direccion()" />
            <x-input-error :messages="$errors->get('direccion')" class="mt-2" />

            <p id="error_direccion" style="color:red;"></p>
        </div>

        <!-- Teléfono -->
        <br>
        <div>
            <x-input-label for="telefono" :value="__('Teléfono')" />
            <x-text-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value="old('telefono')"
                required autofocus autocomplete="telefono" placeholder="{{ __('xxx xx xx xx') }}"
                onfocusout="validate_telefono()" />
            <x-input-error :messages="$errors->get('telefono')" class="mt-2" />

            <p id="error_telefono" style="color:red;"></p>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('¿Ya tienes una cuenta?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Registrarse') }}
            </x-primary-button>
        </div>
    </form>
    <script>
        function validate() {
            if (!(validate_name() && validate_email() && validate_password() && validate_passwordconf() &&
                    validate_direccion() && validate_telefono())) {
                return false;
            }
        }

        function validate_name() {
            var name = document.forms["register"]["name"].value;
            if (name == "") {
                document.getElementById("error_name").innerHTML =
                    "{{ __('El campo de nombre de usuario es obligatorio.') }}";
                return false;
            } else if (name.length > 255) {
                document.getElementById("error_name").innerHTML =
                    "{{ __('El nombre de usuario no puede tener más de 255 caracteres.') }}";
                return false;
            } else {
                document.getElementById("error_name").innerHTML = "";
                return true;
            }
        }

        function validate_email() {
            var email = document.forms["register"]["email"].value;
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
            var password = document.forms["register"]["password"].value;
            if (password == "") {
                document.getElementById("error_password").innerHTML = "{{__('El campo de contraseña es obligatorio.')}}";
                return false;
            } else if (password.length < 8) {
                document.getElementById("error_password").innerHTML =
                    "{{ __('La contraseña debe tener al menos 8 caracteres.') }}";
                return false;
            } else {
                document.getElementById("error_password").innerHTML = "";
                return true;
            }
        }

        function validate_passwordconf() {
            var password = document.forms["register"]["password"].value;
            var passwordconf = document.forms["register"]["password_confirmation"].value;
            if (password != passwordconf) {
                document.getElementById("error_passwordconf").innerHTML =
                    "{{ __('Las contraseñas introducidas no coinciden.') }}";
                return false;
            } else {
                document.getElementById("error_passwordconf").innerHTML = "";
                return true;
            }
        }

        function validate_direccion() {
            var direccion = document.forms["register"]["direccion"].value;
            if (direccion == "") {
                document.getElementById("error_direccion").innerHTML = "{{__('El campo de dirección es obligatorio.')}}";
                return false;
            } else if (direccion.length > 255) {
                document.getElementById("error_direccion").innerHTML =
                    "{{ __('La dirección no puede tener más de 255 caracteres.') }}";
                return false;
            } else {
                document.getElementById("error_direccion").innerHTML = "";
                return true;
            }
        }

        function validate_telefono() {
            var telefono = document.forms["register"]["telefono"].value;
            if (telefono == "") {
                document.getElementById("error_telefono").innerHTML = "{{__('El campo de teléfono es obligatorio.')}}";
                return false;
            } else if (!(/^(\d\d\d) (\d\d) (\d\d) (\d\d)$/.test(telefono))) {
                document.getElementById("error_telefono").innerHTML =
                    "{{ __('El formato del número de teléfono debe ser "xxx xx xx xx".') }}";
                return false;
            } else {
                document.getElementById("error_telefono").innerHTML = "";
                return true;
            }
        }
    </script>
</x-guest-layout>
