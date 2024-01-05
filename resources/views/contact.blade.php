<x-app-layout>
    <x-slot name="header">
        <div style="margin-top:110px;">
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight"
                style="font-size:60px; color:#568c2c; letter-spacing: 3px; font-weight:lighter; font-family: 'Alfa Slab One', serif;">
                {{ __('CONTACTA CON PIZZERÍA BRENDA') }}
            </h2>
        </div>
    </x-slot>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/index.css" />
    <br>
    <div class="container px-12 py-8 mx-auto bg-white" style="margin-bottom:300px;">
        <br>
        <h3 style="font-weight: bolder;">{{ __('TELÉFONOS') }}</h3>
        <br>
        <div style="display:flex; justify-content:center; align-items:center; gap:8vw; flex-wrap:wrap;">
            <div>
                <p>956 37 11 15</p>
                <p>956 37 47 36</p>
                <p>627 650 605</p>
            </div>
            <div>
                <p>{{ __('Puedes hacer tu pedido por teléfono') }}</p>
            </div>
        </div>
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
            <div>
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.3853338265453!2d-6.438643323699105!3d36.73732087124086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0e7509d89e347d%3A0xb24751265b25b2b1!2sPizzer%C3%ADa%20Brenda!5e0!3m2!1ses!2ses!4v1698173518792!5m2!1ses!2ses"
                style="border:5px solid gray; border-radius:10px; margin-left:auto; margin-right:auto;"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="mapa_contact"></iframe>
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
                    <a class="anavbar" href="{{ route('faq') }}"
                        style="font-size:12px;">{{ __('Preguntas frecuentes') }}</a>
                    <div>
                        <a class="anavbar" href="{{ route('contact') }}"
                            style="font-size:12px;">{{ __('Contáctanos') }}</a>
                        <div style="background-color:#f12d2d; height:3px; border-radius:10px;">
                            <br>
                        </div>
                    </div>
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

</x-app-layout>
