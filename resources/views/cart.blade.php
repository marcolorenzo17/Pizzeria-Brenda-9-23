<x-app-layout>
    <x-slot name="header">
        <br><br><br>
        <h2 class="font-semibold text-xl text-gray-800 text-center">
            {{ __('CARRITO') }}
        </h2>
        <br><br>
    </x-slot>
    <link rel="stylesheet" href="/css/index_products.css" />
    <main class="my-8">
        <div class="container px-6 mx-auto">
            <div style="text-align:center;">
                <a href="{{ route('products.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md"
                    id="boton">{{ __('VOLVER AL MENÚ') }}</a>
            </div>
            <div class="flex justify-center my-6">
                <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                    @if ($message = Session::get('success'))
                        <div class="p-4 mb-3 rounded" style="background-color:#b3d0ff">
                            <p>{{ __($message) }}</p>
                        </div>
                    @endif
                    @if (Cart::getTotalQuantity() != 0)
                        <div class="flex-1">
                            <table class="w-full text-sm lg:text-base" cellspacing="0">
                                <thead>
                                    <tr class="h-12 uppercase">
                                        <th class="md:table-cell"></th>
                                        <th class="text-left">{{ __('Producto') }}</th>
                                        <th class="pl-5 text-left lg:text-right lg:pl-0">
                                            <span class="lg:hidden" title="Quantity">{{ __('Cantidad') }}</span>
                                            <span class="hidden lg:inline">{{ __('Cantidad') }}</span>
                                        </th>
                                        <th class="text-right md:table-cell"> {{ __('Pizzacoins') }}</th>
                                        <th class="text-right md:table-cell"> {{ __('Precio') }}</th>
                                        <th class="text-right md:table-cell"> {{ __('Eliminar') }} </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartItems as $item)
                                        <tr>
                                            <td class="pb-4 md:table-cell">
                                                <img src="{{ $item->attributes->image }}" class="w-20 rounded"
                                                    alt="Thumbnail">
                                            </td>
                                            {{--
                                            <td class="hidden pb-4 md:table-cell">
                                                <p>{{ $item->attributes->puntos }}</p>
                                            </td>
                                            <td class="hidden pb-4 md:table-cell">
                                                <p>{{ $item->attributes->type }}</p>
                                            </td>
                                        --}}
                                            <td>
                                                <a href="#">
                                                    <p class="mb-2 md:ml-4 text-purple-600 font-bold">
                                                        {{ __($item->name) }}
                                                    </p>

                                                </a>
                                            </td>
                                            <td class="justify-center mt-6 md:justify-end md:flex">
                                                @if ($item->attributes->type != 'Promoción')
                                                    <div class="h-10 w-28">
                                                        <div class="relative flex flex-row w-full h-8">

                                                            <form action="{{ route('cart.update') }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="id"
                                                                    value="{{ $item->id }}">
                                                                <input type="text" name="quantity"
                                                                    value="{{ $item->quantity }}"
                                                                    class="w-16 text-center h-6 text-gray-800 outline-none rounded border border-blue-600" />
                                                                <button
                                                                    class="px-4 mt-1 py-1.5 text-sm rounded shadow text-violet-100 bg-violet-500"
                                                                    id="boton">{{ __('Actualizar') }}</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="text-right md:table-cell">
                                                <span class="text-sm font-medium lg:text-base">
                                                    {{ $item->attributes->puntos }}
                                                </span>
                                            </td>
                                            <td class="text-right md:table-cell">
                                                @if ($item->attributes->type != 'Promoción')
                                                    <span class="text-sm font-medium lg:text-base">
                                                        {{ number_format($item->price * $item->quantity, 2, '.', '') }}
                                                        €
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="text-right md:table-cell">
                                                <form action="{{ route('cart.remove') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" value="{{ $item->id }}" name="id">
                                                    <input type="hidden" value="{{ $item->attributes->type }}"
                                                        name="type">
                                                    <input type="hidden" value="{{ $item->attributes->puntos }}"
                                                        name="puntos">
                                                    <button class="px-4 py-2 text-white bg-red-600 shadow rounded-full"
                                                        id="boton">x</button>
                                                </form>
                                            </td>
                                        </tr>
                                        {{-- A lo mejor debería mejorar esto de aquí abajo... --}}
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <div>
                                Total: {{ number_format(Cart::getTotal(), 2, '.', '') }} €
                            </div>
                            @if (Cart::getTotalQuantity() != 0)
                                <br>
                                <table style="border-collapse: separate; border-spacing: 100px 0;">
                                    <tr>
                                        <td>
                                            <a href="recoger"><button type="button"
                                                    class="px-6 py-2 text-sm  rounded shadow text-red-100 bg-blue-500"
                                                    id="boton">{{ __('Realizar pedido') }}</button></a>
                                        </td>
                                        <td>
                                            <form action="{{ route('cart.clear') }}" method="POST">
                                                @csrf
                                                <button
                                                    class="px-6 py-2 text-sm  rounded shadow text-red-100 bg-red-500"
                                                    id="boton">{{ __('Vaciar carrito') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            @endif
                        </div>
                    @else
                        <div style="text-align:center; font-weight:bold; font-size:18px;">
                            <p>{{ __('Tu carrito está vacío.') }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </main>

    <br><br><br><br>

    <footer class="fixed bottom-0 left-0 z-20 w-full p-4 border-t border-gray-300 shadow md:p-6"
        style="background-color:red;">
        <span class="text-sm sm:text-center"
            style="color: white; margin-right:20px;">{{ __('© 2023 Pizzería Brenda™. Todos los derechos reservados.') }}
        </span>
        <div class="md:flex md:items-center md:justify-between flex-wrap">
            <div style="display:flex; gap: 5px; color:white;">
                <p style="font-size:13px;">{{ __('Teléfonos: ') }}</p>
                <div>
                    <p style="font-size:18px; font-weight:bolder;">956 37 11 15</p>
                    <p style="font-size:18px; font-weight:bolder;">956 37 47 36</p>
                    <p style="font-size:18px; font-weight:bolder;">627 650 605</p>
                </div>
            </div>
            <ul class="hidden flex-wrap items-center mt-3 text-sm font-medium sm:mt-0 sm:flex"
                style="color: white; justify-content:center; margin-left:auto;">
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
                <li>
                    <a href="{{ route('premios') }}" class="mr-4 hover:underline md:mr-6">{{ __('Premios') }}</a>
                </li>
            </ul>
            <div style="margin-left:auto; display:flex; justify-content:center;">
                <a href="https://twitter.com/BRENDAPIZZA" target="__blank"><img src="{{ asset('img/twit.png') }}"
                        width="30px" height="30px" style="margin-right:20px;"></a>
                <a href="https://www.instagram.com/pizzeriabrenda/?hl=es" target="__blank"><img
                        src="{{ asset('img/inst.png') }}" width="30px" height="30px"
                        style="margin-right:20px;"></a>
                <a href="https://www.tiktok.com/@pizzeriabrenda1986?lang=es" target="__blank"><img
                        src="{{ asset('img/tik.png') }}" width="30px" height="30px"
                        style="margin-right:20px;"></a>
                <a href="https://www.facebook.com/pizzeriabrenda/?locale=es_ES" target="__blank"><img
                        src="{{ asset('img/face.png') }}" width="30px" height="30px"
                        style="margin-right:20px;"></a>
            </div>
            <div class="flex-wrap" style="display:flex; gap: 5px; margin-left:auto; color:white;">
                <p style="font-size:13px;">{{ __('Horario: ') }}</p>
                <div>
                    <p style="font-size:18px; font-weight:bolder;">{{ __('De lunes a domingo: 20:30 - 23:30') }}
                    </p>
                    <p style="font-size:18px; font-weight:bolder;">{{ __('Domingo por la mañana: 13:30 - 15:00') }}
                    </p>
                </div>
            </div>
        </div>
    </footer>

</x-app-layout>
