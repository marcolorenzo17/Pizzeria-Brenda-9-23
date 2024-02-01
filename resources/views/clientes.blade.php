<?php
$role_actual = \App\Models\Role::where(['id' => Auth::User()->id_role])
    ->pluck('privilegios')
    ->first();
$privilegioslista = [];
if ($role_actual) {
    $privilegioslista = explode('-', $role_actual);
}
?>
@if (in_array('4', $privilegioslista) || Auth::user()->primero)
    <x-app-layout>
        <x-slot name="header">
            <div style="margin-top:110px;">
                <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight"
                    style="font-size:60px; color:#568c2c; letter-spacing: 3px; font-weight:lighter; font-family: 'Alfa Slab One', serif;">
                    {{ __('CLIENTES') }}
                </h2>
            </div>
        </x-slot>
        <link rel="stylesheet" href="/css/clientes.css" />
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast/dist/css/iziToast.min.css">
        <script src="https://cdn.jsdelivr.net/npm/izitoast/dist/js/iziToast.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <br>
        <p class="text-center" style="font-weight:bolder;">{{ __('LISTA PARA ADMINISTRADORES') }}</p>
        <br>

        <div class="container px-12 py-8 mx-auto bg-white" style="margin-bottom:300px;">

            {{--
            <div>
                <form id="validacion_form" method="POST">
                    @csrf
                    <input type="text" name="id_user">
                    <button type="submit" id="validacion_btn" onclick="validar_switch(event)">Por favor</button>
                </form>
            </div>
            <script>
                var validar_switch = function(e) {
                    e.preventDefault();
                    let form = $('#validacion_form')[0];
                    let data = new FormData(form);

                    $.ajax({
                        url: "{{ route('clientes.validacion') }}",
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
                            } else if (response.error) {
                                iziToast.error({
                                    message: response.error,
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

                }
            </script>
            --}}

            <table class="table-auto w-full" style="border-collapse:separate; border-spacing:10px;"
                id="productos-grande">
                <tr>
                    <td class="font-bold">{{ __('Nombre de usuario') }}</td>
                    <td class="font-bold">{{ __('Correo electrónico') }}</td>
                    <td class="font-bold">{{ __('Dirección') }}</td>
                    <td class="font-bold">{{ __('Teléfono') }}</td>
                    <td class="font-bold">{{ __('Pizzacoins') }}</td>
                    <td class="font-bold">{{ __('Administrador') }}</td>
                    <td class="font-bold">{{ __('Rol') }}</td>
                    <td></td>
                    <td class="font-bold">{{ __('Validado') }}</td>
                    <td class="font-bold">{{ __('Eliminar') }}</td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <?php $usuario = 0; ?>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->name }}</td>
                        <td>{{ $cliente->email }}</td>
                        <td>{{ $cliente->direccion }}</td>
                        <td>{{ $cliente->telefono }}</td>
                        <td>
                            <form action="{{ route('clientes.actualizarpuntos', $cliente->id) }}" method="POST">
                                @csrf
                                <div style="display:flex; align-items:center; gap:5px;">
                                    <input type="text" id="puntos" name="puntos" size="10"
                                        value="{{ $cliente->puntos }}" style="border-radius:10px">
                                    <div class="text-center">
                                        <button type="submit" class="px-6 py-2 text-sm rounded shadow text-red-100"
                                            id="boton"
                                            style="height:40px; font-weight:bolder; border-radius:10px; background-color:#568c2c;">{{ __('✓') }}</button>
                                    </div>
                                </div>
                            </form>
                        </td>
                        <td>
                            @if ($cliente->admin)
                                <form method="post" action="{{ route('clientes.adminno', $cliente->id) }}">
                                    @csrf
                                    <button
                                        class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('DESHABILITAR') }}</button>
                                </form>
                            @else
                                <form method="post" action="{{ route('clientes.adminsi', $cliente->id) }}">
                                    @csrf
                                    <button
                                        class="border hover:bg-blue-500 hover:text-white px-4 py-2 rounded-md" style="border-color:#568c2c;">{{ __('HABILITAR') }}</button>
                                </form>
                            @endif
                        </td>
                        @if ($cliente->admin)
                            <td>
                                <form action="{{ route('clientes.actualizarrol', $cliente->id) }}" method="POST">
                                    @csrf
                                    <div style="display:flex; align-items:center; gap:5px;">
                                        <div>
                                            <select id="role" name="role" style="border-radius: 10px">
                                                @if (Lang::locale() == 'es')
                                                    @foreach ($roles as $role)
                                                        <option value="{{ $role->id }}">{{ $role->nombre }}
                                                        </option>
                                                    @endforeach
                                                @else
                                                    @foreach ($roles as $role)
                                                        <option value="{{ $role->id }}">{{ $role->nombreen }}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="px-6 py-2 text-sm rounded shadow text-red-100"
                                                id="boton"
                                                style="height:40px; font-weight:bolder; border-radius:10px; background-color:#568c2c;">{{ __('✓') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>
                                @if (\App\Models\Role::where(['id' => $cliente->id_role])->pluck('nombre')->first() == null)
                                    @if ($cliente->primero)
                                        <strong>{{ __('Rol actual:') }}</strong>&nbsp;{{ __('Jefe') }}
                                    @else
                                        <strong>{{ __('Rol actual:') }}</strong>&nbsp;{{ __('Ninguno') }}
                                    @endif
                                @elseif (Lang::locale() == 'es')
                                    <strong>{{ __('Rol actual:') }}</strong>&nbsp;{{ \App\Models\Role::where(['id' => $cliente->id_role])->pluck('nombre')->first() }}
                                @else
                                    <strong>{{ __('Rol actual:') }}</strong>&nbsp;{{ \App\Models\Role::where(['id' => $cliente->id_role])->pluck('nombreen')->first() }}
                                @endif
                            </td>
                        @else
                            @if (\App\Models\Role::where(['id' => $cliente->id_role])->pluck('nombre')->first() == null)
                                <td>{{ __('Ninguno') }}
                                </td>
                                <td></td>
                            @elseif (Lang::locale() == 'es')
                                <td>{{ \App\Models\Role::where(['id' => $cliente->id_role])->pluck('nombre')->first() }}
                                </td>
                                <td></td>
                            @else
                                <td>{{ \App\Models\Role::where(['id' => $cliente->id_role])->pluck('nombreen')->first() }}
                                </td>
                                <td></td>
                            @endif
                        @endif
                        <td>
                            @if ($cliente->validado)
                                <form method="POST" id="validacion_form_{{ $usuario }}">
                                    @csrf
                                    @if (Lang::locale() == 'es')
                                        <input type="hidden" name="lang_es" value="es">
                                    @endif
                                    <input type="hidden" name="id_user" value="{{ $cliente->id }}">
                                    <button id="validacion_btn_{{ $usuario }}"
                                        style="border:1px solid #f12d2d; padding:10px; border-radius:5px;"
                                        onclick="validar_off(event, {{ $usuario }})">{{ __('INVALIDAR') }}</button>
                                </form>
                            @else
                                <form method="POST" id="validacion_form_{{ $usuario }}">
                                    @csrf
                                    @if (Lang::locale() == 'es')
                                        <input type="hidden" name="lang_es" value="es">
                                    @endif
                                    <input type="hidden" name="id_user" value="{{ $cliente->id }}">
                                    <button id="validacion_btn_{{ $usuario }}"
                                        style="border:1px solid #568c2c; padding:10px; border-radius:5px;"
                                        onclick="validar_on(event, {{ $usuario }})">{{ __('VALIDAR') }}</button>
                                </form>
                            @endif
                        </td>
                        @if (Lang::locale() == 'es')
                            <script>
                                var validar_off = function(e, usuario) {
                                    e.preventDefault();
                                    let form = $(`#validacion_form_${usuario}`)[0];
                                    let data = new FormData(form);

                                    $.ajax({
                                        url: "{{ route('clientes.validacion') }}",
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
                                            } else if (response.error) {
                                                iziToast.error({
                                                    message: response.error,
                                                    position: 'topRight'
                                                });
                                            } else {
                                                iziToast.success({
                                                    message: response.success,
                                                    position: 'topRight'

                                                });
                                                document.getElementById(`validacion_btn_${usuario}`).setAttribute("style",
                                                    "border:1px solid #568c2c; padding:10px; border-radius:5px;");
                                                document.getElementById(`validacion_btn_${usuario}`).setAttribute("onclick",
                                                    `validar_on(event, ${usuario})`);
                                                document.getElementById(`validacion_btn_${usuario}`).innerHTML =
                                                    "{{ __('VALIDAR') }}";

                                                document.getElementById(`validacion_btn_sm_${usuario}`).setAttribute("style",
                                                    "border:1px solid #568c2c; padding:10px; border-radius:5px;");
                                                document.getElementById(`validacion_btn_sm_${usuario}`).setAttribute("onclick",
                                                    `validar_sm_on(event, ${usuario})`);
                                                document.getElementById(`validacion_btn_sm_${usuario}`).innerHTML =
                                                    "{{ __('VALIDAR') }}";
                                            }

                                        },
                                        error: function(xhr, status, error) {

                                            iziToast.error({
                                                message: 'Se ha producido un error: ' + error,
                                                position: 'topRight'
                                            });
                                        }

                                    });
                                }

                                var validar_on = function(e, usuario) {
                                    e.preventDefault();
                                    let form = $(`#validacion_form_${usuario}`)[0];
                                    let data = new FormData(form);

                                    $.ajax({
                                        url: "{{ route('clientes.validacion') }}",
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
                                            } else if (response.error) {
                                                iziToast.error({
                                                    message: response.error,
                                                    position: 'topRight'
                                                });
                                            } else {
                                                iziToast.success({
                                                    message: response.success,
                                                    position: 'topRight'

                                                });

                                                document.getElementById(`validacion_btn_${usuario}`).setAttribute("style",
                                                    "border:1px solid #f12d2d; padding:10px; border-radius:5px;");
                                                document.getElementById(`validacion_btn_${usuario}`).setAttribute("onclick",
                                                    `validar_off(event, ${usuario})`);
                                                document.getElementById(`validacion_btn_${usuario}`).innerHTML =
                                                    "{{ __('INVALIDAR') }}";

                                                document.getElementById(`validacion_btn_sm_${usuario}`).setAttribute("style",
                                                    "border:1px solid #f12d2d; padding:10px; border-radius:5px;");
                                                document.getElementById(`validacion_btn_sm_${usuario}`).setAttribute("onclick",
                                                    `validar_sm_off(event, ${usuario})`);
                                                document.getElementById(`validacion_btn_sm_${usuario}`).innerHTML =
                                                    "{{ __('INVALIDAR') }}";
                                            }

                                        },
                                        error: function(xhr, status, error) {

                                            iziToast.error({
                                                message: 'Se ha producido un error: ' + error,
                                                position: 'topRight'
                                            });
                                        }

                                    });
                                }
                            </script>
                        @else
                            <script>
                                var validar_off = function(e, usuario) {
                                    e.preventDefault();
                                    let form = $(`#validacion_form_${usuario}`)[0];
                                    let data = new FormData(form);

                                    $.ajax({
                                        url: "{{ route('clientes.validacion') }}",
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
                                            } else if (response.error) {
                                                iziToast.error({
                                                    message: response.error,
                                                    position: 'topRight'
                                                });
                                            } else {
                                                iziToast.success({
                                                    message: response.success,
                                                    position: 'topRight'

                                                });
                                                document.getElementById(`validacion_btn_${usuario}`).setAttribute("style",
                                                    "border:1px solid #568c2c; padding:10px; border-radius:5px;");
                                                document.getElementById(`validacion_btn_${usuario}`).setAttribute("onclick",
                                                    `validar_on(event, ${usuario})`);
                                                document.getElementById(`validacion_btn_${usuario}`).innerHTML =
                                                    "{{ __('VALIDAR') }}";

                                                document.getElementById(`validacion_btn_sm_${usuario}`).setAttribute("style",
                                                    "border:1px solid #568c2c; padding:10px; border-radius:5px;");
                                                document.getElementById(`validacion_btn_sm_${usuario}`).setAttribute("onclick",
                                                    `validar_sm_on(event, ${usuario})`);
                                                document.getElementById(`validacion_btn_sm_${usuario}`).innerHTML =
                                                    "{{ __('VALIDAR') }}";
                                            }

                                        },
                                        error: function(xhr, status, error) {

                                            iziToast.error({
                                                message: 'An error has occurred: ' + error,
                                                position: 'topRight'
                                            });
                                        }

                                    });
                                }

                                var validar_on = function(e, usuario) {
                                    e.preventDefault();
                                    let form = $(`#validacion_form_${usuario}`)[0];
                                    let data = new FormData(form);

                                    $.ajax({
                                        url: "{{ route('clientes.validacion') }}",
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
                                            } else if (response.error) {
                                                iziToast.error({
                                                    message: response.error,
                                                    position: 'topRight'
                                                });
                                            } else {
                                                iziToast.success({
                                                    message: response.success,
                                                    position: 'topRight'

                                                });

                                                document.getElementById(`validacion_btn_${usuario}`).setAttribute("style",
                                                    "border:1px solid #f12d2d; padding:10px; border-radius:5px;");
                                                document.getElementById(`validacion_btn_${usuario}`).setAttribute("onclick",
                                                    `validar_off(event, ${usuario})`);
                                                document.getElementById(`validacion_btn_${usuario}`).innerHTML =
                                                    "{{ __('INVALIDAR') }}";

                                                document.getElementById(`validacion_btn_sm_${usuario}`).setAttribute("style",
                                                    "border:1px solid #f12d2d; padding:10px; border-radius:5px;");
                                                document.getElementById(`validacion_btn_sm_${usuario}`).setAttribute("onclick",
                                                    `validar_sm_off(event, ${usuario})`);
                                                document.getElementById(`validacion_btn_sm_${usuario}`).innerHTML =
                                                    "{{ __('INVALIDAR') }}";
                                            }

                                        },
                                        error: function(xhr, status, error) {

                                            iziToast.error({
                                                message: 'An error has occurred: ' + error,
                                                position: 'topRight'
                                            });
                                        }

                                    });
                                }
                            </script>
                        @endif
                        <td>
                            <form method="post" action="{{ route('clientes.destroy', $cliente->id) }}">
                                @csrf
                                @method('delete')
                                <button
                                    class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md" onclick="return confirm('¿Estás seguro de que quieres eliminar a este usuario?')">x</button>
                            </form>
                        </td>
                    </tr>
                    <?php $usuario += 1; ?>
                @endforeach
            </table>
            <table style="border-collapse:separate; border-spacing:10px;" id="productos-pequenio">
                <?php $usuario_sm = 0; ?>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td style="display:flex; justify-content:space-between;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                {{ __('Nombre de usuario') }}</p>
                        </td>
                        <td>
                            <p style="margin-left:30px; text-align:right;">{{ $cliente->name }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="display:flex; justify-content:space-between; padding-left:50px;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                {{ __('Correo electrónico') }}</p>
                        </td>
                        <td style="word-wrap: break-word; max-width:100px;">
                            <p style="margin-left:30px; text-align:right;">{{ $cliente->email }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="display:flex; justify-content:space-between; padding-left:50px;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Dirección') }}</p>
                        </td>
                        <td>
                            <p style="margin-left:30px; text-align:right;">{{ $cliente->direccion }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="display:flex; justify-content:space-between; padding-left:50px;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Teléfono') }}</p>
                        </td>
                        <td>
                            <p style="margin-left:30px; text-align:right;">{{ $cliente->telefono }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="display:flex; justify-content:space-between; padding-left:50px;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Pizzacoins') }}
                            </p>
                        </td>
                        <td>
                            <p>
                            <form action="{{ route('clientes.actualizarpuntos', $cliente->id) }}" method="POST"
                                name="puntos" onsubmit="return validate()">
                                @csrf
                                @error('puntos')
                                    <span class="text-danger" style="color:red;">{{ __($message) }}</span>
                                    <br>
                                @enderror
                                <div style="display:flex; align-items:center; gap:10px;">
                                    <div style="margin-left:30px; text-align:right;">
                                        <input type="text" id="puntos" name="puntos" size="10"
                                            value="{{ $cliente->puntos }}" style="border-radius:10px;"
                                            onfocusout="validate_puntos()">
                                    </div>
                                    <div style="padding-left:0px;">
                                        <button type="submit" class="px-6 py-2 text-sm shadow text-red-100"
                                            id="boton"
                                            style="height:42px; font-weight:bolder; border-radius:10px; background-color:#568c2c;">{{ __('✓') }}</button>
                                    </div>
                                </div>
                                <p id="error_puntos" style="color:red;"></p>
                            </form>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="display:flex; justify-content:space-between; padding-left:50px;">
                            @if ($cliente->admin)
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                    {{ __('Administrador') }}</p>
                        </td>
                        <td>
                            <div style="margin-left:30px; text-align:right;">
                                <form method="post" action="{{ route('clientes.adminno', $cliente->id) }}">
                                    @csrf
                                    <button
                                        class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('DESHABILITAR') }}</button>
                                </form>
                            </div>
                        </td>
                    @else
                        <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Administrador') }}
                        </p>
                        </td>
                        <td>
                            <div style="margin-left:30px; text-align:right;">
                                <form method="post" action="{{ route('clientes.adminsi', $cliente->id) }}">
                                    @csrf
                                    <button class="hover:text-white px-4 py-2 rounded-md"
                                        style="border-color:green; border-style:solid; border-width:1px;">{{ __('HABILITAR') }}</button>
                                </form>
                            </div>
                        </td>
                @endif
                </tr>
                @if ($cliente->admin)
                    <tr>
                        <td style="display:flex; justify-content:space-between; padding-left:50px;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Rol') }}</p>
                        </td>
                        <td>
                            <div style="margin-left:30px; text-align:right;">
                                <form action="{{ route('clientes.actualizarrol', $cliente->id) }}" method="POST">
                                    @csrf
                                    <div style="display:flex; align-items:center; gap:10px;">
                                        <div>
                                            <select id="role" name="role" style="border-radius:10px;">
                                                @if (Lang::locale() == 'es')
                                                    @foreach ($roles as $role)
                                                        <option value="{{ $role->id }}">{{ $role->nombre }}
                                                        </option>
                                                    @endforeach
                                                @else
                                                    @foreach ($roles as $role)
                                                        <option value="{{ $role->id }}">{{ $role->nombreen }}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div>
                                            <button type="submit" class="px-6 py-2 text-sm shadow text-red-100"
                                                id="boton"
                                                style="height:42px; font-weight:bolder; border-radius:10px; background-color:#568c2c;">{{ __('✓') }}</button>
                                        </div>
                                    </div>
                                    <div>
                                        @if (\App\Models\Role::where(['id' => $cliente->id_role])->pluck('nombre')->first() == null)
                                            @if ($cliente->primero)
                                                <strong>{{ __('Rol actual:') }}</strong>&nbsp;{{ __('Jefe') }}
                                            @else
                                                <strong>{{ __('Rol actual:') }}</strong>&nbsp;{{ __('Ninguno') }}
                                            @endif
                                        @elseif (Lang::locale() == 'es')
                                            <strong>{{ __('Rol actual:') }}</strong>&nbsp;{{ \App\Models\Role::where(['id' => $cliente->id_role])->pluck('nombre')->first() }}
                                        @else
                                            <strong>{{ __('Rol actual:') }}</strong>&nbsp;{{ \App\Models\Role::where(['id' => $cliente->id_role])->pluck('nombreen')->first() }}
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </td>
                    </tr>
                @else
                    <tr>
                        <td style="display:flex; justify-content:space-between; padding-left:50px;">
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Rol') }}</p>
                        </td>
                        <td style="word-wrap: break-word; max-width:100px;">
                            @if (\App\Models\Role::where(['id' => $cliente->id_role])->pluck('nombre')->first() == null)
                                <p style="margin-left:30px; text-align:right;">
                                    {{ __('Ninguno') }}
                                </p>
                            @elseif (Lang::locale() == 'es')
                                <p style="margin-left:30px; text-align:right;">
                                    {{ \App\Models\Role::where(['id' => $cliente->id_role])->pluck('nombre')->first() }}
                                </p>
                            @else
                                <p style="margin-left:30px; text-align:right;">
                                    {{ \App\Models\Role::where(['id' => $cliente->id_role])->pluck('nombreen')->first() }}
                                </p>
                            @endif
                        </td>
                    </tr>
                @endif
                <tr>
                    {{--
                        <td style="display:flex; justify-content:space-between; padding-left:50px;">
                            @if ($cliente->validado)
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Validado') }}</p>
                        </td>
                        <td>
                            <div style="margin-left:30px; text-align:right;">
                                <form method="post" action="{{ route('clientes.desvalidar', $cliente->id) }}">
                                    @csrf
                                    <button
                                        class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('INVALIDAR') }}</button>
                                </form>
                            </div>
                        </td>
                    @else
                        <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Validado') }}</p>
                        </td>
                        <td>
                            <div style="margin-left:30px; text-align:right;">
                                <form method="post" action="{{ route('clientes.validar', $cliente->id) }}">
                                    @csrf
                                    <button
                                        class="border border-blue-500 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-md">{{ __('VALIDAR') }}</button>
                                </form>
                            </div>
                        </td>
    @endif
                    --}}
                    <td style="display:flex; justify-content:space-between; padding-left:50px;">
                        <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Validado') }}</p>
                    </td>
                    <td>
                        <div style="margin-left:30px; text-align:right;">
                            @if ($cliente->validado)
                                <form method="POST" id="validacion_form_sm_{{ $usuario_sm }}">
                                    @csrf
                                    @if (Lang::locale() == 'es')
                                        <input type="hidden" name="lang_es" value="es">
                                    @endif
                                    <input type="hidden" name="id_user" value="{{ $cliente->id }}">
                                    <button id="validacion_btn_sm_{{ $usuario_sm }}"
                                        style="border:1px solid #f12d2d; padding:10px; border-radius:5px;"
                                        onclick="validar_sm_off(event, {{ $usuario_sm }})">{{ __('INVALIDAR') }}</button>
                                </form>
                            @else
                                <form method="POST" id="validacion_form_sm_{{ $usuario_sm }}">
                                    @csrf
                                    @if (Lang::locale() == 'es')
                                        <input type="hidden" name="lang_es" value="es">
                                    @endif
                                    <input type="hidden" name="id_user" value="{{ $cliente->id }}">
                                    <button id="validacion_btn_sm_{{ $usuario_sm }}"
                                        style="border:1px solid #568c2c; padding:10px; border-radius:5px;"
                                        onclick="validar_sm_on(event, {{ $usuario_sm }})">{{ __('VALIDAR') }}</button>
                                </form>
                            @endif
                        </div>
                    </td>
                </tr>
                @if (Lang::locale() == 'es')
                    <script>
                        var validar_sm_off = function(e, usuario_sm) {
                            e.preventDefault();
                            let form = $(`#validacion_form_sm_${usuario_sm}`)[0];
                            let data = new FormData(form);

                            $.ajax({
                                url: "{{ route('clientes.validacion') }}",
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
                                    } else if (response.error) {
                                        iziToast.error({
                                            message: response.error,
                                            position: 'topRight'
                                        });
                                    } else {
                                        iziToast.success({
                                            message: response.success,
                                            position: 'topRight'

                                        });
                                        document.getElementById(`validacion_btn_sm_${usuario_sm}`).setAttribute("style",
                                            "border:1px solid #568c2c; padding:10px; border-radius:5px;");
                                        document.getElementById(`validacion_btn_sm_${usuario_sm}`).setAttribute("onclick",
                                            `validar_sm_on(event, ${usuario_sm})`);
                                        document.getElementById(`validacion_btn_sm_${usuario_sm}`).innerHTML =
                                            "{{ __('VALIDAR') }}";

                                        document.getElementById(`validacion_btn_${usuario_sm}`).setAttribute("style",
                                            "border:1px solid #568c2c; padding:10px; border-radius:5px;");
                                        document.getElementById(`validacion_btn_${usuario_sm}`).setAttribute("onclick",
                                            `validar_on(event, ${usuario_sm})`);
                                        document.getElementById(`validacion_btn_${usuario_sm}`).innerHTML =
                                            "{{ __('VALIDAR') }}";
                                    }

                                },
                                error: function(xhr, status, error) {

                                    iziToast.error({
                                        message: 'Se ha producido un error: ' + error,
                                        position: 'topRight'
                                    });
                                }

                            });
                        }

                        var validar_sm_on = function(e, usuario_sm) {
                            e.preventDefault();
                            let form = $(`#validacion_form_sm_${usuario_sm}`)[0];
                            let data = new FormData(form);

                            $.ajax({
                                url: "{{ route('clientes.validacion') }}",
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
                                    } else if (response.error) {
                                        iziToast.error({
                                            message: response.error,
                                            position: 'topRight'
                                        });
                                    } else {
                                        iziToast.success({
                                            message: response.success,
                                            position: 'topRight'

                                        });

                                        document.getElementById(`validacion_btn_sm_${usuario_sm}`).setAttribute("style",
                                            "border:1px solid #f12d2d; padding:10px; border-radius:5px;");
                                        document.getElementById(`validacion_btn_sm_${usuario_sm}`).setAttribute("onclick",
                                            `validar_sm_off(event, ${usuario_sm})`);
                                        document.getElementById(`validacion_btn_sm_${usuario_sm}`).innerHTML =
                                            "{{ __('INVALIDAR') }}";

                                        document.getElementById(`validacion_btn_${usuario_sm}`).setAttribute("style",
                                            "border:1px solid #f12d2d; padding:10px; border-radius:5px;");
                                        document.getElementById(`validacion_btn_${usuario_sm}`).setAttribute("onclick",
                                            `validar_off(event, ${usuario_sm})`);
                                        document.getElementById(`validacion_btn_${usuario_sm}`).innerHTML =
                                            "{{ __('INVALIDAR') }}";
                                    }

                                },
                                error: function(xhr, status, error) {

                                    iziToast.error({
                                        message: 'Se ha producido un error: ' + error,
                                        position: 'topRight'
                                    });
                                }

                            });
                        }
                    </script>
                @else
                    <script>
                        var validar_sm_off = function(e, usuario_sm) {
                            e.preventDefault();
                            let form = $(`#validacion_form_sm_${usuario_sm}`)[0];
                            let data = new FormData(form);

                            $.ajax({
                                url: "{{ route('clientes.validacion') }}",
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
                                    } else if (response.error) {
                                        iziToast.error({
                                            message: response.error,
                                            position: 'topRight'
                                        });
                                    } else {
                                        iziToast.success({
                                            message: response.success,
                                            position: 'topRight'

                                        });
                                        document.getElementById(`validacion_btn_sm_${usuario_sm}`).setAttribute("style",
                                            "border:1px solid #568c2c; padding:10px; border-radius:5px;");
                                        document.getElementById(`validacion_btn_sm_${usuario_sm}`).setAttribute("onclick",
                                            `validar_sm_on(event, ${usuario_sm})`);
                                        document.getElementById(`validacion_btn_sm_${usuario_sm}`).innerHTML =
                                            "{{ __('VALIDAR') }}";

                                        document.getElementById(`validacion_btn_${usuario_sm}`).setAttribute("style",
                                            "border:1px solid #568c2c; padding:10px; border-radius:5px;");
                                        document.getElementById(`validacion_btn_${usuario_sm}`).setAttribute("onclick",
                                            `validar_on(event, ${usuario_sm})`);
                                        document.getElementById(`validacion_btn_${usuario_sm}`).innerHTML =
                                            "{{ __('VALIDAR') }}";
                                    }

                                },
                                error: function(xhr, status, error) {

                                    iziToast.error({
                                        message: 'An error has occurred: ' + error,
                                        position: 'topRight'
                                    });
                                }

                            });
                        }

                        var validar_sm_on = function(e, usuario_sm) {
                            e.preventDefault();
                            let form = $(`#validacion_form_sm_${usuario_sm}`)[0];
                            let data = new FormData(form);

                            $.ajax({
                                url: "{{ route('clientes.validacion') }}",
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
                                    } else if (response.error) {
                                        iziToast.error({
                                            message: response.error,
                                            position: 'topRight'
                                        });
                                    } else {
                                        iziToast.success({
                                            message: response.success,
                                            position: 'topRight'

                                        });

                                        document.getElementById(`validacion_btn_sm_${usuario_sm}`).setAttribute("style",
                                            "border:1px solid #f12d2d; padding:10px; border-radius:5px;");
                                        document.getElementById(`validacion_btn_sm_${usuario_sm}`).setAttribute("onclick",
                                            `validar_sm_off(event, ${usuario_sm})`);
                                        document.getElementById(`validacion_btn_sm_${usuario_sm}`).innerHTML =
                                            "{{ __('INVALIDAR') }}";

                                        document.getElementById(`validacion_btn_${usuario_sm}`).setAttribute("style",
                                            "border:1px solid #f12d2d; padding:10px; border-radius:5px;");
                                        document.getElementById(`validacion_btn_${usuario_sm}`).setAttribute("onclick",
                                            `validar_off(event, ${usuario_sm})`);
                                        document.getElementById(`validacion_btn_${usuario_sm}`).innerHTML =
                                            "{{ __('INVALIDAR') }}";
                                    }

                                },
                                error: function(xhr, status, error) {

                                    iziToast.error({
                                        message: 'An error has occurred: ' + error,
                                        position: 'topRight'
                                    });
                                }

                            });
                        }
                    </script>
                @endif
                <tr>
                    <td style="display:flex; justify-content:space-between; padding-left:50px;">
                        <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Eliminar') }}</p>
                    </td>
                    <td>
                        <div style="margin-left:30px; text-align:right;">
                            <form method="post" action="{{ route('clientes.destroy', $cliente->id) }}">
                                @csrf
                                @method('delete')
                                <button
                                    class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md" onclick="return confirm('¿Estás seguro de que quieres eliminar a este usuario?')">x</button>
                            </form>
                        </div>
                    </td>
                </tr>
                <tr></tr>
                <tr></tr>
                <?php $usuario_sm += 1; ?>
@endforeach
</table>
<div>
    {{ $clientes->links() }}
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

<script>
    /*
    function validate() {
        if (!(validate_puntos())) {
            return false;
        }
    }

    function validate_puntos() {
        var puntos = document.forms["puntos"]["puntos"].value;
        if (puntos < 0) {
            document.getElementById("error_puntos").innerHTML =
                "{{ __('Un usuario no puede tener menos de 0 Pizzacoins.') }}";
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
    */
</script>

</x-app-layout>
@endif
