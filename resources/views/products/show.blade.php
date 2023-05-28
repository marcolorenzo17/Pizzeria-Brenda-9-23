<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ $products->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
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
                            {{ 'Nombre' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $products->name }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Precio' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $products->price }} €
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Descripción' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $products->description }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Tipo' }}
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
                                    <input type="hidden" value="{{ $products->image }}"  name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">AÑADIR AL CARRITO</button>
                                    <br><br>
                                    {{--
                                        <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                                    --}}
                                </form>
                                <form method="post" action="{{ route('products.destroy', $products->id) }}" class="inline">
                                    @csrf
                                    @method('delete')
                                    <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">BORRAR</button>
                                </form>
                            </td>
                            <td>
                                <img src="{{ asset('img/alergenos.jpg') }}" alt="" width="350px" height="350px">
                            </td>
                        </tr>
                    </table>
                    <br><br><br>
                    <a href="{{ route('products.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">VOLVER</a>
                    <br><br><br>
                    <div>
                        <h2 class="text-center">RESEÑAS</h2>
                        @foreach ($valoraciones as $valoracion)
                            <p>{{ $valoracion->resenia }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br>

    <footer class="fixed bottom-0 left-0 z-20 w-full p-4 bg-green-200 border-t border-gray-300 shadow md:flex md:items-center md:justify-between md:p-6">
        <span class="text-sm text-gray-500 sm:text-center">© 2023 Pizzería Brenda™. Todos los derechos reservados.
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0">
            <li>
                <a href="whoarewe" class="mr-4 hover:underline md:mr-6">¿Quiénes somos?</a>
            </li>
            <li>
                <a href="faq" class="mr-4 hover:underline md:mr-6">Preguntas frecuentes</a>
            </li>
            <li>
                <a href="contact" class="mr-4 hover:underline md:mr-6">Contáctanos</a>
            </li>
        </ul>
    </footer>

</x-app-layout>
