<x-app-layout>
    <x-slot name="header">
        <div style="margin-top:110px;">
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight"
                style="font-size:50px; color:#568c2c; letter-spacing: 3px; font-weight:lighter; font-family: 'Alfa Slab One', serif;">
                {{ __('PREGUNTAS FRECUENTES') }}
            </h2>
        </div>
    </x-slot>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Grandstander:wght@800&display=swap"
    rel="stylesheet">
    <br>
    <div class="container px-12 py-8 mx-auto bg-white" style="margin-bottom:300px;">
        <p style="font-weight: bolder; font-size:22px; font-family: 'Acme', sans-serif;">{{ __('¿La pizzería abre por la mañana?') }}</p><br>
        <p style="font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('La pizzería abre los domingos por la mañana desde el 1 de octubre al 30 de mayo.') }}
        </p>
        <br><br>
        <p style="font-weight: bolder; font-size:22px; font-family: 'Acme', sans-serif;">{{ __('¿Hay servicio a domicilio fuera de Chipiona?') }}</p><br>
        <p style="font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('No, sólo ofrecemos nuestro servicio dentro del término municipal.') }}
        </p>
        <br><br>
        <p style="font-weight: bolder; font-size:22px; font-family: 'Acme', sans-serif;">{{ __('¿Qué horario tiene la pizzería?') }}</p><br>
        <p style="font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('De lunes a domingo de 20:30 a 23:30.') }}</p>
        <br><br>
        <p style="font-weight: bolder; font-size:22px; font-family: 'Acme', sans-serif;">{{ __('¿Se puede aparcar cerca?') }}</p><br>
        <p style="font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Hay un aparcamiento a 500 m.') }}</p>
        <br><br>
        <p style="font-weight: bolder; font-size:22px; font-family: 'Acme', sans-serif;">{{ __('¿Hay pizza para celíacos?') }}</p><br>
        <p style="font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Tenemos una base de pizza sin gluten especialmente elaborada para celíacos a la que se le puede añadir los ingredientes que desees. Además, en la carta se puede consultar los alérgenos de cada ingrediente.') }}
        </p>
        <br><br>
        <p style="font-weight: bolder; font-size:22px; font-family: 'Acme', sans-serif;">{{ __('¿Los camareros sirven en la mesa?') }}</p><br>
        <p style="font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('No, la pizzería es autoservicio, pero los camareros te ayudarán en todo lo que necesites.') }}
        </p>
        <br><br>
        <p style="font-weight: bolder; font-size:22px; font-family: 'Acme', sans-serif;">{{ __('¿Qué tamaños de pizzas hay?') }}</p><br>
        <p style="font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Tenemos una pizza grande para 4 personas y otra pequeña para 2 personas aprox.') }}
        </p>
        <br><br>
        <p style="font-weight: bolder; font-size:22px; font-family: 'Acme', sans-serif;">{{ __('¿Cuánto cuesta el servicio a domicilio?') }}</p><br>
        <p style="font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ __('2 € adicionales al pedido que se realice.') }}</p>
        <br><br>
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
                <div>
                    <a class="anavbar" href="{{ route('faq') }}"
                        style="font-size:12px;">{{ __('Preguntas frecuentes') }}</a>
                    <div style="background-color:#f12d2d; height:3px; border-radius:10px;">
                        <br>
                    </div>
                </div>
                <a class="anavbar" href="{{ route('contact') }}" style="font-size:12px;">{{ __('Contáctanos') }}</a>
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

</x-app-layout>
