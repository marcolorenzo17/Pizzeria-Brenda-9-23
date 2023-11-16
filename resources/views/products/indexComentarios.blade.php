@if (Auth::user()->admin)
    <x-app-layout>
        <x-slot name="header">
            <br><br><br>
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
                {{ __('COMENTARIOS') }}
            </h2>
            <br><br>
        </x-slot>
        <link rel="stylesheet" href="/css/index_products.css" />
        <br>
        <div class="container px-12 py-8 mx-auto bg-white">
            <table class="table-auto w-full" style="border-collapse:separate; border-spacing:10px;" id="productos-grande">
                <tr>
                    <td class="font-bold">{{ __('Producto') }}</td>
                    <td class="font-bold">{{ __('Valoración') }}</td>
                    <td class="font-bold">{{ __('Cliente') }}</td>
                    <td class="font-bold">{{ __('Comentario') }}</td>
                    @if (Auth::user()->role != 'Cliente')
                        <td class="font-bold">{{ __('Eliminar') }}</td>
                    @endif
                </tr>
                <tr>
                    <td>
                </tr>
                @foreach ($comentarios as $comentario)
                    <?php
                    $idProduct = \App\Models\Valoracione::where(['id' => $comentario->idValoracion])
                        ->pluck('idProduct')
                        ->first();
                    ?>
                    <tr>
                        <td style="word-wrap: break-word; max-width:100px;">
                            {{ \App\Models\Product::where(['id' => $idProduct])->pluck('name')->first() }}
                        </td>
                        <td style="word-wrap: break-word; max-width:100px;">
                            {{ \App\Models\Valoracione::where(['id' => $comentario->idValoracion])->pluck('resenia')->first() }}
                        </td>
                        <td>{{ \App\Models\User::where(['id' => $comentario->idUser])->pluck('name')->first() }}</td>
                        <td style="word-wrap: break-word; max-width:100px;">{{ $comentario->resenia }}</td>
                        @if (Auth::user()->role != 'Cliente')
                            <td>
                                <form method="post"
                                    action="{{ route('products.destroyComentarioAdmin', $comentario->id) }}">
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
                @foreach ($comentarios as $comentario)
                    <?php
                    $idProduct = \App\Models\Valoracione::where(['id' => $comentario->idValoracion])
                        ->pluck('idProduct')
                        ->first();
                    ?>
                    <tr>
                        <td>
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Producto') }}</p>
                        </td>
                        <td style="word-wrap: break-word; max-width:300px;">
                            <p style="padding-left:50px;">
                                {{ \App\Models\Product::where(['id' => $idProduct])->pluck('name')->first() }}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-left:50px;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Valoración') }}
                            </p>
                        </td>
                        <td style="word-wrap: break-word; max-width:300px;">
                            <p style="padding-left:50px;">
                                {{ \App\Models\Valoracione::where(['id' => $comentario->idValoracion])->pluck('resenia')->first() }}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-left:50px;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Cliente') }}</p>
                        </td>
                        <td style="word-wrap: break-word; max-width:300px;">
                            <p style="padding-left:50px;">
                                {{ \App\Models\User::where(['id' => $comentario->idUser])->pluck('name')->first() }}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-left:50px;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Reseña') }}</p>
                        </td>
                        <td style="word-wrap: break-word; max-width:300px;">
                            <p style="padding-left:50px;">{{ $comentario->resenia }}</p>
                        </td>
                    </tr>
                    <tr>
                        @if (Auth::user()->role != 'Cliente')
                            <td style="padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Eliminar') }}
                                </p>
                            </td>
                            <td>
                                <div style="padding-left:50px;">
                                    <form method="post"
                                        action="{{ route('products.destroyComentarioAdmin', $comentario->id) }}">
                                        @csrf
                                        @method('delete')
                                        <button
                                            class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">x</button>
                                    </form>
                                </div>
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
@endif
