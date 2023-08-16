@if (Auth::user()->admin)
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('CLIENTES') }}
        </h2>
        <div>
            @include('partials/language_switcher')
        </div>
    </x-slot>
    <br>
    <p class="text-center" style="font-weight:bolder;">{{__('LISTA PARA ADMINISTRADORES')}}</p>
    <br>
    <div class="container px-12 py-8 mx-auto bg-white">
        <table class="table-auto w-full" style="border-collapse:separate; border-spacing:0 10px;">
            <tr>
                <td class="font-bold">{{__('Nombre')}}</td>
                <td class="font-bold">{{__('Correo electrónico')}}</td>
                <td class="font-bold">{{__('Puntos')}}</td>
                <td class="font-bold">{{__('Administrador')}}</td>
                <td class="font-bold">{{__('Rol')}}</td>
                <td class="font-bold">{{__('Validado')}}</td>
                <td class="font-bold">{{__('Eliminar')}}</td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->name }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->puntos }}</td>
                    <td>
                        @if ($cliente->admin)
                            <form method="post" action="{{ route('clientes.adminno', $cliente->id) }}">
                                @csrf
                                <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{__('DESHABILITAR')}}</button>
                            </form>
                        @else
                            <form method="post" action="{{ route('clientes.adminsi', $cliente->id) }}">
                                @csrf
                                <button class="border border-blue-500 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-md">{{__('HABILITAR')}}</button>
                            </form>
                        @endif
                    </td>
                    @if ($cliente->admin)
                    <td>
                        <form action="{{ route('clientes.actualizarrol', $cliente->id) }}" method="POST">
                            @csrf
                                <select id="role" name="role">
                                    <option value="Cliente">{{__('Cliente')}}</option>
                                    <option value="Jefe">{{__('Jefe')}}</option>
                                    <option value="Cajero">{{__('Cajero')}}</option>
                                    <option value="Cocinero">{{__('Cocinero')}}</option>
                                    <option value="Plancha">{{__('Plancha')}}</option>
                                </select>
                                <br>
                                <strong>{{__('Rol actual:')}}</strong>&nbsp;{{ __($cliente->role) }}
                                <br>
                                <div class="text-center">
                                    <button type="submit"
                                    class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500">{{__('ACTUALIZAR')}}</button>
                                </div>
                        </form>
                    </td>
                    @else
                    <td></td>
                    @endif
                    <td>
                        @if ($cliente->validado)
                            <form method="post" action="{{ route('clientes.desvalidar', $cliente->id) }}">
                                @csrf
                                <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{__('INVALIDAR')}}</button>
                            </form>
                        @else
                            <form method="post" action="{{ route('clientes.validar', $cliente->id) }}">
                                @csrf
                                <button class="border border-blue-500 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-md">{{__('VALIDAR')}}</button>
                            </form>
                        @endif
                    </td>
                    <td>
                        <form method="post" action="{{ route('clientes.destroy', $cliente->id) }}">
                            @csrf
                            @method('delete')
                            <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">x</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <br><br><br><br>

    <footer
        class="fixed bottom-0 left-0 z-20 w-full p-4 border-t border-gray-300 shadow md:flex md:items-center md:justify-between md:p-6" style="background-color:white;">
        <span class="text-sm text-gray-500 sm:text-center">{{__('© 2023 Pizzería Brenda™. Todos los derechos reservados.')}}
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0">
            <li>
                <a href="{{ route('whoarewe') }}" class="mr-4 hover:underline md:mr-6">{{__('¿Quiénes somos?')}}</a>
            </li>
            <li>
                <a href="{{ route('faq') }}" class="mr-4 hover:underline md:mr-6">{{__('Preguntas frecuentes')}}</a>
            </li>
            <li>
                <a href="{{ route('contact') }}" class="mr-4 hover:underline md:mr-6">{{__('Contáctanos')}}</a>
            </li>
        </ul>
    </footer>

</x-app-layout>
@endif
