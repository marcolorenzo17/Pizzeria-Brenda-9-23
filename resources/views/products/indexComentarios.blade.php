@if (Auth::user()->admin)
    <x-app-layout>
        <x-slot name="header">
            <div style="margin-top:110px;">
                <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight"
                    style="font-size:45px; color:#568c2c; letter-spacing: 3px; font-weight:lighter; font-family: 'Alfa Slab One', serif;">
                    {{ __('COMENTARIOS') }}
                </h2>
            </div>
        </x-slot>
        <link rel="stylesheet" href="/css/index_products.css" />
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
        <br>
        <div class="container px-12 py-8 mx-auto bg-white" style="margin-bottom:300px;">
            <table class="table-auto w-full" style="border-collapse:separate; border-spacing:10px;"
                id="productos-grande">
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
                            @if (Lang::locale() == 'es')
                                {{ \App\Models\Product::where(['id' => $idProduct])->pluck('name')->first() }}
                            @else
                                {{ \App\Models\Product::where(['id' => $idProduct])->pluck('nameen')->first() }}
                            @endif
                        </td>
                        <td style="word-wrap: break-word; max-width:100px;">
                            {{ \App\Models\Valoracione::where(['id' => $comentario->idValoracion])->pluck('resenia')->first() }}
                        </td>
                        <td>{{ \App\Models\User::where(['id' => $comentario->idUser])->pluck('name')->first() }}</td>
                        <td style="word-wrap: break-word; max-width:100px;">{{ $comentario->resenia }}</td>
                        @if (Auth::user()->role != 'Cliente')
                            <td>
                                <form method="post"
                                    action="{{ route('products.destroyComentarioAdmin', $comentario->id) }}"
                                    onclick="return confirm('¿Estás seguro de que quieres eliminar este comentario?')">
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
                style="border-collapse:separate; border-spacing:5px; table-layout:fixed; margin-left:auto; margin-right:auto;"
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
                            <p style="margin-left:30px; text-align:right;">
                                @if (Lang::locale() == 'es')
                                    {{ \App\Models\Product::where(['id' => $idProduct])->pluck('name')->first() }}
                                @else
                                    {{ \App\Models\Product::where(['id' => $idProduct])->pluck('nameen')->first() }}
                                @endif
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-left:50px;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Valoración') }}
                            </p>
                        </td>
                        <td style="word-wrap: break-word; max-width:300px;">
                            <p style="margin-left:30px; text-align:right;">
                                {{ \App\Models\Valoracione::where(['id' => $comentario->idValoracion])->pluck('resenia')->first() }}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-left:50px;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Cliente') }}</p>
                        </td>
                        <td style="word-wrap: break-word; max-width:300px;">
                            <p style="margin-left:30px; text-align:right;">
                                {{ \App\Models\User::where(['id' => $comentario->idUser])->pluck('name')->first() }}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-left:50px;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Reseña') }}</p>
                        </td>
                        <td style="word-wrap: break-word; max-width:300px;">
                            <p style="margin-left:30px; text-align:right;">{{ $comentario->resenia }}</p>
                        </td>
                    </tr>
                    <tr>
                        @if (Auth::user()->role != 'Cliente')
                            <td style="padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Eliminar') }}
                                </p>
                            </td>
                            <td>
                                <div style="margin-left:20px; text-align:right;">
                                    <form method="post"
                                        action="{{ route('products.destroyComentarioAdmin', $comentario->id) }}"
                                        onclick="return confirm('¿Estás seguro de que quieres eliminar este comentario?')">
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

        <div class="footer">
            <div style="text-align:center; font-size:13px;">
                <p>{{ __('© 2023 Pizzería Brenda™. Todos los derechos reservados.') }}</p>
            </div>
            <div style="display:flex; flex-wrap:wrap; justify-content:center; align-items:center;">
                <div style="display:flex; gap: 5px; align-items:center;">
                    <p style="font-size:18px; color:#568c2c; font-weight:bolder; text-transform:uppercase;">
                        {{ __('Teléfonos: ') }}
                    </p>
                    <div style="font-size:18px; font-weight:bolder;">
                        <p>956 37 11 15 | 956 37 47 36 | 627 650 605</p>
                    </div>
                </div>
                <div style="margin-left:auto; display:flex; gap:30px; text-align:center;">
                    <a class="anavbar" href="{{ route('whoarewe') }}"
                        style="font-size:12px;">{{ __('¿Quiénes somos?') }}</a>
                    <a class="anavbar" href="{{ route('faq') }}"
                        style="font-size:12px;">{{ __('Preguntas frecuentes') }}</a>
                    <a class="anavbar" href="{{ route('contact') }}"
                        style="font-size:12px;">{{ __('Contáctanos') }}</a>
                    <a class="anavbar" href="{{ route('privacy') }}"
                        style="font-size:12px;">{{ __('Política de privacidad') }}</a>
                    <a class="anavbar" href="{{ route('premios') }}" style="font-size:12px;">{{ __('Premios') }}</a>
                </div>
                <div style="margin-left:auto; display:flex;">
                    <a href="https://twitter.com/BRENDAPIZZA" target="__blank"><img src="{{ asset('img/twit.png') }}"
                            width="25px" height="25px" style="margin-right:20px;" class="redes_sociales"></a>
                    <a href="https://www.instagram.com/pizzeriabrenda/?hl=es" target="__blank"><img
                            src="{{ asset('img/inst.png') }}" width="25px" height="25px" style="margin-right:20px;"
                            class="redes_sociales"></a>
                    <a href="https://www.tiktok.com/@pizzeriabrenda1986?lang=es" target="__blank"><img
                            src="{{ asset('img/tik.png') }}" width="25px" height="25px" style="margin-right:20px;"
                            class="redes_sociales"></a>
                    <a href="https://www.facebook.com/pizzeriabrenda/?locale=es_ES" target="__blank"><img
                            src="{{ asset('img/face.png') }}" width="25px" height="25px" style="margin-right:20px;"
                            class="redes_sociales"></a>
                </div>
                <div style="display:flex; gap: 5px; margin-left:auto; align-items:center;">
                    <p style="font-size:18px; color:#568c2c; font-weight:bolder; text-transform:uppercase;">
                        {{ __('Horario: ') }}
                    </p>
                    <div style="font-size:18px; font-weight:bolder;">
                        <p>{{ __('De lunes a domingo: 20:30 - 23:30') }}</p>
                        <p>{{ __('Domingo por la mañana: 13:30 - 15:00') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: #141414;
                color: white;
                padding: 20px;
                z-index: 1;
            }

            .anavbar:hover {
                text-decoration: underline;
            }

            @media only screen and (max-width: 639px) {
                .anavbar {
                    display: none;
                }

                .redes_sociales {
                    display: none;
                }
            }
        </style>

    </x-app-layout>
@endif
