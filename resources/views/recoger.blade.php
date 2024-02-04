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
    <div style="margin-bottom:300px;">
        <div style="text-align:center;">
            @if (Auth::User()->inmediato)
                <a href="{{ route('products.index') }}" class="text-white px-4 py-2 rounded-md" id="boton"
                    style="background-color:#f12d2d;">{{ __('ATRÁS') }}</a>
            @else
                <a href="{{ route('cart.list') }}" class="text-white px-4 py-2 rounded-md" id="boton"
                    style="background-color:#f12d2d;">{{ __('ATRÁS') }}</a>
            @endif
        </div>
        <div class="container px-12 py-8 mx-auto">
            <br>
            <div style="display:flex; flex-wrap:wrap; align-items:center; justify-content:center; gap:5vw;">
                <div id="recogerdiv"
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#contenido">
                        <img class="rounded-t-lg" src="img/recoger.png" alt="" onclick="mostrar('form1')"
                            id="imgproducto" style="width:250px; padding:10px;" />
                    </a>
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center"
                            style="color: red;">
                            {{ __('Recoger en Pizzería') }}</h5>
                    </div>
                </div>
                <div id="domiciliodiv"
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#contenido">
                        <img class="rounded-t-lg" src="img/domicilio.png" alt="" onclick="mostrar('form2')"
                            id="imgproducto" style="width:250px; padding:10px;" />
                    </a>
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center"
                            style="color: red;">
                            {{ __('A domicilio') }}
                        </h5>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <form action="pagar" method="get" enctype="multipart/form-data" id="ruta1">
            @csrf
            <div id="contenido1" style="margin:30px;">
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
                    <input type="submit" class="px-6 py-2 text-sm rounded shadow text-red-100"
                        value="{{ __('Pagar') }}" id="boton" style="background-color:#568c2c; font-size:25px; font-weight:bolder; text-transform:uppercase; color:white;">
                </div>
            </div>
        </form>
        <form action="pagardomicilio" method="get" enctype="multipart/form-data" id="ruta2">
            <div id="contenido2" style="margin:30px;">
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
                <p id="mensajeeuros" style="display:none; font-size: 30px; font-weight:bolder;">
                    {{ __('*Servicio a domicilio: 2€ adicionales') }}</p>
                <br>
                <div id="botondiv2" class="text-center" style="display:none;">
                    <input type="submit" class="px-6 py-2 text-sm rounded shadow text-red-100"
                        value="{{ __('Pagar') }}" id="boton" style="background-color:#568c2c; font-size:25px; font-weight:bolder; text-transform:uppercase; color:white;">
                </div>
            </div>
        </form>
    </div>

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
                <a href="https://twitter.com/BRENDAPIZZA" target="__blank"><img src="{{ asset('img/twit.png') }}" alt="twitter"
                        width="25px" height="25px" style="margin-right:20px;" class="redes_sociales"></a>
                <a href="https://www.instagram.com/pizzeriabrenda/?hl=es" target="__blank"><img
                        src="{{ asset('img/inst.png') }}" alt="instagram" width="25px" height="25px" style="margin-right:20px;"
                        class="redes_sociales"></a>
                <a href="https://www.tiktok.com/@pizzeriabrenda1986?lang=es" target="__blank"><img
                        src="{{ asset('img/tik.png') }}" alt="tiktok" width="25px" height="25px" style="margin-right:20px;"
                        class="redes_sociales"></a>
                <a href="https://www.facebook.com/pizzeriabrenda/?locale=es_ES" target="__blank"><img
                        src="{{ asset('img/face.png') }}" alt="facebook" width="25px" height="25px" style="margin-right:20px;"
                        class="redes_sociales"></a>
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

    <script src="{{ asset('js/recoger-script-2.js') }}"></script>

</x-app-layout>
