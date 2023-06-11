<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('CONTACTA CON PIZZERÍA BRENDA') }}
        </h2>
        <div>
            @include('partials/language_switcher')
        </div>
    </x-slot>
    <br>
    <div class="container px-12 py-8 mx-auto bg-white">
        <br>
        <h3 style="font-weight: bolder;">{{__('TELÉFONOS')}}</h3>
        <br>
        <table class="mx-auto" style="border-collapse: separate; border-spacing: 100px 0;">
            <tr>
                <td>956 37 11 15</td>
                <td></td>
            </tr>
            <tr>
                <td>956 37 47 36</td>
                <td>{{__('Puedes hacer tu pedido por teléfono')}}</td>
            </tr>
            <tr>
                <td>627 650 605</td>
                <td></td>
            </tr>
        </table>
        <br><br>
        <h3 style="font-weight: bolder;">{{__('TE ATENDEREMOS EN HORARIO:')}}</h3>
        <br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{__('De lunes a domingo: 20:30 - 23:30')}}</p>
        <br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{__('Domingo por la mañana: 13:30 - 15:00')}}</p>
        <br><br>
        <div class="text-center">
            <h3 style="font-weight: bolder;">{{__('VISÍTANOS EN:')}}</h3>
            <br>
            <p>
                C/ Padre Lerchundi, 3<br>
                {{__('(junto a antigua estación de Los Amarillos)')}}<br>
                11550 - Chipiona (Cádiz)
            </p>
            <br>
            <img src="{{ asset('img/mapsplaceholder.png') }}" alt="..." class="max-h-60 mx-auto">
        </div>
        <br><br>
        <div class="text-center">
            <h3 style="font-weight: bolder;">{{__('ATENCIÓN AL CLIENTE:')}}</h3>
            <br>
            <p>
                brendapizza@hotmail.com
            </p>
        </div>
        <br>
    </div>

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

</x-app-layout>
