@if (Auth::user()->admin)
    <x-app-layout>
        <x-slot name="header">
            <br><br><br>
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
                {{ __('CLIENTES') }}
            </h2>
            <br><br>
        </x-slot>
        <link rel="stylesheet" href="/css/clientes.css" />
        <br>
        <p class="text-center" style="font-weight:bolder;">{{ __('LISTA PARA ADMINISTRADORES') }}</p>
        <br>
        <div class="container px-12 py-8 mx-auto bg-white">
            <table class="table-auto w-full" style="border-collapse:separate; border-spacing:10px;" id="productos-grande">
                <tr>
                    <td class="font-bold">{{ __('Nombre de usuario') }}</td>
                    <td class="font-bold">{{ __('Correo electrónico') }}</td>
                    <td class="font-bold">{{ __('Dirección') }}</td>
                    <td class="font-bold">{{ __('Teléfono') }}</td>
                    <td class="font-bold">{{ __('Pizzacoins') }}</td>
                    <td class="font-bold">{{ __('Administrador') }}</td>
                    <td class="font-bold">{{ __('Rol') }}</td>
                    <td></td>
                    <td class="font-bold">{{ __('Validado') }}</td>
                    <td class="font-bold">{{ __('Eliminar') }}</td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->name }}</td>
                        <td>{{ $cliente->email }}</td>
                        <td>{{ $cliente->direccion }}</td>
                        <td>{{ $cliente->telefono }}</td>
                        <td>
                            <form action="{{ route('clientes.actualizarpuntos', $cliente->id) }}" method="POST">
                                @csrf
                                <div style="display:flex; align-items:center; gap:5px;">
                                    <input type="text" id="puntos" name="puntos" size="10"
                                        value="{{ $cliente->puntos }}" style="border-radius:10px">
                                    <div class="text-center">
                                        <button type="submit"
                                            class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500"
                                            id="boton"
                                            style="height:40px; font-weight:bolder; border-radius:10px;">{{ __('✓') }}</button>
                                    </div>
                                </div>
                            </form>
                        </td>
                        <td>
                            @if ($cliente->admin)
                                <form method="post" action="{{ route('clientes.adminno', $cliente->id) }}">
                                    @csrf
                                    <button
                                        class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('DESHABILITAR') }}</button>
                                </form>
                            @else
                                <form method="post" action="{{ route('clientes.adminsi', $cliente->id) }}">
                                    @csrf
                                    <button
                                        class="border border-blue-500 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-md">{{ __('HABILITAR') }}</button>
                                </form>
                            @endif
                        </td>
                        @if ($cliente->admin)
                            <td>
                                <form action="{{ route('clientes.actualizarrol', $cliente->id) }}" method="POST">
                                    @csrf
                                    <div style="display:flex; align-items:center; gap:5px;">
                                        <div>
                                            <select id="role" name="role" style="border-radius: 10px"
                                                value="Jefe">
                                                <option value="Cliente">{{ __('Cliente') }}</option>
                                                <option value="Jefe">{{ __('Jefe') }}</option>
                                                <option value="Cajero">{{ __('Cajero') }}</option>
                                                <option value="Cocinero">{{ __('Cocinero') }}</option>
                                                <option value="Plancha">{{ __('Plancha') }}</option>
                                            </select>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"
                                                class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500"
                                                id="boton"
                                                style="height:40px; font-weight:bolder; border-radius:10px;">{{ __('✓') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>
                                <strong>{{ __('Rol actual:') }}</strong>&nbsp;{{ __($cliente->role) }}
                            </td>
                        @else
                            <td>{{ __($cliente->role) }}</td>
                            <td></td>
                        @endif
                        <td>
                            @if ($cliente->validado)
                                <form method="post" action="{{ route('clientes.desvalidar', $cliente->id) }}">
                                    @csrf
                                    <button
                                        class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('INVALIDAR') }}</button>
                                </form>
                            @else
                                <form method="post" action="{{ route('clientes.validar', $cliente->id) }}">
                                    @csrf
                                    <button
                                        class="border border-blue-500 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-md">{{ __('VALIDAR') }}</button>
                                </form>
                            @endif
                        </td>
                        <td>
                            <form method="post" action="{{ route('clientes.destroy', $cliente->id) }}">
                                @csrf
                                @method('delete')
                                <button
                                    class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">x</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            <table style="border-collapse:separate; border-spacing:10px;" id="productos-pequenio">
                @foreach ($clientes as $cliente)
                    <tr>
                        <td style="display:flex; justify-content:space-between;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                {{ __('Nombre de usuario') }}</p>
                        </td>
                        <td>
                            <p style="padding-left:50px;">{{ $cliente->name }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="display:flex; justify-content:space-between; padding-left:50px;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                {{ __('Correo electrónico') }}</p>
                        </td>
                        <td style="word-wrap: break-word; max-width:100px;">
                            <p style="padding-left:50px;">{{ $cliente->email }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="display:flex; justify-content:space-between; padding-left:50px;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Dirección') }}</p>
                        </td>
                        <td>
                            <p style="padding-left:50px;">{{ $cliente->direccion }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="display:flex; justify-content:space-between; padding-left:50px;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Teléfono') }}</p>
                        </td>
                        <td>
                            <p style="padding-left:50px;">{{ $cliente->telefono }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="display:flex; justify-content:space-between; padding-left:50px;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Pizzacoins') }}
                            </p>
                        </td>
                        <td>
                            <p>
                            <form action="{{ route('clientes.actualizarpuntos', $cliente->id) }}" method="POST"
                                name="puntos" onsubmit="return validate()">
                                @csrf
                                @error('puntos')
                                    <span class="text-danger" style="color:red;">{{ __($message) }}</span>
                                    <br>
                                @enderror
                                <div style="display:flex; align-items:center; gap:10px;">
                                    <div style="padding-left:50px;">
                                        <input type="text" id="puntos" name="puntos" size="10"
                                            value="{{ $cliente->puntos }}" style="border-radius:10px;"
                                            onfocusout="validate_puntos()">
                                    </div>
                                    <div style="padding-left:0px;">
                                        <button type="submit" class="px-6 py-2 text-sm shadow text-red-100 bg-blue-500"
                                            id="boton"
                                            style="height:42px; font-weight:bolder; border-radius:10px;">{{ __('✓') }}</button>
                                    </div>
                                </div>
                                <p id="error_puntos" style="color:red;"></p>
                            </form>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="display:flex; justify-content:space-between; padding-left:50px;">
                            @if ($cliente->admin)
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                    {{ __('Administrador') }}</p>
                        </td>
                        <td>
                            <div style="padding-left:50px;">
                                <form method="post" action="{{ route('clientes.adminno', $cliente->id) }}">
                                    @csrf
                                    <button
                                        class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('DESHABILITAR') }}</button>
                                </form>
                            </div>
                        </td>
                    @else
                        <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Administrador') }}
                        </p>
                        </td>
                        <td>
                            <div style="padding-left:50px;">
                                <form method="post" action="{{ route('clientes.adminsi', $cliente->id) }}">
                                    @csrf
                                    <button class="hover:text-white px-4 py-2 rounded-md"
                                        style="border-color:green; border-style:solid; border-width:1px;">{{ __('HABILITAR') }}</button>
                                </form>
                            </div>
                        </td>
                @endif
                </tr>
                @if ($cliente->admin)
                    <tr>
                        <td style="display:flex; justify-content:space-between; padding-left:50px;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Rol') }}</p>
                        </td>
                        <td>
                            <div style="padding-left:50px;">
                                <form action="{{ route('clientes.actualizarrol', $cliente->id) }}" method="POST">
                                    @csrf
                                    <div style="display:flex; align-items:center; gap:10px;">
                                        <div>
                                            <select id="role" name="role" style="border-radius:10px;">
                                                <option value="Cliente">{{ __('Cliente') }}</option>
                                                <option value="Jefe">{{ __('Jefe') }}</option>
                                                <option value="Cajero">{{ __('Cajero') }}</option>
                                                <option value="Cocinero">{{ __('Cocinero') }}</option>
                                                <option value="Plancha">{{ __('Plancha') }}</option>
                                            </select>
                                        </div>
                                        <div>
                                            <button type="submit"
                                                class="px-6 py-2 text-sm shadow text-red-100 bg-blue-500"
                                                id="boton"
                                                style="height:42px; font-weight:bolder; border-radius:10px;">{{ __('✓') }}</button>
                                        </div>
                                    </div>
                                    <div>
                                        <strong>{{ __('Rol actual:') }}</strong>&nbsp;{{ __($cliente->role) }}
                                    </div>
                                </form>
                            </div>
                        </td>
                    </tr>
                @else
                    <tr>
                        <td style="display:flex; justify-content:space-between; padding-left:50px;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Rol') }}</p>
                        </td>
                    </tr>
                @endif
                <tr>
                    <td style="display:flex; justify-content:space-between; padding-left:50px;">
                        @if ($cliente->validado)
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Validado') }}</p>
                    </td>
                    <td>
                        <div style="padding-left:50px;">
                            <form method="post" action="{{ route('clientes.desvalidar', $cliente->id) }}">
                                @csrf
                                <button
                                    class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('INVALIDAR') }}</button>
                            </form>
                        </div>
                    </td>
                @else
                    <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Validado') }}</p>
                    </td>
                    <td>
                        <div style="padding-left:50px;">
                            <form method="post" action="{{ route('clientes.validar', $cliente->id) }}">
                                @csrf
                                <button
                                    class="border border-blue-500 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-md">{{ __('VALIDAR') }}</button>
                            </form>
                        </div>
                    </td>
@endif
</tr>
<tr>
    <td style="display:flex; justify-content:space-between; padding-left:50px;">
        <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Eliminar') }}</p>
    </td>
    <td>
        <div style="padding-left:50px;">
            <form method="post" action="{{ route('clientes.destroy', $cliente->id) }}">
                @csrf
                @method('delete')
                <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">x</button>
            </form>
        </div>
    </td>
</tr>
<tr></tr>
<tr></tr>
@endforeach
</table>
</div>

<br><br><br><br>
<div class="footer">
    <div style="text-align:center;">
        <p>{{ __('© 2023 Pizzería Brenda™. Todos los derechos reservados.') }}</p>
    </div>
    <div style="display:flex; flex-wrap:wrap; justify-content:center; align-items:center;">
        <div style="display:flex; gap: 5px; align-items:center;">
            <p style="font-size:22px; color:#568c2c; font-weight:bolder; text-transform:uppercase;">
                {{ __('Teléfonos: ') }}
            </p>
            <div style="font-size:18px; font-weight:bolder;">
                <p>956 37 11 15 | 956 37 47 36 | 627 650 605</p>
            </div>
        </div>
        <div style="margin-left:auto; display:flex; gap:30px; text-align:center;">
            <a class="anavbar" href="{{ route('whoarewe') }}"
                style="font-size:13px;">{{ __('¿Quiénes somos?') }}</a>
            <a class="anavbar" href="{{ route('faq') }}"
                style="font-size:13px;">{{ __('Preguntas frecuentes') }}</a>
            <a class="anavbar" href="{{ route('contact') }}" style="font-size:13px;">{{ __('Contáctanos') }}</a>
            <a class="anavbar" href="{{ route('privacy') }}"
                style="font-size:13px;">{{ __('Política de privacidad') }}</a>
            <a class="anavbar" href="{{ route('premios') }}" style="font-size:13px;">{{ __('Premios') }}</a>
        </div>
        <div style="margin-left:auto; display:flex;">
            <a href="https://twitter.com/BRENDAPIZZA" target="__blank"><img src="{{ asset('img/twit.png') }}"
                    width="30px" height="30px" style="margin-right:20px;"></a>
            <a href="https://www.instagram.com/pizzeriabrenda/?hl=es" target="__blank"><img
                    src="{{ asset('img/inst.png') }}" width="30px" height="30px" style="margin-right:20px;"></a>
            <a href="https://www.tiktok.com/@pizzeriabrenda1986?lang=es" target="__blank"><img
                    src="{{ asset('img/tik.png') }}" width="30px" height="30px" style="margin-right:20px;"></a>
            <a href="https://www.facebook.com/pizzeriabrenda/?locale=es_ES" target="__blank"><img
                    src="{{ asset('img/face.png') }}" width="30px" height="30px" style="margin-right:20px;"></a>
        </div>
        <div style="display:flex; gap: 5px; margin-left:auto; align-items:center;">
            <p style="font-size:22px; color:#568c2c; font-weight:bolder; text-transform:uppercase;">
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
</style>

<script>
    function validate() {
        if (!(validate_puntos())) {
            return false;
        }
    }

    function validate_puntos() {
        var puntos = document.forms["puntos"]["puntos"].value;
        if (puntos < 0) {
            document.getElementById("error_puntos").innerHTML =
                "{{ __('Un usuario no puede tener menos de 0 Pizzacoins.') }}";
            return false;
        } else if (isNaN(puntos)) {
            document.getElementById("error_puntos").innerHTML =
                "{{ __('El campo de Pizzacoins debe ser un número.') }}";
            return false;
        } else {
            document.getElementById("error_puntos").innerHTML = "";
            return true;
        }
    }
</script>

</x-app-layout>
@endif
