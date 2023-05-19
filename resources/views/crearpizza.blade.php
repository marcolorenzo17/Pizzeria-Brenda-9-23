<style>
    .escondido {
        display: none;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('CREA TU PROPIA PIZZA') }}
        </h2>
    </x-slot>
    <table>
        <tr>
            <td>
                <div class="container px-12 py-8 mx-auto">
                    <br>
                    <img src="{{ asset('img/alergenos.jpg') }}" alt="" width="300px" height="300px" class="mx-auto escondido">
                    <br>
                    <h3 class="text-2xl font-bold text-purple-700">BASES</h3>
                    <div class="h-1 bg-red-500 w-36"></div>
                    <br>
                    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                        @foreach ($ingredientes as $ingrediente)
                            @if ($ingrediente->type == 'Base')
                                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                                    <img src="{{ asset($ingrediente->image) }}" alt="" class="w-full max-h-60">
                                    @if ($ingrediente->alergenos != '')
                                        <img src="{{ asset($ingrediente->alergenos) }}" width="200px" height="200px">
                                    @endif
                                    <div class="flex items-end justify-end w-full bg-cover">
                                    </div>
                                    <div class="px-5 py-3">
                                        <h3 class="text-gray-700 uppercase">{{ $ingrediente->name }}</h3>
                                        <span class="mt-2 text-gray-500">{{ $ingrediente->price }} €</span>
                                        <br><br>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <br><br>
                    <h3 class="text-2xl font-bold text-purple-700">INGREDIENTES (1.50 €)</h3>
                    <div class="h-1 bg-red-500 w-36"></div>
                    <br>
                    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                        @foreach ($ingredientes as $ingrediente)
                            @if ($ingrediente->type == 'Ingrediente' && $ingrediente->price == 1.5)
                                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                                    <img src="{{ asset($ingrediente->image) }}" alt="" class="w-full max-h-60">
                                    @if ($ingrediente->alergenos != '')
                                        <img src="{{ asset($ingrediente->alergenos) }}" width="200px" height="200px">
                                    @endif
                                    <div class="flex items-end justify-end w-full bg-cover">
                                    </div>
                                    <div class="px-5 py-3">
                                        <h3 class="text-gray-700 uppercase">{{ $ingrediente->name }}</h3>
                                        <span class="mt-2 text-gray-500">{{ $ingrediente->price }} €</span>
                                        <br><br>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <br><br>
                    <h3 class="text-2xl font-bold text-purple-700">INGREDIENTES (1.80 €)</h3>
                    <div class="h-1 bg-red-500 w-36"></div>
                    <br>
                    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                        @foreach ($ingredientes as $ingrediente)
                            @if ($ingrediente->type == 'Ingrediente' && $ingrediente->price == 1.8)
                                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                                    <img src="{{ asset($ingrediente->image) }}" alt="" class="w-full max-h-60">
                                    @if ($ingrediente->alergenos != '')
                                        <img src="{{ asset($ingrediente->alergenos) }}" width="200px" height="200px">
                                    @endif
                                    <div class="flex items-end justify-end w-full bg-cover">
                                    </div>
                                    <div class="px-5 py-3">
                                        <h3 class="text-gray-700 uppercase">{{ $ingrediente->name }}</h3>
                                        <span class="mt-2 text-gray-500">{{ $ingrediente->price }} €</span>
                                        <br><br>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <br><br>
                    <h3 class="text-2xl font-bold text-purple-700">INGREDIENTES (2.30 €)</h3>
                    <div class="h-1 bg-red-500 w-36"></div>
                    <br>
                    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                        @foreach ($ingredientes as $ingrediente)
                            @if ($ingrediente->type == 'Ingrediente' && $ingrediente->price == 2.3)
                                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                                    <img src="{{ asset($ingrediente->image) }}" alt="" class="w-full max-h-60">
                                    @if ($ingrediente->alergenos != '')
                                        <img src="{{ asset($ingrediente->alergenos) }}" width="200px" height="200px">
                                    @endif
                                    <div class="flex items-end justify-end w-full bg-cover">
                                    </div>
                                    <div class="px-5 py-3">
                                        <h3 class="text-gray-700 uppercase">{{ $ingrediente->name }}</h3>
                                        <span class="mt-2 text-gray-500">{{ $ingrediente->price }} €</span>
                                        <br><br>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </td>
            <td style="vertical-align: top; position: fixed; top: 145px;">
                <div class="container px-12 py-8 mx-auto bg-white">
                    Hola que tal
                </div>
            </td>
        </tr>
    </table>

    <br><br><br><br>

    <footer
        class="fixed bottom-0 left-0 z-20 w-full p-4 bg-green-200 border-t border-gray-300 shadow md:flex md:items-center md:justify-between md:p-6">
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
