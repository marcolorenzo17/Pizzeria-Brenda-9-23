<link rel="stylesheet" href="/css/index.css" />
<x-app-layout>
    <x-slot name="header">
        <div style="margin-top:110px;">
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight"
                style="font-size:60px; color:#568c2c; letter-spacing: 3px; font-weight:lighter; font-family: 'Alfa Slab One', serif;">
                {{ __('RECIBOS') }}
            </h2>
            @if (Route::current()->getName() == 'recibos.index')
                <p style="text-align:center; margin-bottom:30px;">{{ __('Recibos de los últimos tres meses') }}</p>
                <div style="text-align:center;">
                    <a href="{{ route('recibos.todosRecibos') }}"
                        style="color:white; background-color:#568c2c; padding:10px; border-radius:10px;"
                        id="boton">{{ __('VER TODOS LOS RECIBOS') }}</a>
                </div>
            @else
                <p style="text-align:center; margin-bottom:30px;">{{ __('Todos los recibos') }}</p>
                <div style="text-align:center;">
                    <a href="{{ route('recibos.index') }}"
                        style="color:white; background-color:#568c2c; padding:10px; border-radius:10px;"
                        id="boton">{{ __('VER LOS RECIBOS DE LOS ÚLTIMOS TRES MESES') }}</a>
                </div>
            @endif
        </div>
    </x-slot>
    <link rel="stylesheet" href="/css/recibos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">

    <div class="py-12" style="margin-bottom:300px;">
        @if (Auth::user()->admin)
            <p class="text-center" style="font-weight:bolder;">{{ __('LISTA PARA ADMINISTRADORES') }}</p>
            <br>
        @endif
        <div class="bg-white" style="padding:50px;">
            <table class="table-auto w-full" style="border-collapse:separate; border-spacing:10px;" id="recibos-grande">
                <tr>
                    <td class="font-bold">{{ __('Fecha y hora') }}</td>
                    @if (Auth::user()->admin)
                        <td class="font-bold">{{ __('Cliente') }}</td>
                        <td class="font-bold">{{ __('Dirección') }}</td>
                        <td class="font-bold">{{ __('Teléfono') }}</td>
                    @endif
                    <td class="font-bold">{{ __('Productos') }}</td>
                    <td class="font-bold">{{ __('Pizzacoins obtenidas') }}</td>
                    <td class="font-bold">{{ __('Pizzacoins gastadas') }}</td>
                    <td class="font-bold">{{ __('Coste') }}</td>
                    <td class="font-bold">{{ __('Entrega') }}</td>
                    {{--
                        <td class="font-bold">{{ __('Teléfono') }}</td>
                    --}}
                    <td class="font-bold">{{ __('Estado') }}</td>
                    @if (Auth::user()->admin)
                        <td></td>
                    @endif
                    <td class="font-bold">{{ __('Pago') }}</td>
                    @if (Auth::user()->role == 'Jefe' || Auth::user()->role == 'Cajero')
                        <td class="font-bold">{{ __('Eliminar') }}</td>
                    @endif
                    @if (!Auth::user()->admin)
                        <td class="font-bold">{{ __('Factura') }}</td>
                    @endif
                </tr>
                @foreach ($recibos as $recibo)
                    @if (Auth::user()->admin)
                        <tr>
                            <td colspan="13"><br></td>
                        </tr>
                        <tr>
                            <td>{{ date('d/m/Y - H:i', strtotime($recibo->created_at)) }}</td>
                            <td>{{ \App\Models\User::where(['id' => $recibo->idUser])->pluck('name')->first() }}</td>
                            <td>{{ \App\Models\User::where(['id' => $recibo->idUser])->pluck('direccion')->first() }}
                            </td>
                            <td>{{ \App\Models\User::where(['id' => $recibo->idUser])->pluck('telefono')->first() }}
                            </td>
                            <td>
                                <?php
                                $productoslista = explode(', ', $recibo->productos);
                                ?>
                                @foreach ($productoslista as $producto)
                                    <p>
                                        - {{ $producto }}
                                    </p>
                                @endforeach
                            </td>
                            <td>{{ $recibo->total * 10 }}</td>
                            <td>{{ $recibo->puntos }}</td>
                            <td>{{ number_format($recibo->total, 2, '.', '') }} €</td>
                            <td>{{ __($recibo->direccion) }}</td>
                            {{--
                                <td>{{ $recibo->telefono }}</td>
                            --}}
                            @if (Auth::user()->role == 'Jefe' || Auth::user()->role == 'Cocinero' || Auth::user()->role == 'Plancha')
                                <td>
                                    <form action="{{ route('recibos.actualizar', $recibo->id) }}" method="POST">
                                        @csrf
                                        <div style="display:flex; align-items:center; gap:5px;">
                                            <div>
                                                <select id="estado" name="estado" style="border-radius: 10px;">
                                                    <option value="Pedido registrado">{{ __('Pedido registrado') }}
                                                    </option>
                                                    <option value="Pedido en preparación">
                                                        {{ __('Pedido en preparación') }}
                                                    </option>
                                                    <option value="Pedido en reparto">{{ __('Pedido en reparto') }}
                                                    </option>
                                                    <option value="Pedido entregado">{{ __('Pedido entregado') }}
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit"
                                                    class="px-6 py-2 text-sm rounded shadow text-red-100" id="boton"
                                                    style="height:40px; font-weight:bolder; border-radius:10px; background-color:#568c2c;">{{ __('✓') }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                                <td>
                                    <strong>{{ __('Estado actual:') }}</strong>&nbsp;{{ __($recibo->estado) }}
                                </td>
                            @else
                                <td>
                                    <p>{{ __($recibo->estado) }}</p>
                                </td>
                                <td></td>
                            @endif
                            @if (Auth::user()->role == 'Jefe' || Auth::user()->role == 'Cajero')
                                <td>
                                    @if ($recibo->pagado)
                                        <form method="post" action="{{ route('recibos.nopagado', $recibo->id) }}">
                                            @csrf
                                            <button id="pagado" class="hover:text-white px-4 py-2 rounded-md"
                                                style="border-color:green; border-style:solid; border-width:1px;">{{ __('PAGADO') }}</button>
                                        </form>
                                    @else
                                        <form method="post" action="{{ route('recibos.pagado', $recibo->id) }}">
                                            @csrf
                                            <button
                                                class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('PENDIENTE') }}</button>
                                        </form>
                                    @endif
                                </td>
                                <td>
                                    <form method="post" action="{{ route('recibos.destroy', $recibo->id) }}"
                                        onclick="return confirm('¿Estás seguro de que quieres eliminar este recibo?')">
                                        @csrf
                                        @method('delete')
                                        <button
                                            class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">x</button>
                                    </form>
                                </td>
                            @else
                                <td>
                                    @if ($recibo->pagado)
                                        <p>{{ __('PAGADO') }}</p>
                                    @else
                                        <p>{{ __('PENDIENTE') }}</p>
                                    @endif
                                </td>
                            @endif
                        </tr>
                        <tr>
                            <td colspan="13">
                                <br>
                                <div style="background-color:gray; width:100%; height:2px; border-radius:10px;"><br>
                                </div>
                            </td>
                        </tr>
                    @elseif ($recibo->idUser == Auth::user()->id)
                        <tr>
                            <td colspan="9"><br></td>
                        </tr>
                        <tr>
                            <td>{{ date('d/m/Y - H:i', strtotime($recibo->created_at)) }}</td>
                            <td>
                                <?php
                                $productoslista = explode(', ', $recibo->productos);
                                ?>
                                @foreach ($productoslista as $producto)
                                    <p>
                                        - {{ $producto }}
                                    </p>
                                @endforeach
                            </td>
                            <td>{{ $recibo->total * 10 }}</td>
                            <td>{{ $recibo->puntos }}</td>
                            <td>{{ number_format($recibo->total, 2, '.', '') }} €</td>
                            <td>{{ __($recibo->direccion) }}</td>
                            {{--
                                <td>{{ $recibo->telefono }}</td>
                            --}}
                            <td>{{ __($recibo->estado) }}</td>
                            <td>
                                @if ($recibo->pagado)
                                    {{ __('Pago realizado') }}
                                @else
                                    {{ __('Pago en curso') }}
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('recibos.factura', $recibo->id) }}" target="_blank"
                                    style="background-color:#568c2c; padding:8px; border-radius:8px; color:white;"
                                    id="boton"><button type="button">{{ __('Ver factura') }}</button></a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="9">
                                <br>
                                <div style="background-color:gray; width:100%; height:2px; border-radius:10px;"><br>
                                </div>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </table>
            <table style="border-collapse:separate; border-spacing:10px;" id="recibos-pequenio">
                @foreach ($recibos as $recibo)
                    @if (Auth::user()->admin)
                        <tr>
                            <td style="display:flex; justify-content:space-between;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                    {{ __('Fecha y hora') }}</p>
                            </td>
                            <td>
                                <p style="margin-left:30px; text-align:right;">
                                    {{ date('d/m/Y - H:i', strtotime($recibo->created_at)) }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Cliente') }}
                                </p>
                            </td>
                            <td>
                                <p style="margin-left:30px; text-align:right;">
                                    {{ \App\Models\User::where(['id' => $recibo->idUser])->pluck('name')->first() }}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Dirección') }}
                                </p>
                            </td>
                            <td>
                                <p style="margin-left:30px; text-align:right;">
                                    {{ \App\Models\User::where(['id' => $recibo->idUser])->pluck('direccion')->first() }}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Teléfono') }}
                                </p>
                            </td>
                            <td>
                                <p style="margin-left:30px; text-align:right;">
                                    {{ \App\Models\User::where(['id' => $recibo->idUser])->pluck('telefono')->first() }}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Productos') }}
                                </p>
                            </td>
                            <td>
                                <?php
                                $productoslista = explode(', ', $recibo->productos);
                                ?>
                                @foreach ($productoslista as $producto)
                                    <p style="margin-left:30px; text-align:right;">
                                        - {{ $producto }}
                                    </p>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                    {{ __('Pizzacoins obtenidas') }}</p>
                            </td>
                            <td>
                                <p style="margin-left:30px; text-align:right;">{{ round($recibo->total * 10) }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                    {{ __('Pizzacoins gastadas') }}</p>
                            </td>
                            <td>
                                <p style="margin-left:30px; text-align:right;">{{ $recibo->puntos }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Coste') }}
                                </p>
                            </td>
                            <td>
                                <p style="margin-left:30px; text-align:right;">
                                    {{ number_format($recibo->total, 2, '.', '') }} €</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Entrega') }}
                                </p>
                            </td>
                            <td>
                                <p style="margin-left:30px; text-align:right;">{{ __($recibo->direccion) }}</p>
                            </td>
                        </tr>
                        {{--
                            <tr>
                                <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                    <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Teléfono') }}
                                    </p>
                                    <p>{{ $recibo->telefono }}</p>
                                </td>
                            </tr>
                        --}}

                        @if (Auth::user()->role == 'Jefe' || Auth::user()->role == 'Cocinero' || Auth::user()->role == 'Plancha')
                            <tr>
                                <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                    <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                        {{ __('Estado') }}</p>
                                </td>
                                <td>
                                    <div>
                                        <form action="{{ route('recibos.actualizar', $recibo->id) }}" method="POST">
                                            @csrf
                                            <div style="display:flex; align-items:center; gap:10px; float:right;">
                                                <div>
                                                    <select id="estado" name="estado"
                                                        style="border-radius:10px; width:190px;">
                                                        <option value="Pedido registrado">
                                                            {{ __('Pedido registrado') }}
                                                        </option>
                                                        <option value="Pedido en preparación">
                                                            {{ __('Pedido en preparación') }}
                                                        </option>
                                                        <option value="Pedido en reparto">
                                                            {{ __('Pedido en reparto') }}
                                                        </option>
                                                        <option value="Pedido entregado">
                                                            {{ __('Pedido entregado') }}</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <button type="submit"
                                                        class="px-6 py-2 text-sm shadow text-red-100" id="boton"
                                                        style="height:42px; font-weight:bolder; border-radius:10px; background-color:#568c2c;">{{ __('✓') }}</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div style="display:flex; margin-left:30px; float:right;">
                                        <strong>{{ __('Estado actual:') }}</strong>&nbsp;{{ __($recibo->estado) }}
                                    </div>
                                </td>
                            </tr>
                        @else
                            <tr>
                                <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                    <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                        {{ __('Estado') }}</p>
                                </td>
                                <td>
                                    <p style="margin-left:30px; text-align:right;">{{ __($recibo->estado) }}</p>
                                </td>
                            </tr>
                        @endif
                        @if (Auth::user()->role == 'Jefe' || Auth::user()->role == 'Cajero')
                            <tr>
                                <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                    <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                        {{ __('Pago') }}</p>
                                </td>
                                @if ($recibo->pagado)
                                    <td>
                                        <div style="margin-left:30px; text-align:right;">
                                            <form method="post"
                                                action="{{ route('recibos.nopagado', $recibo->id) }}">
                                                @csrf
                                                <button id="pagado" class="hover:text-white px-4 py-2 rounded-md"
                                                    style="border-color:green; border-style:solid; border-width:1px;">{{ __('PAGADO') }}</button>
                                            </form>
                                        </div>
                                    </td>
                                @else
                                    <td>
                                        <div style="margin-left:30px; text-align:right;">
                                            <form method="post" action="{{ route('recibos.pagado', $recibo->id) }}">
                                                @csrf
                                                <button
                                                    class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('PENDIENTE') }}</button>
                                            </form>
                                        </div>
                                    </td>
                                @endif
                                </td>
                            </tr>
                            <tr>
                                <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                    <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                        {{ __('Eliminar') }}</p>
                                </td>
                                <td>
                                    <div style="margin-left:30px; text-align:right;">
                                        <form method="post" action="{{ route('recibos.destroy', $recibo->id) }}"
                                            onclick="return confirm('¿Estás seguro de que quieres eliminar este recibo?')">
                                            @csrf
                                            @method('delete')
                                            <button
                                                class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">x</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @else
                            <tr>
                                <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                    <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                        {{ __('Pago') }}</p>
                                </td>
                                @if ($recibo->pagado)
                                    <td>
                                        <p style="margin-left:30px; text-align:right;">{{ __('PAGADO') }}</p>
                                    </td>
                                @else
                                    <td>
                                        <p style="margin-left:30px; text-align:right;">{{ __('PENDIENTE') }}</p>
                                    </td>
                                @endif
                            </tr>
                        @endif
                        <tr></tr>
                        <tr></tr>
                    @elseif ($recibo->idUser == Auth::user()->id)
                        <tr>
                            <td style="display:flex; justify-content:space-between;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                    {{ __('Fecha y hora') }}</p>
                            </td>
                            <td>
                                <p style="margin-left:30px; text-align:right;">
                                    {{ date('d/m/Y - H:i', strtotime($recibo->created_at)) }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                    {{ __('Productos') }}</p>
                            </td>
                            <td>
                                <?php
                                $productoslista = explode(', ', $recibo->productos);
                                ?>
                                @foreach ($productoslista as $producto)
                                    <p style="margin-left:30px; text-align:right;">
                                        - {{ $producto }}
                                    </p>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                    {{ __('Pizzacoins obtenidas') }}</p>
                            </td>
                            <td>
                                <p style="margin-left:30px; text-align:right;">{{ round($recibo->total * 10) }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                    {{ __('Pizzacoins gastadas') }}</p>
                            </td>
                            <td>
                                <p style="margin-left:30px; text-align:right;">{{ $recibo->puntos }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Coste') }}
                                </p>
                            </td>
                            <td>
                                <p style="margin-left:30px; text-align:right;">
                                    {{ number_format($recibo->total, 2, '.', '') }} €</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                    {{ __('Entrega') }}</p>
                            </td>
                            <td>
                                <p style="margin-left:30px; text-align:right;">{{ __($recibo->direccion) }}</p>
                            </td>
                        </tr>
                        {{--
                            <tr>
                                <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                    <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Teléfono') }}
                                    </p>
                                    <p>{{ $recibo->telefono }}</p>
                                </td>
                            </tr>
                        --}}
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Estado') }}
                                </p>
                            </td>
                            <td>
                                <p style="margin-left:30px; text-align:right;">{{ __($recibo->estado) }}</p>
                            </td>
                        </tr>
                        <tr>
                            @if ($recibo->pagado)
                                <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                    <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                        {{ __('Pago') }}</p>
                                </td>
                                <td>
                                    <p style="margin-left:30px; text-align:right;">{{ __('Pago realizado') }}</p>
                                </td>
                            @else
                                <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                    <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                        {{ __('Pago') }}</p>
                                </td>
                                <td>
                                    <p style="margin-left:30px; text-align:right;">{{ __('Pago en curso') }}</p>
                                </td>
                            @endif
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                    {{ __('Factura') }}</p>
                            </td>
                            <td>
                                <a href="{{ route('recibos.factura', $recibo->id) }}" target="_blank"
                                    style="margin-left:30px; background-color:#568c2c; padding:8px; border-radius:8px; float:right; color:white;"
                                    id="boton"><button type="button">{{ __('Ver factura') }}</button></a>
                            </td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                    @endif
                @endforeach
            </table>

            @if (Route::current()->getName() == 'recibos.todosRecibos')
                <div>
                    {{$recibos->links()}}
                </div>
            @endif
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
