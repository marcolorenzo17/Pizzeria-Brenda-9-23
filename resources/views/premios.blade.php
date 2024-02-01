<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.js"></script>

<x-app-layout>
    <x-slot name="header">
        <div style="margin-top:110px;">
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight"
                style="font-size:60px; color:#568c2c; letter-spacing: 3px; font-weight:lighter; font-family: 'Alfa Slab One', serif;">
                {{ __('PREMIOS') }}
            </h2>
        </div>
    </x-slot>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
        style="display:flex; flex-wrap:wrap; align-items:center; margin-bottom:300px; background-color:white; padding:30px;">
        <div class="w-full max-w-sm mx-auto bg-white rounded-md">
            <img src="{{ asset('img/premio1.jpg') }}" alt="..." width="150px" height="150px"
                class="mx-auto premio1">
        </div>
        <div class="w-full max-w-sm mx-auto bg-white rounded-md">
            <img src="{{ asset('img/premio2.jpg') }}" alt="..." width="150px" height="150px"
                class="mx-auto premio2">
        </div>
        <div class="w-full max-w-sm mx-auto bg-white rounded-md">
            <img src="{{ asset('img/premio3.jpg') }}" alt="..." width="150px" height="150px"
                class="mx-auto premio3">
        </div>
        <div class="w-full max-w-sm mx-auto bg-white rounded-md">
            <img src="{{ asset('img/premio4.jpg') }}" alt="..." width="150px" height="150px"
                class="mx-auto premio4">
        </div>
        <div class="w-full max-w-sm mx-auto bg-white rounded-md">
            <img src="{{ asset('img/premio5.png') }}" alt="..." width="150px" height="150px"
                class="mx-auto premio5">
        </div>
        <div class="w-full max-w-sm mx-auto bg-white rounded-md">
            <img src="{{ asset('img/premio6.jpg') }}" alt="..." width="150px" height="150px"
                class="mx-auto premio6">
        </div>
        <div class="w-full max-w-sm mx-auto bg-white rounded-md">
            <img src="{{ asset('img/premio7.png') }}" alt="..." width="150px" height="150px"
                class="mx-auto premio7">
        </div>
        <div class="w-full max-w-sm mx-auto bg-white rounded-md">
            <img src="{{ asset('img/premio8.jpg') }}" alt="..." width="150px" height="150px"
                class="mx-auto premio8">
        </div>
        <div class="w-full max-w-sm mx-auto bg-white rounded-md">
            <img src="{{ asset('img/premio9.jpg') }}" alt="..." width="150px" height="150px"
                class="mx-auto premio9">
        </div>
    </div>

    <script>
        anime({
            targets: '.premio1',
            scale: 1.2,
            duration: 723,
            delay: 500,
            direction: 'alternate'
        });

        anime({
            targets: '.premio2',
            scale: 1.2,
            duration: 723,
            delay: 600,
            direction: 'alternate'
        });

        anime({
            targets: '.premio3',
            scale: 1.2,
            duration: 723,
            delay: 700,
            direction: 'alternate'
        });

        anime({
            targets: '.premio4',
            scale: 1.2,
            duration: 723,
            delay: 800,
            direction: 'alternate'
        });

        anime({
            targets: '.premio5',
            scale: 1.2,
            duration: 723,
            delay: 900,
            direction: 'alternate'
        });

        anime({
            targets: '.premio6',
            scale: 1.2,
            duration: 723,
            delay: 1000,
            direction: 'alternate'
        });

        anime({
            targets: '.premio7',
            scale: 1.2,
            duration: 723,
            delay: 1100,
            direction: 'alternate'
        });

        anime({
            targets: '.premio8',
            scale: 1.2,
            duration: 723,
            delay: 1200,
            direction: 'alternate'
        });

        anime({
            targets: '.premio9',
            scale: 1.2,
            duration: 723,
            delay: 1300,
            direction: 'alternate'
        });
    </script>

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
                <a class="anavbar" href="{{ route('contact') }}" style="font-size:12px;">{{ __('Contáctanos') }}</a>
                <a class="anavbar" href="{{ route('privacy') }}"
                    style="font-size:12px;">{{ __('Política de privacidad') }}</a>
                <div>
                    <a class="anavbar" href="{{ route('premios') }}" style="font-size:12px;">{{ __('Premios') }}</a>
                    <div style="background-color:#f12d2d; height:3px; border-radius:10px;">
                        <br>
                    </div>
                </div>
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
