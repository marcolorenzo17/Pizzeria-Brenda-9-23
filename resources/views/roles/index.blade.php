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
                    style="font-size:50px; color:#568c2c; letter-spacing: 3px; font-weight:lighter; font-family: 'Alfa Slab One', serif;">
                    {{ __('ROLES') }}
                </h2>
            </div>
        </x-slot>
        <link rel="stylesheet" href="/css/index_products.css" />
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Acme&family=Grandstander:wght@800&display=swap"
        rel="stylesheet">
        @if (Auth::user()->admin)
            <br>
            <div style="margin-left:20px;">
                <a href="{{ route('roles.crear') }}" class="text-white px-4 py-2 rounded-md" id="boton"
                    style="background-color:#568c2c;">{{ __('CREAR ROL') }}</a>
            </div>
            <br>
            <div style="background:white; margin-bottom:300px; padding:30px;">
                <table style="width:100%;">
                    @foreach ($roles as $role)
                        <tr>
                            <td>
                                <div style="margin:20px; display:flex; gap:20px;">
                                    <div>
                                        @if (Lang::locale() == 'es')
                                            <p style="font-weight:bolder; font-family: 'Acme', sans-serif; font-size:25px; text-transform:uppercase;">{{ $role->nombre }}</p>
                                        @else
                                            <p style="font-weight:bolder; font-family: 'Acme', sans-serif; font-size:25px; text-transform:uppercase;">{{ $role->nombreen }}</p>
                                        @endif
                                    </div>
                                    <table style="margin-left:auto; margin-right:0;" id="productos-grande">
                                        <tr>
                                            @if (!$role->primero)
                                                <td>
                                                    <a href="{{ route('roles.show', $role) }}"
                                                        class="text-white px-4 py-2 rounded-md" id="boton"
                                                        style="background-color:#274014;">{{ __('DETALLES') }}</a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('roles.editar', $role) }}"
                                                        class="text-white px-4 py-2 rounded-md" id="boton"
                                                        style="background-color:#568c2c;">{{ __('EDITAR') }}</a>
                                                </td>
                                                <td>
                                                    <form method="post"
                                                        action="{{ route('roles.destroy', $role->id) }}">
                                                        @csrf
                                                        @method('delete')
                                                        <button
                                                            class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md" onclick="return confirm('¿Estás seguro de que quieres eliminar este rol? Ten en cuenta que se borrarán también todos los usuarios que tengan este rol asignado.')">{{ __('BORRAR') }}</button>
                                                    </form>
                                                </td>
                                            @else
                                                <td>
                                                    <a href="{{ route('roles.show', $role) }}"
                                                        class="text-white px-4 py-2 rounded-md" id="boton"
                                                        style="background-color:#274014;">{{ __('DETALLES') }}</a>
                                                </td>
                                                <td>
                                                    <p style="color:gray;">
                                                        {{ __('No se puede editar el rol de Jefe.') }}
                                                    </p>
                                                </td>
                                            @endif
                                        </tr>
                                    </table>
                                    <table style="margin-left:auto; margin-right:0;" id="productos-pequenio">
                                        @if (!$role->primero)
                                            <tr>
                                                <td style="padding:8px">
                                                    <a href="{{ route('roles.show', $role) }}"
                                                        class="text-white px-4 py-2 rounded-md" id="boton"
                                                        style="background-color:#274014;">{{ __('DETALLES') }}</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:8px;">
                                                    <a href="{{ route('roles.editar', $role) }}"
                                                        class="text-white px-4 py-2 rounded-md" id="boton"
                                                        style="background-color:#568c2c;">{{ __('EDITAR') }}</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:8px">
                                                    <form method="post"
                                                        action="{{ route('roles.destroy', $role->id) }}">
                                                        @csrf
                                                        @method('delete')
                                                        <button
                                                            class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md" onclick="return confirm('¿Estás seguro de que quieres eliminar este rol? Ten en cuenta que borrarán también todos los usuarios que tengan este rol asignado.')">{{ __('BORRAR') }}</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @else
                                            <tr>
                                                <td style="padding:8px">
                                                    <a href="{{ route('roles.show', $role) }}"
                                                        class="text-white px-4 py-2 rounded-md" id="boton"
                                                        style="background-color:#274014;">{{ __('DETALLES') }}</a>
                                                </td>
                                            </tr>
                                            <td>
                                                <p style="color:gray;">{{ __('No se puede editar el rol de Jefe.') }}
                                                </p>
                                            </td>
                                        @endif
                                    </table>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <div style="margin-top:50px;">
                    {{ $roles->links() }}
                </div>
            </div>
        @endif

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
                            src="{{ asset('img/inst.png') }}" width="25px" height="25px" style="margin-right:20px;"
                            class="redes_sociales"></a>
                    <a href="https://www.tiktok.com/@pizzeriabrenda1986?lang=es" target="__blank"><img
                            src="{{ asset('img/tik.png') }}" width="25px" height="25px" style="margin-right:20px;"
                            class="redes_sociales"></a>
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

    </x-app-layout>
@endif
