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
        style="background-color:white; padding:50px; margin-bottom:300px;">
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md">
            <img src="{{ asset('img/premio1.jpg') }}" alt="..." width="150px" height="150px" class="mx-auto">
        </div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md">
            <img src="{{ asset('img/premio2.jpg') }}" alt="..." width="150px" height="150px" class="mx-auto">
        </div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md">
            <img src="{{ asset('img/premio3.jpg') }}" alt="..." width="150px" height="150px" class="mx-auto">
        </div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md">
            <img src="{{ asset('img/premio4.jpg') }}" alt="..." width="150px" height="150px" class="mx-auto">
        </div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md">
            <img src="{{ asset('img/premio5.png') }}" alt="..." width="150px" height="150px" class="mx-auto">
        </div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md">
            <img src="{{ asset('img/premio6.jpg') }}" alt="..." width="150px" height="150px" class="mx-auto">
        </div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md">
            <img src="{{ asset('img/premio7.png') }}" alt="..." width="150px" height="150px" class="mx-auto">
        </div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md">
            <img src="{{ asset('img/premio8.jpg') }}" alt="..." width="150px" height="150px" class="mx-auto">
        </div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md">
            <img src="{{ asset('img/premio9.jpg') }}" alt="..." width="150px" height="150px" class="mx-auto">
        </div>
    </div>
    <div class="footer">
        <div style="text-align:center;">
            <p>{{ __('© 2023 Pizzería Brenda™. Todos los derechos reservados.') }}</p>
        </div>
        <div style="display:flex; flex-wrap:wrap; justify-content:center; align-items:center;">
            <div style="display:flex; gap: 5px; align-items:center;">
                <p style="font-size:22px; color:#568c2c; font-weight:bolder; text-transform:uppercase;">
                    {{ __('Teléfonos: ') }}
                </p>
                <div style="font-size:18px; font-weight:bolder;">
                    <p>956 37 11 15 | 956 37 47 36 | 627 650 605</p>
                </div>
            </div>
            <div style="margin-left:auto; display:flex; gap:30px; text-align:center;">
                <a class="anavbar" href="{{ route('whoarewe') }}"
                    style="font-size:13px;">{{ __('¿Quiénes somos?') }}</a>
                <a class="anavbar" href="{{ route('faq') }}"
                    style="font-size:13px;">{{ __('Preguntas frecuentes') }}</a>
                <a class="anavbar" href="{{ route('contact') }}" style="font-size:13px;">{{ __('Contáctanos') }}</a>
                <a class="anavbar" href="{{ route('privacy') }}"
                    style="font-size:13px;">{{ __('Política de privacidad') }}</a>
                <a class="anavbar" href="{{ route('premios') }}" style="font-size:13px;">{{ __('Premios') }}</a>
            </div>
            <div style="margin-left:auto; display:flex;">
                <a href="https://twitter.com/BRENDAPIZZA" target="__blank"><img src="{{ asset('img/twit.png') }}"
                        width="30px" height="30px" style="margin-right:20px;" class="redes_sociales"></a>
                <a href="https://www.instagram.com/pizzeriabrenda/?hl=es" target="__blank"><img
                        src="{{ asset('img/inst.png') }}" width="30px" height="30px" style="margin-right:20px;"
                        class="redes_sociales"></a>
                <a href="https://www.tiktok.com/@pizzeriabrenda1986?lang=es" target="__blank"><img
                        src="{{ asset('img/tik.png') }}" width="30px" height="30px" style="margin-right:20px;"
                        class="redes_sociales"></a>
                <a href="https://www.facebook.com/pizzeriabrenda/?locale=es_ES" target="__blank"><img
                        src="{{ asset('img/face.png') }}" width="30px" height="30px" style="margin-right:20px;"
                        class="redes_sociales"></a>
            </div>
            <div style="display:flex; gap: 5px; margin-left:auto; align-items:center;">
                <p style="font-size:22px; color:#568c2c; font-weight:bolder; text-transform:uppercase;">
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
