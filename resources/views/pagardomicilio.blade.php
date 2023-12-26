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
            {{ __('PAGAR - A DOMICILIO') }}
        </h2>
        <br><br>
    </x-slot>
    <link rel="stylesheet" href="/css/credito.css" />

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

                            <form action="{{ route('cart.add') }}" method="POST" id="subscribe-form"
                                name="subscribe_form">
                                <label for="card-holder-name">{{ __('Titular de la tarjeta') }}</label>
                                <input id="card-holder-name" type="text" name="card_holder_name"><br><br>
                                @csrf
                                <input type="hidden" value="{{ Auth::user()->restapuntos }}" name="puntos">
                                <input type="hidden" value="{{ Cart::getTotal() + 2 }}" name="total">
                                <input type="hidden" value="{{ $_GET['direccion2'] }}" name="direccion">
                                <input type="hidden" value="{{ $_GET['telefono'] }}" name="telefono">
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
                                        class="btn btn-lg btn-success btn-block" id="boton"
                                        onclick="return storeValues();">{{ __('Realizar compra') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ Auth::user()->restapuntos }}" name="puntos">
                        <input type="hidden" value="{{ Cart::getTotal() + 2 }}" name="total">
                        <input type="hidden" value="{{ $_GET['direccion2'] }}" name="direccion">
                        <input type="hidden" value="{{ $_GET['telefono'] }}" name="telefono">
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
                                <th class="hidden md:table-cell" style="padding:10px;"></th>
                                <th class="text-left" style="padding:10px;">{{ __('Producto') }}</th>
                                <th class="pl-5 text-left lg:text-right lg:pl-0" style="padding:10px;">
                                    <span class="lg:hidden" title="Quantity">{{ __('Cantidad') }}</span>
                                    <span class="hidden lg:inline">{{ __('Cantidad') }}</span>
                                </th>
                                <th class="text-right md:table-cell" style="padding:10px;"> {{ __('Pizzacoins') }}
                                </th>
                                <th class="hidden text-right md:table-cell" style="padding:10px;">
                                    {{ __('Precio') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartItems as $item)
                                <tr>
                                    <td class="hidden pb-4 md:table-cell" style="padding:10px;">
                                        <img src="{{ $item->attributes->image }}" class="w-20 rounded"
                                            alt="Thumbnail">
                                    </td>
                                    <td style="padding:10px;">
                                        <p class="mb-2 md:ml-4 text-purple-600 font-bold">{{ $item->name }}
                                        </p>
                                    </td>
                                    <td class="justify-center mt-6 md:justify-end md:flex" style="padding:10px;">
                                        <div class="h-10 w-28">
                                            <div class="relative flex flex-row w-full h-8">
                                                <p class="mb-2 md:ml-4 font-bold">{{ $item->quantity }}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right md:table-cell" style="padding:10px;">
                                        <span class="text-sm font-medium lg:text-base">
                                            {{ $item->attributes->puntos }}
                                        </span>
                                    </td>
                                    <td class="hidden text-right md:table-cell" style="padding:10px;">
                                        <span class="text-sm font-medium lg:text-base">
                                            {{ number_format($item->price * $item->quantity, 2, '.', '') }} €
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td style="padding:10px;">
                                </td>
                                <td style="padding:10px;">
                                    <p class="mb-2 md:ml-4 text-purple-600 font-bold">{{ __('Pedido a domicilio') }}
                                    </p>
                                </td>
                                <td style="padding:10px;">
                                </td>
                                <td style="padding:10px;">
                                </td>
                                <td class="hidden text-right md:table-cell" style="padding:10px;">
                                    <span class="text-sm font-medium lg:text-base">2.00 €</span>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:10px;"></td>
                                <td style="padding:10px;"></td>
                                <td style="padding:10px;"></td>
                                <td style="padding:10px;"></td>
                                <td class="hidden text-right md:table-cell" style="padding:10px;">
                                    <br>
                                    <b>TOTAL:</b>
                                    <p>{{ number_format(Cart::getTotal() + 2, 2, '.', '') }} €</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <p>{{ __('Pizzacoins ganadas con la compra: ') }} {{ round((Cart::getTotal() + 2) * 10) }}</p>
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
                <a class="anavbar" href="{{ route('contact') }}"
                    style="font-size:13px;">{{ __('Contáctanos') }}</a>
                <a class="anavbar" href="{{ route('privacy') }}"
                    style="font-size:13px;">{{ __('Política de privacidad') }}</a>
                <a class="anavbar" href="{{ route('premios') }}" style="font-size:13px;">{{ __('Premios') }}</a>
            </div>
            <div style="margin-left:auto; display:flex;">
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

    <script src="{{ asset('js/pagar-script-2.js') }}"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ asset('js/credito.js') }}"></script>
    <script>
        // Original JavaScript code by Chirp Internet: www.chirpinternet.eu
        // Please acknowledge use of this code by including this header.

        var today = new Date();
        var expiry = new Date(today.getTime() + 3600 * 1000);

        var setCookie = function(name, value) {
            document.cookie = name + "=" + escape(value) + "; path=/; expires=" + expiry.toGMTString();
        };

        var storeValues = function() {
            setCookie("card_holder_name", document.forms["subscribe_form"]["card_holder_name"].value);
            return true;
        };

        var getCookie = function(name) {
            var re = new RegExp(name + "=([^;]+)");
            var value = re.exec(document.cookie);
            return (value != null) ? decodeURI(value[1]) : null;
        };

        if (getCookie("card_holder_name")) {
            document.forms["subscribe_form"]["card_holder_name"].value = getCookie("card_holder_name");
        };
    </script>

</x-app-layout>
