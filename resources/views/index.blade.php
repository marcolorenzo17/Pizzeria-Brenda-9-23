<link rel="stylesheet" href="/css/index.css" />
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('PIZZERÍA BRENDA') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="logo_div">
                        <img src="{{ asset('img/logo.png') }}" alt="pizzeria_brenda" class="logo">
                    </div>
                    {{ __('PLATOS') }}
                    <br>
                    @foreach ($platos as $plato)
                        <br>
                        <img src="{{ asset($plato->foto) }}" alt="foto">
                        <br>
                        <p>{{ $plato->nombre_plato }}</p>
                        <p>{{ $plato->id }}</p>
                        <p>{{ $plato->disponibilidad }}</p>
                        <br>
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $plato->id }}" name="id">
                            <input type="hidden" value="{{ $plato->nombre_plato }}" name="nombre_plato">
                            <input type="hidden" value="{{ $plato->precio }}" name="precio">
                            <input type="hidden" value="{{ $plato->foto }}" name="foto">
                            <input type="hidden" value="1" name="cantidad">
                            <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">Add To Cart</button>
                        </form>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br>
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
                        width="30px" height="30px" style="margin-right:20px;"></a>
                <a href="https://www.instagram.com/pizzeriabrenda/?hl=es" target="__blank"><img
                        src="{{ asset('img/inst.png') }}" width="30px" height="30px" style="margin-right:20px;"></a>
                <a href="https://www.tiktok.com/@pizzeriabrenda1986?lang=es" target="__blank"><img
                        src="{{ asset('img/tik.png') }}" width="30px" height="30px" style="margin-right:20px;"></a>
                <a href="https://www.facebook.com/pizzeriabrenda/?locale=es_ES" target="__blank"><img
                        src="{{ asset('img/face.png') }}" width="30px" height="30px" style="margin-right:20px;"></a>
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
    </style>

</x-app-layout>
