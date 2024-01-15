<?php
use App\Http\Controllers\ProductController;
?>
<x-app-layout>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <x-slot name="header">
        <div style="margin-top:110px; justify-content:center; align-items:center; gap:5vw;" id="titular-grande">
            @if (!Auth::user()->admin)
                @include('products.partials.search-box')
            @endif
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight"
                style="font-size:60px; color:#568c2c; letter-spacing: 3px; font-weight:lighter; font-family: 'Alfa Slab One', serif;">
                {{ __('NUESTRO MENÚ') }}
            </h2>
            {{--
            <br>
            <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">AÑADIR PRODUCTO</a>
        --}}
        </div>
        <div style="margin-top:110px;" id="titular-pequenio">
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight"
                style="font-size:60px; color:#568c2c; letter-spacing: 3px; font-weight:lighter; font-family: 'Alfa Slab One', serif;">
                {{ __('NUESTRO MENÚ') }}
            </h2>
            @if (!Auth::user()->admin)
                @include('products.partials.search-box')
            @endif
            {{--
            <br>
            <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">AÑADIR PRODUCTO</a>
        --}}
        </div>
    </x-slot>
    <link rel="stylesheet" href="/css/index_products.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Grandstander:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Grandstander:wght@800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <?php
    if (Cart::getTotalQuantity() == 0) {
        echo ProductController::devolver();
    }
    ?>
    @if (Auth::user()->admin)
        <br>
        <p class="text-center" style="font-weight:bolder;">{{ __('LISTA PARA ADMINISTRADORES') }}</p>
        <br>
        <div style="margin-left:20px;">
            <a href="{{ route('products.crear') }}" class="text-white px-4 py-2 rounded-md" id="boton"
                style="background-color:#568c2c;">{{ __('CREAR PLATO') }}</a>
        </div>
        <br>
        <div style="background:white; margin-bottom:300px;">
            <table style="width:100%;">
                @foreach ($products as $product)
                    <tr>
                        <td>
                            <div style="margin:20px; display:flex; gap:20px;">
                                <img src="{{ $product->image }}" alt="..."
                                    style="height:120px; width:120px; border: 2px solid gray; border-radius:10px;">
                                <div>
                                    <p>{{ __($product->type) }}</p>
                                    @if (Lang::locale() == 'es')
                                        <p>{{ $product->name }}</p>
                                    @else
                                        <p>{{ $product->nameen }}</p>
                                    @endif
                                    <p>{{ $product->description }}</p>
                                    <br>
                                    <p>{{ number_format($product->price, 2, '.', '') }} €</p>
                                    @if ($product->puntos == 0 or !$product->puntos)
                                        <p></p>
                                    @else
                                        <p>{{ $product->puntos }} Pizzacoins</p>
                                    @endif
                                </div>
                                <table style="margin-left:auto; margin-right:0;" id="productos-grande">
                                    <tr>
                                        <td>
                                            @if ($product->habilitado)
                                                <form method="post"
                                                    action="{{ route('products.deshabilitar', $product->id) }}">
                                                    @csrf
                                                    <button
                                                        class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('DESHABILITAR') }}</button>
                                                </form>
                                            @else
                                                <form method="post"
                                                    action="{{ route('products.habilitar', $product->id) }}">
                                                    @csrf
                                                    <button
                                                        class="border border-blue-500 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-md">{{ __('HABILITAR') }}</button>
                                                </form>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('products.editar', $product) }}"
                                                class="text-white px-4 py-2 rounded-md" id="boton"
                                                style="background-color:#568c2c;">{{ __('EDITAR') }}</a>
                                        </td>
                                        <td>
                                            <form method="post" action="{{ route('products.destroy', $product->id) }}"
                                                onclick="return confirm('¿Estás seguro de que quieres eliminar este plato?')">
                                                @csrf
                                                @method('delete')
                                                <button
                                                    class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('BORRAR') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                                <table style="margin-left:auto; margin-right:0;" id="productos-pequenio">
                                    <tr>
                                        <td style="padding:5px">
                                            @if ($product->habilitado)
                                                <form method="post"
                                                    action="{{ route('products.deshabilitar', $product->id) }}">
                                                    @csrf
                                                    <button
                                                        class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('DESHABILITAR') }}</button>
                                                </form>
                                            @else
                                                <form method="post"
                                                    action="{{ route('products.habilitar', $product->id) }}">
                                                    @csrf
                                                    <button
                                                        class="border border-blue-500 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-md">{{ __('HABILITAR') }}</button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding:5px">
                                            <a href="{{ route('products.editar', $product) }}"
                                                class="text-white px-4 py-2 rounded-md" id="boton"
                                                style="background-color:#568c2c;">{{ __('EDITAR') }}</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding:5px">
                                            <form method="post" action="{{ route('products.destroy', $product->id) }}"
                                                onclick="return confirm('¿Estás seguro de que quieres eliminar este plato?')">
                                                @csrf
                                                @method('delete')
                                                <button
                                                    class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('BORRAR') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    @else
        {{--
        <script src="{{ asset('js/pruebatexto-2.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#anim').on('click', function(event) {
                    event.preventDefault();
                    alert("{{__('Ey, ¿qué pasa?')}}");
                });
            });
        </script>
        <div id="dialog" style="float:right; width:300px;">
            <div id="d1" onclick="showText('d1', 'd2')" style="background-color:white; position:fixed; right:150px; bottom:100px; padding:20px; border-color:black; border-style:solid; border-width:2px; border-radius:10px;">
                <p>{{__('¿Qué te apetece comer?')}}</p>
            </div>
            <div id="d2" onclick="showText('d2', 'd3')" style="background-color:white; position:fixed; right:150px; bottom:100px; padding:20px; border-color:black; border-style:solid; border-width:2px; border-radius:10px; display:none;">
                <p>{{__('Haz clic en los iconos de los platos para ver los ingredientes que llevan, los alérgenos, y el precio que tienen.')}}</p>
            </div>
            <div id="d3" onclick="showText('d3', 'd4')" style="background-color:white; position:fixed; right:150px; bottom:100px; padding:20px; border-color:black; border-style:solid; border-width:2px; border-radius:10px; display:none;">
                <p>{{__('Ahora, sólamente tienes que elegir lo que más te apetezca.')}}</p>
            </div>
            <div id="d4" onclick="showText('d4', false, true)" style="background-color:white; position:fixed; right:150px; bottom:100px; padding:20px; border-color:black; border-style:solid; border-width:2px; border-radius:10px; display:none;">
                <p>{{__('¡Recuerda! En la sección de pizzas, puedes crear una tú mismo, escogiendo los ingredientes que quieras.')}}</p>
            </div>
        </div>
        <img id="anim" src="{{ asset('img/anim/Pizza2.gif') }}" alt="..." style="height:120px; width:120px; position:fixed; right:10px; bottom:65px;">
        --}}

        <div style="margin-left:50px; margin-right:50px; margin-bottom:350px;">
            <livewire:product-list />
        </div>

        <div style="position:fixed; bottom:180px; right:10px;">
            <a href="#">
                <img src="{{ asset('img/uparrow.png') }}" alt="uparrow" width="50px" height="50px" id="boton">
            </a>
        </div>

    @endif

    {{--
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
                <div style="margin-left:auto; display:flex; justify-content:center;">
                    <a href="https://twitter.com/BRENDAPIZZA" target="__blank"><img src="{{ asset('img/twit.png') }}"
                            width="30px" height="30px" style="margin-right:20px;"></a>
                    <a href="https://www.instagram.com/pizzeriabrenda/?hl=es" target="__blank"><img
                            src="{{ asset('img/inst.png') }}" width="30px" height="30px" style="margin-right:20px;"></a>
                    <a href="https://www.tiktok.com/@pizzeriabrenda1986?lang=es" target="__blank"><img
                            src="{{ asset('img/tik.png') }}" width="30px" height="30px" style="margin-right:20px;"></a>
                    <a href="https://www.facebook.com/pizzeriabrenda/?locale=es_ES" target="__blank"><img
                            src="{{ asset('img/face.png') }}" width="30px" height="30px"
                            style="margin-right:20px;"></a>
                </div>
                <div class="flex-wrap" style="display:flex; gap: 5px; margin-left:auto; color:white;">
                    <p style="font-size:13px;">{{ __('Horario: ') }}</p>
                    <div>
                        <p style="font-size:18px; font-weight:bolder;">{{ __('De lunes a domingo: 20:30 - 23:30') }}
                        </p>
                        <p style="font-size:18px; font-weight:bolder;">{{ __('Domingo por la mañana: 13:30 - 15:00') }}
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    --}}
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

    @if (!Auth::User()->admin)
        <script>
            if (localStorage.promociones) {
                window.location.replace("{{ route('promociones.index') }}");
            }
        </script>
    @endif

    @if (!Auth::User()->admin)
        <script>
            if (localStorage.crearpizza) {
                window.location.replace("{{ route('crearpizza') }}");
            }
        </script>
    @endif

</x-app-layout>
