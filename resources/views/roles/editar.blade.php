<?php
$role_actual = \App\Models\Role::where(['id' => Auth::User()->id_role])
    ->pluck('privilegios')
    ->first();
$privilegioslista = [];
if ($role_actual) {
    $privilegioslista = explode('-', $role_actual);
}
?>
@if (in_array('3', $privilegioslista) || Auth::user()->primero)
    <x-app-layout>
        <x-slot name="header">
            <div style="margin-top:110px;">
                <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight"
                    style="font-size:60px; color:#568c2c; letter-spacing: 3px; font-weight:lighter; font-family: 'Alfa Slab One', serif;">
                    {{ __('EDITAR ROL') }}
                </h2>
            </div>
        </x-slot>
        <link rel="stylesheet" href="/css/index_products.css" />
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Acme&family=Grandstander:wght@800&display=swap"
            rel="stylesheet">
        <br>
        <div style="text-align:center;">
            <a href="{{ route('roles.index') }}" class="text-white px-4 py-2 rounded-md" id="boton"
                style="background-color:#f12d2d;">{{ __('VOLVER') }}</a>
        </div>
        <br>
        <div class="container px-12 py-8 mx-auto bg-white"
            style="margin-bottom:300px; display:flex; justify-content:center; gap:5vw; flex-wrap:wrap;">
            <div>
                <form action="{{ route('roles.actualizar', $role) }}" method="POST" enctype="multipart/form-data"
                    name="crearrol" onsubmit="return validate()">
                    @csrf
                    <div id="input_div" style="margin:auto; display:block;">
                        @error('name')
                            <span class="text-danger" style="color:red;">{{ __($message) }}</span>
                            <br>
                        @enderror
                        <label for="name">{{ __('Nombre del rol') }}</label>
                        <br>
                        <input type="text" id="name" name="name" onfocusout="validate_name()"
                            x-model="nombre" style="width:100%;">
                        <strong>{{ __('Nombre del rol actual:') }}</strong>&nbsp;{{ __($role->nombre) }}
                        <p id="error_name" style="color:red;"></p>
                    </div>
                    <br><br>
                    <div id="input_div" style="margin:auto; display:block;">
                        @error('nameen')
                            <span class="text-danger" style="color:red;">{{ __($message) }}</span>
                            <br>
                        @enderror
                        <label for="nameen">{{ __('Nombre del rol (Inglés)') }}</label>
                        <br>
                        <input type="text" id="nameen" name="nameen" size="80"
                            onfocusout="validate_nameen()" x-model="name" style="width:100%;">
                        <strong>{{ __('Nombre del rol actual (inglés):') }}</strong>&nbsp;{{ __($role->nombreen) }}
                        <p id="error_nameen" style="color:red;"></p>
                    </div>
                    <br><br>
                    <div id="input_div" style="margin:auto; display:block;">
                        <?php
                        $privilegioslista_2 = explode('-', $role->privilegios);
                        ?>
                        <table>
                            <tr>
                                <td style="padding-bottom:30px;">
                                    <input type="checkbox" id="1" name="privilegios[]" value="1">
                                    <label
                                        for="1">{{ __('El usuario puede ver la lista de reservas') }}</label><br>
                                    @if (in_array('1', $privilegioslista_2))
                                        <p style="font-weight:bolder;">{{ __('Actualmente: SÍ') }}</p>
                                    @else
                                        <p style="font-weight:bolder;">{{ __('Actualmente: NO') }}</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-bottom:30px;">
                                    <input type="checkbox" id="2" name="privilegios[]" value="2">
                                    <label
                                        for="2">{{ __('El usuario puede aceptar y cancelar reservas') }}</label><br>
                                    @if (in_array('2', $privilegioslista_2))
                                        <p style="font-weight:bolder;">{{ __('Actualmente: SÍ') }}</p>
                                    @else
                                        <p style="font-weight:bolder;">{{ __('Actualmente: NO') }}</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-bottom:30px;">
                                    <input type="checkbox" id="3" name="privilegios[]" value="3">
                                    <label
                                        for="3">{{ __('El usuario puede ver y modificar la lista de roles') }}</label><br>
                                    @if (in_array('3', $privilegioslista_2))
                                        <p style="font-weight:bolder;">{{ __('Actualmente: SÍ') }}</p>
                                    @else
                                        <p style="font-weight:bolder;">{{ __('Actualmente: NO') }}</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-bottom:30px;">
                                    <input type="checkbox" id="4" name="privilegios[]" value="4">
                                    <label
                                        for="4">{{ __('El usuario puede acceder a la lista de clientes') }}</label><br>
                                    @if (in_array('4', $privilegioslista_2))
                                        <p style="font-weight:bolder;">{{ __('Actualmente: SÍ') }}</p>
                                    @else
                                        <p style="font-weight:bolder;">{{ __('Actualmente: NO') }}</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-bottom:30px;">
                                    <input type="checkbox" id="5" name="privilegios[]" value="5">
                                    <label for="5">{{ __('El usuario puede borrar valoraciones') }}</label><br>
                                    @if (in_array('5', $privilegioslista_2))
                                        <p style="font-weight:bolder;">{{ __('Actualmente: SÍ') }}</p>
                                    @else
                                        <p style="font-weight:bolder;">{{ __('Actualmente: NO') }}</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-bottom:30px;">
                                    <input type="checkbox" id="6" name="privilegios[]" value="6">
                                    <label for="6">{{ __('El usuario puede borrar comentarios') }}</label><br>
                                    @if (in_array('6', $privilegioslista_2))
                                        <p style="font-weight:bolder;">{{ __('Actualmente: SÍ') }}</p>
                                    @else
                                        <p style="font-weight:bolder;">{{ __('Actualmente: NO') }}</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-bottom:30px;">
                                    <input type="checkbox" id="7" name="privilegios[]" value="7">
                                    <label
                                        for="7">{{ __('El usuario puede editar el estado de un pedido') }}</label><br>
                                    @if (in_array('7', $privilegioslista_2))
                                        <p style="font-weight:bolder;">{{ __('Actualmente: SÍ') }}</p>
                                    @else
                                        <p style="font-weight:bolder;">{{ __('Actualmente: NO') }}</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-bottom:30px;">
                                    <input type="checkbox" id="8" name="privilegios[]" value="8">
                                    <label
                                        for="8">{{ __('El usuario puede editar el pago de un pedido') }}</label><br>
                                    @if (in_array('8', $privilegioslista_2))
                                        <p style="font-weight:bolder;">{{ __('Actualmente: SÍ') }}</p>
                                    @else
                                        <p style="font-weight:bolder;">{{ __('Actualmente: NO') }}</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-bottom:30px;">
                                    <input type="checkbox" id="9" name="privilegios[]" value="9">
                                    <label for="9">{{ __('El usuario puede borrar recibos') }}</label><br>
                                    @if (in_array('9', $privilegioslista_2))
                                        <p style="font-weight:bolder;">{{ __('Actualmente: SÍ') }}</p>
                                    @else
                                        <p style="font-weight:bolder;">{{ __('Actualmente: NO') }}</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-bottom:30px;">
                                    <input type="checkbox" id="10" name="privilegios[]" value="10">
                                    <label
                                        for="10">{{ __('El usuario puede ver la lista de currículums') }}</label><br>
                                    @if (in_array('10', $privilegioslista_2))
                                        <p style="font-weight:bolder;">{{ __('Actualmente: SÍ') }}</p>
                                    @else
                                        <p style="font-weight:bolder;">{{ __('Actualmente: NO') }}</p>
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="text-center" style="margin-top:50px;">
                        <button type="submit" class="px-6 py-2 text-sm rounded shadow text-red-100" id="boton"
                            style="background-color:#568c2c;">{{ __('ACTUALIZAR') }}</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="footer">
            <div style="text-align:center; font-size:13px;">
                <p>{{ __('© 2023 Pizzería Brenda™. Todos los derechos reservados.') }}</p>
            </div>
            <div style="display:flex; flex-wrap:wrap; justify-content:center; align-items:center;">
                <div style="display:flex; gap: 5px; align-items:center;">
                    <p style="font-size:18px; color:#568c2c; font-weight:bolder; text-transform:uppercase;">
                        {{ __('Teléfonos: ') }}
                    </p>
                    <div style="font-size:18px; font-weight:bolder;">
                        <p>956 37 11 15 | 956 37 47 36 | 627 650 605</p>
                    </div>
                </div>
                <div style="margin-left:auto; display:flex; gap:30px; text-align:center;">
                    <a class="anavbar" href="{{ route('whoarewe') }}"
                        style="font-size:12px;">{{ __('¿Quiénes somos?') }}</a>
                    <a class="anavbar" href="{{ route('faq') }}"
                        style="font-size:12px;">{{ __('Preguntas frecuentes') }}</a>
                    <a class="anavbar" href="{{ route('contact') }}"
                        style="font-size:12px;">{{ __('Contáctanos') }}</a>
                    <a class="anavbar" href="{{ route('privacy') }}"
                        style="font-size:12px;">{{ __('Política de privacidad') }}</a>
                    <a class="anavbar" href="{{ route('premios') }}"
                        style="font-size:12px;">{{ __('Premios') }}</a>
                </div>
                <div style="margin-left:auto; display:flex;">
                    <a href="https://twitter.com/BRENDAPIZZA" target="__blank"><img
                            src="{{ asset('img/twit.png') }}" width="25px" height="25px"
                            style="margin-right:20px;" class="redes_sociales"></a>
                    <a href="https://www.instagram.com/pizzeriabrenda/?hl=es" target="__blank"><img
                            src="{{ asset('img/inst.png') }}" width="25px" height="25px"
                            style="margin-right:20px;" class="redes_sociales"></a>
                    <a href="https://www.tiktok.com/@pizzeriabrenda1986?lang=es" target="__blank"><img
                            src="{{ asset('img/tik.png') }}" width="25px" height="25px"
                            style="margin-right:20px;" class="redes_sociales"></a>
                    <a href="https://www.facebook.com/pizzeriabrenda/?locale=es_ES" target="__blank"><img
                            src="{{ asset('img/face.png') }}" width="25px" height="25px"
                            style="margin-right:20px;" class="redes_sociales"></a>
                </div>
                <div style="display:flex; gap: 5px; margin-left:auto; align-items:center;">
                    <p style="font-size:18px; color:#568c2c; font-weight:bolder; text-transform:uppercase;">
                        {{ __('Horario: ') }}
                    </p>
                    <div style="font-size:18px; font-weight:bolder;">
                        <p>{{ __('De lunes a domingo: 20:30 - 23:30') }}</p>
                        <p>{{ __('Domingo por la mañana: 13:30 - 15:00') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: #141414;
                color: white;
                padding: 20px;
                z-index: 1;
            }

            .anavbar:hover {
                text-decoration: underline;
            }

            @media only screen and (max-width: 639px) {
                .anavbar {
                    display: none;
                }

                .redes_sociales {
                    display: none;
                }
            }
        </style>

        <style>
            @media only screen and (max-width: 780px) {
                #input_div {
                    width: 75%;
                }
            }

            @media only screen and (min-width: 781px) {
                #input_div {
                    width: 100%;
                }
            }
        </style>

        <script>
            function validate() {
                if (!(validate_name() && validate_nameen())) {
                    return false;
                }
            }

            function validate_name() {
                var name = document.forms["crearrol"]["name"].value;
                if (name == "") {
                    document.getElementById("error_name").innerHTML =
                        "{{ __('El campo de nombre del rol es obligatorio.') }}";
                    return false;
                } else if (name.length > 255) {
                    document.getElementById("error_name").innerHTML =
                        "{{ __('El nombre del rol no puede tener más de 255 caracteres.') }}";
                    return false;
                } else {
                    document.getElementById("error_name").innerHTML = "";
                    return true;
                }
            }

            function validate_nameen() {
                var nameen = document.forms["crearrol"]["nameen"].value;
                if (nameen == "") {
                    document.getElementById("error_nameen").innerHTML =
                        "{{ __('El campo de nombre del rol (inglés) es obligatorio.') }}";
                    return false;
                } else if (nameen.length > 255) {
                    document.getElementById("error_nameen").innerHTML =
                        "{{ __('El nombre del rol (inglés) no puede tener más de 255 caracteres.') }}";
                    return false;
                } else {
                    document.getElementById("error_nameen").innerHTML = "";
                    return true;
                }
            }
        </script>

    </x-app-layout>
@endif
