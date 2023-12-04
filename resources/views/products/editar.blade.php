@if (Auth::user()->admin)
    <x-app-layout>
        <x-slot name="header">
            <br><br><br>
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
                {{ __('EDITAR PLATO') }}
            </h2>
            <br><br>
        </x-slot>
        <link rel="stylesheet" href="/css/index_products.css" />
        <br>
        <div style="text-align:center;">
            <a href="{{ route('products.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md"
                id="boton">{{ __('VOLVER') }}</a>
        </div>
        <br>
        <div class="container px-12 py-8 mx-auto bg-white">
            <form action="{{ route('products.actualizar', $product) }}" method="POST" enctype="multipart/form-data" name="editarplato" onsubmit="return validate()">
                @csrf
                @error('name')
                    <span class="text-danger" style="color:red;">{{ __($message) }}</span>
                    <br>
                @enderror
                <label for="name">{{ __('Nombre del plato') }}</label>
                <br>
                <input type="text" id="name" name="name" size="80" value="{{ $product->name }}" onfocusout="validate_name()">
                <p id="error_name" style="color:red;"></p>
                <br><br>
                @error('nameen')
                    <span class="text-danger" style="color:red;">{{ __($message) }}</span>
                    <br>
                @enderror
                <label for="nameen">{{ __('Nombre del plato (Inglés)') }}</label>
                <br>
                <input type="text" id="nameen" name="nameen" size="80" value="{{ $product->nameen }}" onfocusout="validate_nameen()">
                <p id="error_nameen" style="color:red;"></p>
                <br><br>
                @error('price')
                    <span class="text-danger" style="color:red;">{{ __($message) }}</span>
                    <br>
                @enderror
                <label for="price">{{ __('Precio') }}</label>
                <br>
                <input type="number" id="price" name="price" step=".01" value="{{ $product->price }}" onfocusout="validate_price()"> €
                <p id="error_price" style="color:red;"></p>
                <br><br>
                <label for="description">{{ __('Descripción') }}</label>
                <br>
                <input type="text" id="description" name="description" size="80"
                    value="{{ $product->description }}">
                <br><br>
                <label for="type">{{ __('Tipo') }}</label>
                <br>
                <select id="type" name="type">
                    <option value="Pizza">{{ __('Pizza') }}</option>
                    <option value="Hamburguesa">{{ __('Hamburguesa') }}</option>
                    <option value="Sándwich">{{ __('Sándwich') }}</option>
                    <option value="Pasta">{{ __('Pasta') }}</option>
                    <option value="Arroz">{{ __('Arroz') }}</option>
                    <option value="Baguette">{{ __('Baguette') }}</option>
                    <option value="Ensalada">{{ __('Ensalada') }}</option>
                    <option value="Complemento">{{ __('Complemento') }}</option>
                    <option value="Perrito">{{ __('Perrito') }}</option>
                    <option value="Cerveza">{{ __('Cerveza') }}</option>
                    <option value="Vino">{{ __('Vino') }}</option>
                    <option value="Refresco">{{ __('Refresco') }}</option>
                    <option value="Promoción">{{ __('Promoción') }}</option>
                    <option value="Oferta">{{ __('Oferta') }}</option>
                </select>
                <br>
                <strong>{{ __('Tipo actual:') }}</strong>&nbsp;{{ __($product->type) }}
                <br><br>
                <label for="image_product">{{ __('Imagen') }}</label>
                <br>
                @error('image_product')
                    <span class="text-danger" style="color:red;">{{ __($message) }}</span>
                    <br>
                @enderror
                <input type="file" name="image_product" id="image_product">
                <br><br>
                <label for="puntos">{{ __('Pizzacoins para desbloqueo (Sólo promociones)') }}</label>
                <br>
                <input type="number" id="puntos" name="puntos" step="1" value="{{ $product->puntos }}"
                    min="0" onfocusout="validate_puntos()">
                <p id="error_puntos" style="color:red;"></p>
                <br><br>
                <table>
                    <tr>
                        <td>
                            <img src="{{ asset('img/alergenos/single/gluten.png') }}" alt="gluten" height="50px"
                                width="50px">
                        </td>
                        <td>
                            <input type="checkbox" id="gluten" name="alergenos[]" value="gluten">
                            <label for="gluten">{{ __('Contiene gluten') }}</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('img/alergenos/single/crustaceos.png') }}" alt="crustaceos"
                                height="50px" width="50px">
                        </td>
                        <td>
                            <input type="checkbox" id="crustaceos" name="alergenos[]" value="crustaceos">
                            <label for="crustaceos">{{ __('Crustáceos') }}</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('img/alergenos/single/huevos.png') }}" alt="huevos" height="50px"
                                width="50px">
                        </td>
                        <td>
                            <input type="checkbox" id="huevos" name="alergenos[]" value="huevos">
                            <label for="huevos">{{ __('Huevos') }}</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('img/alergenos/single/pescado.png') }}" alt="pescado" height="50px"
                                width="50px">
                        </td>
                        <td>
                            <input type="checkbox" id="pescado" name="alergenos[]" value="pescado">
                            <label for="pescado">{{ __('Pescado') }}</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('img/alergenos/single/cacahuetes.png') }}" alt="cacahuetes"
                                height="50px" width="50px">
                        </td>
                        <td>
                            <input type="checkbox" id="cacahuetes" name="alergenos[]" value="cacahuetes">
                            <label for="cacahuetes">{{ __('Cacahuetes') }}</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('img/alergenos/single/soja.png') }}" alt="soja" height="50px"
                                width="50px">
                        </td>
                        <td>
                            <input type="checkbox" id="soja" name="alergenos[]" value="soja">
                            <label for="soja">{{ __('Soja') }}</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('img/alergenos/single/lacteos.png') }}" alt="lacteos" height="50px"
                                width="50px">
                        </td>
                        <td>
                            <input type="checkbox" id="lacteos" name="alergenos[]" value="lacteos">
                            <label for="lacteos">{{ __('Lácteos') }}</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('img/alergenos/single/cascara.png') }}" alt="cascara" height="50px"
                                width="50px">
                        </td>
                        <td>
                            <input type="checkbox" id="cascara" name="alergenos[]" value="cascara">
                            <label for="cascaro">{{ __('Frutos de cáscara') }}</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('img/alergenos/single/apio.png') }}" alt="apio" height="50px"
                                width="50px">
                        </td>
                        <td>
                            <input type="checkbox" id="apio" name="alergenos[]" value="apio">
                            <label for="apio">{{ __('Apio') }}</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('img/alergenos/single/mostaza.png') }}" alt="mostaza" height="50px"
                                width="50px">
                        </td>
                        <td>
                            <input type="checkbox" id="mostaza" name="alergenos[]" value="mostaza">
                            <label for="mostaza">{{ __('Mostaza') }}</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('img/alergenos/single/sesamo.png') }}" alt="sesamo" height="50px"
                                width="50px">
                        </td>
                        <td>
                            <input type="checkbox" id="sesamo" name="alergenos[]" value="sesamo">
                            <label for="sesamo">{{ __('Granos de sésamo') }}</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('img/alergenos/single/dioxido.png') }}" alt="dioxido" height="50px"
                                width="50px">
                        </td>
                        <td>
                            <input type="checkbox" id="dioxido" name="alergenos[]" value="dioxido">
                            <label for="dioxido">{{ __('Dióxido de azufre y sulfitos') }}</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('img/alergenos/single/altramuces.png') }}" alt="altramuces"
                                height="50px" width="50px">
                        </td>
                        <td>
                            <input type="checkbox" id="altramuces" name="alergenos[]" value="altramuces">
                            <label for="altramuces">{{ __('Altramuces') }}</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="{{ asset('img/alergenos/single/moluscos.png') }}" alt="moluscos"
                                height="50px" width="50px">
                        </td>
                        <td>
                            <input type="checkbox" id="moluscos" name="alergenos[]" value="moluscos">
                            <label for="moluscos">{{ __('Moluscos') }}</label>
                        </td>
                    </tr>
                </table>
                <br>
                <?php
                $alergenoslista = $product->alergenos;
                $listacomas = str_replace('-', ', ', $alergenoslista);
                ?>
                <strong>{{ __('Alérgenos actuales:') }}</strong>&nbsp;{{ $listacomas }}
                <br><br><br><br>
                <div class="text-center">
                    <button type="submit" class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500"
                        id="boton">{{ __('ACTUALIZAR') }}</button>
                </div>
            </form>
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
                <a href="https://twitter.com/BRENDAPIZZA"><img src="{{ asset('img/twit.png') }}" width="30px"
                        height="30px" style="margin-right:20px;"></a>
                <a href="https://www.instagram.com/pizzeriabrenda/?hl=es"><img src="{{ asset('img/inst.png') }}"
                        width="30px" height="30px" style="margin-right:20px;"></a>
                <a href="https://www.tiktok.com/@pizzeriabrenda1986?lang=es"><img src="{{ asset('img/tik.png') }}"
                        width="30px" height="30px" style="margin-right:20px;"></a>
                <a href="https://www.facebook.com/pizzeriabrenda/?locale=es_ES"><img
                        src="{{ asset('img/face.png') }}" width="30px" height="30px"
                        style="margin-right:20px;"></a>
            </div>
        </footer>

        <script>
            function validate() {
                if (!(validate_name() && validate_nameen() && validate_price() && validate_puntos())) {
                    return false;
                }
            }

            function validate_name() {
                var name = document.forms["editarplato"]["name"].value;
                if (name == "") {
                    document.getElementById("error_name").innerHTML =
                        "{{ __('El campo de nombre del plato es obligatorio.') }}";
                    return false;
                } else if (name.length > 255) {
                    document.getElementById("error_name").innerHTML =
                        "{{ __('El nombre del plato no puede tener más de 255 caracteres.') }}";
                    return false;
                } else {
                    document.getElementById("error_name").innerHTML = "";
                    return true;
                }
            }

            function validate_nameen() {
                var nameen = document.forms["editarplato"]["nameen"].value;
                if (nameen == "") {
                    document.getElementById("error_nameen").innerHTML =
                        "{{ __('El campo de nombre del plato (inglés) es obligatorio.') }}";
                    return false;
                } else if (nameen.length > 255) {
                    document.getElementById("error_nameen").innerHTML =
                        "{{ __('El nombre del plato (inglés) no puede tener más de 255 caracteres.') }}";
                    return false;
                } else {
                    document.getElementById("error_nameen").innerHTML = "";
                    return true;
                }
            }

            function validate_price() {
                var price = document.forms["editarplato"]["price"].value;
                if (price == "") {
                    document.getElementById("error_price").innerHTML =
                        "{{ __('El campo de precio es obligatorio.') }}";
                    return false;
                } else if (price < 0) {
                    document.getElementById("error_price").innerHTML =
                        "{{ __('El precio no puede ser menor de 0€.') }}";
                    return false;
                } else if (isNaN(price)) {
                    document.getElementById("error_price").innerHTML =
                        "{{ __('El precio debe ser un número.') }}";
                    return false;
                } else {
                    document.getElementById("error_price").innerHTML = "";
                    return true;
                }
            }

            function validate_puntos() {
                var puntos = document.forms["editarplato"]["puntos"].value;
                if (puntos < 0) {
                    document.getElementById("error_puntos").innerHTML =
                        "{{ __('El producto no puede costar menos de 0 Pizzacoins.') }}";
                    return false;
                } else if (isNaN(puntos)) {
                    document.getElementById("error_puntos").innerHTML =
                        "{{ __('El campo de Pizzacoins debe ser un número.') }}";
                    return false;
                } else {
                    document.getElementById("error_puntos").innerHTML = "";
                    return true;
                }
            }
        </script>

    </x-app-layout>
@endif
