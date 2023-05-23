<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('¿CÓMO QUIERES RECIBIR TU PEDIDO?') }}
        </h2>
    </x-slot>
    <br>
    <div class="container px-12 py-8 mx-auto">
        <br>
        <table class="mx-auto" style="border-collapse: separate; border-spacing: 70px 0;">
            <tr>
                <td>
                    <div
                        class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#contenido">
                            <img class="rounded-t-lg" src="img/recoger.png" alt="" onclick="recoger()"/>
                        </a>
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center" style="color: red;">Recoger en
                                Pizzería</h5>
                        </div>
                    </div>
                </td>
                <td>
                    <div
                        class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#contenido">
                            <img class="rounded-t-lg" src="img/domicilio.png" alt="" onclick="domicilio()"/>
                        </a>
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center" style="color: red;">A domicilio
                            </h5>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        <br>
        <div id="contenido">
            <div id="formulario">
            </div>
        </div>
        <br>
        <div class="text-center">
            <a href="pagar"><button type="button"
                    class="px-6 py-2 text-sm  rounded shadow text-red-100 bg-blue-500">Pagar</button></a>
        </div>
    </div>

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

    <script src="{{ asset('js/recoger-script.js') }}"></script>

</x-app-layout>
