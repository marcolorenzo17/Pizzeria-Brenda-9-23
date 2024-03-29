<x-app-layout>
    <x-slot name="header">
        <div style="margin-top:110px;">
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight"
                style="font-size:60px; color:#568c2c; letter-spacing: 3px; font-weight:lighter; font-family: 'Alfa Slab One', serif;">
                {{ __('CARRITO') }}
            </h2>
        </div>
    </x-slot>
    <link rel="stylesheet" href="/css/index_products.css" />
    <link rel="stylesheet" href="/css/carrito.css" />
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <main class="my-8" style="margin-bottom:300px;">
        <div class="container px-6 mx-auto">
            <div style="text-align:center;">
                <a href="{{ route('products.index') }}" class="text-white px-4 py-2 rounded-md" id="boton"
                    style="background-color:#f12d2d;">{{ __('VOLVER AL MENÚ') }}</a>
            </div>
            <div class="flex justify-center my-6">
                <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                    @if ($message = Session::get('success'))
                        <div class="p-4 mb-3 rounded"
                            style="background-color:#568c2c; color:white; font-weight:bolder;">
                            <p>{{ __($message) }}</p>
                        </div>
                    @endif
                    @if (Cart::getTotalQuantity() != 0)
                        <div class="flex-1" id="carrito_grande">
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
                                                    <p class="mb-2 md:ml-4 font-bold" style="color:#568c2c;">
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
                                                                    class="px-4 mt-1 py-1.5 text-sm rounded shadow text-violet-100"
                                                                    id="boton"
                                                                    style="background-color:#568c2c;">{{ __('Actualizar') }}</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                @endif
                                            </td>
                                            @if ($item->attributes->puntos > 0 and $item->attributes->puntos != '')
                                                <td class="text-right md:table-cell">
                                                    <span class="text-sm font-medium lg:text-base">
                                                        {{ $item->attributes->puntos }}
                                                    </span>
                                                </td>
                                            @else
                                                <td class="text-right md:table-cell">
                                                </td>
                                            @endif
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
                                    @endforeach
                                </tbody>
                            </table>
                            <div style="margin-top:30px;">
                                Total: {{ number_format(Cart::getTotal(), 2, '.', '') }} €
                            </div>
                            @if (Cart::getTotalQuantity() != 0)
                                <br>
                                <div style="display:flex; align-items:center; justify-content:center; gap:100px;">
                                    <tr>
                                        <td>
                                            <a href="recoger"><button type="button"
                                                    class="px-6 py-2 text-sm  rounded shadow text-red-100"
                                                    id="boton"
                                                    style="background-color:#568c2c;">{{ __('Realizar pedido') }}</button>
                                            </a>
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
                                </div>
                            @endif
                        </div>
                        <div id="carrito_pequenio">
                            @foreach ($cartItems as $item)
                                <div style="margin-bottom:30px;">
                                    <div style="display:flex; gap:10px;">
                                        <img src="{{ $item->attributes->image }}" class="w-20 rounded" alt="Thumbnail">
                                        @if ($item->attributes->type != 'Promoción')
                                            <div class="h-10 w-28">
                                                <form action="{{ route('cart.update') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                    <input type="text" name="quantity"
                                                        value="{{ $item->quantity }}"
                                                        class="w-16 text-center h-6 text-gray-800 outline-none rounded border border-blue-600" />
                                                    <button
                                                        class="px-4 mt-1 py-1.5 text-sm rounded shadow text-violet-100"
                                                        id="boton"
                                                        style="background-color:#568c2c;">{{ __('Actualizar') }}</button>
                                                </form>
                                            </div>
                                        @endif
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
                                    </div>
                                    <div style="margin-top:10px;">
                                        <p class="mb-2 md:ml-4 font-bold" style="color:#568c2c;">
                                            {{ __($item->name) }}
                                        </p>
                                    </div>
                                    <div style="margin-left:20px;">
                                        @if ($item->attributes->type != 'Promoción')
                                            <p>
                                                {{ __('- Precio:') }}
                                                {{ number_format($item->price * $item->quantity, 2, '.', '') }} €
                                            </p>
                                        @endif
                                        @if ($item->attributes->puntos > 0 and $item->attributes->puntos != '')
                                            <p>
                                                - Pizzacoins: {{ $item->attributes->puntos }}
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                            <div style="margin-top:30px;">
                                Total: {{ number_format(Cart::getTotal(), 2, '.', '') }} €
                            </div>
                            <div
                                style="margin-top:30px; display:flex; align-items:center; justify-content:center; gap:50px;">
                                <a href="recoger"><button type="button"
                                        class="px-6 py-2 text-sm  rounded shadow text-red-100" id="boton"
                                        style="background-color:#568c2c;">{{ __('Realizar pedido') }}</button>
                                </a>
                                <form action="{{ route('cart.clear') }}" method="POST">
                                    @csrf
                                    <button class="px-6 py-2 text-sm  rounded shadow text-red-100 bg-red-500"
                                        id="boton">{{ __('Vaciar carrito') }}</button>
                                </form>
                            </div>
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
                        alt="twitter" width="25px" height="25px" style="margin-right:20px;"
                        class="redes_sociales"></a>
                <a href="https://www.instagram.com/pizzeriabrenda/?hl=es" target="__blank"><img
                        src="{{ asset('img/inst.png') }}" alt="instagram" width="25px" height="25px"
                        style="margin-right:20px;" class="redes_sociales"></a>
                <a href="https://www.tiktok.com/@pizzeriabrenda1986?lang=es" target="__blank"><img
                        src="{{ asset('img/tik.png') }}" alt="tiktok" width="25px" height="25px"
                        style="margin-right:20px;" class="redes_sociales"></a>
                <a href="https://www.facebook.com/pizzeriabrenda/?locale=es_ES" target="__blank"><img
                        src="{{ asset('img/face.png') }}" alt="facebook" width="25px" height="25px"
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
