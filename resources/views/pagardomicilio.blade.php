<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('PAGAR - A DOMICILIO') }}
        </h2>
        <div>
            @include('partials/language_switcher')
        </div>
    </x-slot>
    <link rel="stylesheet" href="/css/credito.css" />
    <br>
    <table class="mx-auto">
        <tr>
            <td>
                <div class="container px-12 py-8 mx-auto bg-white">
                    <h2 class="text-center">{{__('ELIGE UN MÉTODO DE PAGO')}}</h2>
                    <br>
                    <table class="mx-auto" style="border-collapse: separate; border-spacing: 50px 0;">
                        <tr>
                            <td>
                                <div
                                    id="efectivodiv" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <a href="#contenido">
                                        <img class="rounded-t-lg" src="img/efectivo.png" alt=""
                                            onclick="mostrar('efectivo')" />
                                    </a>
                                    <div class="p-5">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center">
                                            {{__('En efectivo')}}</h5>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div
                                    id="creditodiv" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <a href="#contenido">
                                        <img class="rounded-t-lg" src="img/tarjetacredito.png" alt=""
                                            onclick="mostrar('credito')" />
                                    </a>
                                    <div class="p-5">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center">
                                            {{__('Tarjeta de crédito')}}</h5>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    {{--
                        <br>
                        <div id="contenido" style="display:none;">
                            <div id="formulario">
                                <label for="tarjeta" id="tarjeta">
                                <select name="tarjeta" id="tarjeta">
                                    <option value="mastercard">MasterCard</option>
                                    <option value="visa">Visa</option>
                                    <option value="maestro">Maestro</option>
                                </select>
                                <p>{{__('Nombre:')}}</p>
                                <input type="text" name="nombre" id="nombre" required>
                                <p>{{__('Nº Tarjeta:')}}</p>
                                <input type="text" name="numero" id="numero" required>
                                <p>{{__('Caducidad:')}}</p>
                                <input type="text" name="caducidad" id="caducidad" required>
                                <p>CVV:</p>
                                <input type="text" name="seguridad" id="seguridad" required>
                            </div>
                        </div>
                    --}}
                    <br>
                    <div id="contenido" style="display:none;">
                        <div id="formulario">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{session('status')}}
                                </div>
                            @endif

                            <form action="{{ route('cart.add') }}" method="POST" id="subscribe-form">
                                <label for="card-holder-name">{{__('Nombre')}}</label>
                                <input id="card-holder-name" type="text"><br><br>
                                @csrf
                                <input type="hidden" value="{{ Cart::getTotal() + 2 }}" name="total">
                                <input type="hidden" value="{{ $_GET["direccion2"] }}" name="direccion">
                                <input type="hidden" value="{{ $_GET["telefono"] }}" name="telefono">
                                <input type="hidden" value="true" name="pagado" id="pagado">
                                <div class="form-row">
                                    <label for="card-element">{{__('Tarjeta de crédito o de débito')}}</label>
                                    <div id="card-element" class="form-control">
                                    </div>
                                    <!-- Used to display form errors. -->
                                    <div id="card-errors" role="alert"></div>
                                </div>
                                <div class="stripe-errors"></div>
                                @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                    {{ $error }}<br>
                                    @endforeach
                                </div>
                                @endif
                                <br>
                                <div class="form-group text-center">
                                    <button class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500" id="card-button" data-secret="{{ $intent->client_secret }}" class="btn btn-lg btn-success btn-block">Realizar compra</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ Cart::getTotal() + 2 }}" name="total">
                        <input type="hidden" value="{{ $_GET["direccion2"] }}" name="direccion">
                        <input type="hidden" value="{{ $_GET["telefono"] }}" name="telefono">
                        <input type="hidden" value="false" name="pagado" id="pagado">
                        <div class="text-center" id="pagoefectivo" style="display:none;">
                            <button type="submit"
                                class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500">{{__('Realizar compra')}}</button>
                        </div>
                    </form>
                </div>
            </td>
            <td style="vertical-align: top;">
                <div class="container px-12 py-8 mx-auto bg-white">
                    <table>
                        <thead>
                            <tr class="h-12 uppercase">
                                <th class="hidden md:table-cell"></th>
                                <th class="text-left">{{__('Nombre')}}</th>
                                <th class="pl-5 text-left lg:text-right lg:pl-0">
                                    <span class="lg:hidden" title="Quantity">{{__('Cantidad')}}</span>
                                    <span class="hidden lg:inline">{{__('Cantidad')}}</span>
                                </th>
                                <th class="hidden text-right md:table-cell"> {{__('Precio')}}</th>
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
                                            {{ number_format($item->price * $item->quantity, 2, '.', '') }} €
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <p class="mb-2 md:ml-4 text-purple-600 font-bold">{{__('Pedido a domicilio')}}</p>
                                </td>
                                <td>
                                </td>
                                <td class="hidden text-right md:table-cell">
                                    <span class="text-sm font-medium lg:text-base">2.00 €</span>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="hidden text-right md:table-cell">
                                    <br>
                                    <b>TOTAL:</b>
                                    <p>{{ number_format(Cart::getTotal() + 2, 2, '.', '') }} €</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    {{--
                    <br>
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ Cart::getTotal() + 2 }}" name="total">
                            <input type="hidden" value="{{ $_GET["direccion2"] }}" name="direccion">
                            <input type="hidden" value="{{ $_GET["telefono"] }}" name="telefono">
                            <input type="hidden" value="" name="pagado" id="pagado">
                            <div class="text-center">
                                <button type="submit"
                                    class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500">{{__('Realizar compra')}}</button>
                            </div>
                        </form>
                    --}}
                </div>
            </td>
        </tr>
    </table>

    <br><br><br><br>

    <footer
        class="fixed bottom-0 left-0 z-20 w-full p-4 border-t border-gray-300 shadow md:flex md:items-center md:justify-between md:p-6" style="background-color:white;">
        <span class="text-sm text-gray-500 sm:text-center">{{__('© 2023 Pizzería Brenda™. Todos los derechos reservados.')}}
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0">
            <li>
                <a href="whoarewe" class="mr-4 hover:underline md:mr-6">{{__('¿Quiénes somos?')}}</a>
            </li>
            <li>
                <a href="faq" class="mr-4 hover:underline md:mr-6">{{__('Preguntas frecuentes')}}</a>
            </li>
            <li>
                <a href="contact" class="mr-4 hover:underline md:mr-6">{{__('Contáctanos')}}</a>
            </li>
        </ul>
    </footer>

    <script src="{{ asset('js/pagar-script-2.js') }}"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ asset('js/credito.js') }}"></script>

</x-app-layout>
