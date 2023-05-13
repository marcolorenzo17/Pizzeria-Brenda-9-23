<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('LISTA DE PLATOS') }}
        </h2>
        {{--
            <br>
            <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">AÑADIR PRODUCTO</a>
        --}}
    </x-slot>
    <div class="container px-12 py-8 mx-auto">
        <h3 class="text-2xl font-bold text-purple-700">PLATOS</h3>
        <div class="h-1 bg-red-500 w-36"></div>
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products as $product)
            <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                <a href="{{ route('products.show', $product->id) }}"><img src="{{ asset($product->image) }}" alt="" class="w-full max-h-60"></a>
                <div class="flex items-end justify-end w-full bg-cover">

                </div>
                <div class="px-5 py-3">
                    <a href="{{ route('products.show', $product->id) }}"><h3 class="text-gray-700 uppercase">{{ $product->name }}</h3></a>
                    <span class="mt-2 text-gray-500">{{ $product->price }} €</span>
                    <br><br>
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->name }}" name="name">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->image }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">AÑADIR AL CARRITO</button>
                        <br><br>
                        {{--
                            <a href="{{ route('products.edit', $product->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDITAR</a>
                        --}}
                    </form>
                    <form method="post" action="{{ route('products.destroy', $product->id) }}" class="inline">
                        @csrf
                        @method('delete')
                        <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">BORRAR</button>
                    </form>
                </div>

            </div>
            @endforeach
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
