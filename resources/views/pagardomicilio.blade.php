<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('PAGAR - A DOMICILIO') }}
        </h2>
    </x-slot>
    <br>
    <table class="mx-auto">
        <tr>
            <td>
                <div class="container px-12 py-8 mx-auto bg-white">
                    <h2 class="text-center">ELIGE UN MÉTODO DE PAGO</h2>
                    <br>
                    <table class="mx-auto" style="border-collapse: separate; border-spacing: 50px 0;">
                        <tr>
                            <td>
                                <div
                                    id="efectivodiv" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <a href="#contenido">
                                        <img class="rounded-t-lg" src="img/efectivo.png" alt=""
                                            onclick="efectivo()" />
                                    </a>
                                    <div class="p-5">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center">
                                            En efectivo</h5>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div
                                    id="creditodiv" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <a href="#contenido">
                                        <img class="rounded-t-lg" src="img/tarjetacredito.png" alt=""
                                            onclick="credito()" />
                                    </a>
                                    <div class="p-5">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center">
                                            Tarjeta de crédito</h5>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <div id="contenido">
                        <div id="formulario"></div>
                    </div>
                </div>
            </td>
            <td style="vertical-align: top;">
                <div class="container px-12 py-8 mx-auto bg-white">
                    <table>
                        <thead>
                            <tr class="h-12 uppercase">
                                <th class="hidden md:table-cell"></th>
                                <th class="text-left">Nombre</th>
                                <th class="pl-5 text-left lg:text-right lg:pl-0">
                                    <span class="lg:hidden" title="Quantity">Cantidad</span>
                                    <span class="hidden lg:inline">Cantidad</span>
                                </th>
                                <th class="hidden text-right md:table-cell"> Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartItems as $item)
                                <tr>
                                    <td class="hidden pb-4 md:table-cell">
                                        <img src="{{ $item->attributes->image }}" class="w-20 rounded" alt="Thumbnail">
                                    </td>
                                    <td>
                                        <p class="mb-2 md:ml-4 text-purple-600 font-bold">{{ $item->name }}
                                        </p>
                                    </td>
                                    <td class="justify-center mt-6 md:justify-end md:flex">
                                        <div class="h-10 w-28">
                                            <div class="relative flex flex-row w-full h-8">
                                                <p class="mb-2 md:ml-4 font-bold">{{ $item->quantity }}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="hidden text-right md:table-cell">
                                        <span class="text-sm font-medium lg:text-base">
                                            {{ $item->price * $item->quantity }} €
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <p class="mb-2 md:ml-4 text-purple-600 font-bold">Pedido a domicilio</p>
                                </td>
                                <td>
                                </td>
                                <td class="hidden text-right md:table-cell">
                                    <span class="text-sm font-medium lg:text-base">2 €</span>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="hidden text-right md:table-cell">
                                    <br>
                                    <b>TOTAL:</b>
                                    <p>{{ Cart::getTotal() + 2 }} €</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ Cart::getTotal() + 2 }}" name="total">
                        <div class="text-center">
                            <button type="submit"
                                class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500">Realizar
                                compra</button>
                        </div>
                    </form>
                </div>
            </td>
        </tr>
    </table>

    <br><br><br><br>

    <footer
        class="fixed bottom-0 left-0 z-20 w-full p-4 bg-green-200 border-t border-gray-300 shadow md:flex md:items-center md:justify-between md:p-6">
        <span class="text-sm text-gray-500 sm:text-center">© 2023 Pizzería Brenda™. Todos los derechos reservados.
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0">
            <li>
                <a href="whoarewe" class="mr-4 hover:underline md:mr-6">¿Quiénes somos?</a>
            </li>
            <li>
                <a href="faq" class="mr-4 hover:underline md:mr-6">Preguntas frecuentes</a>
            </li>
            <li>
                <a href="contact" class="mr-4 hover:underline md:mr-6">Contáctanos</a>
            </li>
        </ul>
    </footer>

    <script src="{{ asset('js/pagar-script.js') }}"></script>

</x-app-layout>
