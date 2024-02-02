@if (Auth::user()->admin)
    <x-app-layout>
        <x-slot name="header">
            <div style="margin-top:110px;">
                <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight"
                    style="font-size:60px; color:#568c2c; letter-spacing: 3px; font-weight:lighter; font-family: 'Alfa Slab One', serif;">
                    {{ __('EDITAR PLATO') }}
                </h2>
            </div>
        </x-slot>
        <link rel="stylesheet" href="/css/index_products.css" />
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Acme&family=Grandstander:wght@800&display=swap"
            rel="stylesheet">
        <br>
        <div style="text-align:center;">
            <a href="{{ route('products.index') }}" class="text-white px-4 py-2 rounded-md" id="boton"
                style="background-color:#f12d2d;">{{ __('VOLVER') }}</a>
        </div>
        <br>
        <div class="container px-12 py-8 mx-auto bg-white"
            style="margin-bottom:300px; display:flex; justify-content:center; gap:5vw; flex-wrap:wrap;"
            x-data="{ nombre: '', name: '' }">
            <div>
                @if (Lang::locale() == 'es')
                    <script>
                        function previewFile(input) {
                            var file = $("input[type=file]").get(0).files[0];

                            if (file.size > 10485760) {
                                alert("La imagen no puede pesar más de 10 MB.");
                                input.value = "";
                            } else {
                                if (file) {
                                    var reader = new FileReader();

                                    reader.onload = function() {
                                        $("#previewImg").attr("style",
                                            "display:block; margin-top:10px; margin-bottom:10px; margin-left:auto; margin-right:auto;"
                                        );
                                        $("#previewImg").attr("src", reader.result);
                                    }
                                    reader.readAsDataURL(file);
                                }
                            }
                        }
                    </script>
                @else
                    <script>
                        function previewFile(input) {
                            var file = $("input[type=file]").get(0).files[0];

                            if (file.size > 10485760) {
                                alert("The image file size cannot be more than 10 MB.");
                                input.value = "";
                            } else {
                                if (file) {
                                    var reader = new FileReader();

                                    reader.onload = function() {
                                        $("#previewImg").attr("style",
                                            "display:block; margin-top:10px; margin-bottom:10px; margin-left:auto; margin-right:auto;"
                                        );
                                        $("#previewImg").attr("src", reader.result);
                                    }
                                    reader.readAsDataURL(file);
                                }
                            }
                        }
                    </script>
                @endif
                <div style="width:400px; border:3px solid #141414; border-radius:20px; overflow-wrap: break-word;">
                    <img id="previewImg" src="{{ asset($product->image) }}" placeholder="Preview"
                        style="display:block; margin-top:10px; margin-bottom:10px; margin-left:auto; margin-right:auto;"
                        width="300px">
                    <p style="font-family: 'Acme', sans-serif; font-size:25px; text-transform:uppercase; margin:10px;"
                        x-text="nombre"></p>
                    <p style="font-family: 'Acme', sans-serif; font-size:25px; text-transform:uppercase; margin:10px;"
                        x-text="name"></p>
                </div>
            </div>
            <div>
                <form action="{{ route('products.actualizar', $product) }}" method="POST" enctype="multipart/form-data"
                    name="editarplato" onsubmit="return validate()">
                    @csrf
                    <div id="input_div" style="margin:auto; display:block;">
                        @error('name')
                            <span class="text-danger" style="color:red;">{{ __($message) }}</span>
                            <br>
                        @enderror
                        <label for="name">{{ __('Nombre del plato') }}</label>
                        <br>
                        <input type="text" id="name" name="name" size="80" onfocusout="validate_name()"
                            style="width:100%; border-radius:30px;" x-model="nombre">
                        <br>
                        <strong>{{ __('Nombre del plato actual:') }}</strong>&nbsp;{{ __($product->name) }}
                        <p id="error_name" style="color:red;"></p>
                    </div>
                    <br><br>
                    <div id="input_div" style="margin:auto; display:block;">
                        @error('nameen')
                            <span class="text-danger" style="color:red;">{{ __($message) }}</span>
                            <br>
                        @enderror
                        <label for="nameen">{{ __('Nombre del plato (Inglés)') }}</label>
                        <br>
                        <input type="text" id="nameen" name="nameen" size="80"
                            onfocusout="validate_nameen()" style="width:100%; border-radius:30px;" x-model="name">
                        <br>
                        <strong>{{ __('Nombre del plato actual (Inglés):') }}</strong>&nbsp;{{ __($product->nameen) }}
                        <p id="error_nameen" style="color:red;"></p>
                    </div>
                    <br><br>
                    <div id="input_div" style="margin:auto; display:block;">
                        @error('image_product')
                            <span class="text-danger" style="color:red;">{{ __($message) }}</span>
                            <br>
                        @enderror
                        <input type="file" accept=".jpg,.png,.jpeg,.gif,.svg" name="image_product" id="image_product" onchange="previewFile(this);"
                            required>
                    </div>
                    <br><br>
                    <div id="input_div" style="margin:auto; display:block;">
                        @error('price')
                            <span class="text-danger" style="color:red;">{{ __($message) }}</span>
                            <br>
                        @enderror
                        <label for="price">{{ __('Precio') }}</label>
                        <br>
                        <input type="number" id="price" name="price" step=".01"
                            value="{{ $product->price }}" onfocusout="validate_price()" style="border-radius:30px;"> €
                        <p id="error_price" style="color:red;"></p>
                    </div>
                    <br><br>
                    <div id="input_div" style="margin:auto; display:block;">
                        <label for="description">{{ __('Descripción') }}</label>
                        <br>
                        <textarea id="description" name="description" size="80"
                            style="width:100%;">{{ $product->description }}</textarea>
                    </div>
                    <br><br>
                    <div id="input_div" style="margin:auto; display:block;">
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
                    </div>
                    <br><br>
                    <div id="input_div" style="margin:auto; display:block;">
                        <label for="puntos">{{ __('Pizzacoins para desbloqueo (Sólo promociones)') }}</label>
                        <br>
                        <input type="number" id="puntos" name="puntos" step="1"
                            value="{{ $product->puntos }}" min="0" onfocusout="validate_puntos()" style="border-radius:30px;">
                        <p id="error_puntos" style="color:red;"></p>
                    </div>
                    <br><br>
                    <div id="input_div" style="margin:auto; display:block;">
                        <table>
                            <tr>
                                <td>
                                    <img src="{{ asset('img/alergenos/single/gluten.png') }}" alt="gluten"
                                        height="50px" width="50px">
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
                                    <img src="{{ asset('img/alergenos/single/huevos.png') }}" alt="huevos"
                                        height="50px" width="50px">
                                </td>
                                <td>
                                    <input type="checkbox" id="huevos" name="alergenos[]" value="huevos">
                                    <label for="huevos">{{ __('Huevos') }}</label><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('img/alergenos/single/pescado.png') }}" alt="pescado"
                                        height="50px" width="50px">
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
                                    <img src="{{ asset('img/alergenos/single/soja.png') }}" alt="soja"
                                        height="50px" width="50px">
                                </td>
                                <td>
                                    <input type="checkbox" id="soja" name="alergenos[]" value="soja">
                                    <label for="soja">{{ __('Soja') }}</label><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('img/alergenos/single/lacteos.png') }}" alt="lacteos"
                                        height="50px" width="50px">
                                </td>
                                <td>
                                    <input type="checkbox" id="lacteos" name="alergenos[]" value="lacteos">
                                    <label for="lacteos">{{ __('Lácteos') }}</label><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('img/alergenos/single/cascara.png') }}" alt="cascara"
                                        height="50px" width="50px">
                                </td>
                                <td>
                                    <input type="checkbox" id="cascara" name="alergenos[]" value="cascara">
                                    <label for="cascaro">{{ __('Frutos de cáscara') }}</label><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('img/alergenos/single/apio.png') }}" alt="apio"
                                        height="50px" width="50px">
                                </td>
                                <td>
                                    <input type="checkbox" id="apio" name="alergenos[]" value="apio">
                                    <label for="apio">{{ __('Apio') }}</label><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('img/alergenos/single/mostaza.png') }}" alt="mostaza"
                                        height="50px" width="50px">
                                </td>
                                <td>
                                    <input type="checkbox" id="mostaza" name="alergenos[]" value="mostaza">
                                    <label for="mostaza">{{ __('Mostaza') }}</label><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('img/alergenos/single/sesamo.png') }}" alt="sesamo"
                                        height="50px" width="50px">
                                </td>
                                <td>
                                    <input type="checkbox" id="sesamo" name="alergenos[]" value="sesamo">
                                    <label for="sesamo">{{ __('Granos de sésamo') }}</label><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('img/alergenos/single/dioxido.png') }}" alt="dioxido"
                                        height="50px" width="50px">
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
                        $alergenoslista = explode('-', $product->alergenos);
                        ?>
                        <div
                            style="display:flex; flex-wrap:wrap; margin-top:10px; margin-bottom:10px; gap:5px; align-items:center;">
                            <strong>{{ __('Alérgenos actuales:') }}</strong>&nbsp;
                            @if ($product->alergenos != '')
                                @foreach ($alergenoslista as $alergeno)
                                    <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                        width="30px" height="30px">
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <br><br><br><br>
                    <div class="text-center">
                        <button type="submit" class="px-6 py-2 text-sm rounded shadow text-red-100" id="boton"
                            style="background-color:#568c2c;">{{ __('ACTUALIZAR') }}</button>
                    </div>
                </form>
            </div>
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
                    <a class="anavbar" href="{{ route('premios') }}"
                        style="font-size:12px;">{{ __('Premios') }}</a>
                </div>
                <div style="margin-left:auto; display:flex;">
                    <a href="https://twitter.com/BRENDAPIZZA" target="__blank"><img
                            src="{{ asset('img/twit.png') }}" alt="twitter" width="25px" height="25px"
                            style="margin-right:20px;" class="redes_sociales"></a>
                    <a href="https://www.instagram.com/pizzeriabrenda/?hl=es" target="__blank"><img
                            src="{{ asset('img/inst.png') }}" alt="instagram" width="25px" height="25px"
                            style="margin-right:20px;" class="redes_sociales"></a>
                    <a href="https://www.tiktok.com/@pizzeriabrenda1986?lang=es" target="__blank"><img
                            src="{{ asset('img/tik.png') }}" alt="tiktok" width="25px" height="25px"
                            style="margin-right:20px;" class="redes_sociales"></a>
                    <a href="https://www.facebook.com/pizzeriabrenda/?locale=es_ES" target="__blank"><img
                            src="{{ asset('img/face.png') }}" alt="facebook" width="25px" height="25px"
                            style="margin-right:20px;" class="redes_sociales"></a>
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

        <style>
            @media only screen and (max-width: 780px) {
                #input_div {
                    width: 75%;
                }
            }

            @media only screen and (min-width: 781px) {
                #input_div {
                    width: 100%;
                }
            }
        </style>

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

        <script>
            var regex = new RegExp("^[^¬]*$");

            document.getElementById("name").addEventListener("beforeinput", (event) => {
                if (event.data != null && !regex.test(event.data))
                    event.preventDefault();
            })

            document.getElementById("nameen").addEventListener("beforeinput", (event) => {
                if (event.data != null && !regex.test(event.data))
                    event.preventDefault();
            })
        </script>

    </x-app-layout>
@endif
