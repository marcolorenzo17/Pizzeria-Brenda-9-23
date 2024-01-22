@if (Auth::user()->admin)
    <x-app-layout>
        <x-slot name="header">
            <div style="margin-top:110px;">
                <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight"
                    style="font-size:60px; color:#568c2c; letter-spacing: 3px; font-weight:lighter; font-family: 'Alfa Slab One', serif;">
                    {{ __('DETALLES DEL ROL') }}
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
        <div class="container px-12 py-8 mx-auto bg-white" style="margin-bottom:300px;">
            <p style="font-size:22px; font-weight:bolder;">{{ __('Nombre del rol') }}</p>
            <p style="font-size:20px; margin-left:30px;">{{ $role->nombre }}</p>
            <p style="font-size:22px; font-weight:bolder; margin-top:50px;">{{ __('Nombre del rol (Inglés)') }}</p>
            <p style="font-size:20px; margin-left:30px;">{{ $role->nombreen }}</p>
            <p style="font-size:22px; font-weight:bolder; margin-top:50px;">{{ __('Privilegios') }}</p>
            <?php
            $privilegioslista = explode('-', $role->privilegios);
            ?>
            <table style="margin-left:30px;">
                <tr>
                    <td style="display:flex; gap:3px; align-items:center; flex-wrap:wrap;">
                        <label for="1">{{ __('El usuario puede ver la lista de reservas') }}</label><br>
                        @if (in_array('1', $privilegioslista))
                            <p style="font-weight:bolder; font-size:20px;">{{ __('- SÍ') }}</p>
                        @else
                            <p style="font-weight:bolder; font-size:20px;">- NO</p>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="display:flex; gap:3px; align-items:center; flex-wrap:wrap;">
                        <label for="2">{{ __('El usuario puede aceptar y cancelar reservas') }}</label><br>
                        @if (in_array('2', $privilegioslista))
                            <p style="font-weight:bolder; font-size:20px;">{{ __('- SÍ') }}</p>
                        @else
                            <p style="font-weight:bolder; font-size:20px;">- NO</p>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="display:flex; gap:3px; align-items:center; flex-wrap:wrap;">
                        <label for="3">{{ __('El usuario puede ver y modificar la lista de roles') }}</label><br>
                        @if (in_array('3', $privilegioslista))
                            <p style="font-weight:bolder; font-size:20px;">{{ __('- SÍ') }}</p>
                        @else
                            <p style="font-weight:bolder; font-size:20px;">- NO</p>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="display:flex; gap:3px; align-items:center; flex-wrap:wrap;">
                        <label for="4">{{ __('El usuario puede ver la lista de clientes') }}</label><br>
                        @if (in_array('4', $privilegioslista))
                            <p style="font-weight:bolder; font-size:20px;">{{ __('- SÍ') }}</p>
                        @else
                            <p style="font-weight:bolder; font-size:20px;">- NO</p>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="display:flex; gap:3px; align-items:center; flex-wrap:wrap;">
                        <label for="5">{{ __('El usuario puede borrar valoraciones') }}</label><br>
                        @if (in_array('5', $privilegioslista))
                            <p style="font-weight:bolder; font-size:20px;">{{ __('- SÍ') }}</p>
                        @else
                            <p style="font-weight:bolder; font-size:20px;">- NO</p>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="display:flex; gap:3px; align-items:center; flex-wrap:wrap;">
                        <label for="6">{{ __('El usuario puede borrar comentarios') }}</label><br>
                        @if (in_array('6', $privilegioslista))
                            <p style="font-weight:bolder; font-size:20px;">{{ __('- SÍ') }}</p>
                        @else
                            <p style="font-weight:bolder; font-size:20px;">- NO</p>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="display:flex; gap:3px; align-items:center; flex-wrap:wrap;">
                        <label for="7">{{ __('El usuario puede editar el estado de un pedido') }}</label><br>
                        @if (in_array('7', $privilegioslista))
                            <p style="font-weight:bolder; font-size:20px;">{{ __('- SÍ') }}</p>
                        @else
                            <p style="font-weight:bolder; font-size:20px;">- NO</p>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="display:flex; gap:3px; align-items:center; flex-wrap:wrap;">
                        <label for="8">{{ __('El usuario puede editar el pago de un pedido') }}</label><br>
                        @if (in_array('8', $privilegioslista))
                            <p style="font-weight:bolder; font-size:20px;">{{ __('- SÍ') }}</p>
                        @else
                            <p style="font-weight:bolder; font-size:20px;">- NO</p>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="display:flex; gap:3px; align-items:center; flex-wrap:wrap;">
                        <label for="9">{{ __('El usuario puede borrar recibos') }}</label><br>
                        @if (in_array('9', $privilegioslista))
                            <p style="font-weight:bolder; font-size:20px;">{{ __('- SÍ') }}</p>
                        @else
                            <p style="font-weight:bolder; font-size:20px;">- NO</p>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="display:flex; gap:3px; align-items:center; flex-wrap:wrap;">
                        <label for="10">{{ __('El usuario puede ver la lista de currículums') }}</label><br>
                        @if (in_array('10', $privilegioslista))
                            <p style="font-weight:bolder; font-size:20px;">{{ __('- SÍ') }}</p>
                        @else
                            <p style="font-weight:bolder; font-size:20px;">- NO</p>
                        @endif
                    </td>
                </tr>
            </table>
            <p style="font-size:22px; font-weight:bolder; margin-top:50px;">{{ __('Usuarios con este rol') }}</p>
            @foreach ($users as $user)
                @if ($user->primero and $role->primero)
                    <p style="font-size:20px; margin-left:30px;">- admin</p>
                @elseif ($user->id_role == $role->id)
                    <p style="font-size:20px; margin-left:30px;">- {{ $user->name }}</p>
                @endif
            @endforeach
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
                    <a class="anavbar" href="{{ route('premios') }}" style="font-size:12px;">{{ __('Premios') }}</a>
                </div>
                <div style="margin-left:auto; display:flex;">
                    <a href="https://twitter.com/BRENDAPIZZA" target="__blank"><img src="{{ asset('img/twit.png') }}"
                            width="25px" height="25px" style="margin-right:20px;" class="redes_sociales"></a>
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

    </x-app-layout>
@endif
