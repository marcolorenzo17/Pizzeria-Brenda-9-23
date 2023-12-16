<x-app-layout>
    <x-slot name="header">
        <br><br><br>
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('CONTACTA CON PIZZERÍA BRENDA') }}
        </h2>
        <br><br>
    </x-slot>
    <br>
    <div class="container px-12 py-8 mx-auto bg-white">
        <br>
        <h3 style="font-weight: bolder;">{{ __('TELÉFONOS') }}</h3>
        <br>
        <table class="mx-auto" style="border-collapse: separate; border-spacing: 100px 0;">
            <tr>
                <td>956 37 11 15</td>
                <td></td>
            </tr>
            <tr>
                <td>956 37 47 36</td>
                <td>{{ __('Puedes hacer tu pedido por teléfono') }}</td>
            </tr>
            <tr>
                <td>627 650 605</td>
                <td></td>
            </tr>
        </table>
        <br><br>
        <h3 style="font-weight: bolder;">{{ __('TE ATENDEREMOS EN HORARIO:') }}</h3>
        <br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('De lunes a domingo: 20:30 - 23:30') }}</p>
        <br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Domingo por la mañana: 13:30 - 15:00') }}</p>
        <br><br>
        <div class="text-center">
            <h3 style="font-weight: bolder;">{{ __('VISÍTANOS EN:') }}</h3>
            <br>
            <p>
                C/ Padre Lerchundi, 3<br>
                {{ __('(junto a antigua estación de Los Amarillos)') }}<br>
                11550 - Chipiona (Cádiz)
            </p>
            <br>
            <div style="width:600px; margin-left:auto; margin-right:auto;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.3853338265453!2d-6.438643323699105!3d36.73732087124086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0e7509d89e347d%3A0xb24751265b25b2b1!2sPizzer%C3%ADa%20Brenda!5e0!3m2!1ses!2ses!4v1698173518792!5m2!1ses!2ses"
                    width="600" height="450" style="border:5px solid gray; border-radius:10px;" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <br><br>
        <div class="text-center">
            <h3 style="font-weight: bolder;">{{ __('ATENCIÓN AL CLIENTE:') }}</h3>
            <br>
            <p>
                brendapizza@hotmail.com
            </p>
        </div>
        <br>
    </div>

    <br><br><br><br>
    <footer class="fixed bottom-0 left-0 z-20 w-full p-4 border-t border-gray-300 shadow md:p-6"
        style="background-color:red;">
        <span class="text-sm sm:text-center"
            style="color: white; margin-right:20px;">{{ __('© 2023 Pizzería Brenda™. Todos los derechos reservados.') }}
        </span>
        <div class="md:flex md:items-center md:justify-between flex-wrap">
            <div style="display:flex; gap: 5px; color:white;">
                <p style="font-size:13px;">{{ __('Teléfonos: ') }}</p>
                <div>
                    <p style="font-size:18px; font-weight:bolder;">956 37 11 15</p>
                    <p style="font-size:18px; font-weight:bolder;">956 37 47 36</p>
                    <p style="font-size:18px; font-weight:bolder;">627 650 605</p>
                </div>
            </div>
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
            <div class="flex-wrap" style="display:flex; gap: 5px; margin-left:auto; color:white;">
                <p style="font-size:13px;">{{ __('Horario: ') }}</p>
                <div>
                    <p style="font-size:18px; font-weight:bolder;">{{ __('De lunes a domingo: 20:30 - 23:30') }}
                    </p>
                    <p style="font-size:18px; font-weight:bolder;">{{ __('Domingo por la mañana: 13:30 - 15:00') }}
                    </p>
                </div>
            </div>
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
        </div>
    </footer>

</x-app-layout>
