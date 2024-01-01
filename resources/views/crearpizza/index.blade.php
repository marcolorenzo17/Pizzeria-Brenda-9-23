<x-app-layout>
    <x-slot name="header">
        @if (Auth::user()->admin)
            <div style="margin-top:110px;">
                <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight"
                    style="font-size:60px; color:#568c2c; letter-spacing: 3px; font-weight:lighter; font-family: 'Alfa Slab One', serif;">
                    {{ __('LISTA DE INGREDIENTES') }}
                </h2>
            </div>
        @else
            <div style="margin-top:110px;">
                <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight"
                    style="font-size:60px; color:#568c2c; letter-spacing: 3px; font-weight:lighter; font-family: 'Alfa Slab One', serif;">
                    {{ __('CREA TU PROPIA PIZZA') }}
                </h2>
            </div>
        @endif

    </x-slot>
    <link rel="stylesheet" href="/css/index_products.css" />
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    @if (Auth::user()->admin)
        <br>
        <p class="text-center" style="font-weight:bolder;">{{ __('LISTA PARA ADMINISTRADORES') }}</p>
        <br>
        <div style="margin-left:20px;">
            <a href="{{ route('crearpizza.crear') }}" class="text-white px-4 py-2 rounded-md"
                id="boton" style="background-color:#568c2c;">{{ __('CREAR INGREDIENTE') }}</a>
        </div>
        <br>
        <div style="background:white; margin-bottom:300px;">
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
                                                class="text-white px-4 py-2 rounded-md"
                                                id="boton" style="background-color:#568c2c;">{{ __('EDITAR') }}</a>
                                        </td>
                                        <td>
                                            <form method="post"
                                                action="{{ route('crearpizza.destroy', $ingrediente->id) }}" onclick="return confirm('¿Estás seguro de que quieres eliminar este ingrediente?')">
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
                                                class="text-white px-4 py-2 rounded-md"
                                                id="boton" style="background-color:#568c2c;">{{ __('EDITAR') }}</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding:5px">
                                            <form method="post"
                                                action="{{ route('crearpizza.destroy', $ingrediente->id) }}" onclick="return confirm('¿Estás seguro de que quieres eliminar este ingrediente?')">
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
                        <a href="{{ route('products.index') }}" class="text-white px-4 py-2 rounded-md"
                            id="boton" style="background-color:#f12d2d;">{{ __('VOLVER AL MENÚ') }}</a>
                    </div>
                    <div class="container px-12 py-8 mx-auto">
                        <br>
                        <img src="{{ asset('img/alergenos.jpg') }}" alt="" width="350px" height="350px"
                            class="mx-auto">
                        <br>
                        <h3 class="text-2xl font-bold" style="color:#568c2c;">BASES</h3>
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
                        <h3 class="text-2xl font-bold" style="color:#568c2c;">{{ __('INGREDIENTES') }} (1.50 € - 1.79 €)</h3>
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
                        <h3 class="text-2xl font-bold" style="color:#568c2c;">{{ __('INGREDIENTES') }} (1.80 € - 2.29 €)</h3>
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
                        <h3 class="text-2xl font-bold" style="color:#568c2c;">{{ __('INGREDIENTES') }} (2.30 € +)</h3>
                        <div class="h-1 bg-red-500 w-36"></div>
                        <br>
                        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
                            style="margin-bottom:300px;">
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
                            <button class="px-4 py-1.5 text-white text-sm rounded"
                                id="boton" style="background-color:#568c2c;">{{ __('AÑADIR AL CARRITO') }}</button>
                        </form>
                    </div>
                </td>
            </tr>
        </table>
    @endif

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
                <a class="anavbar" href="{{ route('contact') }}"
                    style="font-size:13px;">{{ __('Contáctanos') }}</a>
                <a class="anavbar" href="{{ route('privacy') }}"
                    style="font-size:13px;">{{ __('Política de privacidad') }}</a>
                <a class="anavbar" href="{{ route('premios') }}" style="font-size:13px;">{{ __('Premios') }}</a>
            </div>
            <div style="margin-left:auto; display:flex;">
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

    <script src="{{ asset('js/crearpizza-script.js') }}"></script>

</x-app-layout>
