<x-app-layout>
    <x-slot name="header">
        <div style="margin-top:110px;">
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight"
                style="font-size:60px; color:#568c2c; letter-spacing: 3px; font-weight:lighter; font-family: 'Alfa Slab One', serif;">
                {{ __('¿QUIÉNES SOMOS?') }}
            </h2>
        </div>
    </x-slot>

    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Grandstander:wght@800&display=swap"
    rel="stylesheet">

    <br>
    <div class="container px-12 py-8 mx-auto bg-white" style="margin-bottom:300px;">
        <h2 class="text-center" style="font-size:22px; font-weight:bold; font-family: 'Acme', sans-serif;">
            {{ __('PIZZERÍA BRENDA: ARTESANAL Y NATURAL') }}</h2>
        <br>
        <p style="font-size:20px;">
            {{ __('Pizzería Brenda es un negocio familiar que fundamos dos hermanos: Manuel y Federico Lorenzo Mellado en el año 1986, siendo la primera pizzería que se inauguró en Chipiona.') }}<br><br>
            {{ __('Comenzamos este negocio en un pequeño local familiar con mucha ilusión, pero también con mucha incertidumbre, ya que éramos muy jóvenes, y teníamos la idea de introducir en nuestro pueblo la pizza. Un producto totalmente novedoso y desconocido en nuestra localidad en aquellos años.') }}
        </p>
        <br>
        <div style="display:flex; justify-content:center; flex-wrap:wrap; align-items:center;" class="img_container">
            <a href="#" class="alb" title="Imagen 1"><img src="{{ asset('img/waw1.png') }}" alt="waw1"
                    class="img_ensi" loading="lazy" style="height:400px;"></a>
        </div>
        <br>
        <p style="font-size:20px;">
            {{ __('Ya desde entonces, y hasta hoy, el lema de nuestro negocio siempre ha sido la innovación. Nuestra empresa fue la primera en ofrecer el servicio a domicilio y el autoservicio en el local, lo que nos proporcionó agilidad y rapidez en el servicio.') }}<br>
            {{ __('Nuestra especialidad son las pizzas totalmente artesanales, con masa de elaboración propia, y con ingredientes naturales de la mayor calidad. Nos preocupa mucho ofrecer a nuestros clientes un producto totalmente natural, artesanal y de calidad.') }}<br><br>
            {{ __('Esto es precisamente lo que más valoran nuestros clientes, y gracias a su aceptación y fidelidad, hemos podido ir agrandando y modernizando nuestro negocio, acorde a sus demandas.') }}
        </p>
        <br>
        <div style="display:flex; justify-content:center; flex-wrap:wrap; align-items:center;" class="img_container">
            <a href="#" class="alb" title="Imagen 2"><img src="{{ asset('img/waw2.png') }}" alt="waw2"
                    class="img_ensi" loading="lazy" style="height:400px;"></a>
            <a href="#" class="alb" title="Imagen 3"><img src="{{ asset('img/waw3.png') }}" alt="waw3"
                    class="img_ensi" loading="lazy" style="height:400px;"></a>
        </div>
        <br>
        <p style="font-size:20px;">
            {{ __('En nuestro local, además de la pizza, se puede degustar pasta italiana, arroces, ensalada, platos variados, baguettes y un servicio de burgers. Todo con la mejor relación calidad-precio de la zona.') }}<br><br>
            {{ __('La Pizzería Brenda está ubicada en el centro de Chipiona, y disponemos de una amplia terraza donde nuestros clientes pueden disfrutar de un buen ambiente y de un trato agradable por parte de nuestro joven y atento personal.') }}<br>
            {{ __('Nuestro equipo está compuesto por un grupo de jóvenes que aportan dinamismo, frescura y nuevas ideas para renovar los platos, por lo que continuamente se ofrecen novedades y promociones en la carta.') }}
        </p>
        <br>
        <div style="display:flex; justify-content:center; flex-wrap:wrap; align-items:center;" class="img_container">
            <a href="#" class="alb" title="Imagen 4"><img src="{{ asset('img/waw4.png') }}" alt="waw4"
                    class="img_ensi" loading="lazy" style="height:300px;"></a>
            <a href="#" class="alb" title="Imagen 5"><img src="{{ asset('img/waw5.png') }}" alt="waw5"
                    class="img_ensi" loading="lazy" style="height:300px;"></a>
        </div>
        <br>
        <p style="font-size:20px;">
            {{ __('También disponemos de servicio a domicilio para que puedas disfrutar de nuestros platos sin moverte de casa.') }}<br><br>
            {{ __('¡Te esperamos! ¡Visítanos!') }}
        </p>
        <div class="lightbox">
            <button class="cerrar" id="boton">{{ __('Cerrar') }}</button>
            <img src="{{ asset('img/blank.png') }}" alt="Imagen grande" class="grande" loading="lazy">
        </div>
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
                <div>
                    <a class="anavbar" href="{{ route('whoarewe') }}"
                        style="font-size:12px;">{{ __('¿Quiénes somos?') }}</a>
                    <div style="background-color:#f12d2d; height:3px; border-radius:10px;">
                        <br>
                    </div>
                </div>
                <a class="anavbar" href="{{ route('faq') }}"
                    style="font-size:12px;">{{ __('Preguntas frecuentes') }}</a>
                <a class="anavbar" href="{{ route('contact') }}" style="font-size:12px;">{{ __('Contáctanos') }}</a>
                <a class="anavbar" href="{{ route('privacy') }}"
                    style="font-size:12px;">{{ __('Política de privacidad') }}</a>
                <a class="anavbar" href="{{ route('premios') }}" style="font-size:12px;">{{ __('Premios') }}</a>
            </div>
            <div style="margin-left:auto; display:flex;">
                <a href="https://twitter.com/BRENDAPIZZA" target="__blank"><img src="{{ asset('img/twit.png') }}"
                        width="25px" height="25px" style="margin-right:20px;" class="redes_sociales"></a>
                <a href="https://www.instagram.com/pizzeriabrenda/?hl=es" target="__blank"><img
                        src="{{ asset('img/inst.png') }}" width="25px" height="25px" style="margin-right:20px;"
                        class="redes_sociales"></a>
                <a href="https://www.tiktok.com/@pizzeriabrenda1986?lang=es" target="__blank"><img
                        src="{{ asset('img/tik.png') }}" width="25px" height="25px" style="margin-right:20px;"
                        class="redes_sociales"></a>
                <a href="https://www.facebook.com/pizzeriabrenda/?locale=es_ES" target="__blank"><img
                        src="{{ asset('img/face.png') }}" width="25px" height="25px" style="margin-right:20px;"
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

    @vite(['resources/scss/app.scss'])

    <script src="{{ asset('js/whoareweAnon.js') }}"></script>

</x-app-layout>
