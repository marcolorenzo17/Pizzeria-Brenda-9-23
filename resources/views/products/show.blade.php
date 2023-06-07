<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ $products->name }}
        </h2>
        <div>
            @include('partials/language_switcher')
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('products.index') }}"
                        class="bg-blue-500 text-white px-4 py-2 rounded-md">{{__('VOLVER')}}</a>
                    <div class="mb-6">
                        <img src="{{ asset($products->image) }}" alt="" class="max-h-60 mx-auto">
                    </div>
                    <div class="mb-6">
                        @if ($products->alergenos != '')
                            <img src="{{ asset($products->alergenos) }}" width="200px" height="200px">
                        @endif
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Nombre') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $products->name }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Precio') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ number_format($products->price, 2, '.', '') }} €
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Descripción') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $products->description }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Tipo') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $products->type }}
                        </p>
                    </div>
                    <br>
                    <table class="mx-auto border-separate" style="border-collapse: separate; border-spacing: 100px 0;">
                        <tr>
                            <td>
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $products->id }}" name="id">
                                    <input type="hidden" value="{{ $products->name }}" name="name">
                                    <input type="hidden" value="{{ $products->price }}" name="price">
                                    <input type="hidden" value="{{ $products->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">{{__('AÑADIR AL CARRITO')}}</button>
                                    <br><br>
                                    {{--
                                        <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                    --}}
                                </form>
                                @if (Auth::user()->admin)
                                    <form method="post" action="{{ route('products.destroy', $products->id) }}"
                                        class="inline">
                                        @csrf
                                        @method('delete')
                                        <button
                                            class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{__('BORRAR')}}</button>
                                    </form>
                                @endif
                            </td>
                            <td>
                                <img src="{{ asset('img/alergenos.jpg') }}" alt="" width="350px"
                                    height="350px">
                            </td>
                        </tr>
                    </table>
                    <br><br><br>
                    <h2 class="text-center">{{__('RESEÑAS')}}</h2>
                    <br><br>
                    <form action="{{ route('products.addValoracion', $products->id) }}" method="POST" id="valoracion">
                        @csrf
                        <textarea form="valoracion" name="resenia" placeholder="{{__('Escribe aquí tu reseña.')}}"></textarea>
                        <br><br>
                        <table>
                            <tr>
                                <td onclick="valoracion(1)"><img src="{{ asset('img/starblank.png') }}" alt="*"
                                        width="30px" height="30px" id="e1"></td>
                                <td onclick="valoracion(2)"><img src="{{ asset('img/starblank.png') }}" alt="*"
                                        width="30px" height="30px" id="e2"></td>
                                <td onclick="valoracion(3)"><img src="{{ asset('img/starblank.png') }}" alt="*"
                                        width="30px" height="30px" id="e3"></td>
                                <td onclick="valoracion(4)"><img src="{{ asset('img/starblank.png') }}" alt="*"
                                        width="30px" height="30px" id="e4"></td>
                                <td onclick="valoracion(5)"><img src="{{ asset('img/starblank.png') }}" alt="*"
                                        width="30px" height="30px" id="e5"></td>
                            <tr>
                        </table>
                        <input type="hidden" id="estrellas" name="estrellas" value="1">
                        <br><br>
                        <div class="text-center">
                            <button type="submit"
                                class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500">{{__('Publicar')}}</button>
                        </div>
                    </form>
                    <br>
                    <div>
                        @foreach ($valoraciones as $valoracion)
                            @if ($valoracion->idProduct == $products->id)
                                <p>{{ \App\Models\User::where(['id' => $valoracion->idUser])->pluck('name')->first() }}
                                </p>
                                <p>{{ $valoracion->resenia }}</p>
                                @switch ($valoracion->estrellas)
                                    @case (1)
                                        <img src="{{ asset('img/e1.png') }}" alt="*" width="100px" height="100px">
                                    @break

                                    @case (2)
                                        <img src="{{ asset('img/e2.png') }}" alt="*" width="100px" height="100px">
                                    @break

                                    @case (3)
                                        <img src="{{ asset('img/e3.png') }}" alt="*" width="100px" height="100px">
                                    @break

                                    @case (4)
                                        <img src="{{ asset('img/e4.png') }}" alt="*" width="100px" height="100px">
                                    @break

                                    @case (5)
                                        <img src="{{ asset('img/e5.png') }}" alt="*" width="100px" height="100px">
                                    @break
                                @endswitch
                                @foreach ($comentarios as $comentario)
                                    @if ($comentario->idValoracion == $valoracion->id)
                                        <br>
                                        <p>{{ \App\Models\User::where(['id' => $comentario->idUser])->pluck('name')->first() }}
                                        </p>
                                        <p>{{ $comentario->resenia }}</p>
                                        <br>
                                    @endif
                                @endforeach
                                <br>
                                <form
                                    action="{{ route('products.addComentario', [$products->id, $valoracion->id]) }}"
                                    method="POST">
                                    @csrf
                                    <input type="text" name="reseniaCom" placeholder="{{__('Escribe aquí tu comentario.')}}"
                                        size="30">
                                    <br><br>
                                    <div>
                                        <button type="submit"
                                            class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500">{{__('Publicar comentario')}}</button>
                                    </div>
                                </form>
                                <br><br>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
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

    <script src="{{ asset('js/product-script.js') }}"></script>

</x-app-layout>
