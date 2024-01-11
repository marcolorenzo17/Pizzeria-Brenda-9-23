<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Información de Perfil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Actualiza la información y el correo del perfil de tu cuenta.') }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" name="profile_update"
        onsubmit="return validate()">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Nombre de usuario')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)"
                required autofocus autocomplete="name" placeholder="{{ __('Tu nombre de usuario.') }}"
                onfocusout="validate_name()" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
            <p id="error_name" style="color:red;"></p>
        </div>

        <div>
            <x-input-label for="email" :value="__('Correo electrónico')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)"
                required autocomplete="username" placeholder="{{ __('ejemplo@ejemplo.com') }}"
                onfocusout="validate_email()" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
            <p id="error_email" style="color:red;"></p>

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Tu correo electrónico no está verificado.') }}

                        <button form="send-verification"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Haz clic aquí para reenviar el correo de verificación.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('Se ha enviado un nuevo enlace de verificación a tu correo electrónico.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div>
            <x-input-label for="direccion" :value="__('Dirección')" />
            <x-text-input id="direccion" name="direccion" type="text" class="mt-1 block w-full" :value="old('direccion', $user->direccion)"
                required autofocus autocomplete="direccion" placeholder="{{ __('Tu dirección de envío a domicilio.') }}"
                onfocusout="validate_direccion()" />
            <x-input-error class="mt-2" :messages="$errors->get('direccion')" />
            <p id="error_direccion" style="color:red;"></p>
        </div>

        <div>
            <x-input-label for="telefono" :value="__('Teléfono')" />
            <x-text-input id="telefono" name="telefono" type="text" class="mt-1 block w-full" :value="old('telefono', $user->telefono)"
                required autofocus autocomplete="telefono" placeholder="{{ __('+34') }}"
                onfocusout="validate_telefono()" />
            <x-input-error class="mt-2" :messages="$errors->get('telefono')" />
            <p id="error_telefono" style="color:red;"></p>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Actualizar') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Actualizado.') }}</p>
            @endif
        </div>
    </form>

    <script>
        function validate() {
            if (!(validate_name() && validate_email() && validate_direccion() && validate_telefono())) {
                return false;
            }
        }

        function validate_name() {
            var name = document.forms["profile_update"]["name"].value;
            if (name == "") {
                document.getElementById("error_name").innerHTML =
                    "{{ __('El nombre de usuario no puede quedar en blanco.') }}";
                return false;
            } else if (name.length > 12) {
                document.getElementById("error_name").innerHTML =
                    "{{ __('El nombre de usuario no puede tener más de 12 caracteres.') }}";
                return false;
            } else {
                document.getElementById("error_name").innerHTML = "";
                return true;
            }
        }

        function validate_email() {
            var email = document.forms["profile_update"]["email"].value;
            if (email == "") {
                document.getElementById("error_email").innerHTML =
                    "{{ __('El correo electrónico no puede quedar en blanco.') }}";
                return false;
            } else if (email.length > 255) {
                document.getElementById("error_email").innerHTML =
                    "{{ __('El correo electrónico no puede tener más de 255 caracteres.') }}";
                return false;
            } else if (!(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g.test(email))) {
                document.getElementById("error_email").innerHTML =
                    "{{ __('El formato del correo electrónico debe ser "ejemplo@ejemplo.com"') }}";
                return false;
            } else {
                document.getElementById("error_email").innerHTML = "";
                return true;
            }
        }

        function validate_direccion() {
            var direccion = document.forms["profile_update"]["direccion"].value;
            if (direccion == "") {
                document.getElementById("error_direccion").innerHTML =
                    "{{ __('La dirección no se puede quedar en blanco.') }}";
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
            var telefono = document.forms["profile_update"]["telefono"].value;
            if (telefono == "") {
                document.getElementById("error_telefono").innerHTML = "{{ __('El número de teléfono no puede quedar en blanco.') }}";
                return false;
            } else if (!(/^(\+34|0034|34)?[ -]*(6|7|8|9)[ -]*([0-9][ -]*){8}$/.test(telefono))) {
                document.getElementById("error_telefono").innerHTML =
                    "{{ __('El formato debe ser el de un teléfono de España.') }}";
                return false;
            } else {
                document.getElementById("error_telefono").innerHTML = "";
                return true;
            }
        }
    </script>
</section>
