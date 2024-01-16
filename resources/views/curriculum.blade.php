<x-app-layout>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <x-slot name="header">
        <div style="margin-top:110px;">
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight"
                style="font-size:50px; color:#568c2c; letter-spacing: 3px; font-weight:lighter; font-family: 'Alfa Slab One', serif;">
                {{ __('CURRÍCULUM') }}
            </h2>
        </div>
    </x-slot>
    <link rel="stylesheet" href="/css/curriculum.css" />
    <link rel="stylesheet" href="/css/index_products.css" />
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    @if (Lang::locale() == 'es')
        <script>
            function previewFile(input) {
                var file = $("input[type=file]").get(0).files[0];

                if (file.size > 10485760) {
                    alert("El archivo del currículum no puede pesar más de 10 MB.");
                    input.value = "";
                } else {
                    if (file) {
                        var reader = new FileReader();

                        reader.onload = function() {
                            if (reader.result.substr(0, 20) == "data:application/pdf") {
                                $("#previewImg").attr("style", "display:none;");
                                $("#verPDF").attr("style", "display:block;");
                                $("#verPDF").attr("src", reader.result);
                            } else {
                                $("#verPDF").attr("style", "display:none;");
                                $("#previewImg").attr("style", "display:block;");
                                $("#previewImg").attr("src", reader.result);
                            }
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
                    alert("The file size of the resume cannot be more than 10 MB.");
                    input.value = "";
                } else {
                    if (file) {
                        var reader = new FileReader();

                        reader.onload = function() {
                            if (reader.result.substr(0, 20) == "data:application/pdf") {
                                $("#previewImg").attr("style", "display:none;");
                                $("#verPDF").attr("style", "display:block;");
                                $("#verPDF").attr("src", reader.result);
                            } else {
                                $("#verPDF").attr("style", "display:none;");
                                $("#previewImg").attr("style", "display:block;");
                                $("#previewImg").attr("src", reader.result);
                            }
                        }
                        reader.readAsDataURL(file);
                    }
                }
            }
        </script>
    @endif
    <br>
    <div class="container px-12 py-8 mx-auto bg-white" style="margin-bottom:300px;">
        @if (Auth::user()->role == 'Jefe')
            <div style="padding:30px;">
                <div style="background-color:gray; width:100%; height:2px; border-radius:10px;"><br></div>
                <br><br>
                @foreach ($curriculums as $curriculum)
                    <div style="display:flex; align-items:center; gap:50px; flex-wrap:wrap;">
                        @if (substr($curriculum->curriculum, -4) == '.pdf')
                            <div>
                                <a href="{{ asset($curriculum->curriculum) }}" class="text-white px-4 py-2 rounded-md"
                                    id="boton" target="__blank"
                                    style="background-color:#568c2c;">{{ __('Ver currículum en PDF') }}</a>
                            </div>
                        @else
                            <div>
                                <img src="{{ asset($curriculum->curriculum) }}" alt="curriculum" width="200px;">
                                <br>
                                <a href="{{ asset($curriculum->curriculum) }}" class="text-white px-4 py-2 rounded-md"
                                    id="boton" target="__blank"
                                    style="background-color:#568c2c;">{{ __('Ampliar imagen') }}</a>
                            </div>
                        @endif
                        <div>
                            {{--
                                @if ($curriculum->nuevo)
                                    <p></p>
                                @else
                                    <p>{{__('NUEVO')}}</p>
                                    <br>
                                @endif
                            --}}
                            <p>
                                {{ \App\Models\User::where(['id' => $curriculum->idUser])->pluck('name')->first() }}
                            </p>
                            <br>
                            <p>
                                {{ \App\Models\User::where(['id' => $curriculum->idUser])->pluck('email')->first() }}
                            </p>
                            <br>
                            <form method="post" action="{{ route('curriculum.destroy', $curriculum->id) }}"
                                onclick="return confirm('¿Estás seguro de que quieres eliminar este currículum?')">
                                @csrf
                                @method('delete')
                                <button
                                    class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('BORRAR') }}</button>
                            </form>
                        </div>
                    </div>
                    <br><br>
                    <div style="background-color:gray; width:100%; height:2px; border-radius:10px;"><br></div>
                    <br><br>
                @endforeach
            </div>
        @else
            <div class="mx-auto text-center">
                <p>{{ __('¿Quieres trabajar con nosotros?') }}<br>{{ __('Envíanos ya tu currículum.') }}</p>
            </div>
            <br>
            <div style="background-color:gray; width:100%; height:2px; border-radius:10px;"><br></div>
            <br><br>
            <div class="mx-auto text-center">
                <form id="curriculum_form" method="POST" enctype="multipart/form-data">
                    @csrf
                    @error('curriculum')
                        <span class="text-danger" style="color:red;">{{ __($message) }}</span>
                        <br>
                    @enderror
                    @if (Lang::locale() == 'es')
                        <input type="hidden" name="lang_es" value="es">
                    @endif
                    <input type="file" name="curriculum" id="curriculum" onchange="previewFile(this);" required>
                    <div style="margin-top:20px; margin-bottom:20px; width:200px; margin-left:auto; margin-right:auto;">
                        <img id="previewImg" src="/images/example.png" alt="Archivo" style="display:none;">
                    </div>
                    <div style="margin-top:20px; margin-bottom:20px; width:375px; margin-left:auto; margin-right:auto;">
                        <embed src="#" width="375" height="500" type="application/pdf" style="display:none;"
                            name="verPDF" id="verPDF">
                    </div>
                    <button type="submit" class="px-6 py-2 text-sm rounded shadow text-red-100" id="boton_submit"
                        style="background-color:#568c2c;">{{ __('Enviar currículum') }}</button>
                </form>
            </div>
        @endif
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
                <a class="anavbar" href="{{ route('contact') }}" style="font-size:12px;">{{ __('Contáctanos') }}</a>
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

    @if (Lang::locale() == 'es')
        <script>
            $("#boton_submit").click(function(e) {
                e.preventDefault();
                let form = $('#curriculum_form')[0];
                let data = new FormData(form);

                $.ajax({
                    url: "{{ route('curriculum.addCurriculum') }}",
                    type: "POST",
                    data: data,
                    dataType: "JSON",
                    processData: false,
                    contentType: false,

                    success: function(response) {
                        if (response.errors) {
                            var errorMsg = '';
                            $.each(response.errors, function(field, errors) {
                                $.each(errors, function(index, error) {
                                    errorMsg += error + '<br>';
                                });
                            });
                            iziToast.error({
                                message: errorMsg,
                                position: 'topRight'
                            });
                        } else {
                            iziToast.success({
                                message: response.success,
                                position: 'topRight'
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        iziToast.error({
                            message: 'Se ha producido un error: ' + error,
                            position: 'topRight'
                        });
                    }
                });
            })
        </script>
    @else
        <script>
            $("#boton_submit").click(function(e) {
                e.preventDefault();
                let form = $('#curriculum_form')[0];
                let data = new FormData(form);

                $.ajax({
                    url: "{{ route('curriculum.addCurriculum') }}",
                    type: "POST",
                    data: data,
                    dataType: "JSON",
                    processData: false,
                    contentType: false,

                    success: function(response) {
                        if (response.errors) {
                            var errorMsg = '';
                            $.each(response.errors, function(field, errors) {
                                $.each(errors, function(index, error) {
                                    errorMsg += error + '<br>';
                                });
                            });
                            iziToast.error({
                                message: errorMsg,
                                position: 'topRight'
                            });
                        } else {
                            iziToast.success({
                                message: response.success,
                                position: 'topRight'
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        iziToast.error({
                            message: 'An error has occurred: ' + error,
                            position: 'topRight'
                        });
                    }
                });
            })
        </script>
    @endif

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast/dist/css/iziToast.min.css">
    <script src="https://cdn.jsdelivr.net/npm/izitoast/dist/js/iziToast.min.js"></script>

</x-app-layout>
