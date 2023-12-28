<x-app-layout>
    <x-slot name="header">
        <div style="margin-top:110px;">
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight"
                style="color:#568c2c; font-weight:lighter; font-family: 'Acme', sans-serif; font-size:40px;">
                {{ __('¿CÓMO QUIERES RECIBIR TU PEDIDO?') }}
            </h2>
        </div>
    </x-slot>
    <link rel="stylesheet" href="/css/index_products.css" />
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Grandstander:wght@800&display=swap" rel="stylesheet">
    <br>
    <div style="text-align:center;">
        @if (Auth::User()->inmediato)
            <a href="{{ route('products.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md"
                id="boton">{{ __('ATRÁS') }}</a>
        @else
            <a href="{{ route('cart.list') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md"
                id="boton">{{ __('ATRÁS') }}</a>
        @endif
    </div>
    <div class="container px-12 py-8 mx-auto" style="margin-bottom:300px;">
        <br>
        <table class="mx-auto" style="border-collapse: separate; border-spacing: 70px 0;">
            <tr>
                <td>
                    <div id="recogerdiv"
                        class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#contenido">
                            <img class="rounded-t-lg" src="img/recoger.png" alt="" onclick="mostrar('form1')"
                                id="imgproducto" />
                        </a>
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center"
                                style="color: red;">{{ __('Recoger en Pizzería') }}</h5>
                        </div>
                    </div>
                </td>
                <td>
                    <div id="domiciliodiv"
                        class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#contenido">
                            <img class="rounded-t-lg" src="img/domicilio.png" alt="" onclick="mostrar('form2')"
                                id="imgproducto" />
                        </a>
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center"
                                style="color: red;">{{ __('A domicilio') }}
                            </h5>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        <br>
        <form action="pagar" method="get" enctype="multipart/form-data" id="ruta1">
            @csrf
            <div id="contenido1">
                <!--
                <div id="formulario"></div>
                <div id="botondiv"></div>
                <p id="mensajeeuros"></p>
                -->
                <div id="form1" style="display:none;">
                    <div class="mb-6">
                        <label for="direccion1"
                            class="block mb-2 text-sm font-medium text-gray-900">{{ __('Dirección') }}</label>
                        <input type="text" id="direccion1" name="direccion1"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg foucs:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            value="C/ Padre Lerchundi, 3" readonly required>
                    </div>
                </div>
                <div id="botondiv1" class="text-center" style="display:none;">
                    <input type="submit" class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500"
                        value="{{ __('Pagar') }}" id="boton">
                </div>
            </div>
        </form>
        <form action="pagardomicilio" method="get" enctype="multipart/form-data" id="ruta2">
            <div id="contenido2">
                <div id="form2" style="display:none;">
                    <div class="mb-6">
                        <label for="direccion2"
                            class="block mb-2 text-sm font-medium text-gray-900">{{ __('Dirección') }}</label>
                        <input type="text" id="direccion2" name="direccion2"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg foucs:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            value="{{ Auth::User()->direccion }}" readonly required>
                    </div>
                    <div class="mb-6">
                        <label for="telefono"
                            class="block mb-2 text-sm font-medium text-gray-900">{{ __('Teléfono') }}</label>
                        <input type="text" id="telefono" name="telefono"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg foucs:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            value="{{ Auth::User()->telefono }}" readonly required>
                    </div>
                </div>
                <p id="mensajeeuros" style="display:none; font-size: 25px;">
                    {{ __('*Servicio a domicilio: 2€ adicionales') }}</p>
                <br>
                <div id="botondiv2" class="text-center" style="display:none;">
                    <input type="submit" class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500"
                        value="{{ __('Pagar') }}" id="boton">
                </div>
            </div>
        </form>
    </div>

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

    <script src="{{ asset('js/recoger-script-2.js') }}"></script>

</x-app-layout>
