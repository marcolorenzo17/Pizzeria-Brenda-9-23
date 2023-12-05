<x-app-layout>
    <x-slot name="header">
        <br><br><br>
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('¿CÓMO QUIERES RECIBIR TU PEDIDO?') }}
        </h2>
        <br><br>
    </x-slot>
    <link rel="stylesheet" href="/css/index_products.css" />
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
    <div class="container px-12 py-8 mx-auto">
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

    <br><br><br><br>
    <footer
        class="fixed bottom-0 left-0 z-20 w-full p-4 border-t border-gray-300 shadow md:flex md:items-center md:justify-between md:p-6"
        style="background-color:red;">
        <span class="text-sm sm:text-center"
            style="color: white; margin-right:20px;">{{ __('© 2023 Pizzería Brenda™. Todos los derechos reservados.') }}
        </span>
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
                    src="{{ asset('img/inst.png') }}" width="30px" height="30px" style="margin-right:20px;"></a>
            <a href="https://www.tiktok.com/@pizzeriabrenda1986?lang=es" target="__blank"><img
                    src="{{ asset('img/tik.png') }}" width="30px" height="30px" style="margin-right:20px;"></a>
            <a href="https://www.facebook.com/pizzeriabrenda/?locale=es_ES" target="__blank"><img
                    src="{{ asset('img/face.png') }}" width="30px" height="30px" style="margin-right:20px;"></a>
        </div>
    </footer>

    <script src="{{ asset('js/recoger-script-2.js') }}"></script>

</x-app-layout>
