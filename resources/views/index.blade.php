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
