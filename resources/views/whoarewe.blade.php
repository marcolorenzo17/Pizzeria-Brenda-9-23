<x-app-layout>
    <x-slot name="header">
        <br><br><br>
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('¿QUIÉNES SOMOS?') }}
        </h2>
        <br><br>
    </x-slot>
    <br>
    <div class="container px-12 py-8 mx-auto bg-white">
        <h2 class="text-center">{{ __('PIZZERÍA BRENDA: ARTESANAL Y NATURAL') }}</h2>
        <br>
        <p>
            {{ __('Pizzería Brenda es un negocio familiar que fundamos dos hermanos: Manuel y Federico Lorenzo Mellado en el año 1986, siendo la primera pizzería que se inauguró en Chipiona.') }}<br><br>
            {{ __('Comenzamos este negocio en un pequeño local familiar con mucha ilusión, pero también con mucha incertidumbre, ya que éramos muy jóvenes, y teníamos la idea de introducir en nuestro pueblo la pizza. Un producto totalmente novedoso y desconocido en nuestra localidad en aquellos años.') }}
        </p>
        <br>
        <div>
            <img class="mx-auto" src="{{ asset('img/waw1.png') }}" alt="waw1">
        </div>
        <br>
        <p>
            {{ __('Ya desde entonces, y hasta hoy, el lema de nuestro negocio siempre ha sido la innovación. Nuestra empresa fue la primera en ofrecer el servicio a domicilio y el autoservicio en el local, lo que nos proporcionó agilidad y rapidez en el servicio.') }}<br>
            {{ __('Nuestra especialidad son las pizzas totalmente artesanales, con masa de elaboración propia, y con ingredientes naturales de la mayor calidad. Nos preocupa mucho ofrecer a nuestros clientes un producto totalmente natural, artesanal y de calidad.') }}<br><br>
            {{ __('Esto es precisamente lo que más valoran nuestros clientes, y gracias a su aceptación y fidelidad, hemos podido ir agrandando y modernizando nuestro negocio, acorde a sus demandas.') }}
        </p>
        <br>
        <div>
            <img class="mx-auto" src="{{ asset('img/waw2.png') }}" alt="waw2">
        </div>
        <div>
            <img class="mx-auto" src="{{ asset('img/waw3.png') }}" alt="waw3">
        </div>
        <br>
        <p>
            {{ __('En nuestro local, además de la pizza, se puede degustar pasta italiana, arroces, ensalada, platos variados, baguettes y un servicio de burgers. Todo con la mejor relación calidad-precio de la zona.') }}<br><br>
            {{ __('La Pizzería Brenda está ubicada en el centro de Chipiona, y disponemos de una amplia terraza donde nuestros clientes pueden disfrutar de un buen ambiente y de un trato agradable por parte de nuestro joven y atento personal.') }}<br>
            {{ __('Nuestro equipo está compuesto por un grupo de jóvenes que aportan dinamismo, frescura y nuevas ideas para renovar los platos, por lo que continuamente se ofrecen novedades y promociones en la carta.') }}
        </p>
        <br>
        <div>
            <img class="mx-auto" src="{{ asset('img/waw4.png') }}" alt="waw4">
        </div>
        <br>
        <p>
            {{ __('También disponemos de servicio a domicilio para que puedas disfrutar de nuestros platos sin moverte de casa.') }}<br><br>
            {{ __('¡Te esperamos! ¡Visítanos!') }}
        </p>
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
