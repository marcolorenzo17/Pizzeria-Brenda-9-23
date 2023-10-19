<x-app-layout>
    <x-slot name="header">
        <br><br><br>
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('POLÍTICA DE PRIVACIDAD') }}
        </h2>
        <br><br>
    </x-slot>
    <br>
    <div class="container px-12 py-8 mx-auto bg-white">
    </div>

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
                <a href="{{ route('whoarewe') }}" class="mr-4 hover:underline md:mr-6">{{ __('¿Quiénes somos?') }}</a>
            </li>
            <li>
                <a href="{{ route('faq') }}" class="mr-4 hover:underline md:mr-6">{{ __('Preguntas frecuentes') }}</a>
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

</x-app-layout>
