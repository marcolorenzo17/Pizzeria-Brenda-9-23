<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('PROMOCIONES') }}
        </h2>
        <br><br>
        <div>
            @include('partials/language_switcher')
        </div>
    </x-slot>
    <link rel="stylesheet" href="/css/promociones.css" />
    <br>
    <div class="bg-white" style="text-align:center;">
        <br>
        <img src="img/pizzacoin.png" alt="coin" style="margin-left:auto; margin-right:auto;" width="100px"
            height="100px">
        <br>
        {{ __('¿QUÉ SON LAS PIZZACOINS?') }}
    </div>
    <div class="bg-white" style="text-align:center;">
        <br>
        {{ __('Las pizzacoins son la moneda exclusiva de la Pizzería Brenda.') }}
        <br>
        {{ __('Puedes usar estas monedas para canjearlas por promociones especiales.') }}
        <br>
        {{ __('Cada vez que realices un pedido de cualquier menú o producto en la página web, obtendrás Pizzacoins. Por cada céntimo que gastes, recibirás 1 Pizzacoin.') }}
        <br>
        {{ __('¡Acumula esas Pizzacoins y píllate un menú gratis!') }}
    </div>
    <br>
    <div class="bg-white" style="text-align:center;">
        {{ __('ACUMULA PIZZACOINS PARA CANJEARLAS POR PROMOCIONES') }}
    </div>
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
                            <div style="background: rgba(0, 0, 0, 0.5);">
                                <img src="{{ asset($promotion->image) }}" alt="submit"
                                    class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md" width="422"
                                    height="600"
                                    style="border-color:black; border-style:solid; border-width:5px; border-radius:30px;">
                            </div>
                        @endif
                        <br><br>
                        <div style="font-size:20px; font-weight:bold;">{{ $promotion->name }}</div>
                        <?php
                        $alergenoslista = explode('-', $promotion->alergenos);
                        ?>
                        <div style="display:flex; flex-wrap:wrap;">
                            @if ($promotion->alergenos != '')
                                @foreach ($alergenoslista as $alergeno)
                                    <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}" width="40px"
                                        height="40px">
                                @endforeach
                            @endif
                        </div>
                        @if ($promotion->puntos)
                            <div class="-mr-2 flex items-center" style="font-size:20px;"><img
                                    src="{{ asset('img/pizzacoin.png') }}" alt="coin"> {{ $promotion->puntos }}
                            </div>
                        @else
                            <div class="-mr-2 flex items-center" style="font-size:20px;"><img
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
    <div class="bg-white" style="text-align:center;">
        {{ __('OFERTAS') }}
    </div>
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 bg-white"
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
                            <div style="background: rgba(0, 0, 0, 0.5);">
                                <img src="{{ asset($promotion->image) }}" alt="submit"
                                    class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md"
                                    width="422" height="600"
                                    style="border-color:black; border-style:solid; border-width:5px; border-radius:30px;">
                            </div>
                        @endif
                        <br><br>
                        <div class="text-center" style="font-size:20px; font-weight:bold;">{{ $promotion->name }}
                        </div>
                        <?php
                        $alergenoslista = explode('-', $promotion->alergenos);
                        ?>
                        <div style="display:flex; flex-wrap:wrap;">
                            @if ($promotion->alergenos != '')
                                @foreach ($alergenoslista as $alergeno)
                                    <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                        width="40px" height="40px">
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

    <br><br><br><br>

    <footer
        class="fixed bottom-0 left-0 z-20 w-full p-4 border-t border-gray-300 shadow md:flex md:items-center md:justify-between md:p-6"
        style="background-color:white;">
        <span
            class="text-sm text-gray-500 sm:text-center">{{ __('© 2023 Pizzería Brenda™. Todos los derechos reservados.') }}
        </span>
        <ul class="hidden flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0 sm:flex">
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
                <a href="{{ route('contact') }}"
                    class="mr-4 hover:underline md:mr-6">{{ __('Política de privacidad') }}</a>
            </li>
        </ul>
    </footer>

</x-app-layout>
