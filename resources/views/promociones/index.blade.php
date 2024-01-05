<x-app-layout>
    <x-slot name="header">
        <div style="margin-top:110px;">
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight"
                style="font-size:50px; color:#568c2c; letter-spacing: 3px; font-weight:lighter; font-family: 'Alfa Slab One', serif;">
                {{ __('PROMOCIONES Y OFERTAS') }}
            </h2>
        </div>
    </x-slot>
    <link rel="stylesheet" href="/css/promociones.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
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
    <div
        style="background-color:white; padding:30px; margin-top:30px; display:flex; justify-content:center; align-items:center; gap:5vw; flex-wrap:wrap;">
        <a href="#promociones_lista" id="boton">
            <div style="background-color:white; border-radius:15px; padding:20px; font-weight:bolder; font-family: 'Alfa Slab One', serif; color:#141414; font-size:40px;">PROMOCIONES</div>
        </a>
        <a href="#ofertas_lista" id="boton">
            <div style="background-color:white; border-radius:15px; padding:20px; font-weight:bolder; font-family: 'Alfa Slab One', serif;color:#141414; font-size:40px;">OFERTAS</div>
        </a>
    </div>
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 bg-white"
        style="flex-wrap:wrap; align-items:center; text-align:center; padding:30px;" id="promociones_lista">
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
                            <button class="px-4 py-1.5 text-white text-sm rounded acercar"
                                style="background-color:#568c2c;">{{ __('APLICAR') }}</button>
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
        <div style="text-align:center; font-size:30px; font-weight:bolder;" id="ofertas_lista">
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
                                <button class="px-4 py-1.5 text-white text-sm rounded acercar"
                                    style="background-color:#568c2c;">{{ __('APLICAR') }}</button>
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
                <a class="anavbar" href="{{ route('contact') }}"
                    style="font-size:12px;">{{ __('Contáctanos') }}</a>
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

    <script>
        if (localStorage.promociones) {
            localStorage.removeItem("promociones");
        }
    </script>

</x-app-layout>
