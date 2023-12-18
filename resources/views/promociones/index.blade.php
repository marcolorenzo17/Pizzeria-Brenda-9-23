<x-app-layout>
    <x-slot name="header">
        <div
            style="background-image:url('img/backgroundpizzasmall.png'); margin-top:50px; padding-bottom:20px; border-radius:30px;">
            <br><br><br>
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight"
                style="font-size:60px; font-family: 'Anton', sans-serif; color:red; text-shadow: 2px 2px 4px #000000; letter-spacing: 3px; font-weight:lighter; -webkit-text-stroke: 2px white;">
                {{ __('PROMOCIONES') }}
            </h2>
            <br><br>
        </div>
    </x-slot>
    <link rel="stylesheet" href="/css/promociones.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <br>
    <div style="padding:30px; background-color:white;">
        <div style="text-align:center;">
            <img src="img/pizzacoin.png" alt="coin" style="margin-left:auto; margin-right:auto;" width="100px"
                height="100px">
            <br>
            <p style="font-weight:bold;">{{ __('¿QUÉ SON LAS PIZZACOINS?') }}</p>
        </div>
        <div class="bg-white" style="text-align:center;">
            <br>
            {{ __('Las pizzacoins son la moneda exclusiva de la Pizzería Brenda.') }}
            <br>
            {{ __('Puedes usar estas monedas para canjearlas por promociones especiales.') }}
            <br>
            {{ __('Cada vez que realices un pedido de cualquier menú o producto en la página web, obtendrás Pizzacoins. Por cada € que gastes, recibirás 10 Pizzacoins.') }}
            <br>
            {{ __('¡Acumula esas Pizzacoins y píllate un menú gratis!') }}
        </div>
        <br>
        <div style="text-align:center; font-weight:bolder;">
            {{ __('ACUMULA PIZZACOINS PARA CANJEARLAS POR PROMOCIONES') }}
        </div>
    </div>
    <br>
    <img src="{{ asset('img/alergenos.jpg') }}" alt="" width="350px" height="350px" class="max-h-60 mx-auto"
        style="border:3px solid gray; border-radius:10px;">
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 bg-white"
        style="flex-wrap:wrap; align-items:center; text-align:center; padding:30px;">
        @foreach ($promotions as $promotion)
            @if ($promotion->habilitado and $promotion->type == 'Promoción')
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="text-center">
                        @csrf
                        <input type="hidden" value="{{ $promotion->id }}" name="id">
                        <input type="hidden" value="{{ $promotion->name }}" name="name">
                        <input type="hidden" value="{{ $promotion->price }}" name="price">
                        <input type="hidden" value="{{ $promotion->puntos }}" name="puntos">
                        <input type="hidden" value="{{ $promotion->type }}" name="type">
                        <input type="hidden" value="{{ $promotion->image }}" name="image">
                        <input type="hidden" value="1" name="quantity">
                        @if (Auth::user()->puntos >= $promotion->puntos)
                            <img src="{{ asset($promotion->image) }}" alt="submit"
                                class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
                                width="422" height="600"
                                style="border-color:black; border-style:solid; border-width:5px; border-radius:30px;">
                            <br>
                            <button
                                class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded acercar">{{ __('APLICAR') }}</button>
                        @else
                            <div>
                                <img src="{{ asset($promotion->image) }}" alt="submit"
                                    class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md" width="422"
                                    height="600"
                                    style="border-color:black; border-style:solid; border-width:5px; border-radius:30px; filter:brightness(50%);">
                            </div>
                        @endif
                        <br><br>
                        <div style="font-size:20px; font-weight:bold;">{{ $promotion->name }}</div>
                        <?php
                        $alergenoslista = explode('-', $promotion->alergenos);
                        ?>
                        <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:5px;">
                            @if ($promotion->alergenos != '')
                                @foreach ($alergenoslista as $alergeno)
                                    <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}" width="30px"
                                        height="30px">
                                @endforeach
                            @endif
                        </div>
                        @if ($promotion->puntos)
                            <div class="-mr-2 flex items-center" style="font-size:20px; justify-content:center;"><img
                                    src="{{ asset('img/pizzacoin.png') }}" alt="coin"> {{ $promotion->puntos }}
                            </div>
                        @else
                            <div class="-mr-2 flex items-center" style="font-size:20px; justify-content:center;"><img
                                    src="{{ asset('img/pizzacoin.png') }}" alt="coin">0</div>
                    </div>
            @endif
            <br><br>
    </div>
    </form>
    @endif
    @endforeach
    </div>
    <br>
    <div style="background-color:white; margin-bottom:300px;">
        <br>
        <div style="text-align:center; font-size:30px; font-weight:bolder;">
            {{ __('OFERTAS') }}
        </div>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
            style="flex-wrap:wrap; align-items:center; text-align:center; padding:30px;">
            @foreach ($promotions as $promotion)
                @if ($promotion->habilitado and $promotion->type == 'Oferta')
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="text-center">
                            @csrf
                            <input type="hidden" value="{{ $promotion->id }}" name="id">
                            <input type="hidden" value="{{ $promotion->name }}" name="name">
                            <input type="hidden" value="{{ $promotion->price }}" name="price">
                            <input type="hidden" value="{{ $promotion->puntos }}" name="puntos">
                            <input type="hidden" value="{{ $promotion->type }}" name="type">
                            <input type="hidden" value="{{ $promotion->image }}" name="image">
                            <input type="hidden" value="1" name="quantity">
                            @if (Auth::user()->puntos >= $promotion->puntos)
                                <img src="{{ asset($promotion->image) }}" alt="submit"
                                    class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
                                    width="422" height="600"
                                    style="border-color:black; border-style:solid; border-width:5px; border-radius:30px;">
                                <br>
                                <button
                                    class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded acercar">{{ __('APLICAR') }}</button>
                            @else
                                <div>
                                    <img src="{{ asset($promotion->image) }}" alt="submit"
                                        class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md"
                                        width="422" height="600"
                                        style="border-color:black; border-style:solid; border-width:5px; border-radius:30px; filter:brightness(50%);">
                                </div>
                            @endif
                            <br><br>
                            <div class="text-center" style="font-size:20px; font-weight:bold;">{{ $promotion->name }}
                            </div>
                            <?php
                            $alergenoslista = explode('-', $promotion->alergenos);
                            ?>
                            <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:5px;">
                                @if ($promotion->alergenos != '')
                                    @foreach ($alergenoslista as $alergeno)
                                        <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                            width="30px" height="30px">
                                    @endforeach
                                @endif
                            </div>
                            <div class="text-center" style="font-size:20px;">
                                {{ number_format($promotion->price, 2, '.', '') }} €
                            </div>
                            <br><br>
                        </div>
                    </form>
                @endif
            @endforeach
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
                    <a href="{{ route('contact') }}"
                        class="mr-4 hover:underline md:mr-6">{{ __('Contáctanos') }}</a>
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
                        src="{{ asset('img/inst.png') }}" width="30px" height="30px"
                        style="margin-right:20px;"></a>
                <a href="https://www.tiktok.com/@pizzeriabrenda1986?lang=es" target="__blank"><img
                        src="{{ asset('img/tik.png') }}" width="30px" height="30px"
                        style="margin-right:20px;"></a>
                <a href="https://www.facebook.com/pizzeriabrenda/?locale=es_ES" target="__blank"><img
                        src="{{ asset('img/face.png') }}" width="30px" height="30px"
                        style="margin-right:20px;"></a>
            </div>
        </div>
    </footer>

    <script>
        if (localStorage.promociones) {
            localStorage.removeItem("promociones");
        }
    </script>

</x-app-layout>
