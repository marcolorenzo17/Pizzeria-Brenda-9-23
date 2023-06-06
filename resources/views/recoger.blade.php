<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('¿CÓMO QUIERES RECIBIR TU PEDIDO?') }}
        </h2>
        <div>
            @include('partials/language_switcher')
        </div>
    </x-slot>
    <br>
    <div class="container px-12 py-8 mx-auto">
        <br>
        <table class="mx-auto" style="border-collapse: separate; border-spacing: 70px 0;">
            <tr>
                <td>
                    <div
                        id="recogerdiv" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#contenido">
                            <img class="rounded-t-lg" src="img/recoger.png" alt="" onclick="mostrar('form1')"/>
                        </a>
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center" style="color: red;">{{__('Recoger en Pizzería')}}</h5>
                        </div>
                    </div>
                </td>
                <td>
                    <div
                        id="domiciliodiv" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#contenido">
                            <img class="rounded-t-lg" src="img/domicilio.png" alt="" onclick="mostrar('form2')"/>
                        </a>
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center" style="color: red;">{{__('A domicilio')}}
                            </h5>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        <br>
        <form action="" method="get" enctype="multipart/form-data" id="ruta">
            @csrf
            <div id="contenido">
                <!--
                <div id="formulario"></div>
                <div id="botondiv"></div>
                <p id="mensajeeuros"></p>
                -->
                <div id="form1" style="display:none;">
                    <div class="mb-6">
                        <label for="direccion1" class="block mb-2 text-sm font-medium text-gray-900">{{__('Dirección')}}</label>
                        <input type="text" id="direccion1" name="direccion1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg foucs:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="C/ Padre Lerchundi, 3" readonly>
                    </div>
                </div>
                <div id="form2" style="display:none;">
                    <div class="mb-6">
                        <label for="direccion2" class="block mb-2 text-sm font-medium text-gray-900">{{__('Dirección')}}</label>
                        <input type="text" id="direccion2" name="direccion2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg foucs:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                    <div class="mb-6">
                        <label for="telefono" class="block mb-2 text-sm font-medium text-gray-900">{{__('Teléfono')}}</label>
                        <input type="text" id="telefono" name="telefono" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg foucs:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    </div>
                </div>
                <p id="mensajeeuros" style="display:none;">{{__('*Servicio a domicilio: 2€ adicionales')}}</p>
                <div id="botondiv" class="text-center" style="display:none;">
                    <input type="submit" class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500" value="{{__('Pagar')}}">
                </div>
            </div>
        </form>
    </div>

    <br><br><br><br>

    <footer
        class="fixed bottom-0 left-0 z-20 w-full p-4 bg-green-200 border-t border-gray-300 shadow md:flex md:items-center md:justify-between md:p-6">
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

    <script src="{{ asset('js/recoger-script-2.js') }}"></script>

</x-app-layout>
