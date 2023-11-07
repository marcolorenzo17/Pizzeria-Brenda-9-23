<x-app-layout>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <x-slot name="header">
        <br><br><br>
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('RESERVAS') }}
        </h2>
        <br><br>
    </x-slot>
    <link rel="stylesheet" href="/css/credito.css" />
    <link rel="stylesheet" href="/css/recibos.css" />
    <link rel="stylesheet" href="/css/eventos.css" />
    <br>
    <div class="container px-12 py-8 mx-auto bg-white">
        <br>
        @if (Auth::user()->admin)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <table class="table-auto w-full" id="eventos-grande">
                    <tr>
                        <td class="font-bold">{{ __('Fecha') }}</td>
                        <td class="font-bold">{{ __('Hora') }}</td>
                        <td class="font-bold">{{ __('Cliente') }}</td>
                        <td class="font-bold">{{ __('Tipo') }}</td>
                        <td class="font-bold">{{ __('Personas') }}</td>
                        <td class="font-bold">{{ __('Presupuesto') }}</td>
                        <td class="font-bold">{{ __('Reserva') }}</td>
                        <td class="font-bold">{{ __('Pagado') }}</td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    @foreach ($eventos as $evento)
                        <tr>
                            <td>{{ $evento->fecha }}</td>
                            <td>{{ $evento->hora }}</td>
                            <td>{{ \App\Models\User::where(['id' => $evento->idUser])->pluck('name')->first() }}</td>
                            <td>{{ __($evento->tipo) }}</td>
                            <td>{{ $evento->personas }}</td>
                            <td>{{ number_format($evento->presupuesto, 2, '.', '') }} €</td>
                            <td>
                                @if ($evento->reservado == 'true')
                                    <form method="post" action="{{ route('eventos.eventono', $evento->id) }}">
                                        @csrf
                                        <button id="pagado" class="hover:text-white px-4 py-2 rounded-md"
                                            style="border-color:green; border-style:solid; border-width:1px;">{{ __('RESERVADO') }}</button>
                                    </form>
                                @elseif ($evento->reservado == 'false')
                                    <form method="post" action="{{ route('eventos.eventosi', $evento->id) }}">
                                        @csrf
                                        <button
                                            class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('DENEGADO') }}</button>
                                    </form>
                                @else
                                    <table {{-- id="productos-grande" --}}>
                                        <tr>
                                            <td>
                                                <form method="post"
                                                    action="{{ route('eventos.eventosi', $evento->id) }}">
                                                    @csrf
                                                    <button id="pagado" class="hover:text-white px-4 py-2 rounded-md"
                                                        style="border-color:green; border-style:solid; border-width:1px;">{{ __('ACEPTAR') }}</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form method="post"
                                                    action="{{ route('eventos.eventono', $evento->id) }}">
                                                    @csrf
                                                    <button
                                                        class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('DENEGAR') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </table>
                                    {{--
                                                    <table id="productos-pequenio">
                                                        <tr>
                                                            <td>
                                                                <form method="post" action="{{ route('eventos.eventosi', $evento->id) }}">
                                                                    @csrf
                                                                    <button id="pagado" class="hover:text-white px-4 py-2 rounded-md" style="border-color:green; border-style:solid; border-width:1px;">{{__('ACEPTAR')}}</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <form method="post" action="{{ route('eventos.eventono', $evento->id) }}">
                                                                    @csrf
                                                                    <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{__('DENEGAR')}}</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                --}}
                                @endif
                            </td>
                            @if (Auth::user()->role == 'Jefe' || Auth::user()->role == 'Cajero')
                                <td>
                                    @if ($evento->pagado)
                                        <form method="post" action="{{ route('eventos.nopagado', $evento->id) }}">
                                            @csrf
                                            <button id="pagado" class="hover:text-white px-4 py-2 rounded-md"
                                                style="border-color:green; border-style:solid; border-width:1px;">{{ __('PAGADO') }}</button>
                                        </form>
                                    @else
                                        <form method="post" action="{{ route('eventos.pagado', $evento->id) }}">
                                            @csrf
                                            <button
                                                class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('PENDIENTE') }}</button>
                                        </form>
                                    @endif
                                </td>
                            @else
                                <td>
                                    @if ($evento->pagado)
                                        <p>{{ __('PAGADO') }}</p>
                                    @else
                                        <p>{{ __('PENDIENTE') }}</p>
                                    @endif
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </table>
                <table
                    style="border-collapse:separate; border-spacing:10px; table-layout:fixed; margin-left:auto; margin-right:auto;"
                    id="eventos-pequenio">
                    @foreach ($eventos as $evento)
                        <tr>
                            <td style="display:flex; justify-content:space-between;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                    {{ __('Fecha y hora') }}</p>
                            </td>
                            <td>
                                <p style="padding-left:50px;">{{ $evento->fecha }} {{ $evento->hora }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Cliente') }}
                                </p>
                            </td>
                            <td style="word-wrap: break-word; max-width:300px;">
                                <p style="padding-left:50px;">
                                    {{ \App\Models\User::where(['id' => $evento->idUser])->pluck('name')->first() }}
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Tipo') }}
                                </p>
                            </td>
                            <td>
                                <p style="padding-left:50px;">{{ __($evento->tipo) }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">{{ __('Personas') }}
                                </p>
                            </td>
                            <td>
                                <p style="padding-left:50px;">{{ $evento->personas }}</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                    {{ __('Presupuesto') }}</p>
                            </td>
                            <td>
                                <p style="padding-left:50px;">{{ number_format($evento->presupuesto, 2, '.', '') }} €
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                @if ($evento->reservado == 'true')
                                    <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                        {{ __('Reserva') }}</p>
                            </td>
                            <td>
                                <div style="padding-left:50px;">
                                    <form method="post" action="{{ route('eventos.eventono', $evento->id) }}">
                                        @csrf
                                        <button id="pagado" class="hover:text-white px-4 py-2 rounded-md"
                                            style="border-color:green; border-style:solid; border-width:1px;">{{ __('RESERVADO') }}</button>
                                    </form>
                                </div>
                            </td>
                        @elseif ($evento->reservado == 'false')
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                {{ __('Reserva') }}</p>
                            </td>
                            <td>
                                <div style="padding-left:50px;">
                                    <form method="post" action="{{ route('eventos.eventosi', $evento->id) }}">
                                        @csrf
                                        <button
                                            class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('DENEGADO') }}</button>
                                    </form>
                                </div>
                            </td>
                        @else
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                {{ __('Reserva') }}</p>
                            </td>
                            <td>
                                <table {{-- id="productos-grande" --}}>
                                    <tr>
                                        <td>
                                            <form method="post" action="{{ route('eventos.eventosi', $evento->id) }}">
                                                @csrf
                                                <button id="pagado" class="hover:text-white px-4 py-2 rounded-md"
                                                    style="border-color:green; border-style:solid; border-width:1px;">{{ __('ACEPTAR') }}</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form method="post" action="{{ route('eventos.eventono', $evento->id) }}">
                                                @csrf
                                                <button
                                                    class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('DENEGAR') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                    @endif
                    </tr>
                    <tr>
                        @if (Auth::user()->role == 'Jefe' || Auth::user()->role == 'Cajero')
                            <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                @if ($evento->pagado)
                                    <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                        {{ __('Pagado') }}</p>
                            </td>
                            <td>
                                <div style="padding-left:50px;">
                                    <form method="post" action="{{ route('eventos.nopagado', $evento->id) }}">
                                        @csrf
                                        <button id="pagado" class="hover:text-white px-4 py-2 rounded-md"
                                            style="border-color:green; border-style:solid; border-width:1px;">{{ __('PAGADO') }}</button>
                                    </form>
                                </div>
                            </td>
                        @else
                            <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                {{ __('Pagado') }}</p>
                            </td>
                            <td>
                                <div style="padding-left:50px;">
                                    <form method="post" action="{{ route('eventos.pagado', $evento->id) }}">
                                        @csrf
                                        <button
                                            class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('PENDIENTE') }}</button>
                                    </form>
                                </div>
                            </td>
                        @endif
                    @else
                        <td style="padding-left:50px;">
                            @if ($evento->pagado)
                                <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                    {{ __('Pagado') }}</p>
                        </td>
                        <td>
                            <p style="padding-left:50px;">{{ __('PAGADO') }}</p>
                        </td>
                    @else
                        <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                            {{ __('Pagado') }}</p>
                        </td>
                        <td>
                            <p style="padding-left:50px;">{{ __('PENDIENTE') }}</p>
                        </td>
        @endif
        @endif
        </tr>
        <tr></tr>
        <tr></tr>
        @endforeach
        </table>
    </div>
@else
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
                    <p>{{__('¿Quieres celebrar un día especial con nosotros?')}}</p>
                </div>
                <div id="d2" onclick="showText('d2', false, true)" style="background-color:white; position:fixed; right:150px; bottom:100px; padding:20px; border-color:black; border-style:solid; border-width:2px; border-radius:10px; display:none;">
                    <p>{{__('Elige el evento que quieras, indica el número de personas, el día y la hora, y pronto te confirmaremos tu reserva.')}}</p>
                </div>
            </div>
            <img id="anim" src="{{ asset('img/anim/Pizza2.gif') }}" alt="..." style="height:120px; width:120px; position:fixed; right:10px; bottom:65px;">
            --}}

    @if (isset($_GET['totalpresupuesto']))
        <p class="text-center">
            {{ __('*Al reservar mesa para un cumpleaños o un evento, se hace un 5% de descuento al coste total del pedido.') }}
        </p>
        <br>
    @endif
    @if (!isset($_GET['totalpresupuesto']))
        <div class="text-center">
            <form action="{{ route('eventos.index') }}" method="get">
                @csrf
                <input type="hidden" value="{{ Cart::getTotal() * 0.95 }}" id="totalpresupuesto"
                    name="totalpresupuesto">
                <input type="hidden" value="esconder" id="esconder" name="esconder">
                <button type="submit" class="px-6 py-2 text-sm  rounded shadow" style="background-color:gold;"
                    id="boton">{{ __('Calcula el presupuesto para tu evento') }}</button>
            </form>
        </div>
    @endif
    <br><br>
    <p class="text-center">{{ __('*Sólo puedes tener un máximo de 5 reservas activas.') }}</p>
    <p class="text-center">
        {{ __('*Cada reserva tiene un coste de 10€, los cuales se descontarán de la cuenta a pagar.') }}</p>
    <p class="text-center">{{ __('*Sólo podemos reservar mesas para un máximo de 50 personas cada día.') }}
    </p>
    <br><br>
    <div id="reservas-grande">
        <table class="mx-auto" style="border-collapse: separate; border-spacing: 70px 0;">
            <tr>
                <td>
                    <div id="cumple" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                        <a href="#contenido">
                            <img class="rounded-t-lg" src="img/globo.png" alt="" onclick="mostrar(cumple)"
                                height="300px" width="300px" id="imgproducto" />
                        </a>
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center"
                                style="color: red;">{{ __('Cumpleaños') }}</h5>
                        </div>
                    </div>
                </td>
                <td>
                    <div id="evento" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                        <a href="#contenido">
                            <img class="rounded-t-lg" src="img/evento.jpg" alt="" onclick="mostrar(evento)"
                                height="300px" width="300px" id="imgproducto" />
                        </a>
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center"
                                style="color: red;">{{ __('Evento') }}</h5>
                        </div>
                    </div>
                </td>
                @if (!isset($_GET['esconder']))
                    <td>
                        <div id="cena" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                            <a href="#contenido">
                                <img class="rounded-t-lg" src="img/cena.jpg" alt="" onclick="mostrar(cena)"
                                    height="300px" width="300px" id="imgproducto" />
                            </a>
                            <div class="p-5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center"
                                    style="color: red;">{{ __('Cena') }}</h5>
                            </div>
                        </div>
                    </td>
                @endif
            </tr>
        </table>
    </div>
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
        style="flex-wrap:wrap; align-items:center; text-align:center;" id="reservas-pequenio">
        <div id="cumple" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
            <a href="#contenido">
                <img class="rounded-t-lg" src="img/globo.png" alt="" onclick="mostrar(cumple)"
                    height="300px" width="300px" id="imgproducto" />
            </a>
            <div class="p-5">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center" style="color: red;">
                    {{ __('Cumpleaños') }}</h5>
            </div>
        </div>
        <div id="evento" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
            <a href="#contenido">
                <img class="rounded-t-lg" src="img/evento.jpg" alt="" onclick="mostrar(evento)"
                    height="300px" width="300px" id="imgproducto" />
            </a>
            <div class="p-5">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center" style="color: red;">
                    {{ __('Evento') }}</h5>
            </div>
        </div>
        @if (!isset($_GET['esconder']))
            <div id="cena" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <a href="#contenido">
                    <img class="rounded-t-lg" src="img/cena.jpg" alt="" onclick="mostrar(cena)"
                        height="300px" width="300px" id="imgproducto" />
                </a>
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center" style="color: red;">
                        {{ __('Cena') }}</h5>
                </div>
            </div>
        @endif
    </div>
    <br><br>
    <form action="{{ route('eventos.addEvento') }}" method="POST" enctype="multipart/form-data"
        id="subscribe-form">
        @csrf
        <div id="contenido" style="display: none;">
            <div class="text-center">
                @if (isset($_GET['totalpresupuesto']))
                    <input type="hidden" id="presupuesto" name="presupuesto"
                        value="{{ $_GET['totalpresupuesto'] }}">
                @endif
                <input type="hidden" id="tipo" name="tipo" value="">
                @error('personas')
                    <span class="text-danger" style="color:red;">{{ __($message) }}</span>
                    <br>
                @enderror
                {{ __('Nº Personas:') }} <input type="number" id="personas" name="personas"
                    value="{{ old('personas') }}">
                <br><br>
                @error('fecha')
                    <span class="text-danger" style="color:red;">{{ __($message) }}</span>
                    <br>
                @enderror
                {{ __('Fecha:') }} <input type="date" name="fecha" id="fecha"
                    value="{{ old('fecha') }}">
                <br><br>
                @error('hora')
                    <span class="text-danger" style="color:red;">{{ __($message) }}</span>
                    <br>
                @enderror
                {{ __('Hora:') }} <input type="time" name="hora" id="hora" min="20:30"
                    max="23:30" value="{{ old('hora') }}">
                <input type="hidden" value="false" name="ifcredito" id="ifcredito">
                <br><br><br>
                <div>
                    <h2 class="text-center">{{ __('ELIGE UN MÉTODO DE PAGO') }}</h2>
                    <br>
                    <table class="mx-auto" style="border-collapse: separate; border-spacing: 50px 0;">
                        <tr>
                            <td>
                                <div id="efectivodiv"
                                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <a href="#efectivoparte">
                                        <img class="rounded-t-lg" src="img/efectivo.png" alt=""
                                            onclick="mostrarpago('efectivo')" id="imgpago" />
                                    </a>
                                    <div class="p-5">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center">
                                            {{ __('En efectivo') }}</h5>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div id="creditodiv"
                                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                    <a href="#creditoparte">
                                        <img class="rounded-t-lg" src="img/tarjetacredito.png" alt=""
                                            onclick="mostrarpago('credito')" id="imgpago" />
                                    </a>
                                    <div class="p-5">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center">
                                            {{ __('Tarjeta de crédito') }}</h5>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <br><br><br>
                <div id="creditoparte" style="display:none;">
                    <label for="card-holder-name">{{ __('Titular de la tarjeta') }}</label>
                    <input id="card-holder-name" type="text">
                    <br><br>
                    <div class="form-row">
                        <label for="card-element">{{ __('Tarjeta de crédito o de débito') }}</label>
                        <div id="card-element" class="form-control">
                        </div>
                        <!-- Used to display form errors. -->
                        <div id="card-errors" role="alert"></div>
                    </div>
                    <div class="stripe-errors"></div>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }}<br>
                            @endforeach
                        </div>
                    @endif
                    @if (isset($_GET['totalpresupuesto']))
                        <br><br><br>
                        <p style="font-weight:bolder;">{{ __('Presupuesto:') }}
                            {{ number_format($_GET['totalpresupuesto'], 2, '.', '') }} €</p>
                    @endif
                    <br><br>
                    <div class="form-group text-center">
                        <button class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500" id="card-button"
                            data-secret="{{ $intent->client_secret }}"
                            class="btn btn-lg btn-success btn-block">{{ __('Reservar') }}</button>
                    </div>
                </div>
                <div class="form-group text-center" id="efectivoparte" style="display:none;">
                    <button type="submit" class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500"
                        class="btn btn-lg btn-success btn-block">{{ __('Reservar') }}</button>
                </div>
            </div>
        </div>
    </form>
    <br><br>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden sm:rounded-lg" x-data="{ mostrar: false }">
            <div style="text-align: center;">
                <button class="px-6 py-2 text-sm rounded shadow" style="background-color:antiquewhite;"
                    x-on:click="mostrar = !mostrar"
                    x-text="mostrar ? '{{ __('OCULTAR MIS RESERVAS') }}' : '{{ __('MOSTRAR MIS RESERVAS') }}'"
                    id="boton"></button>
            </div>
            <div class="p-6 text-gray-900 h-screen flex items-center justify-center" id="misreservas"
                x-show="mostrar">
                <table class="table-auto w-full" style="border-collapse:separate; border-spacing:10px;"
                    id="eventos-grande">
                    <tr>
                        <td class="font-bold">{{ __('Fecha') }}</td>
                        <td class="font-bold">{{ __('Hora') }}</td>
                        <td class="font-bold">{{ __('Tipo') }}</td>
                        <td class="font-bold">{{ __('Personas') }}</td>
                        <td class="font-bold">{{ __('Presupuesto') }}</td>
                        <td class="font-bold">{{ __('Reserva') }}</td>
                        <td class="font-bold">{{ __('Pagado') }}</td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    @foreach ($eventos as $evento)
                        @if ($evento->idUser == Auth::user()->id)
                            <tr>
                                <td>{{ $evento->fecha }}</td>
                                <td>{{ $evento->hora }}</td>
                                <td>{{ __($evento->tipo) }}</td>
                                <td>{{ $evento->personas }}</td>
                                <td>{{ number_format($evento->presupuesto, 2, '.', '') }} €</td>
                                <td>
                                    @if ($evento->reservado == 'true')
                                        <p>{{ __('Reservado') }}</p>
                                    @elseif ($evento->reservado == 'false')
                                        <p>{{ __('Lo sentimos, no es posible realizar su reserva') }}</p>
                                    @else
                                        <p>{{ __('Reserva en curso') }}</p>
                                    @endif
                                </td>
                                <td>
                                    @if ($evento->pagado)
                                        <p>{{ __('Pago realizado') }}</p>
                                    @else
                                        <p>{{ __('Pago en curso') }}</p>
                                    @endif
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </table>
                <table class="table-auto w-full" style="border-collapse:separate; border-spacing:10px;"
                    id="eventos-pequenio">
                    @foreach ($eventos as $evento)
                        @if ($evento->idUser == Auth::user()->id)
                            <tr>
                                <td style="display:flex; justify-content:space-between;">
                                    <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                        {{ __('Fecha y hora') }}</p>
                                    <p>{{ $evento->fecha }} {{ $evento->hora }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                    <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                        {{ __('Tipo') }}</p>
                                    <p>{{ __($evento->tipo) }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                    <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                        {{ __('Personas') }}
                                    </p>
                                    <p>{{ $evento->personas }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                    <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                        {{ __('Presupuesto') }}</p>
                                    <p>{{ number_format($evento->presupuesto, 2, '.', '') }} €</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                    @if ($evento->reservado == 'true')
                                        <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                            {{ __('Reserva') }}</p>
                                        <p>{{ __('Reservado') }}</p>
                                    @elseif ($evento->reservado == 'false')
                                        <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                            {{ __('Reserva') }}</p>
                                        <p>{{ __('Lo sentimos, no es posible realizar su reserva') }}</p>
                                    @else
                                        <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                            {{ __('Reserva') }}</p>
                                        <p>{{ __('Reserva en curso') }}</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td style="display:flex; justify-content:space-between; padding-left:50px;">
                                    @if ($evento->pagado)
                                        <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                            {{ __('Pagado') }}</p>
                                        <p>{{ __('Pago realizado') }}</p>
                                    @else
                                        <p style="font-weight:bolder; font-size:13px; font-style:italic;">
                                            {{ __('Pagado') }}</p>
                                        <p>{{ __('Pago en curso') }}</p>
                                    @endif
                                </td>
                            </tr>
                            <tr></tr>
                            <tr></tr>
                        @endif
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    </div>
    @endif

    <br><br><br><br>
    <footer
        class="fixed bottom-0 left-0 z-20 w-full p-4 border-t border-gray-300 shadow md:flex md:items-center md:justify-between md:p-6"
        style="background-color:red;">
        <span class="text-sm sm:text-center"
            style="color: white;">{{ __('© 2023 Pizzería Brenda™. Todos los derechos reservados.') }}
        </span>
        <ul class="hidden flex-wrap items-center mt-3 text-sm font-medium sm:mt-0 sm:flex" style="color: white;">
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
        <div style="margin-left:auto; display:flex;">
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

    <script src="{{ asset('js/reservas-script.js') }}"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ asset('js/credito.js') }}"></script>

</x-app-layout>
