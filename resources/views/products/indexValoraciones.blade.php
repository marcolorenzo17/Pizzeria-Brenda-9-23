@if (Auth::user()->admin)
    <x-app-layout>
        <x-slot name="header">
            <br><br><br>
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
                {{ __('VALORACIONES') }}
            </h2>
            <br><br>
        </x-slot>
        <link rel="stylesheet" href="/css/index_products.css" />
        <br>
        <div class="container px-12 py-8 mx-auto bg-white">
            <table class="table-auto w-full" style="border-collapse:separate; border-spacing:10px;" id="productos-grande">
                <tr>
                    <td class="font-bold">{{ __('Producto') }}</td>
                    <td class="font-bold">{{ __('Cliente') }}</td>
                    <td class="font-bold">{{ __('Estrellas') }}</td>
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
                        <td>{{ \App\Models\Product::where(['id' => $valoracion->idProduct])->pluck('name')->first() }}
                        </td>
                        <td>{{ \App\Models\User::where(['id' => $valoracion->idUser])->pluck('name')->first() }}</td>
                        <td style="word-wrap: break-word; max-width:100px;">{{ $valoracion->estrellas }}</td>
                        <td style="word-wrap: break-word; max-width:100px;">{{ $valoracion->resenia }}</td>
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
            <table
                style="border-collapse:separate; border-spacing:10px; table-layout:fixed; margin-left:auto; margin-right:auto;"
                id="productos-pequenio">
                @foreach ($valoraciones as $valoracion)
                    <tr>
                        <td>
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Producto') }}</p>
                        </td>
                        <td style="word-wrap: break-word; max-width:300px;">
                            <p style="padding-left:50px;">
                                {{ \App\Models\Product::where(['id' => $valoracion->idProduct])->pluck('name')->first() }}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-left:50px;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Cliente') }}</p>
                        </td>
                        <td style="word-wrap: break-word; max-width:300px;">
                            <p style="padding-left:50px;">
                                {{ \App\Models\User::where(['id' => $valoracion->idUser])->pluck('name')->first() }}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-left:50px;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Estrellas') }}</p>
                        </td>
                        <td style="word-wrap: break-word; max-width:300px;">
                            <p style="padding-left:50px;">{{ $valoracion->estrellas }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-left:50px;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Reseña') }}</p>
                        </td>
                        <td style="word-wrap: break-word; max-width:300px;">
                            <p style="padding-left:50px;">{{ $valoracion->resenia }}</p>
                        </td>
                    </tr>
                    <tr>
                        @if (Auth::user()->role != 'Cliente')
                            <td style="padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Eliminar') }}
                                </p>
                            </td>
                            <td>
                                <form method="post"
                                    action="{{ route('products.destroyValoracionAdmin', $valoracion->id) }}">
                                    @csrf
                                    @method('delete')
                                    <div style="padding-left:50px;">
                                        <button
                                            class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">x</button>
                                    </div>
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
        <footer class="fixed bottom-0 left-0 z-20 w-full p-4 border-t border-gray-300 shadow md:p-6"
            style="background-color:red;">
            <span class="text-sm sm:text-center"
                style="color: white; margin-right:20px;">{{ __('© 2023 Pizzería Brenda™. Todos los derechos reservados.') }}
            </span>
            <div class="md:flex md:items-center md:justify-between flex-wrap">
                <div style="display:flex; gap: 5px; color:white;">
                    <p style="font-size:13px;">{{ __('Teléfonos: ') }}</p>
                    <div>
                        <p style="font-size:18px; font-weight:bolder;">956 37 11 15</p>
                        <p style="font-size:18px; font-weight:bolder;">956 37 47 36</p>
                        <p style="font-size:18px; font-weight:bolder;">627 650 605</p>
                    </div>
                </div>
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
                        <a href="{{ route('contact') }}"
                            class="mr-4 hover:underline md:mr-6">{{ __('Contáctanos') }}</a>
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
                <div class="flex-wrap" style="display:flex; gap: 5px; margin-left:auto; color:white;">
                    <p style="font-size:13px;">{{ __('Horario: ') }}</p>
                    <div>
                        <p style="font-size:18px; font-weight:bolder;">{{ __('De lunes a domingo: 20:30 - 23:30') }}
                        </p>
                        <p style="font-size:18px; font-weight:bolder;">{{ __('Domingo por la mañana: 13:30 - 15:00') }}
                        </p>
                    </div>
                </div>
            </div>
        </footer>

    </x-app-layout>
@endif
