@if (Auth::user()->admin)
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
                {{ __('VALORACIONES') }}
            </h2>
            <div>
                @include('partials/language_switcher')
            </div>
        </x-slot>
        <link rel="stylesheet" href="/css/index_products.css" />
        <br>
        <div class="container px-12 py-8 mx-auto bg-white">
            <table class="table-auto w-full" style="border-collapse:separate; border-spacing:10px;" id="productos-grande">
                <tr>
                    <td class="font-bold">{{ __('Cliente') }}</td>
                    <td class="font-bold">{{ __('Reseña') }}</td>
                    @if (Auth::user()->role != 'Cliente')
                        <td class="font-bold">{{ __('Eliminar') }}</td>
                    @endif
                </tr>
                <tr>
                    <td>
                </tr>
                @foreach ($valoraciones as $valoracion)
                    <tr>
                        <td>{{ \App\Models\User::where(['id' => $valoracion->idUser])->pluck('name')->first() }}</td>
                        <td>{{ $valoracion->resenia }}</td>
                        @if (Auth::user()->role != 'Cliente')
                            <td>
                                <form method="post"
                                    action="{{ route('products.destroyValoracionAdmin', $valoracion->id) }}">
                                    @csrf
                                    @method('delete')
                                    <button
                                        class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">x</button>
                                </form>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </table>
            <table class="table-auto w-full" style="border-collapse:separate; border-spacing:10px;"
                id="productos-pequenio">
                @foreach ($valoraciones as $valoracion)
                    <tr>
                        <td>{{ \App\Models\User::where(['id' => $valoracion->idUser])->pluck('name')->first() }}</td>
                    </tr>
                    <tr>
                        <td style="padding-left:50px;">{{ $valoracion->resenia }}</td>
                    </tr>
                    <tr>
                        @if (Auth::user()->role != 'Cliente')
                            <td style="padding-left:50px;">
                                <form method="post"
                                    action="{{ route('products.destroyValoracionAdmin', $valoracion->id) }}">
                                    @csrf
                                    @method('delete')
                                    <button
                                        class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">x</button>
                                </form>
                            </td>
                        @endif
                    </tr>
                    <tr></tr>
                    <tr></tr>
                @endforeach
            </table>
        </div>

        <br><br><br><br>

        <footer
            class="fixed bottom-0 left-0 z-20 w-full p-4 border-t border-gray-300 shadow md:flex md:items-center md:justify-between md:p-6"
            style="background-color:white;">
            <span
                class="text-sm text-gray-500 sm:text-center">{{ __('© 2023 Pizzería Brenda™. Todos los derechos reservados.') }}
            </span>
            <ul class="hidden flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0 sm:flex">
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
            </ul>
        </footer>

    </x-app-layout>
@endif
