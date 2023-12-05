<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Cambiar contraseña') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Asegúrate de utilizar una contraseña larga y complicada para mayor seguridad.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6" name="password_update"
        onsubmit="return validate_change()">
        @csrf
        @method('put')

        <div>
            <x-input-label for="current_password" :value="__('Contraseña actual')" />
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full"
                autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" :value="__('Nueva contraseña')" />
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full"
                autocomplete="new-password" placeholder="{{ __('Debe tener al menos 8 caracteres.') }}"
                onfocusout="validate_password()" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            <p id="error_password" style="color:red;"></p>
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Confirmar nueva contraseña')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                class="mt-1 block w-full" autocomplete="new-password" onfocusout="validate_password_confirmation()" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            <p id="error_password_confirmation" style="color:red;"></p>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Actualizar') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Actualizado.') }}</p>
            @endif
        </div>
    </form>

    <script>
        function validate_change() {
            if (!(validate_password() && validate_password_confirmation())) {
                return false;
            }
        }

        function validate_password() {
            var password = document.forms["password_update"]["password"].value;
            if (password == "") {
                document.getElementById("error_password").innerHTML =
                    "{{ __('La nueva contraseña no puede quedar en blanco.') }}";
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
            var password = document.forms["password_update"]["password"].value;
            var passwordconf = document.forms["password_update"]["password_confirmation"].value;
            if (password != passwordconf) {
                document.getElementById("error_password_confirmation").innerHTML =
                    "{{ __('Las contraseñas introducidas no coinciden.') }}";
                return false;
            } else {
                document.getElementById("error_password_confirmation").innerHTML = "";
                return true;
            }
        }
    </script>
</section>
