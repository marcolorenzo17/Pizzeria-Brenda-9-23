<x-app-layout>
    <x-slot name="header">
        @if (Auth::user()->admin)
            <br><br><br>
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
                {{ __('LISTA DE INGREDIENTES') }}
            </h2>
        @else
            <br><br><br>
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
                {{ __('CREA TU PROPIA PIZZA') }}
            </h2>
        @endif
        <br><br>
    </x-slot>
    <link rel="stylesheet" href="/css/index_products.css" />
    @if (Auth::user()->admin)
        <br>
        <p class="text-center" style="font-weight:bolder;">{{ __('LISTA PARA ADMINISTRADORES') }}</p>
        <br>
        <div style="margin-left:20px;">
            <a href="{{ route('crearpizza.crear') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md"
                id="boton">{{ __('CREAR INGREDIENTE') }}</a>
        </div>
        <br>
        <div style="background:white;">
            <table style="width:100%;">
                @foreach ($ingredientes as $ingrediente)
                    <tr>
                        <td>
                            <div style="margin:20px; display:flex; gap:20px;">
                                <img src="{{ asset($ingrediente->image) }}" alt="..."
                                    style="height:120px; width:120px; border: 2px solid gray; border-radius:10px;">
                                <div>
                                    <p>{{ __($ingrediente->type) }}</p>
                                    @if (Lang::locale() == 'es')
                                        <p>{{ $ingrediente->name }}</p>
                                    @else
                                        <p>{{ $ingrediente->nameen }}</p>
                                    @endif
                                    <br>
                                    <p>{{ number_format($ingrediente->price, 2, '.', '') }} €</p>
                                </div>
                                <table style="margin-left:auto; margin-right:0;" id="productos-grande">
                                    <tr>
                                        <td>
                                            @if ($ingrediente->habilitado)
                                                <form method="post"
                                                    action="{{ route('crearpizza.deshabilitar', $ingrediente->id) }}">
                                                    @csrf
                                                    <button
                                                        class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('DESHABILITAR') }}</button>
                                                </form>
                                            @else
                                                <form method="post"
                                                    action="{{ route('crearpizza.habilitar', $ingrediente->id) }}">
                                                    @csrf
                                                    <button
                                                        class="border border-blue-500 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-md">{{ __('HABILITAR') }}</button>
                                                </form>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('crearpizza.editar', $ingrediente) }}"
                                                class="bg-blue-500 text-white px-4 py-2 rounded-md"
                                                id="boton">{{ __('EDITAR') }}</a>
                                        </td>
                                        <td>
                                            <form method="post"
                                                action="{{ route('crearpizza.destroy', $ingrediente->id) }}">
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
                                            @if ($ingrediente->habilitado)
                                                <form method="post"
                                                    action="{{ route('crearpizza.deshabilitar', $ingrediente->id) }}">
                                                    @csrf
                                                    <button
                                                        class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('DESHABILITAR') }}</button>
                                                </form>
                                            @else
                                                <form method="post"
                                                    action="{{ route('crearpizza.habilitar', $ingrediente->id) }}">
                                                    @csrf
                                                    <button
                                                        class="border border-blue-500 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-md">{{ __('HABILITAR') }}</button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding:5px">
                                            <a href="{{ route('crearpizza.editar', $ingrediente) }}"
                                                class="bg-blue-500 text-white px-4 py-2 rounded-md"
                                                id="boton">{{ __('EDITAR') }}</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding:5px">
                                            <form method="post"
                                                action="{{ route('crearpizza.destroy', $ingrediente->id) }}">
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
        <table>
            <tr>
                <td>
                    <br>
                    <div style="text-align:center;" id="volvermenu">
                        <a href="{{ route('products.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md"
                            id="boton">{{ __('VOLVER AL MENÚ') }}</a>
                    </div>
                    <div class="container px-12 py-8 mx-auto">
                        <br>
                        <img src="{{ asset('img/alergenos.jpg') }}" alt="" width="350px" height="350px"
                            class="mx-auto">
                        <br>
                        <h3 class="text-2xl font-bold text-purple-700">BASES</h3>
                        <div class="h-1 bg-red-500 w-36"></div>
                        <br>
                        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                            @foreach ($ingredientes as $ingrediente)
                                @if ($ingrediente->type == 'Base' && $ingrediente->habilitado)
                                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                                        <?php
                                        if (Lang::locale() == 'es') {
                                            $nombre = $ingrediente->name;
                                        } else {
                                            $nombre = $ingrediente->nameen;
                                        }
                                        $precio = number_format($ingrediente->price, 2, '.', '');
                                        ?>
                                        <a href="#volvermenu">
                                            <img src="{{ asset($ingrediente->image) }}" alt="..."
                                                class="w-full max-h-60"
                                                onclick="aniadirBase('<?php echo $nombre; ?>', '<?php echo $precio; ?>');"
                                                id="imgproducto">
                                        </a>
                                        <?php
                                        $alergenoslista = explode('-', $ingrediente->alergenos);
                                        ?>
                                        <div style="display:flex; flex-wrap:wrap;">
                                            @if ($ingrediente->alergenos != '')
                                                @foreach ($alergenoslista as $alergeno)
                                                    <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                                        width="40px" height="40px">
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="flex items-end justify-end w-full bg-cover">
                                        </div>
                                        <div class="px-5 py-3">
                                            @if (Lang::locale() == 'es')
                                                <h3 class="text-gray-700 uppercase">{{ $ingrediente->name }}</h3>
                                            @else
                                                <h3 class="text-gray-700 uppercase">{{ $ingrediente->nameen }}</h3>
                                            @endif
                                            <span
                                                class="mt-2 text-gray-500">{{ number_format($ingrediente->price, 2, '.', '') }}
                                                €</span>
                                            <br><br>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <br><br>
                        <h3 class="text-2xl font-bold text-purple-700">{{ __('INGREDIENTES') }} (1.50 € - 1.79 €)</h3>
                        <div class="h-1 bg-red-500 w-36"></div>
                        <br>
                        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                            @foreach ($ingredientes as $ingrediente)
                                @if (
                                    $ingrediente->type == 'Ingrediente' &&
                                        $ingrediente->price >= 1.5 &&
                                        $ingrediente->price < 1.8 &&
                                        $ingrediente->habilitado)
                                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                                        <?php
                                        if (Lang::locale() == 'es') {
                                            $nombre = $ingrediente->name;
                                        } else {
                                            $nombre = $ingrediente->nameen;
                                        }
                                        $precio = number_format($ingrediente->price, 2, '.', '');
                                        ?>
                                        <a href="#volvermenu">
                                            <img src="{{ asset($ingrediente->image) }}" alt="..."
                                                class="w-full max-h-60"
                                                onclick="aniadir('<?php echo $nombre; ?>', '<?php echo $precio; ?>');"
                                                id="imgproducto">
                                        </a>
                                        <?php
                                        $alergenoslista = explode('-', $ingrediente->alergenos);
                                        ?>
                                        <div style="display:flex; flex-wrap:wrap;">
                                            @if ($ingrediente->alergenos != '')
                                                @foreach ($alergenoslista as $alergeno)
                                                    <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                                        width="40px" height="40px">
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="flex items-end justify-end w-full bg-cover">
                                        </div>
                                        <div class="px-5 py-3">
                                            @if (Lang::locale() == 'es')
                                                <h3 class="text-gray-700 uppercase">{{ $ingrediente->name }}</h3>
                                            @else
                                                <h3 class="text-gray-700 uppercase">{{ $ingrediente->nameen }}</h3>
                                            @endif
                                            <span
                                                class="mt-2 text-gray-500">{{ number_format($ingrediente->price, 2, '.', '') }}
                                                €</span>
                                            <br><br>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <br><br>
                        <h3 class="text-2xl font-bold text-purple-700">{{ __('INGREDIENTES') }} (1.80 € - 2.29 €)</h3>
                        <div class="h-1 bg-red-500 w-36"></div>
                        <br>
                        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                            @foreach ($ingredientes as $ingrediente)
                                @if (
                                    $ingrediente->type == 'Ingrediente' &&
                                        $ingrediente->price >= 1.8 &&
                                        $ingrediente->price < 2.3 &&
                                        $ingrediente->habilitado)
                                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                                        <?php
                                        if (Lang::locale() == 'es') {
                                            $nombre = $ingrediente->name;
                                        } else {
                                            $nombre = $ingrediente->nameen;
                                        }
                                        $precio = number_format($ingrediente->price, 2, '.', '');
                                        ?>
                                        <a href="#volvermenu">
                                            <img src="{{ asset($ingrediente->image) }}" alt="..."
                                                class="w-full max-h-60"
                                                onclick="aniadir('<?php echo $nombre; ?>', '<?php echo $precio; ?>');"
                                                id="imgproducto">
                                        </a>
                                        <?php
                                        $alergenoslista = explode('-', $ingrediente->alergenos);
                                        ?>
                                        <div style="display:flex; flex-wrap:wrap;">
                                            @if ($ingrediente->alergenos != '')
                                                @foreach ($alergenoslista as $alergeno)
                                                    <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                                        width="40px" height="40px">
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="flex items-end justify-end w-full bg-cover">
                                        </div>
                                        <div class="px-5 py-3">
                                            @if (Lang::locale() == 'es')
                                                <h3 class="text-gray-700 uppercase">{{ $ingrediente->name }}</h3>
                                            @else
                                                <h3 class="text-gray-700 uppercase">{{ $ingrediente->nameen }}</h3>
                                            @endif
                                            <span
                                                class="mt-2 text-gray-500">{{ number_format($ingrediente->price, 2, '.', '') }}
                                                €</span>
                                            <br><br>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <br><br>
                        <h3 class="text-2xl font-bold text-purple-700">{{ __('INGREDIENTES') }} (2.30 € +)</h3>
                        <div class="h-1 bg-red-500 w-36"></div>
                        <br>
                        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                            @foreach ($ingredientes as $ingrediente)
                                @if ($ingrediente->type == 'Ingrediente' && $ingrediente->price >= 2.3 && $ingrediente->habilitado)
                                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                                        <?php
                                        if (Lang::locale() == 'es') {
                                            $nombre = $ingrediente->name;
                                        } else {
                                            $nombre = $ingrediente->nameen;
                                        }
                                        $precio = number_format($ingrediente->price, 2, '.', '');
                                        ?>
                                        <a href="#volvermenu">
                                            <img src="{{ asset($ingrediente->image) }}" alt="..."
                                                class="w-full max-h-60"
                                                onclick="aniadir('<?php echo $nombre; ?>', '<?php echo $precio; ?>');"
                                                id="imgproducto">
                                        </a>
                                        <?php
                                        $alergenoslista = explode('-', $ingrediente->alergenos);
                                        ?>
                                        <div style="display:flex; flex-wrap:wrap;">
                                            @if ($ingrediente->alergenos != '')
                                                @foreach ($alergenoslista as $alergeno)
                                                    <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                                        width="40px" height="40px">
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="flex items-end justify-end w-full bg-cover">
                                        </div>
                                        <div class="px-5 py-3">
                                            @if (Lang::locale() == 'es')
                                                <h3 class="text-gray-700 uppercase">{{ $ingrediente->name }}</h3>
                                            @else
                                                <h3 class="text-gray-700 uppercase">{{ $ingrediente->nameen }}</h3>
                                            @endif
                                            <span
                                                class="mt-2 text-gray-500">{{ number_format($ingrediente->price, 2, '.', '') }}
                                                €</span>
                                            <br><br>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </td>
                <td style="vertical-align: top; position: relative; top: 50px;">
                    <div class="container px-12 py-8 mx-auto bg-white" style="border-radius:10px;">
                        <div id="cuadropizza">
                            <div id="contenidopizza">
                                <p id="base"></p>
                                <p id="b-base"></p>
                                <p id="p-base"></p>
                            </div>
                        </div>
                        <br><br>
                        <p>{{ __('Precio total:') }}</p>
                        <p id="total">0.00 €</p>
                        <br><br>
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input id="id-custom" type="hidden" value="" name="id">
                            <input type="hidden" value="Pizza Personalizada" name="name">
                            <input type="hidden" value="" name="price" id="price">
                            <input type="hidden" value="img/pizzagenerica.jpg" name="image">
                            <input type="hidden" value="1" name="quantity">
                            <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded"
                                id="boton">{{ __('AÑADIR AL CARRITO') }}</button>
                        </form>
                    </div>
                </td>
            </tr>
        </table>
    @endif

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

    <script src="{{ asset('js/crearpizza-script.js') }}"></script>

</x-app-layout>
