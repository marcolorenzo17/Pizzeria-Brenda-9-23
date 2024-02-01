<div>
    @if ($search)
        <p style="margin-bottom:30px; margin-top:30px; font-size:20px;">{{ __('Búsqueda: ') }} {{ $search }}</p>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($this->products as $product)
                @if ($product->habilitado && $product->type != 'Promoción' && $product->type != 'Oferta')
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <a href="{{ route('products.show', $product->id) }}"><img src="{{ asset($product->image) }}"
                                class="w-full max-h-60" id="imgproducto"></a>
                        <div class="flex items-end justify-end w-full bg-cover">

                        </div>
                        <div class="px-5 py-3">
                            <a href="{{ route('products.show', $product->id) }}">
                                @if (Lang::locale() == 'es')
                                    <h3 class="text-gray-700 uppercase"
                                        style="font-family: 'Acme', sans-serif; font-size:25px;">{{ $product->name }}
                                    </h3>
                                @else
                                    <h3 class="text-gray-700 uppercase"
                                        style="font-family: 'Acme', sans-serif; font-size:25px;">{{ $product->nameen }}
                                    </h3>
                                @endif
                            </a>
                            <?php
                            $alergenoslista = explode('-', $product->alergenos);
                            ?>
                            <div style="display:flex; flex-wrap:wrap; margin-top:10px; margin-bottom:10px; gap:5px;">
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
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
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
                                    style="background-color:#568c2c;">{{ __('AÑADIR AL CARRITO') }}</button>
                                <br><br>
                            </form>
                            <form action="{{ route('cart.inmediato') }}" method="POST" enctype="multipart/form-data">
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
                                    style="background-color:#274014;">{{ __('COMPRA INMEDIATA') }}</button>
                                <br><br>
                            </form>
                        </div>

                    </div>
                @endif
            @endforeach
        </div>
    @else
        <div class="container px-12 py-8 mx-auto">
            <div class="p-6 text-gray-900 h-screen flex items-center justify-center" id="productos-grande">
                <table class="table-auto w-full text-center"
                    style="border-collapse: separate; border-spacing:10px 10px;">
                    <tr>
                        <td>
                            <a href="#1"><img src="{{ asset('img/vegetal.jpg') }}"
                                    style="display: block; margin-left: auto; margin-right: auto; background: white; border: gray; border-style: solid; border-radius: 10px; width:250px; height:200px;"
                                    id="filtroproducto"></a>
                            <p style="text-align:center; font-family: 'Grandstander', cursive; font-size:30px;">PIZZAS
                            </p>
                        </td>
                        <td>
                            <a href="#2"><img src="{{ asset('img/crunchi.jpg') }}"
                                    style="display: block; margin-left: auto; margin-right: auto; background: white; border: gray; border-style: solid; border-radius: 10px; width:250px; height:200px;"
                                    id="filtroproducto"></a>
                            <p style="text-align:center; font-family: 'Grandstander', cursive; font-size:30px;">
                                {{ __('HAMBURGUESAS') }}</p>
                        </td>
                        <td>
                            <a href="#3"><img src="{{ asset('img/especial.jpg') }}"
                                    style="display: block; margin-left: auto; margin-right: auto; background: white; border: gray; border-style: solid; border-radius: 10px; width:250px; height:200px;"
                                    id="filtroproducto"></a>
                            <p style="text-align:center; font-family: 'Grandstander', cursive; font-size:30px;">
                                {{ __('SÁNDWICHES') }}</p>
                        </td>
                        <td>
                            <a href="#4"><img src="{{ asset('img/boloñesa.jpg') }}"
                                    style="display: block; margin-left: auto; margin-right: auto; background: white; border: gray; border-style: solid; border-radius: 10px; width:250px; height:200px;"
                                    id="filtroproducto"></a>
                            <p style="text-align:center; font-family: 'Grandstander', cursive; font-size:30px;">PASTA
                            </p>
                        </td>
                        <td>
                            <a href="#5"><img src="{{ asset('img/arrozfrito.jpg') }}"
                                    style="display: block; margin-left: auto; margin-right: auto; background: white; border: gray; border-style: solid; border-radius: 10px; width:250px; height:200px;"
                                    id="filtroproducto"></a>
                            <p style="text-align:center; font-family: 'Grandstander', cursive; font-size:30px;">
                                {{ __('ARROCES') }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#6"><img src="{{ asset('img/bavegetal.jpg') }}"
                                    style="display: block; margin-left: auto; margin-right: auto; background: white; border: gray; border-style: solid; border-radius: 10px; width:250px; height:200px;"
                                    id="filtroproducto"></a>
                            <p style="text-align:center; font-family: 'Grandstander', cursive; font-size:30px;">
                                {{ __('BAGUETTES') }}</p>
                        </td>
                        <td>
                            <a href="#7"><img src="{{ asset('img/enormal.jpg') }}"
                                    style="display: block; margin-left: auto; margin-right: auto; background: white; border: gray; border-style: solid; border-radius: 10px; width:250px; height:200px;"
                                    id="filtroproducto"></a>
                            <p style="text-align:center; font-family: 'Grandstander', cursive; font-size:30px;">
                                {{ __('ENSALADAS') }}</p>
                        </td>
                        <td>
                            <a href="#8"><img src="{{ asset('img/nuggets.jpg') }}"
                                    style="display: block; margin-left: auto; margin-right: auto; background: white; border: gray; border-style: solid; border-radius: 10px; width:250px; height:200px;"
                                    id="filtroproducto"></a>
                            <p style="text-align:center; font-family: 'Grandstander', cursive; font-size:30px;">
                                {{ __('COMPLEMENTOS') }}</p>
                        </td>
                        <td>
                            <a href="#9"><img src="{{ asset('img/perrito.jpg') }}"
                                    style="display: block; margin-left: auto; margin-right: auto; background: white; border: gray; border-style: solid; border-radius: 10px; width:250px; height:200px;"
                                    id="filtroproducto"></a>
                            <p style="text-align:center; font-family: 'Grandstander', cursive; font-size:30px;">
                                {{ __('PERRITOS') }}</p>
                        </td>
                        <td>
                            <a href="#10"><img src="{{ asset('img/lata.jpg') }}"
                                    style="display: block; margin-left: auto; margin-right: auto; background: white; border: gray; border-style: solid; border-radius: 10px; width:250px; height:200px;"
                                    id="filtroproducto"></a>
                            <p style="text-align:center; font-family: 'Grandstander', cursive; font-size:30px;">
                                {{ __('BEBIDAS') }}</p>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
                style="flex-wrap:wrap; align-items:center; text-align:center; justify-content:center;"
                id="productos-pequenio">
                <div>
                    <a href="#1"><img src="{{ asset('img/vegetal.jpg') }}"
                            style="display: block; margin-left: auto; margin-right: auto; background: white; border: gray; border-style: solid; border-radius: 10px; width:250px; height:200px;"
                            id="filtroproducto">
                    </a>
                    <p style="text-align:center; font-family: 'Grandstander', cursive; font-size:30px;">PIZZAS</p>
                </div>
                <div>
                    <a href="#2"><img src="{{ asset('img/crunchi.jpg') }}"
                            style="display: block; margin-left: auto; margin-right: auto; background: white; border: gray; border-style: solid; border-radius: 10px; width:250px; height:200px;"
                            id="filtroproducto"></a>
                    <p style="text-align:center; font-family: 'Grandstander', cursive; font-size:30px;">
                        {{ __('HAMBURGUESAS') }}</p>
                </div>
                <div>
                    <a href="#3"><img src="{{ asset('img/especial.jpg') }}"
                            style="display: block; margin-left: auto; margin-right: auto; background: white; border: gray; border-style: solid; border-radius: 10px; width:250px; height:200px;"
                            id="filtroproducto"></a>
                    <p style="text-align:center; font-family: 'Grandstander', cursive; font-size:30px;">
                        {{ __('SÁNDWICHES') }}</p>
                </div>
                <div>
                    <a href="#4"><img src="{{ asset('img/boloñesa.jpg') }}"
                            style="display: block; margin-left: auto; margin-right: auto; background: white; border: gray; border-style: solid; border-radius: 10px; width:250px; height:200px;"
                            id="filtroproducto"></a>
                    <p style="text-align:center; font-family: 'Grandstander', cursive; font-size:30px;">PASTA</p>
                </div>
                <div>
                    <a href="#5"><img src="{{ asset('img/arrozfrito.jpg') }}"
                            style="display: block; margin-left: auto; margin-right: auto; background: white; border: gray; border-style: solid; border-radius: 10px; width:250px; height:200px;"
                            id="filtroproducto"></a>
                    <p style="text-align:center; font-family: 'Grandstander', cursive; font-size:30px;">
                        {{ __('ARROCES') }}
                    </p>
                </div>
                <div>
                    <a href="#6"><img src="{{ asset('img/bavegetal.jpg') }}"
                            style="display: block; margin-left: auto; margin-right: auto; background: white; border: gray; border-style: solid; border-radius: 10px; width:250px; height:200px;"
                            id="filtroproducto"></a>
                    <p style="text-align:center; font-family: 'Grandstander', cursive; font-size:30px;">
                        {{ __('BAGUETTES') }}</p>
                </div>
                <div>
                    <a href="#7"><img src="{{ asset('img/enormal.jpg') }}"
                            style="display: block; margin-left: auto; margin-right: auto; background: white; border: gray; border-style: solid; border-radius: 10px; width:250px; height:200px;"
                            id="filtroproducto"></a>
                    <p style="text-align:center; font-family: 'Grandstander', cursive; font-size:30px;">
                        {{ __('ENSALADAS') }}</p>
                </div>
                <div>
                    <a href="#8"><img src="{{ asset('img/nuggets.jpg') }}"
                            style="display: block; margin-left: auto; margin-right: auto; background: white; border: gray; border-style: solid; border-radius: 10px; width:250px; height:200px;"
                            id="filtroproducto"></a>
                    <p style="text-align:center; font-family: 'Grandstander', cursive; font-size:30px;">
                        {{ __('COMPLEMENTOS') }}</p>
                </div>
                <div>
                    <a href="#9"><img src="{{ asset('img/perrito.jpg') }}"
                            style="display: block; margin-left: auto; margin-right: auto; background: white; border: gray; border-style: solid; border-radius: 10px; width:250px; height:200px;"
                            id="filtroproducto"></a>
                    <p style="text-align:center; font-family: 'Grandstander', cursive; font-size:30px;">
                        {{ __('PERRITOS') }}</p>
                </div>
                <div>
                    <a href="#10"><img src="{{ asset('img/lata.jpg') }}"
                            style="display: block; margin-left: auto; margin-right: auto; background: white; border: gray; border-style: solid; border-radius: 10px; width:250px; height:200px;"
                            id="filtroproducto"></a>
                    <p style="text-align:center; font-family: 'Grandstander', cursive; font-size:30px;">
                        {{ __('BEBIDAS') }}</p>
                </div>
            </div>
            <br>
            {{--
            <div class="sm:hidden">Hola</div>
        --}}
        </div>
        <h3 class="text-2xl font-bold" style="color:#568c2c; font-family: 'Grandstander', cursive; font-size:30px;"
            id="1">PIZZAS</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <br>
        <h2 class="text-2xl font-bold text-center" style="color:#568c2c; font-family: 'Acme', sans-serif; font-size:25px;">
            {{ __('"EL PLACER DE UNA BUENA PIZZA ARTESANAL"') }}</h2>
        <br>
        <img src="img/alergenos/gluten-lacteos.png" width="200px" height="200px">
        <br>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($this->products as $product)
                @if ($product->type == 'Pizza' && $product->habilitado)
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <a href="{{ route('products.show', $product->id) }}"><img src="{{ asset($product->image) }}"
                                class="w-full max-h-60" id="imgproducto"></a>
                        <div class="flex items-end justify-end w-full bg-cover">

                        </div>
                        <div class="px-5 py-3">
                            <a href="{{ route('products.show', $product->id) }}">
                                @if (Lang::locale() == 'es')
                                    <h3 class="text-gray-700 uppercase"
                                        style="font-family: 'Acme', sans-serif; font-size:25px;">{{ $product->name }}
                                    </h3>
                                @else
                                    <h3 class="text-gray-700 uppercase"
                                        style="font-family: 'Acme', sans-serif; font-size:25px;">
                                        {{ $product->nameen }}</h3>
                                @endif
                            </a>
                            <?php
                            $alergenoslista = explode('-', $product->alergenos);
                            ?>
                            <div style="display:flex; flex-wrap:wrap; margin-top:10px; margin-bottom:10px; gap:5px;">
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
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
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
                                    style="background-color:#568c2c;">{{ __('AÑADIR AL CARRITO') }}</button>
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
                                    style="background-color:#274014;">{{ __('COMPRA INMEDIATA') }}</button>
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
            style="border-style: solid; border-width: 3px; border-color: #f12d2d; background-color:white; padding: 30px; border-radius:10px; font-family: 'Acme', sans-serif;">
            <a href="{{ route('crearpizza') }}" class="text-2xl font-bold"
                id="crearpizza">{{ __('¡CREA TU PROPIA PIZZA AQUÍ!') }}</a>
        </div>
        <br><br><br>
        <h3 class="text-2xl font-bold" style="color:#568c2c; font-family: 'Grandstander', cursive; font-size:30px;"
            id="2">{{ __('HAMBURGUESAS') }}</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <br>
        <h2 class="text-2xl font-bold text-center" style="color:#568c2c; font-family: 'Acme', sans-serif; font-size:25px;">
            {{ __('"COCINA RÁPIDA DE CALIDAD"') }}</h2>
        <br>
        <img src="img/alergenos/gluten-sesamo.png" width="200px" height="200px">
        <br>
        <table>
            <tr>
                <td style="font-family: 'Acme', sans-serif; font-size:18px;">{{ __('Extras para hamburguesas:') }}
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
                        <a href="{{ route('products.show', $product->id) }}"><img src="{{ asset($product->image) }}"
                                class="w-full max-h-60" id="imgproducto"></a>
                        <div class="flex items-end justify-end w-full bg-cover">

                        </div>
                        <div class="px-5 py-3">
                            <a href="{{ route('products.show', $product->id) }}">
                                @if (Lang::locale() == 'es')
                                    <h3 class="text-gray-700 uppercase"
                                        style="font-family: 'Acme', sans-serif; font-size:25px;">{{ $product->name }}
                                    </h3>
                                @else
                                    <h3 class="text-gray-700 uppercase"
                                        style="font-family: 'Acme', sans-serif; font-size:25px;">
                                        {{ $product->nameen }}</h3>
                                @endif
                            </a>
                            <?php
                            $alergenoslista = explode('-', $product->alergenos);
                            ?>
                            <div style="display:flex; flex-wrap:wrap; margin-top:10px; margin-bottom:10px; gap:5px;">
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
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
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
                                    style="background-color:#568c2c;">{{ __('AÑADIR AL CARRITO') }}</button>
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
                                    style="background-color:#274014;">{{ __('COMPRA INMEDIATA') }}</button>
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
        <h3 class="text-2xl font-bold" style="color:#568c2c; font-family: 'Grandstander', cursive; font-size:30px;"
            id="3">{{ __('SÁNDWICHES') }}</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <br>
        <img src="img/alergenos/gluten-lacteos-huevos-soja.png" width="200px" height="200px">
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($this->products as $product)
                @if ($product->type == 'Sándwich' && $product->habilitado)
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <a href="{{ route('products.show', $product->id) }}"><img
                                src="{{ asset($product->image) }}" class="w-full max-h-60" id="imgproducto"></a>
                        <div class="flex items-end justify-end w-full bg-cover">

                        </div>
                        <div class="px-5 py-3">
                            <a href="{{ route('products.show', $product->id) }}">
                                @if (Lang::locale() == 'es')
                                    <h3 class="text-gray-700 uppercase"
                                        style="font-family: 'Acme', sans-serif; font-size:25px;">{{ $product->name }}
                                    </h3>
                                @else
                                    <h3 class="text-gray-700 uppercase"
                                        style="font-family: 'Acme', sans-serif; font-size:25px;">
                                        {{ $product->nameen }}</h3>
                                @endif
                            </a>
                            <?php
                            $alergenoslista = explode('-', $product->alergenos);
                            ?>
                            <div style="display:flex; flex-wrap:wrap; margin-top:10px; margin-bottom:10px; gap:5px;">
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
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
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
                                    style="background-color:#568c2c;">{{ __('AÑADIR AL CARRITO') }}</button>
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
                                    style="background-color:#274014;">{{ __('COMPRA INMEDIATA') }}</button>
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
        <h3 class="text-2xl font-bold" style="color:#568c2c; font-family: 'Grandstander', cursive; font-size:30px;"
            id="4">PASTA</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <br>
        <img src="img/alergenos/gluten-lacteos.png" width="200px" height="200px">
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($this->products as $product)
                @if ($product->type == 'Pasta' && $product->habilitado)
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <a href="{{ route('products.show', $product->id) }}"><img
                                src="{{ asset($product->image) }}" class="w-full max-h-60" id="imgproducto"></a>
                        <div class="flex items-end justify-end w-full bg-cover">

                        </div>
                        <div class="px-5 py-3">
                            <a href="{{ route('products.show', $product->id) }}">
                                @if (Lang::locale() == 'es')
                                    <h3 class="text-gray-700 uppercase"
                                        style="font-family: 'Acme', sans-serif; font-size:25px;">{{ $product->name }}
                                    </h3>
                                @else
                                    <h3 class="text-gray-700 uppercase"
                                        style="font-family: 'Acme', sans-serif; font-size:25px;">
                                        {{ $product->nameen }}</h3>
                                @endif
                            </a>
                            <?php
                            $alergenoslista = explode('-', $product->alergenos);
                            ?>
                            <div style="display:flex; flex-wrap:wrap; margin-top:10px; margin-bottom:10px; gap:5px;">
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
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
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
                                    style="background-color:#568c2c;">{{ __('AÑADIR AL CARRITO') }}</button>
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
                                    style="background-color:#274014;">{{ __('COMPRA INMEDIATA') }}</button>
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
        <h3 class="text-2xl font-bold" style="color:#568c2c; font-family: 'Grandstander', cursive; font-size:30px;"
            id="5">{{ __('ARROCES') }}</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <br>
        <img src="img/alergenos/gluten-lacteos.png" width="200px" height="200px">
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($this->products as $product)
                @if ($product->type == 'Arroz' && $product->habilitado)
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <a href="{{ route('products.show', $product->id) }}"><img
                                src="{{ asset($product->image) }}" class="w-full max-h-60" id="imgproducto"></a>
                        <div class="flex items-end justify-end w-full bg-cover">

                        </div>
                        <div class="px-5 py-3">
                            <a href="{{ route('products.show', $product->id) }}">
                                @if (Lang::locale() == 'es')
                                    <h3 class="text-gray-700 uppercase"
                                        style="font-family: 'Acme', sans-serif; font-size:25px;">{{ $product->name }}
                                    </h3>
                                @else
                                    <h3 class="text-gray-700 uppercase"
                                        style="font-family: 'Acme', sans-serif; font-size:25px;">
                                        {{ $product->nameen }}</h3>
                                @endif
                            </a>
                            <?php
                            $alergenoslista = explode('-', $product->alergenos);
                            ?>
                            <div style="display:flex; flex-wrap:wrap; margin-top:10px; margin-bottom:10px; gap:5px;">
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
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
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
                                    style="background-color:#568c2c;">{{ __('AÑADIR AL CARRITO') }}</button>
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
                                    style="background-color:#274014;">{{ __('COMPRA INMEDIATA') }}</button>
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
        <h3 class="text-2xl font-bold" style="color:#568c2c; font-family: 'Grandstander', cursive; font-size:30px;"
            id="6">BAGUETTES</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <br>
        <img src="img/alergenos/gluten-lacteos.png" width="200px" height="200px">
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($this->products as $product)
                @if ($product->type == 'Baguette' && $product->habilitado)
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <a href="{{ route('products.show', $product->id) }}"><img
                                src="{{ asset($product->image) }}" class="w-full max-h-60" id="imgproducto"></a>
                        <div class="flex items-end justify-end w-full bg-cover">

                        </div>
                        <div class="px-5 py-3">
                            <a href="{{ route('products.show', $product->id) }}">
                                @if (Lang::locale() == 'es')
                                    <h3 class="text-gray-700 uppercase"
                                        style="font-family: 'Acme', sans-serif; font-size:25px;">{{ $product->name }}
                                    </h3>
                                @else
                                    <h3 class="text-gray-700 uppercase"
                                        style="font-family: 'Acme', sans-serif; font-size:25px;">
                                        {{ $product->nameen }}</h3>
                                @endif
                            </a>
                            <?php
                            $alergenoslista = explode('-', $product->alergenos);
                            ?>
                            <div style="display:flex; flex-wrap:wrap; margin-top:10px; margin-bottom:10px; gap:5px;">
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
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
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
                                    style="background-color:#568c2c;">{{ __('AÑADIR AL CARRITO') }}</button>
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
                                    style="background-color:#274014;">{{ __('COMPRA INMEDIATA') }}</button>
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
        <h3 class="text-2xl font-bold" style="color:#568c2c; font-family: 'Grandstander', cursive; font-size:30px;"
            id="7">{{ __('ENSALADAS') }}</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <br>
        <img src="img/alergenos/dioxido.png" width="200px" height="200px">
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($this->products as $product)
                @if ($product->type == 'Ensalada' && $product->habilitado)
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <a href="{{ route('products.show', $product->id) }}"><img
                                src="{{ asset($product->image) }}" class="w-full max-h-60" id="imgproducto"></a>
                        <div class="flex items-end justify-end w-full bg-cover">

                        </div>
                        <div class="px-5 py-3">
                            <a href="{{ route('products.show', $product->id) }}">
                                @if (Lang::locale() == 'es')
                                    <h3 class="text-gray-700 uppercase"
                                        style="font-family: 'Acme', sans-serif; font-size:25px;">{{ $product->name }}
                                    </h3>
                                @else
                                    <h3 class="text-gray-700 uppercase"
                                        style="font-family: 'Acme', sans-serif; font-size:25px;">
                                        {{ $product->nameen }}</h3>
                                @endif
                            </a>
                            <?php
                            $alergenoslista = explode('-', $product->alergenos);
                            ?>
                            <div style="display:flex; flex-wrap:wrap; margin-top:10px; margin-bottom:10px; gap:5px;">
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
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
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
                                    style="background-color:#568c2c;">{{ __('AÑADIR AL CARRITO') }}</button>
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
                                    style="background-color:#274014;">{{ __('COMPRA INMEDIATA') }}</button>
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
        <h3 class="text-2xl font-bold" style="color:#568c2c; font-family: 'Grandstander', cursive; font-size:30px;"
            id="8">{{ __('COMPLEMENTOS') }}</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($this->products as $product)
                @if ($product->type == 'Complemento' && $product->habilitado)
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <a href="{{ route('products.show', $product->id) }}"><img
                                src="{{ asset($product->image) }}" class="w-full max-h-60" id="imgproducto"></a>
                        <div class="flex items-end justify-end w-full bg-cover">

                        </div>
                        <div class="px-5 py-3">
                            <a href="{{ route('products.show', $product->id) }}">
                                @if (Lang::locale() == 'es')
                                    <h3 class="text-gray-700 uppercase"
                                        style="font-family: 'Acme', sans-serif; font-size:25px;">{{ $product->name }}
                                    </h3>
                                @else
                                    <h3 class="text-gray-700 uppercase"
                                        style="font-family: 'Acme', sans-serif; font-size:25px;">
                                        {{ $product->nameen }}</h3>
                                @endif
                            </a>
                            <?php
                            $alergenoslista = explode('-', $product->alergenos);
                            ?>
                            <div style="display:flex; flex-wrap:wrap; margin-top:10px; margin-bottom:10px; gap:5px;">
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
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
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
                                    style="background-color:#568c2c;">{{ __('AÑADIR AL CARRITO') }}</button>
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
                                    style="background-color:#274014;">{{ __('COMPRA INMEDIATA') }}</button>
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
        <h3 class="text-2xl font-bold" style="color:#568c2c; font-family: 'Grandstander', cursive; font-size:30px;"
            id="9">{{ __('PERRITOS') }}</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <br>
        <img src="img/alergenos/gluten-lacteos.png" width="200px" height="200px">
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($this->products as $product)
                @if ($product->type == 'Perrito' && $product->habilitado)
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <a href="{{ route('products.show', $product->id) }}"><img
                                src="{{ asset($product->image) }}" class="w-full max-h-60" id="imgproducto"></a>
                        <div class="flex items-end justify-end w-full bg-cover">

                        </div>
                        <div class="px-5 py-3">
                            <a href="{{ route('products.show', $product->id) }}">
                                @if (Lang::locale() == 'es')
                                    <h3 class="text-gray-700 uppercase"
                                        style="font-family: 'Acme', sans-serif; font-size:25px;">{{ $product->name }}
                                    </h3>
                                @else
                                    <h3 class="text-gray-700 uppercase"
                                        style="font-family: 'Acme', sans-serif; font-size:25px;">
                                        {{ $product->nameen }}</h3>
                                @endif
                            </a>
                            <?php
                            $alergenoslista = explode('-', $product->alergenos);
                            ?>
                            <div style="display:flex; flex-wrap:wrap; margin-top:10px; margin-bottom:10px; gap:5px;">
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
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
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
                                    style="background-color:#568c2c;">{{ __('AÑADIR AL CARRITO') }}</button>
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
                                    style="background-color:#274014;">{{ __('COMPRA INMEDIATA') }}</button>
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
        <h3 class="text-2xl font-bold" style="color:#568c2c; font-family: 'Grandstander', cursive; font-size:30px;"
            id="10">{{ __('CERVEZAS') }}</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($this->products as $product)
                @if ($product->type == 'Cerveza' && $product->habilitado)
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <a href="{{ route('products.show', $product->id) }}"><img
                                src="{{ asset($product->image) }}" class="w-full max-h-60" id="imgproducto"></a>
                        <div class="flex items-end justify-end w-full bg-cover">

                        </div>
                        <div class="px-5 py-3">
                            <a href="{{ route('products.show', $product->id) }}">
                                @if (Lang::locale() == 'es')
                                    <h3 class="text-gray-700 uppercase"
                                        style="font-family: 'Acme', sans-serif; font-size:25px;">{{ $product->name }}
                                    </h3>
                                @else
                                    <h3 class="text-gray-700 uppercase"
                                        style="font-family: 'Acme', sans-serif; font-size:25px;">
                                        {{ $product->nameen }}</h3>
                                @endif
                            </a>
                            <?php
                            $alergenoslista = explode('-', $product->alergenos);
                            ?>
                            <div style="display:flex; flex-wrap:wrap; margin-top:10px; margin-bottom:10px; gap:5px;">
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
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
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
                                    style="background-color:#568c2c;">{{ __('AÑADIR AL CARRITO') }}</button>
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
                                    style="background-color:#274014;">{{ __('COMPRA INMEDIATA') }}</button>
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
        <h3 class="text-2xl font-bold" style="color:#568c2c; font-family: 'Grandstander', cursive; font-size:30px;">
            {{ __('VINOS Y LICORES') }}</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($this->products as $product)
                @if ($product->type == 'Vino' && $product->habilitado)
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <a href="{{ route('products.show', $product->id) }}"><img
                                src="{{ asset($product->image) }}" class="w-full max-h-60" id="imgproducto"></a>
                        <div class="flex items-end justify-end w-full bg-cover">

                        </div>
                        <div class="px-5 py-3">
                            <a href="{{ route('products.show', $product->id) }}">
                                @if (Lang::locale() == 'es')
                                    <h3 class="text-gray-700 uppercase"
                                        style="font-family: 'Acme', sans-serif; font-size:25px;">{{ $product->name }}
                                    </h3>
                                @else
                                    <h3 class="text-gray-700 uppercase"
                                        style="font-family: 'Acme', sans-serif; font-size:25px;">
                                        {{ $product->nameen }}</h3>
                                @endif
                            </a>
                            <?php
                            $alergenoslista = explode('-', $product->alergenos);
                            ?>
                            <div style="display:flex; flex-wrap:wrap; margin-top:10px; margin-bottom:10px; gap:5px;">
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
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
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
                                    style="background-color:#568c2c;">{{ __('AÑADIR AL CARRITO') }}</button>
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
                                    style="background-color:#274014;">{{ __('COMPRA INMEDIATA') }}</button>
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
        <h3 class="text-2xl font-bold" style="color:#568c2c; font-family: 'Grandstander', cursive; font-size:30px;">
            {{ __('REFRESCOS') }}</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($this->products as $product)
                @if ($product->type == 'Refresco' && $product->habilitado)
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <a href="{{ route('products.show', $product->id) }}"><img
                                src="{{ asset($product->image) }}" class="w-full max-h-60" id="imgproducto"></a>
                        <div class="flex items-end justify-end w-full bg-cover">

                        </div>
                        <div class="px-5 py-3">
                            <a href="{{ route('products.show', $product->id) }}">
                                @if (Lang::locale() == 'es')
                                    <h3 class="text-gray-700 uppercase"
                                        style="font-family: 'Acme', sans-serif; font-size:25px;">
                                        {{ $product->name }}</h3>
                                @else
                                    <h3 class="text-gray-700 uppercase"
                                        style="font-family: 'Acme', sans-serif; font-size:25px;">
                                        {{ $product->nameen }}</h3>
                                @endif
                            </a>
                            <?php
                            $alergenoslista = explode('-', $product->alergenos);
                            ?>
                            <div style="display:flex; flex-wrap:wrap; margin-top:10px; margin-bottom:10px; gap:5px;">
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
                                <button class="px-4 py-1.5 text-white text-sm rounded acercar"
                                    style="background-color:#568c2c;">{{ __('AÑADIR AL CARRITO') }}</button>
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
                                    style="background-color:#274014;">{{ __('COMPRA INMEDIATA') }}</button>
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
    @endif
</div>
