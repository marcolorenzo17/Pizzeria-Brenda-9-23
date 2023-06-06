<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('LISTA DE PLATOS') }}
        </h2>
        <div>
            @include('partials/language_switcher')
        </div>
        {{--
            <br>
            <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">AÑADIR PRODUCTO</a>
        --}}
    </x-slot>
    <div class="container px-12 py-8 mx-auto">
        <div class="p-6 text-gray-900 h-screen flex items-center justify-center">
            <table class="table-auto w-full text-center" style="border-collapse: separate; border-spacing:25px 25px;">
                <tr>
                    <td style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a href="#1"><img src="{{ asset("img/pizzaicon.png") }}" width="70px" height="70px" style="display: block; margin-left: auto; margin-right: auto;">PIZZAS</a></td>
                    <td style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a href="#2"><img src="{{ asset("img/burgericon.png") }}" width="70px" height="70px" style="display: block; margin-left: auto; margin-right: auto;">{{__('HAMBURGUESAS')}}</a></td>
                    <td style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a href="#3"><img src="{{ asset("img/sanicon.jpg") }}" width="70px" height="70px" style="display: block; margin-left: auto; margin-right: auto;">{{__('SÁNDWICHES')}}</a></td>
                    <td style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a href="#4"><img src="{{ asset("img/pastaicon.png") }}" width="70px" height="70px" style="display: block; margin-left: auto; margin-right: auto;">PASTA</a></td>
                    <td style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a href="#5"><img src="{{ asset("img/riceicon.png") }}" width="70px" height="70px" style="display: block; margin-left: auto; margin-right: auto;">{{__('ARROCES')}}</a></td>
                </tr>
                <tr>
                    <td style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a href="#6"><img src="{{ asset("img/bagicon.png") }}" width="70px" height="70px" style="display: block; margin-left: auto; margin-right: auto;">BAGUETTES</a></td>
                    <td style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a href="#7"><img src="{{ asset("img/saladicon.png") }}" width="70px" height="70px" style="display: block; margin-left: auto; margin-right: auto;">{{__('ENSALADAS')}}</a></td>
                    <td style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a href="#8"><img src="{{ asset("img/friesicon.png") }}" width="70px" height="70px" style="display: block; margin-left: auto; margin-right: auto;">{{__('COMPLEMENTOS')}}</a></td>
                    <td style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a href="#9"><img src="{{ asset("img/dogicon.png") }}" width="70px" height="70px" style="display: block; margin-left: auto; margin-right: auto;">{{__('PERRITOS')}}</a></td>
                    <td style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a href="#10"><img src="{{ asset("img/sodaicon.png") }}" width="70px" height="70px" style="display: block; margin-left: auto; margin-right: auto;">{{__('BEBIDAS')}}</a></td>
                </tr>
            </table>
        </div>
        <br>
        <h3 class="text-2xl font-bold text-purple-700" id="1">PIZZAS</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <br>
        <img src="img/alergenos/gluten-lacteos.png" width="200px" height="200px">
        <br>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products as $product)
                @if ($product->type == "Pizza")
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <a href="{{ route('products.show', $product->id) }}"><img src="{{ asset($product->image) }}" class="w-full max-h-60"></a>
                        <div class="flex items-end justify-end w-full bg-cover">

                        </div>
                        <div class="px-5 py-3">
                            <a href="{{ route('products.show', $product->id) }}"><h3 class="text-gray-700 uppercase">{{ $product->name }}</h3></a>
                            @if ($product->alergenos != '')
                                <img src="{{ asset($product->alergenos) }}" width="200px" height="200px">
                            @endif
                            <br>
                            <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }} €</span>
                            <br><br>
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $product->id }}" name="id">
                                <input type="hidden" value="{{ $product->name }}" name="name">
                                <input type="hidden" value="{{ $product->price }}" name="price">
                                <input type="hidden" value="{{ $product->image }}"  name="image">
                                <input type="hidden" value="1" name="quantity">
                                <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">{{__('AÑADIR AL CARRITO')}}</button>
                                <br><br>
                                {{--
                                    <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                --}}
                            </form>
                            <form method="post" action="{{ route('products.destroy', $product->id) }}" class="inline">
                                @csrf
                                @method('delete')
                                <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{__('BORRAR')}}</button>
                            </form>
                        </div>

                    </div>
                @endif
            @endforeach
        </div>
        <br><br>
        <div class="text-center" style="border-style: solid; border-width: 3px; border-color: purple; background-color: #efff91; padding: 20px;">
            <a href="crearpizza" class="text-2xl font-bold text-purple-700">{{__('¡CREA TU PROPIA PIZZA AQUÍ!')}}</a>
        </div>
        <br><br><br>
        <h3 class="text-2xl font-bold text-purple-700" id="2">{{__('HAMBURGUESAS')}}</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <br>
        <img src="img/alergenos/gluten-sesamo.png" width="200px" height="200px">
        <br>
        <table>
            <tr>
                <td class="font-bold text-decoration-line: underline">{{__('Extras para hamburguesas:')}}</td>
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
                @if ($product->type == "Hamburguesa")
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <a href="{{ route('products.show', $product->id) }}"><img src="{{ asset($product->image) }}" class="w-full max-h-60"></a>
                        <div class="flex items-end justify-end w-full bg-cover">

                        </div>
                        <div class="px-5 py-3">
                            <a href="{{ route('products.show', $product->id) }}"><h3 class="text-gray-700 uppercase">{{ $product->name }}</h3></a>
                            @if ($product->alergenos != '')
                                <img src="{{ asset($product->alergenos) }}" width="200px" height="200px">
                            @endif
                            <br>
                            <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }} €</span>
                            <br><br>
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $product->id }}" name="id">
                                <input type="hidden" value="{{ $product->name }}" name="name">
                                <input type="hidden" value="{{ $product->price }}" name="price">
                                <input type="hidden" value="{{ $product->image }}"  name="image">
                                <input type="hidden" value="1" name="quantity">
                                <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">{{__('AÑADIR AL CARRITO')}}</button>
                                <br><br>
                                {{--
                                    <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                --}}
                            </form>
                            <form method="post" action="{{ route('products.destroy', $product->id) }}" class="inline">
                                @csrf
                                @method('delete')
                                <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{__('BORRAR')}}</button>
                            </form>
                        </div>

                    </div>
                @endif
            @endforeach
        </div>
        <br><br><br>
        <h3 class="text-2xl font-bold text-purple-700" id="3">{{__('SÁNDWICHES')}}</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <br>
        <img src="img/alergenos/gluten-lacteos-huevos-soja.png" width="200px" height="200px">
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products as $product)
                @if ($product->type == "Sándwich")
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <a href="{{ route('products.show', $product->id) }}"><img src="{{ asset($product->image) }}" class="w-full max-h-60"></a>
                        <div class="flex items-end justify-end w-full bg-cover">

                        </div>
                        <div class="px-5 py-3">
                            <a href="{{ route('products.show', $product->id) }}"><h3 class="text-gray-700 uppercase">{{ $product->name }}</h3></a>
                            @if ($product->alergenos != '')
                                <img src="{{ asset($product->alergenos) }}" width="200px" height="200px">
                            @endif
                            <br>
                            <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }} €</span>
                            <br><br>
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $product->id }}" name="id">
                                <input type="hidden" value="{{ $product->name }}" name="name">
                                <input type="hidden" value="{{ $product->price }}" name="price">
                                <input type="hidden" value="{{ $product->image }}"  name="image">
                                <input type="hidden" value="1" name="quantity">
                                <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">{{__('AÑADIR AL CARRITO')}}</button>
                                <br><br>
                                {{--
                                    <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                --}}
                            </form>
                            <form method="post" action="{{ route('products.destroy', $product->id) }}" class="inline">
                                @csrf
                                @method('delete')
                                <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{__('BORRAR')}}</button>
                            </form>
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
                @if ($product->type == "Pasta")
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <a href="{{ route('products.show', $product->id) }}"><img src="{{ asset($product->image) }}" class="w-full max-h-60"></a>
                        <div class="flex items-end justify-end w-full bg-cover">

                        </div>
                        <div class="px-5 py-3">
                            <a href="{{ route('products.show', $product->id) }}"><h3 class="text-gray-700 uppercase">{{ $product->name }}</h3></a>
                            @if ($product->alergenos != '')
                                <img src="{{ asset($product->alergenos) }}" width="200px" height="200px">
                            @endif
                            <br>
                            <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }} €</span>
                            <br><br>
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $product->id }}" name="id">
                                <input type="hidden" value="{{ $product->name }}" name="name">
                                <input type="hidden" value="{{ $product->price }}" name="price">
                                <input type="hidden" value="{{ $product->image }}"  name="image">
                                <input type="hidden" value="1" name="quantity">
                                <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">{{__('AÑADIR AL CARRITO')}}</button>
                                <br><br>
                                {{--
                                    <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                --}}
                            </form>
                            <form method="post" action="{{ route('products.destroy', $product->id) }}" class="inline">
                                @csrf
                                @method('delete')
                                <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{__('BORRAR')}}</button>
                            </form>
                        </div>

                    </div>
                @endif
            @endforeach
        </div>
        <br><br><br>
        <h3 class="text-2xl font-bold text-purple-700" id="5">{{__('ARROCES')}}</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <br>
        <img src="img/alergenos/gluten-lacteos.png" width="200px" height="200px">
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products as $product)
                @if ($product->type == "Arroz")
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <a href="{{ route('products.show', $product->id) }}"><img src="{{ asset($product->image) }}" class="w-full max-h-60"></a>
                        <div class="flex items-end justify-end w-full bg-cover">

                        </div>
                        <div class="px-5 py-3">
                            <a href="{{ route('products.show', $product->id) }}"><h3 class="text-gray-700 uppercase">{{ $product->name }}</h3></a>
                            @if ($product->alergenos != '')
                                <img src="{{ asset($product->alergenos) }}" width="200px" height="200px">
                            @endif
                            <br>
                            <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }} €</span>
                            <br><br>
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $product->id }}" name="id">
                                <input type="hidden" value="{{ $product->name }}" name="name">
                                <input type="hidden" value="{{ $product->price }}" name="price">
                                <input type="hidden" value="{{ $product->image }}"  name="image">
                                <input type="hidden" value="1" name="quantity">
                                <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">{{__('AÑADIR AL CARRITO')}}</button>
                                <br><br>
                                {{--
                                    <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                --}}
                            </form>
                            <form method="post" action="{{ route('products.destroy', $product->id) }}" class="inline">
                                @csrf
                                @method('delete')
                                <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{__('BORRAR')}}</button>
                            </form>
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
                @if ($product->type == "Baguette")
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <a href="{{ route('products.show', $product->id) }}"><img src="{{ asset($product->image) }}" class="w-full max-h-60"></a>
                        <div class="flex items-end justify-end w-full bg-cover">

                        </div>
                        <div class="px-5 py-3">
                            <a href="{{ route('products.show', $product->id) }}"><h3 class="text-gray-700 uppercase">{{ $product->name }}</h3></a>
                            @if ($product->alergenos != '')
                                <img src="{{ asset($product->alergenos) }}" width="200px" height="200px">
                            @endif
                            <br>
                            <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }} €</span>
                            <br><br>
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $product->id }}" name="id">
                                <input type="hidden" value="{{ $product->name }}" name="name">
                                <input type="hidden" value="{{ $product->price }}" name="price">
                                <input type="hidden" value="{{ $product->image }}"  name="image">
                                <input type="hidden" value="1" name="quantity">
                                <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">{{__('AÑADIR AL CARRITO')}}</button>
                                <br><br>
                                {{--
                                    <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                --}}
                            </form>
                            <form method="post" action="{{ route('products.destroy', $product->id) }}" class="inline">
                                @csrf
                                @method('delete')
                                <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{__('BORRAR')}}</button>
                            </form>
                        </div>

                    </div>
                @endif
            @endforeach
        </div>
        <br><br><br>
        <h3 class="text-2xl font-bold text-purple-700" id="7">{{__('ENSALADAS')}}</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <br>
        <img src="img/alergenos/dioxido.png" width="200px" height="200px">
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products as $product)
                @if ($product->type == "Ensalada")
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <a href="{{ route('products.show', $product->id) }}"><img src="{{ asset($product->image) }}" class="w-full max-h-60"></a>
                        <div class="flex items-end justify-end w-full bg-cover">

                        </div>
                        <div class="px-5 py-3">
                            <a href="{{ route('products.show', $product->id) }}"><h3 class="text-gray-700 uppercase">{{ $product->name }}</h3></a>
                            @if ($product->alergenos != '')
                                <img src="{{ asset($product->alergenos) }}" width="200px" height="200px">
                            @endif
                            <br>
                            <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }} €</span>
                            <br><br>
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $product->id }}" name="id">
                                <input type="hidden" value="{{ $product->name }}" name="name">
                                <input type="hidden" value="{{ $product->price }}" name="price">
                                <input type="hidden" value="{{ $product->image }}"  name="image">
                                <input type="hidden" value="1" name="quantity">
                                <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">{{__('AÑADIR AL CARRITO')}}</button>
                                <br><br>
                                {{--
                                    <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                --}}
                            </form>
                            <form method="post" action="{{ route('products.destroy', $product->id) }}" class="inline">
                                @csrf
                                @method('delete')
                                <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{__('BORRAR')}}</button>
                            </form>
                        </div>

                    </div>
                @endif
            @endforeach
        </div>
        <br><br><br>
        <h3 class="text-2xl font-bold text-purple-700" id="8">{{__('COMPLEMENTOS')}}</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products as $product)
                @if ($product->type == "Complemento")
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <a href="{{ route('products.show', $product->id) }}"><img src="{{ asset($product->image) }}" class="w-full max-h-60"></a>
                        <div class="flex items-end justify-end w-full bg-cover">

                        </div>
                        <div class="px-5 py-3">
                            <a href="{{ route('products.show', $product->id) }}"><h3 class="text-gray-700 uppercase">{{ $product->name }}</h3></a>
                            @if ($product->alergenos != '')
                                <img src="{{ asset($product->alergenos) }}" width="200px" height="200px">
                            @endif
                            <br>
                            <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }} €</span>
                            <br><br>
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $product->id }}" name="id">
                                <input type="hidden" value="{{ $product->name }}" name="name">
                                <input type="hidden" value="{{ $product->price }}" name="price">
                                <input type="hidden" value="{{ $product->image }}"  name="image">
                                <input type="hidden" value="1" name="quantity">
                                <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">{{__('AÑADIR AL CARRITO')}}</button>
                                <br><br>
                                {{--
                                    <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                --}}
                            </form>
                            <form method="post" action="{{ route('products.destroy', $product->id) }}" class="inline">
                                @csrf
                                @method('delete')
                                <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{__('BORRAR')}}</button>
                            </form>
                        </div>

                    </div>
                @endif
            @endforeach
        </div>
        <br><br><br>
        <h3 class="text-2xl font-bold text-purple-700" id="9">{{__('PERRITOS')}}</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <br>
        <img src="img/alergenos/gluten-lacteos.png" width="200px" height="200px">
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products as $product)
                @if ($product->type == "Perrito")
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <a href="{{ route('products.show', $product->id) }}"><img src="{{ asset($product->image) }}" class="w-full max-h-60"></a>
                        <div class="flex items-end justify-end w-full bg-cover">

                        </div>
                        <div class="px-5 py-3">
                            <a href="{{ route('products.show', $product->id) }}"><h3 class="text-gray-700 uppercase">{{ $product->name }}</h3></a>
                            @if ($product->alergenos != '')
                                <img src="{{ asset($product->alergenos) }}" width="200px" height="200px">
                            @endif
                            <br>
                            <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }} €</span>
                            <br><br>
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $product->id }}" name="id">
                                <input type="hidden" value="{{ $product->name }}" name="name">
                                <input type="hidden" value="{{ $product->price }}" name="price">
                                <input type="hidden" value="{{ $product->image }}"  name="image">
                                <input type="hidden" value="1" name="quantity">
                                <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">{{__('AÑADIR AL CARRITO')}}</button>
                                <br><br>
                                {{--
                                    <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                --}}
                            </form>
                            <form method="post" action="{{ route('products.destroy', $product->id) }}" class="inline">
                                @csrf
                                @method('delete')
                                <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{__('BORRAR')}}</button>
                            </form>
                        </div>

                    </div>
                @endif
            @endforeach
        </div>
        <br><br><br>
        <h3 class="text-2xl font-bold text-purple-700" id="10">{{__('CERVEZAS')}}</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products as $product)
                @if ($product->type == "Cerveza")
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <a href="{{ route('products.show', $product->id) }}"><img src="{{ asset($product->image) }}" class="w-full max-h-60"></a>
                        <div class="flex items-end justify-end w-full bg-cover">

                        </div>
                        <div class="px-5 py-3">
                            <a href="{{ route('products.show', $product->id) }}"><h3 class="text-gray-700 uppercase">{{ $product->name }}</h3></a>
                            @if ($product->alergenos != '')
                                <img src="{{ asset($product->alergenos) }}" width="200px" height="200px">
                            @endif
                            <br>
                            <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }} €</span>
                            <br><br>
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $product->id }}" name="id">
                                <input type="hidden" value="{{ $product->name }}" name="name">
                                <input type="hidden" value="{{ $product->price }}" name="price">
                                <input type="hidden" value="{{ $product->image }}"  name="image">
                                <input type="hidden" value="1" name="quantity">
                                <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">{{__('AÑADIR AL CARRITO')}}</button>
                                <br><br>
                                {{--
                                    <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                --}}
                            </form>
                            <form method="post" action="{{ route('products.destroy', $product->id) }}" class="inline">
                                @csrf
                                @method('delete')
                                <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{__('BORRAR')}}</button>
                            </form>
                        </div>

                    </div>
                @endif
            @endforeach
        </div>
        <br><br><br>
        <h3 class="text-2xl font-bold text-purple-700">{{__('VINOS Y LICORES')}}</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products as $product)
                @if ($product->type == "Vino")
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <a href="{{ route('products.show', $product->id) }}"><img src="{{ asset($product->image) }}" class="w-full max-h-60"></a>
                        <div class="flex items-end justify-end w-full bg-cover">

                        </div>
                        <div class="px-5 py-3">
                            <a href="{{ route('products.show', $product->id) }}"><h3 class="text-gray-700 uppercase">{{ $product->name }}</h3></a>
                            @if ($product->alergenos != '')
                                <img src="{{ asset($product->alergenos) }}" width="200px" height="200px">
                            @endif
                            <br>
                            <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }} €</span>
                            <br><br>
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $product->id }}" name="id">
                                <input type="hidden" value="{{ $product->name }}" name="name">
                                <input type="hidden" value="{{ $product->price }}" name="price">
                                <input type="hidden" value="{{ $product->image }}"  name="image">
                                <input type="hidden" value="1" name="quantity">
                                <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">{{__('AÑADIR AL CARRITO')}}</button>
                                <br><br>
                                {{--
                                    <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                --}}
                            </form>
                            <form method="post" action="{{ route('products.destroy', $product->id) }}" class="inline">
                                @csrf
                                @method('delete')
                                <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{__('BORRAR')}}</button>
                            </form>
                        </div>

                    </div>
                @endif
            @endforeach
        </div>
        <br><br><br>
        <h3 class="text-2xl font-bold text-purple-700">{{__('REFRESCOS')}}</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products as $product)
                @if ($product->type == "Refresco")
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <a href="{{ route('products.show', $product->id) }}"><img src="{{ asset($product->image) }}" class="w-full max-h-60"></a>
                        <div class="flex items-end justify-end w-full bg-cover">

                        </div>
                        <div class="px-5 py-3">
                            <a href="{{ route('products.show', $product->id) }}"><h3 class="text-gray-700 uppercase">{{ $product->name }}</h3></a>
                            @if ($product->alergenos != '')
                                <img src="{{ asset($product->alergenos) }}" width="200px" height="200px">
                            @endif
                            <br>
                            <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }} €</span>
                            <br><br>
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $product->id }}" name="id">
                                <input type="hidden" value="{{ $product->name }}" name="name">
                                <input type="hidden" value="{{ $product->price }}" name="price">
                                <input type="hidden" value="{{ $product->image }}"  name="image">
                                <input type="hidden" value="1" name="quantity">
                                <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">{{__('AÑADIR AL CARRITO')}}</button>
                                <br><br>
                                {{--
                                    <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                --}}
                            </form>
                            <form method="post" action="{{ route('products.destroy', $product->id) }}" class="inline">
                                @csrf
                                @method('delete')
                                <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{__('BORRAR')}}</button>
                            </form>
                        </div>

                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <br><br><br><br>

    <footer
        class="fixed bottom-0 left-0 z-20 w-full p-4 bg-green-200 border-t border-gray-300 shadow md:flex md:items-center md:justify-between md:p-6">
        <span class="text-sm text-gray-500 sm:text-center">{{__('© 2023 Pizzería Brenda™. Todos los derechos reservados.')}}
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0">
            <li>
                <a href="whoarewe" class="mr-4 hover:underline md:mr-6">{{__('¿Quiénes somos?')}}</a>
            </li>
            <li>
                <a href="faq" class="mr-4 hover:underline md:mr-6">{{__('Preguntas frecuentes')}}</a>
            </li>
            <li>
                <a href="contact" class="mr-4 hover:underline md:mr-6">{{__('Contáctanos')}}</a>
            </li>
        </ul>
    </footer>

</x-app-layout>
