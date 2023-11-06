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
                    <td class="font-bold">{{ __('Nombre') }}</td>
                    <td class="font-bold">{{ __('Correo electrónico') }}</td>
                    <td class="font-bold">{{ __('Dirección') }}</td>
                    <td class="font-bold">{{ __('Teléfono') }}</td>
                    <td class="font-bold">{{ __('Pizzacoins') }}</td>
                    <td class="font-bold">{{ __('Administrador') }}</td>
                    <td class="font-bold">{{ __('Rol') }}</td>
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
                                <input type="text" id="puntos" name="puntos" size="10"
                                    value="{{ $cliente->puntos }}">
                                <br>
                                <div class="text-center">
                                    <button type="submit"
                                        class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500"
                                        id="boton">{{ __('ACTUALIZAR') }}</button>
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
                                    <select id="role" name="role">
                                        <option value="Cliente">{{ __('Cliente') }}</option>
                                        <option value="Jefe">{{ __('Jefe') }}</option>
                                        <option value="Cajero">{{ __('Cajero') }}</option>
                                        <option value="Cocinero">{{ __('Cocinero') }}</option>
                                        <option value="Plancha">{{ __('Plancha') }}</option>
                                    </select>
                                    <br>
                                    <strong>{{ __('Rol actual:') }}</strong>&nbsp;{{ __($cliente->role) }}
                                    <br>
                                    <div class="text-center">
                                        <button type="submit"
                                            class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500"
                                            id="boton">{{ __('ACTUALIZAR') }}</button>
                                    </div>
                                </form>
                            </td>
                        @else
                            <td>{{ __($cliente->role) }}</td>
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
            <table class="table-auto w-full" style="border-collapse:separate; border-spacing:10px;"
                id="productos-pequenio">
                @foreach ($clientes as $cliente)
                    <tr>
                        <td style="display:flex; justify-content:space-between;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Nombre') }}</p>
                        </td>
                        <td>
                            <p>{{ $cliente->name }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="display:flex; justify-content:space-between; padding-left:50px;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                {{ __('Correo electrónico') }}</p>
                        </td>
                        <td>
                            <p>{{ $cliente->email }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="display:flex; justify-content:space-between; padding-left:50px;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Dirección') }}</p>
                        </td>
                        <td>
                            <p>{{ $cliente->direccion }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="display:flex; justify-content:space-between; padding-left:50px;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Teléfono') }}</p>
                        </td>
                        <td>
                            <p>{{ $cliente->telefono }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="display:flex; justify-content:space-between; padding-left:50px;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Pizzacoins') }}
                            </p>
                        </td>
                        <td>
                            <p>
                            <form action="{{ route('clientes.actualizarpuntos', $cliente->id) }}" method="POST">
                                @csrf
                                <input type="text" id="puntos" name="puntos" size="10"
                                    value="{{ $cliente->puntos }}">
                                <br>
                                <div class="text-center">
                                    <button type="submit"
                                        class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500"
                                        id="boton">{{ __('ACTUALIZAR') }}</button>
                                </div>
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
                            <form method="post" action="{{ route('clientes.adminno', $cliente->id) }}">
                                @csrf
                                <button
                                    class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('DESHABILITAR') }}</button>
                            </form>
                        @else
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Administrador') }}
                            </p>
                        </td>
                        <td>
                            <form method="post" action="{{ route('clientes.adminsi', $cliente->id) }}">
                                @csrf
                                <button
                                    class="border border-blue-500 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-md">{{ __('HABILITAR') }}</button>
                            </form>
                @endif
                </td>
                </tr>
                @if ($cliente->admin)
                    <tr>
                        <td style="display:flex; justify-content:space-between; padding-left:50px;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Rol') }}</p>
                        </td>
                        <td>
                            <form action="{{ route('clientes.actualizarrol', $cliente->id) }}" method="POST">
                                @csrf
                                <select id="role" name="role">
                                    <option value="Cliente">{{ __('Cliente') }}</option>
                                    <option value="Jefe">{{ __('Jefe') }}</option>
                                    <option value="Cajero">{{ __('Cajero') }}</option>
                                    <option value="Cocinero">{{ __('Cocinero') }}</option>
                                    <option value="Plancha">{{ __('Plancha') }}</option>
                                </select>
                                <br>
                                <strong>{{ __('Rol actual:') }}</strong>&nbsp;{{ __($cliente->role) }}
                                <br>
                                <div class="text-center">
                                    <button type="submit"
                                        class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500"
                                        id="boton">{{ __('ACTUALIZAR') }}</button>
                                </div>
                            </form>
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
                        <form method="post" action="{{ route('clientes.desvalidar', $cliente->id) }}">
                            @csrf
                            <button
                                class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('INVALIDAR') }}</button>
                        </form>
                    @else
                        <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Validado') }}</p>
                    </td>
                    <td>
                        <form method="post" action="{{ route('clientes.validar', $cliente->id) }}">
                            @csrf
                            <button
                                class="border border-blue-500 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-md">{{ __('VALIDAR') }}</button>
                        </form>
@endif
</td>
</tr>
<tr>
    <td style="display:flex; justify-content:space-between; padding-left:50px;">
        <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Eliminar') }}</p>
    </td>
    <td>
        <form method="post" action="{{ route('clientes.destroy', $cliente->id) }}">
            @csrf
            @method('delete')
            <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">x</button>
        </form>
    </td>
</tr>
<tr></tr>
<tr></tr>
@endforeach
</table>
</div>

<br><br><br><br>
<footer
    class="fixed bottom-0 left-0 z-20 w-full p-4 border-t border-gray-300 shadow md:flex md:items-center md:justify-between md:p-6"
    style="background-color:red;">
    <span class="text-sm sm:text-center"
        style="color: white;">{{ __('© 2023 Pizzería Brenda™. Todos los derechos reservados.') }}
    </span>
    <ul class="hidden flex-wrap items-center mt-3 text-sm font-medium sm:mt-0 sm:flex" style="color: white;">
        <li>
            <a href="{{ route('whoarewe') }}" class="mr-4 hover:underline md:mr-6">{{ __('¿Quiénes somos?') }}</a>
        </li>
        <li>
            <a href="{{ route('faq') }}" class="mr-4 hover:underline md:mr-6">{{ __('Preguntas frecuentes') }}</a>
        </li>
        <li>
            <a href="{{ route('contact') }}" class="mr-4 hover:underline md:mr-6">{{ __('Contáctanos') }}</a>
        </li>
        <li>
            <a href="{{ route('privacy') }}"
                class="mr-4 hover:underline md:mr-6">{{ __('Política de privacidad') }}</a>
        </li>
        <li>
            <a href="{{ route('premios') }}" class="mr-4 hover:underline md:mr-6">{{ __('Premios') }}</a>
        </li>
    </ul>
    <div style="margin-left:auto; display:flex;">
        <a href="https://twitter.com/BRENDAPIZZA"><img src="{{ asset('img/twit.png') }}" width="30px"
                height="30px" style="margin-right:20px;"></a>
        <a href="https://www.instagram.com/pizzeriabrenda/?hl=es"><img src="{{ asset('img/inst.png') }}"
                width="30px" height="30px" style="margin-right:20px;"></a>
        <a href="https://www.tiktok.com/@pizzeriabrenda1986?lang=es"><img src="{{ asset('img/tik.png') }}"
                width="30px" height="30px" style="margin-right:20px;"></a>
        <a href="https://www.facebook.com/pizzeriabrenda/?locale=es_ES"><img src="{{ asset('img/face.png') }}"
                width="30px" height="30px" style="margin-right:20px;"></a>
    </div>
</footer>

</x-app-layout>
@endif
