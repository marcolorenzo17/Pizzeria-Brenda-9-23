<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('PREGUNTAS FRECUENTES') }}
        </h2>
        <br><br>
        <div>
            @include('partials/language_switcher')
        </div>
    </x-slot>
    <br>
    <div class="container px-12 py-8 mx-auto bg-white">
        <p style="font-weight: bolder; font-size:20px;">{{ __('¿La pizzería abre por la mañana?') }}</p><br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('La pizzería abre los domingos por la mañana desde el 1 de octubre al 30 de mayo.') }}
        </p>
        <br><br>
        <p style="font-weight: bolder; font-size:20px;">{{ __('¿Hay servicio a domicilio fuera de Chipiona?') }}</p><br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('No, sólo ofrecemos nuestro servicio dentro del término municipal.') }}
        </p>
        <br><br>
        <p style="font-weight: bolder; font-size:20px;">{{ __('¿Qué horario tiene la pizzería?') }}</p><br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('De lunes a domingo de 20:30 a 23:30.') }}</p>
        <br><br>
        <p style="font-weight: bolder; font-size:20px;">{{ __('¿Se puede aparcar cerca?') }}</p><br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Hay un aparcamiento a 500 m.') }}</p>
        <br><br>
        <p style="font-weight: bolder; font-size:20px;">{{ __('¿Hay pizza para celíacos?') }}</p><br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Tenemos una base de pizza sin gluten especialmente elaborada para celíacos a la que se le puede añadir los ingredientes que desees. Además, en la carta se puede consultar los alérgenos de cada ingrediente.') }}
        </p>
        <br><br>
        <p style="font-weight: bolder; font-size:20px;">{{ __('¿Los camareros sirven en la mesa?') }}</p><br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('No, la pizzería es autoservicio, pero los camareros te ayudarán en todo lo que necesites.') }}
        </p>
        <br><br>
        <p style="font-weight: bolder; font-size:20px;">{{ __('¿Qué tamaños de pizzas hay?') }}</p><br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Tenemos una pizza grande para 4 personas y otra pequeña para 2 personas aprox.') }}
        </p>
        <br><br>
        <p style="font-weight: bolder; font-size:20px;">{{ __('¿Cuánto cuesta el servicio a domicilio?') }}</p><br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('2 € adicionales al pedido que se realice.') }}</p>
        <br><br>
    </div>

    <br><br><br><br>

    <footer
        class="fixed bottom-0 left-0 z-20 w-full p-4 border-t border-gray-300 shadow md:flex md:items-center md:justify-between md:p-6"
        style="background-color:white;">
        <span
            class="text-sm text-gray-500 sm:text-center">{{ __('© 2023 Pizzería Brenda™. Todos los derechos reservados.') }}
        </span>
        <ul class="hidden flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0 sm:flex">
            <li>
                <a href="{{ route('whoarewe') }}" class="mr-4 hover:underline md:mr-6">{{ __('¿Quiénes somos?') }}</a>
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

</x-app-layout>
