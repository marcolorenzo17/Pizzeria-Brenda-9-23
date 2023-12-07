<div>
    <h3 class="text-2xl font-bold text-purple-700" id="1">PIZZAS</h3>
    <div class="h-1 bg-red-500 w-36"></div>
    <br>
    <h2 class="text-2xl font-bold text-center" style="color:blue;">
        {{ __('"EL PLACER DE UNA BUENA PIZZA ARTESANAL"') }}</h2>
    <br>
    <img src="img/alergenos/gluten-lacteos.png" width="200px" height="200px">
    <br>
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @foreach ($this->products as $product)
            @if ($product->type == 'Pizza' && $product->habilitado)
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                    <a href="{{ route('products.show', $product->id) }}"><img
                            src="{{ asset($product->image) }}" class="w-full max-h-60"
                            id="imgproducto"></a>
                    <div class="flex items-end justify-end w-full bg-cover">

                    </div>
                    <div class="px-5 py-3">
                        <a href="{{ route('products.show', $product->id) }}">
                            @if (Lang::locale() == 'es')
                                <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                            @else
                                <h3 class="text-gray-700 uppercase">{{ $product->nameen }}</h3>
                            @endif
                        </a>
                        <?php
                        $alergenoslista = explode('-', $product->alergenos);
                        ?>
                        <div
                            style="display:flex; flex-wrap:wrap; margin-top:10px; margin-bottom:10px; gap:5px;">
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
                            @if (Lang::locale() == 'es')
                                <input type="hidden" value="{{ $product->name }}" name="name">
                            @else
                                <input type="hidden" value="{{ $product->nameen }}" name="name">
                            @endif
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
                            @if (Lang::locale() == 'es')
                                <input type="hidden" value="{{ $product->name }}" name="name">
                            @else
                                <input type="hidden" value="{{ $product->nameen }}" name="name">
                            @endif
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
        style="border-style: solid; border-width: 3px; border-color: purple; background-color: #efff91; padding: 20px; border-radius:10px;">
        <a href="{{ route('crearpizza') }}" class="text-2xl font-bold text-purple-700"
            id="crearpizza">{{ __('¡CREA TU PROPIA PIZZA AQUÍ!') }}</a>
    </div>
    <br><br><br>
    <h3 class="text-2xl font-bold text-purple-700" id="2">{{ __('HAMBURGUESAS') }}</h3>
    <div class="h-1 bg-red-500 w-36"></div>
    <br>
    <h2 class="text-2xl font-bold text-center" style="color:darkblue;">
        {{ __('"COCINA RÁPIDA DE CALIDAD"') }}</h2>
    <br>
    <img src="img/alergenos/gluten-sesamo.png" width="200px" height="200px">
    <br>
    <table>
        <tr>
            <td class="font-bold text-decoration-line: underline">{{ __('Extras para hamburguesas:') }}
            </td>
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
        @foreach ($this->products as $product)
            @if ($product->type == 'Hamburguesa' && $product->habilitado)
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                    <a href="{{ route('products.show', $product->id) }}"><img
                            src="{{ asset($product->image) }}" class="w-full max-h-60"
                            id="imgproducto"></a>
                    <div class="flex items-end justify-end w-full bg-cover">

                    </div>
                    <div class="px-5 py-3">
                        <a href="{{ route('products.show', $product->id) }}">
                            @if (Lang::locale() == 'es')
                                <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                            @else
                                <h3 class="text-gray-700 uppercase">{{ $product->nameen }}</h3>
                            @endif
                        </a>
                        <?php
                        $alergenoslista = explode('-', $product->alergenos);
                        ?>
                        <div
                            style="display:flex; flex-wrap:wrap; margin-top:10px; margin-bottom:10px; gap:5px;">
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
                            @if (Lang::locale() == 'es')
                                <input type="hidden" value="{{ $product->name }}" name="name">
                            @else
                                <input type="hidden" value="{{ $product->nameen }}" name="name">
                            @endif
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
                            @if (Lang::locale() == 'es')
                                <input type="hidden" value="{{ $product->name }}" name="name">
                            @else
                                <input type="hidden" value="{{ $product->nameen }}" name="name">
                            @endif
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
        @foreach ($this->products as $product)
            @if ($product->type == 'Sándwich' && $product->habilitado)
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                    <a href="{{ route('products.show', $product->id) }}"><img
                            src="{{ asset($product->image) }}" class="w-full max-h-60"
                            id="imgproducto"></a>
                    <div class="flex items-end justify-end w-full bg-cover">

                    </div>
                    <div class="px-5 py-3">
                        <a href="{{ route('products.show', $product->id) }}">
                            @if (Lang::locale() == 'es')
                                <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                            @else
                                <h3 class="text-gray-700 uppercase">{{ $product->nameen }}</h3>
                            @endif
                        </a>
                        <?php
                        $alergenoslista = explode('-', $product->alergenos);
                        ?>
                        <div
                            style="display:flex; flex-wrap:wrap; margin-top:10px; margin-bottom:10px; gap:5px;">
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
                            @if (Lang::locale() == 'es')
                                <input type="hidden" value="{{ $product->name }}" name="name">
                            @else
                                <input type="hidden" value="{{ $product->nameen }}" name="name">
                            @endif
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
                            @if (Lang::locale() == 'es')
                                <input type="hidden" value="{{ $product->name }}" name="name">
                            @else
                                <input type="hidden" value="{{ $product->nameen }}" name="name">
                            @endif
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
        @foreach ($this->products as $product)
            @if ($product->type == 'Pasta' && $product->habilitado)
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                    <a href="{{ route('products.show', $product->id) }}"><img
                            src="{{ asset($product->image) }}" class="w-full max-h-60"
                            id="imgproducto"></a>
                    <div class="flex items-end justify-end w-full bg-cover">

                    </div>
                    <div class="px-5 py-3">
                        <a href="{{ route('products.show', $product->id) }}">
                            @if (Lang::locale() == 'es')
                                <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                            @else
                                <h3 class="text-gray-700 uppercase">{{ $product->nameen }}</h3>
                            @endif
                        </a>
                        <?php
                        $alergenoslista = explode('-', $product->alergenos);
                        ?>
                        <div
                            style="display:flex; flex-wrap:wrap; margin-top:10px; margin-bottom:10px; gap:5px;">
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
                            @if (Lang::locale() == 'es')
                                <input type="hidden" value="{{ $product->name }}" name="name">
                            @else
                                <input type="hidden" value="{{ $product->nameen }}" name="name">
                            @endif
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
                            @if (Lang::locale() == 'es')
                                <input type="hidden" value="{{ $product->name }}" name="name">
                            @else
                                <input type="hidden" value="{{ $product->nameen }}" name="name">
                            @endif
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
        @foreach ($this->products as $product)
            @if ($product->type == 'Arroz' && $product->habilitado)
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                    <a href="{{ route('products.show', $product->id) }}"><img
                            src="{{ asset($product->image) }}" class="w-full max-h-60"
                            id="imgproducto"></a>
                    <div class="flex items-end justify-end w-full bg-cover">

                    </div>
                    <div class="px-5 py-3">
                        <a href="{{ route('products.show', $product->id) }}">
                            @if (Lang::locale() == 'es')
                                <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                            @else
                                <h3 class="text-gray-700 uppercase">{{ $product->nameen }}</h3>
                            @endif
                        </a>
                        <?php
                        $alergenoslista = explode('-', $product->alergenos);
                        ?>
                        <div
                            style="display:flex; flex-wrap:wrap; margin-top:10px; margin-bottom:10px; gap:5px;">
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
                            @if (Lang::locale() == 'es')
                                <input type="hidden" value="{{ $product->name }}" name="name">
                            @else
                                <input type="hidden" value="{{ $product->nameen }}" name="name">
                            @endif
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
                            @if (Lang::locale() == 'es')
                                <input type="hidden" value="{{ $product->name }}" name="name">
                            @else
                                <input type="hidden" value="{{ $product->nameen }}" name="name">
                            @endif
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
        @foreach ($this->products as $product)
            @if ($product->type == 'Baguette' && $product->habilitado)
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                    <a href="{{ route('products.show', $product->id) }}"><img
                            src="{{ asset($product->image) }}" class="w-full max-h-60"
                            id="imgproducto"></a>
                    <div class="flex items-end justify-end w-full bg-cover">

                    </div>
                    <div class="px-5 py-3">
                        <a href="{{ route('products.show', $product->id) }}">
                            @if (Lang::locale() == 'es')
                                <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                            @else
                                <h3 class="text-gray-700 uppercase">{{ $product->nameen }}</h3>
                            @endif
                        </a>
                        <?php
                        $alergenoslista = explode('-', $product->alergenos);
                        ?>
                        <div
                            style="display:flex; flex-wrap:wrap; margin-top:10px; margin-bottom:10px; gap:5px;">
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
                            @if (Lang::locale() == 'es')
                                <input type="hidden" value="{{ $product->name }}" name="name">
                            @else
                                <input type="hidden" value="{{ $product->nameen }}" name="name">
                            @endif
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
                            @if (Lang::locale() == 'es')
                                <input type="hidden" value="{{ $product->name }}" name="name">
                            @else
                                <input type="hidden" value="{{ $product->nameen }}" name="name">
                            @endif
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
        @foreach ($this->products as $product)
            @if ($product->type == 'Ensalada' && $product->habilitado)
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                    <a href="{{ route('products.show', $product->id) }}"><img
                            src="{{ asset($product->image) }}" class="w-full max-h-60"
                            id="imgproducto"></a>
                    <div class="flex items-end justify-end w-full bg-cover">

                    </div>
                    <div class="px-5 py-3">
                        <a href="{{ route('products.show', $product->id) }}">
                            @if (Lang::locale() == 'es')
                                <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                            @else
                                <h3 class="text-gray-700 uppercase">{{ $product->nameen }}</h3>
                            @endif
                        </a>
                        <?php
                        $alergenoslista = explode('-', $product->alergenos);
                        ?>
                        <div
                            style="display:flex; flex-wrap:wrap; margin-top:10px; margin-bottom:10px; gap:5px;">
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
                            @if (Lang::locale() == 'es')
                                <input type="hidden" value="{{ $product->name }}" name="name">
                            @else
                                <input type="hidden" value="{{ $product->nameen }}" name="name">
                            @endif
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
                            @if (Lang::locale() == 'es')
                                <input type="hidden" value="{{ $product->name }}" name="name">
                            @else
                                <input type="hidden" value="{{ $product->nameen }}" name="name">
                            @endif
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
        @foreach ($this->products as $product)
            @if ($product->type == 'Complemento' && $product->habilitado)
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                    <a href="{{ route('products.show', $product->id) }}"><img
                            src="{{ asset($product->image) }}" class="w-full max-h-60"
                            id="imgproducto"></a>
                    <div class="flex items-end justify-end w-full bg-cover">

                    </div>
                    <div class="px-5 py-3">
                        <a href="{{ route('products.show', $product->id) }}">
                            @if (Lang::locale() == 'es')
                                <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                            @else
                                <h3 class="text-gray-700 uppercase">{{ $product->nameen }}</h3>
                            @endif
                        </a>
                        <?php
                        $alergenoslista = explode('-', $product->alergenos);
                        ?>
                        <div
                            style="display:flex; flex-wrap:wrap; margin-top:10px; margin-bottom:10px; gap:5px;">
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
                            @if (Lang::locale() == 'es')
                                <input type="hidden" value="{{ $product->name }}" name="name">
                            @else
                                <input type="hidden" value="{{ $product->nameen }}" name="name">
                            @endif
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
                            @if (Lang::locale() == 'es')
                                <input type="hidden" value="{{ $product->name }}" name="name">
                            @else
                                <input type="hidden" value="{{ $product->nameen }}" name="name">
                            @endif
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
        @foreach ($this->products as $product)
            @if ($product->type == 'Perrito' && $product->habilitado)
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                    <a href="{{ route('products.show', $product->id) }}"><img
                            src="{{ asset($product->image) }}" class="w-full max-h-60"
                            id="imgproducto"></a>
                    <div class="flex items-end justify-end w-full bg-cover">

                    </div>
                    <div class="px-5 py-3">
                        <a href="{{ route('products.show', $product->id) }}">
                            @if (Lang::locale() == 'es')
                                <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                            @else
                                <h3 class="text-gray-700 uppercase">{{ $product->nameen }}</h3>
                            @endif
                        </a>
                        <?php
                        $alergenoslista = explode('-', $product->alergenos);
                        ?>
                        <div
                            style="display:flex; flex-wrap:wrap; margin-top:10px; margin-bottom:10px; gap:5px;">
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
                            @if (Lang::locale() == 'es')
                                <input type="hidden" value="{{ $product->name }}" name="name">
                            @else
                                <input type="hidden" value="{{ $product->nameen }}" name="name">
                            @endif
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
                            @if (Lang::locale() == 'es')
                                <input type="hidden" value="{{ $product->name }}" name="name">
                            @else
                                <input type="hidden" value="{{ $product->nameen }}" name="name">
                            @endif
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
        @foreach ($this->products as $product)
            @if ($product->type == 'Cerveza' && $product->habilitado)
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                    <a href="{{ route('products.show', $product->id) }}"><img
                            src="{{ asset($product->image) }}" class="w-full max-h-60"
                            id="imgproducto"></a>
                    <div class="flex items-end justify-end w-full bg-cover">

                    </div>
                    <div class="px-5 py-3">
                        <a href="{{ route('products.show', $product->id) }}">
                            @if (Lang::locale() == 'es')
                                <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                            @else
                                <h3 class="text-gray-700 uppercase">{{ $product->nameen }}</h3>
                            @endif
                        </a>
                        <?php
                        $alergenoslista = explode('-', $product->alergenos);
                        ?>
                        <div
                            style="display:flex; flex-wrap:wrap; margin-top:10px; margin-bottom:10px; gap:5px;">
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
                            @if (Lang::locale() == 'es')
                                <input type="hidden" value="{{ $product->name }}" name="name">
                            @else
                                <input type="hidden" value="{{ $product->nameen }}" name="name">
                            @endif
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
                            @if (Lang::locale() == 'es')
                                <input type="hidden" value="{{ $product->name }}" name="name">
                            @else
                                <input type="hidden" value="{{ $product->nameen }}" name="name">
                            @endif
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
        @foreach ($this->products as $product)
            @if ($product->type == 'Vino' && $product->habilitado)
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                    <a href="{{ route('products.show', $product->id) }}"><img
                            src="{{ asset($product->image) }}" class="w-full max-h-60"
                            id="imgproducto"></a>
                    <div class="flex items-end justify-end w-full bg-cover">

                    </div>
                    <div class="px-5 py-3">
                        <a href="{{ route('products.show', $product->id) }}">
                            @if (Lang::locale() == 'es')
                                <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                            @else
                                <h3 class="text-gray-700 uppercase">{{ $product->nameen }}</h3>
                            @endif
                        </a>
                        <?php
                        $alergenoslista = explode('-', $product->alergenos);
                        ?>
                        <div
                            style="display:flex; flex-wrap:wrap; margin-top:10px; margin-bottom:10px; gap:5px;">
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
                            @if (Lang::locale() == 'es')
                                <input type="hidden" value="{{ $product->name }}" name="name">
                            @else
                                <input type="hidden" value="{{ $product->nameen }}" name="name">
                            @endif
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
                            @if (Lang::locale() == 'es')
                                <input type="hidden" value="{{ $product->name }}" name="name">
                            @else
                                <input type="hidden" value="{{ $product->nameen }}" name="name">
                            @endif
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
                            <form method="post"
                                action="{{ route('products.destroy', $product->id) }}" class="inline">
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
        @foreach ($this->products as $product)
            @if ($product->type == 'Refresco' && $product->habilitado)
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                    <a href="{{ route('products.show', $product->id) }}"><img
                            src="{{ asset($product->image) }}" class="w-full max-h-60"
                            id="imgproducto"></a>
                    <div class="flex items-end justify-end w-full bg-cover">

                    </div>
                    <div class="px-5 py-3">
                        <a href="{{ route('products.show', $product->id) }}">
                            @if (Lang::locale() == 'es')
                                <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                            @else
                                <h3 class="text-gray-700 uppercase">{{ $product->nameen }}</h3>
                            @endif
                        </a>
                        <?php
                        $alergenoslista = explode('-', $product->alergenos);
                        ?>
                        <div
                            style="display:flex; flex-wrap:wrap; margin-top:10px; margin-bottom:10px; gap:5px;">
                            @if ($product->alergenos != '')
                                @foreach ($alergenoslista as $alergeno)
                                    <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                        width="40px" height="40px">
                                @endforeach
                            @endif
                        </div>
                        <br>
                        <span
                            class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }}
                            €</span>
                        <br><br>
                        <form action="{{ route('cart.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" name="id">
                            @if (Lang::locale() == 'es')
                                <input type="hidden" value="{{ $product->name }}" name="name">
                            @else
                                <input type="hidden" value="{{ $product->nameen }}" name="name">
                            @endif
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
                            @if (Lang::locale() == 'es')
                                <input type="hidden" value="{{ $product->name }}" name="name">
                            @else
                                <input type="hidden" value="{{ $product->nameen }}" name="name">
                            @endif
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
                            <form method="post"
                                action="{{ route('products.destroy', $product->id) }}" class="inline">
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
