<x-app-layout>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <x-slot name="header">
        <br><br><br>
        @if (Lang::locale() == 'es')
            <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center"
                style="font-size:25px; text-transform:uppercase;">
                {{ $products->name }} {{ __('- DETALLES') }}
            </h2>
        @else
            <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center"
                style="font-size:25px; text-transform:uppercase;">
                {{ $products->nameen }} {{ __('- DETALLES') }}
            </h2>
        @endif
        <br><br>
    </x-slot>
    <link rel="stylesheet" href="/css/index_products.css" />

    {{--
    <script src="{{ asset('js/pruebatexto-2.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#anim').on('click', function(event) {
                event.preventDefault();
                alert("{{__('Ey, ¿qué pasa?')}}");
            });
        });
    </script>
    <div id="dialog" style="float:right; width:300px;">
        <div id="d1" onclick="showText('d1', 'd2')" style="background-color:white; position:fixed; right:150px; bottom:100px; padding:20px; border-color:black; border-style:solid; border-width:2px; border-radius:10px;">
            <p>{{__('¿Tienes alguna alergia?')}}</p>
        </div>
        <div id="d2" onclick="showText('d2', false, true)" style="background-color:white; position:fixed; right:150px; bottom:100px; padding:20px; border-color:black; border-style:solid; border-width:2px; border-radius:10px; display:none;">
            <p>{{__('Puedes consultar el cuadro de alérgenos, y comprobar si este plato contiene alguno.')}}</p>
        </div>
    </div>
    <img id="anim" src="{{ asset('img/anim/Pizza2.gif') }}" alt="..." style="height:120px; width:120px; position:fixed; right:10px; bottom:65px;">
    --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('products.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md"
                        id="boton">{{ __('VOLVER') }}
                    </a>
                    <br><br>
                    <div class="mb-6">
                        <img src="{{ asset($products->image) }}" alt="producto" class="max-h-60 mx-auto"
                            style="border:5px solid gray; border-radius:10px;">
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Nombre del plato') }}
                        </h2>

                        @if (Lang::locale() == 'es')
                            <p class="mt-1 text-sm text-gray-600">
                                {{ $products->name }}
                            </p>
                        @else
                            <p class="mt-1 text-sm text-gray-600">
                                {{ $products->nameen }}
                            </p>
                        @endif
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
                    <div class="mb-6" style="display:flex; gap:10px;">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Alérgenos:') }}
                        </h2>
                        <?php
                        $alergenoslista = explode('-', $products->alergenos);
                        ?>
                        <div style="display:flex; flex-wrap:wrap; gap:5px;">
                            @if ($products->alergenos != '')
                                @foreach ($alergenoslista as $alergeno)
                                    <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}" width="40px"
                                        height="40px">
                                @endforeach
                            @endif
                        </div>
                    </div>
                    {{--
                        @if (Auth::user()->admin)
                        <form method="post" action="{{ route('products.destroy', $products->id) }}" class="inline">
                            @csrf
                            @method('delete')
                            <button
                            class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('BORRAR') }}</button>
                        </form>
                        @endif
                        --}}

                    <img src="{{ asset('img/alergenos.jpg') }}" alt="" width="350px" height="350px"
                        class="max-h-60 mx-auto" style="border:3px solid gray; border-radius:10px;">

                    <br><br>

                    <div style="display:flex; justify-content:center; gap:100px;">
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $products->id }}" name="id">
                            @if (Lang::locale() == 'es')
                                <input type="hidden" value="{{ $products->name }}" name="name">
                            @else
                                <input type="hidden" value="{{ $products->nameen }}" name="name">
                            @endif
                            <input type="hidden" value="{{ $products->price }}" name="price">
                            <input type="hidden" value="{{ $products->image }}" name="image">
                            <input type="hidden" value="1" name="quantity">
                            <div style="text-align:center;">
                                <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded"
                                    id="boton">{{ __('AÑADIR AL CARRITO') }}</button>
                            </div>
                        </form>
                        <form action="{{ route('cart.inmediato') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $products->id }}" name="id">
                            @if (Lang::locale() == 'es')
                                <input type="hidden" value="{{ $products->name }}" name="name">
                            @else
                                <input type="hidden" value="{{ $products->nameen }}" name="name">
                            @endif
                            <input type="hidden" value="{{ $products->price }}" name="price">
                            <input type="hidden" value="{{ $products->image }}" name="image">
                            <input type="hidden" value="1" name="quantity">
                            <div style="text-align:center;">
                                <button class="px-4 py-1.5 text-white text-sm rounded" id="boton"
                                    style="background-color:green;">{{ __('COMPRA INMEDIATA') }}</button>
                            </div>
                        </form>
                    </div>
                    <br><br>
                    <div style="background-color:gray; width:100%; height:5px; border-radius:10px;"><br></div>
                    <br><br>
                    <h2 class="text-center" style="font-weight:bolder; font-size:20px;">{{ __('RESEÑAS') }}</h2>
                    <br>
                    <p style="text-align:center;">{{ __('¿Cómo valorarías este plato?') }}</p>
                    <br>
                    <form action="{{ route('products.addValoracion', $products->id) }}" method="POST"
                        id="valoracion" name="valoracion" onsubmit="return validate_valoracion()">
                        @csrf
                        <table>
                            <tr>
                                <td onclick="valoracion(1)"><img src="{{ asset('img/starblank.png') }}"
                                        alt="*" width="30px" height="30px" id="e1"></td>
                                <td onclick="valoracion(2)"><img src="{{ asset('img/starblank.png') }}"
                                        alt="*" width="30px" height="30px" id="e2"></td>
                                <td onclick="valoracion(3)"><img src="{{ asset('img/starblank.png') }}"
                                        alt="*" width="30px" height="30px" id="e3"></td>
                                <td onclick="valoracion(4)"><img src="{{ asset('img/starblank.png') }}"
                                        alt="*" width="30px" height="30px" id="e4"></td>
                                <td onclick="valoracion(5)"><img src="{{ asset('img/starblank.png') }}"
                                        alt="*" width="30px" height="30px" id="e5"></td>
                            </tr>
                        </table>
                        <input type="hidden" id="estrellas" name="estrellas" value="1">
                        <br>
                        @error('resenia')
                            <span class="text-danger" style="color:red;">{{ __($message) }}</span>
                            <br>
                        @enderror
                        <textarea form="valoracion" name="resenia" id="resenia" placeholder="{{ __('Escribe aquí tu reseña.') }}"
                            style="width:100%; border-radius:10px;" onfocusout="validate_valoracion_input()"></textarea>
                        <p id="error_resenia" style="color:red;"></p>
                        <br><br>
                        <div>
                            <button type="submit" class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500"
                                id="boton">{{ __('Publicar') }}</button>
                        </div>
                    </form>
                    <br><br>
                    <div style="background-color:gray; width:100%; height:3px; border-radius:10px;"><br></div>
                    <br>
                    <div>
                        @foreach ($valoraciones as $valoracion)
                            @if ($valoracion->idProduct == $products->id)
                                <p style="font-size:13px; margin-bottom:5px;">
                                    {{ \App\Models\User::where(['id' => $valoracion->idUser])->pluck('name')->first() }}
                                </p>
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
                                <p style="margin-top:10px;">
                                    {{ $valoracion->resenia }}
                                </p>
                                <p style="font-size:12px; color:gray;">
                                    @if ($valoracion->modificado)
                                        {{ __('(Modificado)') }}
                                    @endif
                                </p>
                                @if ($valoracion->idUser == Auth::user()->id)
                                    <br>
                                    <div x-data="{ mostrarVal: false }">
                                        <button type="button" class="px-6 py-2 text-sm rounded shadow"
                                            style="font-size:13px; background-color:lightgray; color:blue;"
                                            id="boton" x-on:click="mostrarVal = !mostrarVal"
                                            x-text="mostrarVal ? '{{ __('Editar valoración') }}' : '{{ __('Editar valoración') }}'"></button>
                                        <div x-show="mostrarVal">
                                            <br>
                                            <form
                                                action="{{ route('products.actualizarValoracion', [$products->id, $valoracion->id]) }}"
                                                method="POST" onsubmit="return validate_editarvaloracion()"
                                                name="editarvaloracion">
                                                @csrf
                                                <div style="align-items:center;">
                                                    @error('modifVal')
                                                        <span class="text-danger"
                                                            style="color:red;">{{ __($message) }}</span>
                                                        <br>
                                                    @enderror
                                                    <input type="text" id="modifVal" name="modifVal"
                                                        style="border-radius:10px;"
                                                        onfocusout="validate_editarvaloracion_input()">
                                                    <button type="submit" class="px-6 py-2 text-sm rounded shadow"
                                                        style="color:green; background-color:lightgray; margin-left:10px;"
                                                        id="boton">{{ __('Publicar') }}
                                                    </button>
                                                    <p id="error_reseniaeditar" style="color:red;"></p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <br>
                                    <form
                                        action="{{ route('products.destroyValoracion', [$products->id, $valoracion->id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('delete')
                                        <div>
                                            <button type="submit" class="px-6 py-2 text-sm rounded shadow"
                                                style="color:red; background-color:lightgray;"
                                                id="boton">{{ __('Borrar valoración') }}</button>
                                        </div>
                                    </form>
                                @endif
                                <br>
                                <div style="margin-left: 30px;">
                                    <p style="font-weight:bolder; font-size:15px;">{{ __('Comentarios') }}</p>
                                    <div style="background-color:gray; width:200px; height:2px; border-radius:10px;">
                                        <br>
                                    </div>
                                    <br>
                                    <form
                                        action="{{ route('products.addComentario', [$products->id, $valoracion->id]) }}"
                                        method="POST" onsubmit="return validate_comentario()" name="comentario">
                                        @csrf
                                        @error('reseniaCom')
                                            <span class="text-danger" style="color:red;">{{ __($message) }}</span>
                                            <br>
                                        @enderror
                                        <div style="display:flex; align-items:center;">
                                            <input type="text" id="reseniaCom" name="reseniaCom"
                                                placeholder="{{ __('Escribe aquí tu comentario.') }}" size="30"
                                                style="border-radius:10px;" onfocusout="validate_comentario_input()">
                                            <br><br>
                                            <div>
                                                <button type="submit"
                                                    class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500"
                                                    id="boton"
                                                    style="margin-left:10px;">{{ __('Publicar comentario') }}
                                                </button>
                                            </div>
                                        </div>
                                        <p id="error_comentario" style="color:red;"></p>
                                    </form>
                                    <br>
                                    @foreach ($comentarios as $comentario)
                                        @if ($comentario->idValoracion == $valoracion->id)
                                            <p style="font-size:13px; margin-bottom:5px;">
                                                {{ \App\Models\User::where(['id' => $comentario->idUser])->pluck('name')->first() }}
                                            </p>
                                            <p>
                                                {{ $comentario->resenia }}
                                            </p>
                                            <p style="font-size:12px; color:gray;">
                                                @if ($comentario->modificado)
                                                    {{ __('(Modificado)') }}
                                                @endif
                                            </p>
                                            @if ($comentario->idUser == Auth::user()->id)
                                                <br>
                                                <div x-data="{ mostrarCom: false }">
                                                    <button class="px-6 py-2 text-sm rounded shadow"
                                                        style="font-size:13px; background-color:lightgray; color:blue;"
                                                        x-on:click="mostrarCom = !mostrarCom"
                                                        x-text="mostrarCom ? '{{ __('Editar comentario') }}' : '{{ __('Editar comentario') }}'"
                                                        id="boton"></button>
                                                    <div x-show="mostrarCom">
                                                        <br>
                                                        <form
                                                            action="{{ route('products.actualizarComentario', [$products->id, $comentario->id]) }}"
                                                            method="POST"
                                                            onsubmit="return validate_editarcomentario()"
                                                            name="editarcomentario">
                                                            @csrf
                                                            <div style="align-items:center;">
                                                                @error('modifCom')
                                                                    <span class="text-danger"
                                                                        style="color:red;">{{ __($message) }}</span>
                                                                    <br>
                                                                @enderror
                                                                <input type="text" id="modifCom" name="modifCom"
                                                                    style="border-radius:10px;"
                                                                    onfocusout="validate_editarcomentario_input()">
                                                                <button type="submit"
                                                                    class="px-6 py-2 text-sm rounded shadow"
                                                                    style="color:green; background-color:lightgray; margin-left:10px;"
                                                                    id="boton">{{ __('Publicar') }}
                                                                </button>
                                                            </div>
                                                            <p id="error_editarcomentario" style="color:red;"></p>
                                                        </form>
                                                    </div>
                                                </div>
                                                <br>
                                                <form
                                                    action="{{ route('products.destroyComentario', [$products->id, $comentario->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <div>
                                                        <button type="submit"
                                                            class="px-6 py-2 text-sm rounded shadow"
                                                            style="color:red; background-color:lightgray;"
                                                            id="boton">{{ __('Borrar comentario') }}</button>
                                                    </div>
                                                </form>
                                            @endif
                                            <br>
                                        @endif
                                    @endforeach
                                    <br>
                                    <div
                                        style="background-color:gray; width:100%; height:2px; border-radius:10px; position:relative; left:-30px;">
                                        <br>
                                    </div>
                                    <br>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
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
            <a href="https://twitter.com/BRENDAPIZZA" target="__blank"><img src="{{ asset('img/twit.png') }}"
                    width="30px" height="30px" style="margin-right:20px;"></a>
            <a href="https://www.instagram.com/pizzeriabrenda/?hl=es" target="__blank"><img
                    src="{{ asset('img/inst.png') }}" width="30px" height="30px" style="margin-right:20px;"></a>
            <a href="https://www.tiktok.com/@pizzeriabrenda1986?lang=es" target="__blank"><img
                    src="{{ asset('img/tik.png') }}" width="30px" height="30px" style="margin-right:20px;"></a>
            <a href="https://www.facebook.com/pizzeriabrenda/?locale=es_ES" target="__blank"><img
                    src="{{ asset('img/face.png') }}" width="30px" height="30px" style="margin-right:20px;"></a>
        </div>
    </footer>

    <script src="{{ asset('js/product-script.js') }}"></script>
    <script>
        function validate_valoracion() {
            if (!(validate_valoracion_input())) {
                return false;
            }
        }

        function validate_valoracion_input() {
            var resenia = document.forms["valoracion"]["resenia"].value;
            if (resenia == "") {
                document.getElementById("error_resenia").innerHTML =
                    "{{ __('La reseña no puede quedarse en blanco.') }}";
                return false;
            } else {
                document.getElementById("error_resenia").innerHTML = "";
                return true;
            }
        }

        function validate_editarvaloracion() {
            if (!(validate_editarvaloracion_input())) {
                return false;
            }
        }

        function validate_editarvaloracion_input() {
            var resenia = document.forms["editarvaloracion"]["modifVal"].value;
            if (resenia == "") {
                document.getElementById("error_reseniaeditar").innerHTML =
                    "{{ __('La reseña no puede quedarse en blanco.') }}";
                return false;
            } else {
                document.getElementById("error_reseniaeditar").innerHTML = "";
                return true;
            }
        }

        function validate_comentario() {
            if (!(validate_comentario_input())) {
                return false;
            }
        }

        function validate_comentario_input() {
            var comentario = document.forms["comentario"]["reseniaCom"].value;
            if (comentario == "") {
                document.getElementById("error_comentario").innerHTML =
                    "{{ __('El comentario no puede quedarse en blanco.') }}";
                return false;
            } else {
                document.getElementById("error_comentario").innerHTML = "";
                return true;
            }
        }

        function validate_editarcomentario() {
            if (!(validate_editarcomentario_input())) {
                return false;
            }
        }

        function validate_editarcomentario_input() {
            var comentario = document.forms["editarcomentario"]["modifCom"].value;
            if (comentario == "") {
                document.getElementById("error_editarcomentario").innerHTML =
                    "{{ __('El comentario no puede quedarse en blanco.') }}";
                return false;
            } else {
                document.getElementById("error_editarcomentario").innerHTML = "";
                return true;
            }
        }
    </script>

</x-app-layout>
