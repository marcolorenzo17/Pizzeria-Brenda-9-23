<?php
use App\Http\Controllers\ProductController;
?>
<x-app-layout>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <x-slot name="header">
        <div style="background-image:url('img/backgroundpizzasmall.png'); margin-top:50px; padding-bottom:20px; border-radius:30px;">
            <br><br><br>
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight"
                style="font-size:60px; font-family: 'Anton', sans-serif; color:red; text-shadow: 2px 2px 4px #000000; letter-spacing: 3px; font-weight:lighter; -webkit-text-stroke: 2px white;">
                {{ __('NUESTRO MENÚ') }}
            </h2>
            <br><br>
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
            <a href="{{ route('products.crear') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md"
                id="boton">{{ __('CREAR PLATO') }}</a>
        </div>
        <br>
        <div style="background:white;">
            <table style="width:100%;">
                @foreach ($products as $product)
                    <tr>
                        <td>
                            <div style="margin:20px; display:flex; gap:20px;">
                                <img src="{{ asset($product->image) }}" alt="..."
                                    style="height:120px; width:120px; border: 2px solid gray; border-radius:10px;">
                                <div>
                                    <p>{{ __($product->type) }}</p>
                                    <p>{{ $product->name }}</p>
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
                                                class="bg-blue-500 text-white px-4 py-2 rounded-md"
                                                id="boton">{{ __('EDITAR') }}</a>
                                        </td>
                                        <td>
                                            <form method="post"
                                                action="{{ route('products.destroy', $product->id) }}">
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
                                                class="bg-blue-500 text-white px-4 py-2 rounded-md"
                                                id="boton">{{ __('EDITAR') }}</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding:5px">
                                            <form method="post"
                                                action="{{ route('products.destroy', $product->id) }}">
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

        <div class="container px-12 py-8 mx-auto">
            <div class="p-6 text-gray-900 h-screen flex items-center justify-center" id="productos-grande">
                <table class="table-auto w-full text-center"
                    style="border-collapse: separate; border-spacing:25px 25px;">
                    <tr>
                        <td
                            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;">
                            <a href="#1"><img src="{{ asset('img/pizzaicon.png') }}" width="70px" height="70px"
                                    style="display: block; margin-left: auto; margin-right: auto;"
                                    id="filtroproducto">PIZZAS</a>
                        </td>
                        <td
                            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;">
                            <a href="#2"><img src="{{ asset('img/burgericon.png') }}" width="70px"
                                    height="70px" style="display: block; margin-left: auto; margin-right: auto;"
                                    id="filtroproducto">{{ __('HAMBURGUESAS') }}</a>
                        </td>
                        <td
                            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;">
                            <a href="#3"><img src="{{ asset('img/sanicon.png') }}" width="70px" height="70px"
                                    style="display: block; margin-left: auto; margin-right: auto;"
                                    id="filtroproducto">{{ __('SÁNDWICHES') }}</a>
                        </td>
                        <td
                            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;">
                            <a href="#4"><img src="{{ asset('img/pastaicon.png') }}" width="70px" height="70px"
                                    style="display: block; margin-left: auto; margin-right: auto;"
                                    id="filtroproducto">PASTA</a>
                        </td>
                        <td
                            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;">
                            <a href="#5"><img src="{{ asset('img/riceicon.png') }}" width="70px" height="70px"
                                    style="display: block; margin-left: auto; margin-right: auto;"
                                    id="filtroproducto">{{ __('ARROCES') }}</a>
                        </td>
                    </tr>
                    <tr>
                        <td
                            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;">
                            <a href="#6"><img src="{{ asset('img/bagicon.png') }}" width="70px" height="70px"
                                    style="display: block; margin-left: auto; margin-right: auto;"
                                    id="filtroproducto">BAGUETTES</a>
                        </td>
                        <td
                            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;">
                            <a href="#7"><img src="{{ asset('img/saladicon.png') }}" width="70px"
                                    height="70px" style="display: block; margin-left: auto; margin-right: auto;"
                                    id="filtroproducto">{{ __('ENSALADAS') }}</a>
                        </td>
                        <td
                            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;">
                            <a href="#8"><img src="{{ asset('img/friesicon.png') }}" width="70px"
                                    height="70px" style="display: block; margin-left: auto; margin-right: auto;"
                                    id="filtroproducto">{{ __('COMPLEMENTOS') }}</a>
                        </td>
                        <td
                            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;">
                            <a href="#9"><img src="{{ asset('img/dogicon.png') }}" width="70px"
                                    height="70px" style="display: block; margin-left: auto; margin-right: auto;"
                                    id="filtroproducto">{{ __('PERRITOS') }}</a>
                        </td>
                        <td
                            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;">
                            <a href="#10"><img src="{{ asset('img/sodaicon.png') }}" width="70px"
                                    height="70px" style="display: block; margin-left: auto; margin-right: auto;"
                                    id="filtroproducto">{{ __('BEBIDAS') }}</a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
                style="flex-wrap:wrap; align-items:center; text-align:center;" id="productos-pequenio">
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
                    style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;">
                    <a href="#1"><img src="{{ asset('img/pizzaicon.png') }}" width="70px" height="70px"
                            style="display: block; margin-left: auto; margin-right: auto;" id="producto">PIZZAS</a>
                </div>
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
                    style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;">
                    <a href="#2"><img src="{{ asset('img/burgericon.png') }}" width="70px" height="70px"
                            style="display: block; margin-left: auto; margin-right: auto;"
                            id="producto">{{ __('HAMBURGUESAS') }}</a>
                </div>
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
                    style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;">
                    <a href="#3"><img src="{{ asset('img/sanicon.png') }}" width="70px" height="70px"
                            style="display: block; margin-left: auto; margin-right: auto;"
                            id="producto">{{ __('SÁNDWICHES') }}</a>
                </div>
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
                    style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;">
                    <a href="#4"><img src="{{ asset('img/pastaicon.png') }}" width="70px" height="70px"
                            style="display: block; margin-left: auto; margin-right: auto;" id="producto">PASTA</a>
                </div>
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
                    style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;">
                    <a href="#5"><img src="{{ asset('img/riceicon.png') }}" width="70px" height="70px"
                            style="display: block; margin-left: auto; margin-right: auto;"
                            id="producto">{{ __('ARROCES') }}</a>
                </div>
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
                    style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;">
                    <a href="#6"><img src="{{ asset('img/bagicon.png') }}" width="70px" height="70px"
                            style="display: block; margin-left: auto; margin-right: auto;"
                            id="producto">BAGUETTES</a>
                </div>
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
                    style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;">
                    <a href="#7"><img src="{{ asset('img/saladicon.png') }}" width="70px" height="70px"
                            style="display: block; margin-left: auto; margin-right: auto;"
                            id="producto">{{ __('ENSALADAS') }}</a>
                </div>
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
                    style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;">
                    <a href="#8"><img src="{{ asset('img/friesicon.png') }}" width="70px" height="70px"
                            style="display: block; margin-left: auto; margin-right: auto;"
                            id="producto">{{ __('COMPLEMENTOS') }}</a>
                </div>
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
                    style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;">
                    <a href="#9"><img src="{{ asset('img/dogicon.png') }}" width="70px" height="70px"
                            style="display: block; margin-left: auto; margin-right: auto;"
                            id="producto">{{ __('PERRITOS') }}</a>
                </div>
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
                    style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;">
                    <a href="#10"><img src="{{ asset('img/sodaicon.png') }}" width="70px" height="70px"
                            style="display: block; margin-left: auto; margin-right: auto;"
                            id="producto">{{ __('BEBIDAS') }}</a>
                </div>
            </div>
            <br>
            {{--
                <div class="sm:hidden">Hola</div>
            --}}
            <h3 class="text-2xl font-bold text-purple-700" id="1">PIZZAS</h3>
            <div class="h-1 bg-red-500 w-36"></div>
            <br>
            <h2 class="text-2xl font-bold text-center" style="color:blue; text-shadow: 2px 2px 4px #000000;">
                {{ __('"EL PLACER DE UNA BUENA PIZZA ARTESANAL"') }}</h2>
            <br>
            <img src="img/alergenos/gluten-lacteos.png" width="200px" height="200px">
            <br>
            <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($products as $product)
                    @if ($product->type == 'Pizza' && $product->habilitado)
                        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                            <a href="{{ route('products.show', $product->id) }}"><img
                                    src="{{ asset($product->image) }}" class="w-full max-h-60" id="imgproducto"></a>
                            <div class="flex items-end justify-end w-full bg-cover">

                            </div>
                            <div class="px-5 py-3">
                                <a href="{{ route('products.show', $product->id) }}">
                                    <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                                </a>
                                <?php
                                $alergenoslista = explode('-', $product->alergenos);
                                ?>
                                <div style="display:flex; flex-wrap:wrap; margin-top:10px; margin-bottom:10px;">
                                    @if ($product->alergenos != '')
                                        @foreach ($alergenoslista as $alergeno)
                                            <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                                width="40px" height="40px">
                                        @endforeach
                                    @endif
                                </div>
                                <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }}
                                    €</span>
                                <br><br>
                                <form action="{{ route('cart.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button
                                        class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded acercar">{{ __('AÑADIR AL CARRITO') }}</button>
                                    <br><br>
                                    {{--
                                        <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                    --}}
                                </form>
                                <form action="{{ route('cart.inmediato') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="px-4 py-1.5 text-white text-sm rounded acercar"
                                        style="background-color:green;">{{ __('COMPRA INMEDIATA') }}</button>
                                    <br><br>
                                </form>
                                @if (Auth::user()->admin)
                                    <form method="post" action="{{ route('products.destroy', $product->id) }}"
                                        class="inline">
                                        @csrf
                                        @method('delete')
                                        <button
                                            class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('BORRAR') }}</button>
                                    </form>
                                @endif
                            </div>

                        </div>
                    @endif
                @endforeach
            </div>
            <br><br>
            <div class="text-center"
                style="border-style: solid; border-width: 3px; border-color: purple; background-color: #efff91; padding: 20px;">
                <a href="{{ route('crearpizza') }}" class="text-2xl font-bold text-purple-700"
                    id="crearpizza">{{ __('¡CREA TU PROPIA PIZZA AQUÍ!') }}</a>
            </div>
            <br><br><br>
            <h3 class="text-2xl font-bold text-purple-700" id="2">{{ __('HAMBURGUESAS') }}</h3>
            <div class="h-1 bg-red-500 w-36"></div>
            <br>
            <h2 class="text-2xl font-bold text-center" style="color:darkblue; filter:drop-shadow(5px 5px 4px black);">
                {{ __('"COCINA RÁPIDA DE CALIDAD"') }}</h2>
            <br>
            <img src="img/alergenos/gluten-sesamo.png" width="200px" height="200px">
            <br>
            <table>
                <tr>
                    <td class="font-bold text-decoration-line: underline">{{ __('Extras para hamburguesas:') }}</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Queso Edam (0.50 €)</td>
                    <td><img src="img/alergenos/lacteos.png" width="150px" height="150px"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Queso Cheddar (1.00 €)</td>
                    <td><img src="img/alergenos/gluten-lacteos.png" width="150px" height="150px"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Huevo (0.80 €)</td>
                    <td><img src="img/alergenos/huevos.png" width="150px" height="150px"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Bacon (0.50 €)</td>
                    <td><img src="img/alergenos/soja.png" width="150px" height="150px"></td>
                </tr>
            </table>
            <br>
            <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($products as $product)
                    @if ($product->type == 'Hamburguesa' && $product->habilitado)
                        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                            <a href="{{ route('products.show', $product->id) }}"><img
                                    src="{{ asset($product->image) }}" class="w-full max-h-60" id="imgproducto"></a>
                            <div class="flex items-end justify-end w-full bg-cover">

                            </div>
                            <div class="px-5 py-3">
                                <a href="{{ route('products.show', $product->id) }}">
                                    <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                                </a>
                                <?php
                                $alergenoslista = explode('-', $product->alergenos);
                                ?>
                                <div style="display:flex; flex-wrap:wrap;">
                                    @if ($product->alergenos != '')
                                        @foreach ($alergenoslista as $alergeno)
                                            <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                                width="40px" height="40px">
                                        @endforeach
                                    @endif
                                </div>
                                <br>
                                <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }}
                                    €</span>
                                <br><br>
                                <form action="{{ route('cart.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button
                                        class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded acercar">{{ __('AÑADIR AL CARRITO') }}</button>
                                    <br><br>
                                    {{--
                                        <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                    --}}
                                </form>
                                <form action="{{ route('cart.inmediato') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="px-4 py-1.5 text-white text-sm rounded acercar"
                                        style="background-color:green;">{{ __('COMPRA INMEDIATA') }}</button>
                                    <br><br>
                                    {{--
                                    <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                --}}
                                </form>
                                @if (Auth::user()->admin)
                                    <form method="post" action="{{ route('products.destroy', $product->id) }}"
                                        class="inline">
                                        @csrf
                                        @method('delete')
                                        <button
                                            class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('BORRAR') }}</button>
                                    </form>
                                @endif
                            </div>

                        </div>
                    @endif
                @endforeach
            </div>
            <br><br><br>
            <h3 class="text-2xl font-bold text-purple-700" id="3">{{ __('SÁNDWICHES') }}</h3>
            <div class="h-1 bg-red-500 w-36"></div>
            <br>
            <img src="img/alergenos/gluten-lacteos-huevos-soja.png" width="200px" height="200px">
            <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($products as $product)
                    @if ($product->type == 'Sándwich' && $product->habilitado)
                        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                            <a href="{{ route('products.show', $product->id) }}"><img
                                    src="{{ asset($product->image) }}" class="w-full max-h-60"
                                    id="imgproducto"></a>
                            <div class="flex items-end justify-end w-full bg-cover">

                            </div>
                            <div class="px-5 py-3">
                                <a href="{{ route('products.show', $product->id) }}">
                                    <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                                </a>
                                <?php
                                $alergenoslista = explode('-', $product->alergenos);
                                ?>
                                <div style="display:flex; flex-wrap:wrap;">
                                    @if ($product->alergenos != '')
                                        @foreach ($alergenoslista as $alergeno)
                                            <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                                width="40px" height="40px">
                                        @endforeach
                                    @endif
                                </div>
                                <br>
                                <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }}
                                    €</span>
                                <br><br>
                                <form action="{{ route('cart.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button
                                        class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded acercar">{{ __('AÑADIR AL CARRITO') }}</button>
                                    <br><br>
                                    {{--
                                        <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                    --}}
                                </form>
                                <form action="{{ route('cart.inmediato') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="px-4 py-1.5 text-white text-sm rounded acercar"
                                        style="background-color:green;">{{ __('COMPRA INMEDIATA') }}</button>
                                    <br><br>
                                    {{--
                                    <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                --}}
                                </form>
                                @if (Auth::user()->admin)
                                    <form method="post" action="{{ route('products.destroy', $product->id) }}"
                                        class="inline">
                                        @csrf
                                        @method('delete')
                                        <button
                                            class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('BORRAR') }}</button>
                                    </form>
                                @endif
                            </div>

                        </div>
                    @endif
                @endforeach
            </div>
            <br><br><br>
            <h3 class="text-2xl font-bold text-purple-700" id="4">PASTA</h3>
            <div class="h-1 bg-red-500 w-36"></div>
            <br>
            <img src="img/alergenos/gluten-lacteos.png" width="200px" height="200px">
            <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($products as $product)
                    @if ($product->type == 'Pasta' && $product->habilitado)
                        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                            <a href="{{ route('products.show', $product->id) }}"><img
                                    src="{{ asset($product->image) }}" class="w-full max-h-60"
                                    id="imgproducto"></a>
                            <div class="flex items-end justify-end w-full bg-cover">

                            </div>
                            <div class="px-5 py-3">
                                <a href="{{ route('products.show', $product->id) }}">
                                    <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                                </a>
                                <?php
                                $alergenoslista = explode('-', $product->alergenos);
                                ?>
                                <div style="display:flex; flex-wrap:wrap;">
                                    @if ($product->alergenos != '')
                                        @foreach ($alergenoslista as $alergeno)
                                            <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                                width="40px" height="40px">
                                        @endforeach
                                    @endif
                                </div>
                                <br>
                                <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }}
                                    €</span>
                                <br><br>
                                <form action="{{ route('cart.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button
                                        class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded acercar">{{ __('AÑADIR AL CARRITO') }}</button>
                                    <br><br>
                                    {{--
                                        <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                    --}}
                                </form>
                                <form action="{{ route('cart.inmediato') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="px-4 py-1.5 text-white text-sm rounded acercar"
                                        style="background-color:green;">{{ __('COMPRA INMEDIATA') }}</button>
                                    <br><br>
                                    {{--
                                    <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                --}}
                                </form>
                                @if (Auth::user()->admin)
                                    <form method="post" action="{{ route('products.destroy', $product->id) }}"
                                        class="inline">
                                        @csrf
                                        @method('delete')
                                        <button
                                            class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('BORRAR') }}</button>
                                    </form>
                                @endif
                            </div>

                        </div>
                    @endif
                @endforeach
            </div>
            <br><br><br>
            <h3 class="text-2xl font-bold text-purple-700" id="5">{{ __('ARROCES') }}</h3>
            <div class="h-1 bg-red-500 w-36"></div>
            <br>
            <img src="img/alergenos/gluten-lacteos.png" width="200px" height="200px">
            <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($products as $product)
                    @if ($product->type == 'Arroz' && $product->habilitado)
                        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                            <a href="{{ route('products.show', $product->id) }}"><img
                                    src="{{ asset($product->image) }}" class="w-full max-h-60"
                                    id="imgproducto"></a>
                            <div class="flex items-end justify-end w-full bg-cover">

                            </div>
                            <div class="px-5 py-3">
                                <a href="{{ route('products.show', $product->id) }}">
                                    <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                                </a>
                                <?php
                                $alergenoslista = explode('-', $product->alergenos);
                                ?>
                                <div style="display:flex; flex-wrap:wrap;">
                                    @if ($product->alergenos != '')
                                        @foreach ($alergenoslista as $alergeno)
                                            <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                                width="40px" height="40px">
                                        @endforeach
                                    @endif
                                </div>
                                <br>
                                <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }}
                                    €</span>
                                <br><br>
                                <form action="{{ route('cart.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button
                                        class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded acercar">{{ __('AÑADIR AL CARRITO') }}</button>
                                    <br><br>
                                    {{--
                                        <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                    --}}
                                </form>
                                <form action="{{ route('cart.inmediato') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="px-4 py-1.5 text-white text-sm rounded acercar"
                                        style="background-color:green;">{{ __('COMPRA INMEDIATA') }}</button>
                                    <br><br>
                                    {{--
                                    <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                --}}
                                </form>
                                @if (Auth::user()->admin)
                                    <form method="post" action="{{ route('products.destroy', $product->id) }}"
                                        class="inline">
                                        @csrf
                                        @method('delete')
                                        <button
                                            class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('BORRAR') }}</button>
                                    </form>
                                @endif
                            </div>

                        </div>
                    @endif
                @endforeach
            </div>
            <br><br><br>
            <h3 class="text-2xl font-bold text-purple-700" id="6">BAGUETTES</h3>
            <div class="h-1 bg-red-500 w-36"></div>
            <br>
            <img src="img/alergenos/gluten-lacteos.png" width="200px" height="200px">
            <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($products as $product)
                    @if ($product->type == 'Baguette' && $product->habilitado)
                        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                            <a href="{{ route('products.show', $product->id) }}"><img
                                    src="{{ asset($product->image) }}" class="w-full max-h-60"
                                    id="imgproducto"></a>
                            <div class="flex items-end justify-end w-full bg-cover">

                            </div>
                            <div class="px-5 py-3">
                                <a href="{{ route('products.show', $product->id) }}">
                                    <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                                </a>
                                <?php
                                $alergenoslista = explode('-', $product->alergenos);
                                ?>
                                <div style="display:flex; flex-wrap:wrap;">
                                    @if ($product->alergenos != '')
                                        @foreach ($alergenoslista as $alergeno)
                                            <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                                width="40px" height="40px">
                                        @endforeach
                                    @endif
                                </div>
                                <br>
                                <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }}
                                    €</span>
                                <br><br>
                                <form action="{{ route('cart.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button
                                        class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded acercar">{{ __('AÑADIR AL CARRITO') }}</button>
                                    <br><br>
                                    {{--
                                        <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                    --}}
                                </form>
                                <form action="{{ route('cart.inmediato') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="px-4 py-1.5 text-white text-sm rounded acercar"
                                        style="background-color:green;">{{ __('COMPRA INMEDIATA') }}</button>
                                    <br><br>
                                    {{--
                                    <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                --}}
                                </form>
                                @if (Auth::user()->admin)
                                    <form method="post" action="{{ route('products.destroy', $product->id) }}"
                                        class="inline">
                                        @csrf
                                        @method('delete')
                                        <button
                                            class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('BORRAR') }}</button>
                                    </form>
                                @endif
                            </div>

                        </div>
                    @endif
                @endforeach
            </div>
            <br><br><br>
            <h3 class="text-2xl font-bold text-purple-700" id="7">{{ __('ENSALADAS') }}</h3>
            <div class="h-1 bg-red-500 w-36"></div>
            <br>
            <img src="img/alergenos/dioxido.png" width="200px" height="200px">
            <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($products as $product)
                    @if ($product->type == 'Ensalada' && $product->habilitado)
                        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                            <a href="{{ route('products.show', $product->id) }}"><img
                                    src="{{ asset($product->image) }}" class="w-full max-h-60"
                                    id="imgproducto"></a>
                            <div class="flex items-end justify-end w-full bg-cover">

                            </div>
                            <div class="px-5 py-3">
                                <a href="{{ route('products.show', $product->id) }}">
                                    <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                                </a>
                                <?php
                                $alergenoslista = explode('-', $product->alergenos);
                                ?>
                                <div style="display:flex; flex-wrap:wrap;">
                                    @if ($product->alergenos != '')
                                        @foreach ($alergenoslista as $alergeno)
                                            <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                                width="40px" height="40px">
                                        @endforeach
                                    @endif
                                </div>
                                <br>
                                <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }}
                                    €</span>
                                <br><br>
                                <form action="{{ route('cart.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button
                                        class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded acercar">{{ __('AÑADIR AL CARRITO') }}</button>
                                    <br><br>
                                    {{--
                                        <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                    --}}
                                </form>
                                <form action="{{ route('cart.inmediato') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="px-4 py-1.5 text-white text-sm rounded acercar"
                                        style="background-color:green;">{{ __('COMPRA INMEDIATA') }}</button>
                                    <br><br>
                                    {{--
                                    <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                --}}
                                </form>
                                @if (Auth::user()->admin)
                                    <form method="post" action="{{ route('products.destroy', $product->id) }}"
                                        class="inline">
                                        @csrf
                                        @method('delete')
                                        <button
                                            class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('BORRAR') }}</button>
                                    </form>
                                @endif
                            </div>

                        </div>
                    @endif
                @endforeach
            </div>
            <br><br><br>
            <h3 class="text-2xl font-bold text-purple-700" id="8">{{ __('COMPLEMENTOS') }}</h3>
            <div class="h-1 bg-red-500 w-36"></div>
            <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($products as $product)
                    @if ($product->type == 'Complemento' && $product->habilitado)
                        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                            <a href="{{ route('products.show', $product->id) }}"><img
                                    src="{{ asset($product->image) }}" class="w-full max-h-60"
                                    id="imgproducto"></a>
                            <div class="flex items-end justify-end w-full bg-cover">

                            </div>
                            <div class="px-5 py-3">
                                <a href="{{ route('products.show', $product->id) }}">
                                    <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                                </a>
                                <?php
                                $alergenoslista = explode('-', $product->alergenos);
                                ?>
                                <div style="display:flex; flex-wrap:wrap;">
                                    @if ($product->alergenos != '')
                                        @foreach ($alergenoslista as $alergeno)
                                            <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                                width="40px" height="40px">
                                        @endforeach
                                    @endif
                                </div>
                                <br>
                                <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }}
                                    €</span>
                                <br><br>
                                <form action="{{ route('cart.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button
                                        class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded acercar">{{ __('AÑADIR AL CARRITO') }}</button>
                                    <br><br>
                                    {{--
                                        <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                    --}}
                                </form>
                                <form action="{{ route('cart.inmediato') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="px-4 py-1.5 text-white text-sm rounded acercar"
                                        style="background-color:green;">{{ __('COMPRA INMEDIATA') }}</button>
                                    <br><br>
                                    {{--
                                    <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                --}}
                                </form>
                                @if (Auth::user()->admin)
                                    <form method="post" action="{{ route('products.destroy', $product->id) }}"
                                        class="inline">
                                        @csrf
                                        @method('delete')
                                        <button
                                            class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('BORRAR') }}</button>
                                    </form>
                                @endif
                            </div>

                        </div>
                    @endif
                @endforeach
            </div>
            <br><br><br>
            <h3 class="text-2xl font-bold text-purple-700" id="9">{{ __('PERRITOS') }}</h3>
            <div class="h-1 bg-red-500 w-36"></div>
            <br>
            <img src="img/alergenos/gluten-lacteos.png" width="200px" height="200px">
            <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($products as $product)
                    @if ($product->type == 'Perrito' && $product->habilitado)
                        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                            <a href="{{ route('products.show', $product->id) }}"><img
                                    src="{{ asset($product->image) }}" class="w-full max-h-60"
                                    id="imgproducto"></a>
                            <div class="flex items-end justify-end w-full bg-cover">

                            </div>
                            <div class="px-5 py-3">
                                <a href="{{ route('products.show', $product->id) }}">
                                    <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                                </a>
                                <?php
                                $alergenoslista = explode('-', $product->alergenos);
                                ?>
                                <div style="display:flex; flex-wrap:wrap;">
                                    @if ($product->alergenos != '')
                                        @foreach ($alergenoslista as $alergeno)
                                            <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                                width="40px" height="40px">
                                        @endforeach
                                    @endif
                                </div>
                                <br>
                                <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }}
                                    €</span>
                                <br><br>
                                <form action="{{ route('cart.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button
                                        class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded acercar">{{ __('AÑADIR AL CARRITO') }}</button>
                                    <br><br>
                                    {{--
                                        <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                    --}}
                                </form>
                                <form action="{{ route('cart.inmediato') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="px-4 py-1.5 text-white text-sm rounded acercar"
                                        style="background-color:green;">{{ __('COMPRA INMEDIATA') }}</button>
                                    <br><br>
                                    {{--
                                    <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                --}}
                                </form>
                                @if (Auth::user()->admin)
                                    <form method="post" action="{{ route('products.destroy', $product->id) }}"
                                        class="inline">
                                        @csrf
                                        @method('delete')
                                        <button
                                            class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('BORRAR') }}</button>
                                    </form>
                                @endif
                            </div>

                        </div>
                    @endif
                @endforeach
            </div>
            <br><br><br>
            <h3 class="text-2xl font-bold text-purple-700" id="10">{{ __('CERVEZAS') }}</h3>
            <div class="h-1 bg-red-500 w-36"></div>
            <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($products as $product)
                    @if ($product->type == 'Cerveza' && $product->habilitado)
                        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                            <a href="{{ route('products.show', $product->id) }}"><img
                                    src="{{ asset($product->image) }}" class="w-full max-h-60"
                                    id="imgproducto"></a>
                            <div class="flex items-end justify-end w-full bg-cover">

                            </div>
                            <div class="px-5 py-3">
                                <a href="{{ route('products.show', $product->id) }}">
                                    <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                                </a>
                                <?php
                                $alergenoslista = explode('-', $product->alergenos);
                                ?>
                                <div style="display:flex; flex-wrap:wrap;">
                                    @if ($product->alergenos != '')
                                        @foreach ($alergenoslista as $alergeno)
                                            <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                                width="40px" height="40px">
                                        @endforeach
                                    @endif
                                </div>
                                <br>
                                <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }}
                                    €</span>
                                <br><br>
                                <form action="{{ route('cart.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button
                                        class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded acercar">{{ __('AÑADIR AL CARRITO') }}</button>
                                    <br><br>
                                    {{--
                                        <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                    --}}
                                </form>
                                <form action="{{ route('cart.inmediato') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="px-4 py-1.5 text-white text-sm rounded acercar"
                                        style="background-color:green;">{{ __('COMPRA INMEDIATA') }}</button>
                                    <br><br>
                                    {{--
                                    <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                --}}
                                </form>
                                @if (Auth::user()->admin)
                                    <form method="post" action="{{ route('products.destroy', $product->id) }}"
                                        class="inline">
                                        @csrf
                                        @method('delete')
                                        <button
                                            class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('BORRAR') }}</button>
                                    </form>
                                @endif
                            </div>

                        </div>
                    @endif
                @endforeach
            </div>
            <br><br><br>
            <h3 class="text-2xl font-bold text-purple-700">{{ __('VINOS Y LICORES') }}</h3>
            <div class="h-1 bg-red-500 w-36"></div>
            <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($products as $product)
                    @if ($product->type == 'Vino' && $product->habilitado)
                        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                            <a href="{{ route('products.show', $product->id) }}"><img
                                    src="{{ asset($product->image) }}" class="w-full max-h-60"
                                    id="imgproducto"></a>
                            <div class="flex items-end justify-end w-full bg-cover">

                            </div>
                            <div class="px-5 py-3">
                                <a href="{{ route('products.show', $product->id) }}">
                                    <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                                </a>
                                <?php
                                $alergenoslista = explode('-', $product->alergenos);
                                ?>
                                <div style="display:flex; flex-wrap:wrap;">
                                    @if ($product->alergenos != '')
                                        @foreach ($alergenoslista as $alergeno)
                                            <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                                width="40px" height="40px">
                                        @endforeach
                                    @endif
                                </div>
                                <br>
                                <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }}
                                    €</span>
                                <br><br>
                                <form action="{{ route('cart.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button
                                        class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded acercar">{{ __('AÑADIR AL CARRITO') }}</button>
                                    <br><br>
                                    {{--
                                        <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                    --}}
                                </form>
                                <form action="{{ route('cart.inmediato') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="px-4 py-1.5 text-white text-sm rounded acercar"
                                        style="background-color:green;">{{ __('COMPRA INMEDIATA') }}</button>
                                    <br><br>
                                    {{--
                                    <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                --}}
                                </form>
                                @if (Auth::user()->admin)
                                    <form method="post" action="{{ route('products.destroy', $product->id) }}"
                                        class="inline">
                                        @csrf
                                        @method('delete')
                                        <button
                                            class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('BORRAR') }}</button>
                                    </form>
                                @endif
                            </div>

                        </div>
                    @endif
                @endforeach
            </div>
            <br><br><br>
            <h3 class="text-2xl font-bold text-purple-700">{{ __('REFRESCOS') }}</h3>
            <div class="h-1 bg-red-500 w-36"></div>
            <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($products as $product)
                    @if ($product->type == 'Refresco' && $product->habilitado)
                        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                            <a href="{{ route('products.show', $product->id) }}"><img
                                    src="{{ asset($product->image) }}" class="w-full max-h-60"
                                    id="imgproducto"></a>
                            <div class="flex items-end justify-end w-full bg-cover">

                            </div>
                            <div class="px-5 py-3">
                                <a href="{{ route('products.show', $product->id) }}">
                                    <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                                </a>
                                <?php
                                $alergenoslista = explode('-', $product->alergenos);
                                ?>
                                <div style="display:flex; flex-wrap:wrap;">
                                    @if ($product->alergenos != '')
                                        @foreach ($alergenoslista as $alergeno)
                                            <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                                width="40px" height="40px">
                                        @endforeach
                                    @endif
                                </div>
                                <br>
                                <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }}
                                    €</span>
                                <br><br>
                                <form action="{{ route('cart.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button
                                        class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded acercar">{{ __('AÑADIR AL CARRITO') }}</button>
                                    <br><br>
                                    {{--
                                        <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                    --}}
                                </form>
                                <form action="{{ route('cart.inmediato') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" name="id">
                                    <input type="hidden" value="{{ $product->name }}" name="name">
                                    <input type="hidden" value="{{ $product->price }}" name="price">
                                    <input type="hidden" value="{{ $product->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="px-4 py-1.5 text-white text-sm rounded acercar"
                                        style="background-color:green;">{{ __('COMPRA INMEDIATA') }}</button>
                                    <br><br>
                                    {{--
                                    <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                --}}
                                </form>
                                @if (Auth::user()->admin)
                                    <form method="post" action="{{ route('products.destroy', $product->id) }}"
                                        class="inline">
                                        @csrf
                                        @method('delete')
                                        <button
                                            class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('BORRAR') }}</button>
                                    </form>
                                @endif
                            </div>

                        </div>
                    @endif
                @endforeach
            </div>
        </div>

    @endif

    <br><br><br><br>
    <footer
        class="fixed bottom-0 left-0 z-20 w-full p-4 border-t border-gray-300 shadow md:flex md:items-center md:justify-between md:p-6"
        style="background-color:red;">
        <span class="text-sm sm:text-center"
            style="color: white; margin-right:20px;">{{ __('© 2023 Pizzería Brenda™. Todos los derechos reservados.') }}
        </span>
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
            <a href="https://twitter.com/BRENDAPIZZA"><img src="{{ asset('img/twit.png') }}" width="30px"
                    height="30px" style="margin-right:20px;"></a>
            <a href="https://www.instagram.com/pizzeriabrenda/?hl=es"><img src="{{ asset('img/inst.png') }}"
                    width="30px" height="30px" style="margin-right:20px;"></a>
            <a href="https://www.tiktok.com/@pizzeriabrenda1986?lang=es"><img src="{{ asset('img/tik.png') }}"
                    width="30px" height="30px" style="margin-right:20px;"></a>
            <a href="https://www.facebook.com/pizzeriabrenda/?locale=es_ES"><img src="{{ asset('img/face.png') }}"
                    width="30px" height="30px" style="margin-right:20px;"></a>
        </div>
    </footer>

</x-app-layout>
