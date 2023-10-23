<link rel="stylesheet" href="/css/index.css" />
<x-app-layout>
    <x-slot name="header">
        <br><br><br>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('RECIBOS') }}
        </h2>
        <br><br>
    </x-slot>
    <link rel="stylesheet" href="/css/recibos.css" />

    <div class="py-12">
        @if (Auth::user()->admin)
            <p class="text-center" style="font-weight:bolder;">{{ __('LISTA PARA ADMINISTRADORES') }}</p>
            <br>
        @endif
        <div class="container px-12 py-8 mx-auto bg-white">
            <table class="table-auto w-full" style="border-collapse:separate; border-spacing:10px;" id="recibos-grande">
                <tr>
                    <td class="font-bold">{{ __('Fecha y hora') }}</td>
                    @if (Auth::user()->admin)
                        <td class="font-bold">{{ __('Cliente') }}</td>
                    @endif
                    <td class="font-bold">{{ __('Productos') }}</td>
                    <td class="font-bold">{{ __('Pizzacoins obtenidas') }}</td>
                    <td class="font-bold">{{ __('Pizzacoins gastadas') }}</td>
                    <td class="font-bold">{{ __('Coste') }}</td>
                    <td class="font-bold">{{ __('Dirección') }}</td>
                    <td class="font-bold">{{ __('Teléfono') }}</td>
                    <td class="font-bold">{{ __('Estado') }}</td>
                    <td class="font-bold">{{ __('Pago') }}</td>
                    @if (Auth::user()->role == 'Jefe' || Auth::user()->role == 'Cajero')
                        <td class="font-bold">{{ __('Eliminar') }}</td>
                    @endif
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                @foreach ($recibos as $recibo)
                    @if (Auth::user()->admin)
                        <tr>
                            <td>{{ $recibo->created_at }}</td>
                            <td>{{ \App\Models\User::where(['id' => $recibo->idUser])->pluck('name')->first() }}</td>
                            <td>{{ $recibo->productos }}</td>
                            <td>{{ $recibo->total * 100 }}</td>
                            <td>{{ $recibo->puntos }}</td>
                            <td>{{ number_format($recibo->total, 2, '.', '') }} €</td>
                            <td>{{ $recibo->direccion }}</td>
                            <td>{{ $recibo->telefono }}</td>
                            @if (Auth::user()->role == 'Jefe' || Auth::user()->role == 'Cocinero' || Auth::user()->role == 'Plancha')
                                <td>
                                    <form action="{{ route('recibos.actualizar', $recibo->id) }}" method="POST">
                                        @csrf
                                        <select id="estado" name="estado">
                                            <option value="Pedido registrado">{{ __('Pedido registrado') }}</option>
                                            <option value="Pedido en preparación">{{ __('Pedido en preparación') }}
                                            </option>
                                            <option value="Pedido en reparto">{{ __('Pedido en reparto') }}</option>
                                            <option value="Pedido entregado">{{ __('Pedido entregado') }}</option>
                                        </select>
                                        <br>
                                        <strong>{{ __('Estado actual:') }}</strong>&nbsp;{{ __($recibo->estado) }}
                                        <br>
                                        <div class="text-center">
                                            <button type="submit"
                                                class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500"
                                                id="boton">{{ __('ACTUALIZAR') }}</button>
                                        </div>
                                    </form>
                                </td>
                            @else
                                <td>
                                    <p>{{ __($recibo->estado) }}</p>
                                </td>
                            @endif
                            @if (Auth::user()->role == 'Jefe' || Auth::user()->role == 'Cajero')
                                <td>
                                    @if ($recibo->pagado)
                                        <form method="post" action="{{ route('recibos.nopagado', $recibo->id) }}">
                                            @csrf
                                            <button id="pagado" class="hover:text-white px-4 py-2 rounded-md"
                                                style="border-color:green; border-style:solid; border-width:1px;">{{ __('PAGADO') }}</button>
                                        </form>
                                    @else
                                        <form method="post" action="{{ route('recibos.pagado', $recibo->id) }}">
                                            @csrf
                                            <button
                                                class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('PENDIENTE') }}</button>
                                        </form>
                                    @endif
                                </td>
                                <td>
                                    <form method="post" action="{{ route('recibos.destroy', $recibo->id) }}">
                                        @csrf
                                        @method('delete')
                                        <button
                                            class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">x</button>
                                    </form>
                                </td>
                            @else
                                <td>
                                    @if ($recibo->pagado)
                                        <p>{{ __('PAGADO') }}</p>
                                    @else
                                        <p>{{ __('PENDIENTE') }}</p>
                                    @endif
                                </td>
                            @endif
                        </tr>
                    @elseif ($recibo->idUser == Auth::user()->id)
                        <tr>
                            <td>{{ $recibo->created_at }}</td>
                            <td>{{ $recibo->productos }}</td>
                            <td>{{ $recibo->total * 100 }}</td>
                            <td>{{ $recibo->puntos }}</td>
                            <td>{{ number_format($recibo->total, 2, '.', '') }} €</td>
                            <td>{{ $recibo->direccion }}</td>
                            <td>{{ $recibo->telefono }}</td>
                            <td>{{ __($recibo->estado) }}</td>
                            <td>
                                @if ($recibo->pagado)
                                    {{ __('Pago realizado') }}
                                @else
                                    {{ __('Pago en curso') }}
                                @endif
                            </td>
                        </tr>
                    @endif
                @endforeach
            </table>
            <table class="table-auto w-full" style="border-collapse:separate; border-spacing:10px;"
                id="recibos-pequenio">
                @foreach ($recibos as $recibo)
                    @if (Auth::user()->admin)
                        <tr>
                            <td style="display:flex; justify-content:space-between;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                    {{ __('Fecha y hora') }}</p>
                                <p>{{ $recibo->created_at }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Cliente') }}
                                </p>
                                <p>{{ \App\Models\User::where(['id' => $recibo->idUser])->pluck('name')->first() }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Productos') }}
                                </p>
                                <p>{{ $recibo->productos }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                    {{ __('Pizzacoins obtenidas') }}</p>
                                <p>{{ $recibo->total * 100 }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                    {{ __('Pizzacoins gastadas') }}</p>
                                <p>{{ $recibo->puntos }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Coste') }}
                                </p>
                                <p>{{ number_format($recibo->total, 2, '.', '') }} €</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Dirección') }}
                                </p>
                                <p>{{ $recibo->direccion }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Teléfono') }}
                                </p>
                                <p>{{ $recibo->telefono }}</p>
                            </td>
                        </tr>

                        @if (Auth::user()->role == 'Jefe' || Auth::user()->role == 'Cocinero' || Auth::user()->role == 'Plancha')
                            <tr>
                                <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                    <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                        {{ __('Estado') }}</p>
                                    <form action="{{ route('recibos.actualizar', $recibo->id) }}" method="POST">
                                        @csrf
                                        <select id="estado" name="estado">
                                            <option value="Pedido registrado">{{ __('Pedido registrado') }}</option>
                                            <option value="Pedido en preparación">{{ __('Pedido en preparación') }}
                                            </option>
                                            <option value="Pedido en reparto">{{ __('Pedido en reparto') }}</option>
                                            <option value="Pedido entregado">{{ __('Pedido entregado') }}</option>
                                        </select>
                                        <br>
                                        <strong>{{ __('Estado actual:') }}</strong>&nbsp;{{ __($recibo->estado) }}
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
                                    <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                        {{ __('Estado') }}</p>
                                    <p>{{ __($recibo->estado) }}</p>
                                </td>
                            </tr>
                        @endif
                        @if (Auth::user()->role == 'Jefe' || Auth::user()->role == 'Cajero')
                            <tr>
                                <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                    <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                        {{ __('Pago') }}</p>
                                    @if ($recibo->pagado)
                                        <form method="post" action="{{ route('recibos.nopagado', $recibo->id) }}">
                                            @csrf
                                            <button id="pagado" class="hover:text-white px-4 py-2 rounded-md"
                                                style="border-color:green; border-style:solid; border-width:1px;">{{ __('PAGADO') }}</button>
                                        </form>
                                    @else
                                        <form method="post" action="{{ route('recibos.pagado', $recibo->id) }}">
                                            @csrf
                                            <button
                                                class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('PENDIENTE') }}</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                    <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                        {{ __('Eliminar') }}</p>
                                    <form method="post" action="{{ route('recibos.destroy', $recibo->id) }}">
                                        @csrf
                                        @method('delete')
                                        <button
                                            class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">x</button>
                                    </form>
                                </td>
                            </tr>
                        @else
                            <tr>
                                <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                    <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                        {{ __('Pago') }}</p>
                                    @if ($recibo->pagado)
                                        <p>{{ __('PAGADO') }}</p>
                                    @else
                                        <p>{{ __('PENDIENTE') }}</p>
                                    @endif
                                </td>
                            </tr>
                        @endif
                        <tr></tr>
                        <tr></tr>
                    @elseif ($recibo->idUser == Auth::user()->id)
                        <tr>
                            <td style="display:flex; justify-content:space-between;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                    {{ __('Fecha y hora') }}</p>
                                <p>{{ $recibo->created_at }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                    {{ __('Productos') }}</p>
                                <p>{{ $recibo->productos }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                    {{ __('Pizzacoins obtenidas') }}</p>
                                <p>{{ $recibo->total * 100 }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                    {{ __('Pizzacoins gastadas') }}</p>
                                <p>{{ $recibo->puntos }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Coste') }}
                                </p>
                                <p>{{ number_format($recibo->total, 2, '.', '') }} €</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                    {{ __('Dirección') }}</p>
                                <p>{{ $recibo->direccion }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Teléfono') }}
                                </p>
                                <p>{{ $recibo->telefono }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Estado') }}
                                </p>
                                <p>{{ $recibo->estado }}</p>
                            </td>
                        </tr>
                        <tr>
                            @if ($recibo->pagado)
                                <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                    <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                        {{ __('Pago') }}</p>
                                    <p>{{ __('Pago realizado') }}</p>
                                </td>
                            @else
                                <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                    <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                        {{ __('Pago') }}</p>
                                    <p>{{ __('Pago en curso') }}</p>
                                </td>
                            @endif
                        </tr>
                        <tr></tr>
                        <tr></tr>
                    @endif
                @endforeach
            </table>
        </div>
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
                <a href="{{ route('whoarewe') }}"
                    class="mr-4 hover:underline md:mr-6">{{ __('¿Quiénes somos?') }}</a>
            </li>
            <li>
                <a href="{{ route('faq') }}"
                    class="mr-4 hover:underline md:mr-6">{{ __('Preguntas frecuentes') }}</a>
            </li>
            <li>
                <a href="{{ route('contact') }}" class="mr-4 hover:underline md:mr-6">{{ __('Contáctanos') }}</a>
            </li>
            <li>
                <a href="{{ route('privacy') }}"
                    class="mr-4 hover:underline md:mr-6">{{ __('Política de privacidad') }}</a>
            </li>
        </ul>
    </footer>

</x-app-layout>
