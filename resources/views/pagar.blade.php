<x-app-layout>
    <?php
    $productosarray = [];
    foreach ($cartItems as $item) {
        array_push($productosarray, $item->name);
    }
    $productosvalores = '';
    foreach (array_values($productosarray) as $producto) {
        $productosvalores .= $producto . ', ';
    }
    $productosvalores = substr($productosvalores, 0, -2);
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <x-slot name="header">
        <br><br><br>
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('PAGAR - RECOGER EN PIZZERÍA') }}
        </h2>
        <br><br>
    </x-slot>
    <link rel="stylesheet" href="/css/credito.css" />
    <link rel="stylesheet" href="/css/index_products.css" />

    {{--
    <script src="{{ asset('js/pruebatexto-2.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#anim').on('click', function(event) {
                event.preventDefault();
                alert("{{__('Ey, ¿qué pasa?')}}");
            });
        });
    </script>
    <div id="dialog" style="float:right; width:300px;">
        <div id="d1" onclick="showText('d1', 'd2')" style="background-color:white; position:fixed; right:150px; bottom:100px; padding:20px; border-color:black; border-style:solid; border-width:2px; border-radius:10px;">
            <p>{{__('¿Quieres consultar el estado de tu pedido?')}}</p>
        </div>
        <div id="d2" onclick="showText('d2', false, true)" style="background-color:white; position:fixed; right:150px; bottom:100px; padding:20px; border-color:black; border-style:solid; border-width:2px; border-radius:10px; display:none;">
            <p>{{__('Puedes hacerlo en la sección de recibos en tiempo real.')}}</p>
        </div>
    </div>
    <img id="anim" src="{{ asset('img/anim/Pizza2.gif') }}" alt="..." style="height:120px; width:120px; position:fixed; right:10px; bottom:65px;">
    --}}

    <br>
    <div style="text-align:center;">
        <a href="{{ route('recoger.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md"
            id="boton">{{ __('ATRÁS') }}</a>
    </div>
    <br>
    <table class="mx-auto">
        <tr>
            <td>
                <div class="container px-12 py-8 mx-auto bg-white">
                    <h2 class="text-center">{{ __('ELIGE UN MÉTODO DE PAGO') }}</h2>
                    <br>
                    <table class="mx-auto" style="border-collapse: separate; border-spacing: 50px 0;">
                        <tr>
                            <td>
                                <div id="efectivodiv"
                                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <a href="#contenido">
                                        <img class="rounded-t-lg" src="img/efectivo.png" alt=""
                                            onclick="mostrar('efectivo')" id="imgproducto" />
                                    </a>
                                    <div class="p-5">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center">
                                            {{ __('En efectivo') }}</h5>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div id="creditodiv"
                                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <a href="#contenido">
                                        <img class="rounded-t-lg" src="img/tarjetacredito.png" alt=""
                                            onclick="mostrar('credito')" id="imgproducto" />
                                    </a>
                                    <div class="p-5">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center">
                                            {{ __('Tarjeta de crédito') }}</h5>
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
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form action="{{ route('cart.add') }}" method="POST" id="subscribe-form">
                                <label for="card-holder-name">{{ __('Nombre') }}</label>
                                <input id="card-holder-name" type="text"><br><br>
                                @csrf
                                <input type="hidden" value="{{ Auth::user()->restapuntos }}" name="puntos">
                                <input type="hidden" value="{{ Cart::getTotal() }}" name="total">
                                <input type="hidden" value="{{ $_GET['direccion1'] }}" name="direccion">
                                <input type="hidden" value="true" name="pagado" id="pagado">
                                <input type="hidden" value="{{ $productosvalores }}" name="productos">
                                <div class="form-row">
                                    <label for="card-element">{{ __('Tarjeta de crédito o de débito') }}</label>
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
                                    <button class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500"
                                        id="card-button" data-secret="{{ $intent->client_secret }}"
                                        class="btn btn-lg btn-success btn-block"
                                        id="boton">{{ __('Realizar compra') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ Auth::user()->restapuntos }}" name="puntos">
                        <input type="hidden" value="{{ Cart::getTotal() }}" name="total">
                        <input type="hidden" value="{{ $_GET['direccion1'] }}" name="direccion">
                        <input type="hidden" value="false" name="pagado" id="pagado">
                        <input type="hidden" value="{{ $productosvalores }}" name="productos">
                        <div class="text-center" id="pagoefectivo" style="display:none;">
                            <button type="submit" class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500"
                                id="boton">{{ __('Realizar compra') }}</button>
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
                                <th class="text-left">{{ __('Nombre') }}</th>
                                <th class="pl-5 text-left lg:text-right lg:pl-0">
                                    <span class="lg:hidden" title="Quantity">{{ __('Cantidad') }}</span>
                                    <span class="hidden lg:inline">{{ __('Cantidad') }}</span>
                                </th>
                                <th class="text-right md:table-cell"> {{ __('Pizzacoins') }}</th>
                                <th class="hidden text-right md:table-cell"> {{ __('Precio') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartItems as $item)
                                <tr>
                                    <td class="hidden pb-4 md:table-cell">
                                        <img src="{{ $item->attributes->image }}" class="w-20 rounded"
                                            alt="Thumbnail">
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
                                    <td class="text-right md:table-cell">
                                        <span class="text-sm font-medium lg:text-base">
                                            {{ $item->attributes->puntos }}
                                        </span>
                                    </td>
                                    <td class="hidden text-right md:table-cell">
                                        <span class="text-sm font-medium lg:text-base">
                                            {{ number_format($item->price * $item->quantity, 2, '.', '') }} €
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="hidden text-right md:table-cell">
                                    <br>
                                    <b>TOTAL:</b>
                                    <p>{{ number_format(Cart::getTotal(), 2, '.', '') }} €</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <p>{{ __('Pizzacoins ganadas con la compra: ') }} {{ Cart::getTotal() * 100 }}</p>
                    {{--
                    <br>
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ Cart::getTotal() }}" name="total">
                            <input type="hidden" value="{{ $_GET["direccion1"] }}" name="direccion">
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

    <footer
        class="bottom-0 left-0 z-20 w-full p-4 border-t border-gray-300 shadow md:flex md:items-center md:justify-between md:p-6"
        style="background-color:red;">
        <div>
            @include('partials/language_switcher')
        </div>
        {{--
    <span
        class="text-sm sm:text-center" style="color: white;">{{ __('© 2023 Pizzería Brenda™. Todos los derechos reservados.') }}
    </span>
--}}
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

    <script src="{{ asset('js/pagar-script-2.js') }}"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ asset('js/credito.js') }}"></script>

</x-app-layout>
