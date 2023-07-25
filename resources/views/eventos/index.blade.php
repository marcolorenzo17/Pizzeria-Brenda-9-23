<x-app-layout>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('RESERVAS') }}
        </h2>
        <div>
            @include('partials/language_switcher')
        </div>
    </x-slot>
    <link rel="stylesheet" href="/css/recibos.css" />
    <br>
    <div class="container px-12 py-8 mx-auto bg-white">
        <br>
        @if (Auth::user()->admin)
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <table class="table-auto w-full">
                            <tr>
                                <td class="font-bold">{{__('Cliente')}}</td>
                                <td class="font-bold">{{__('Tipo')}}</td>
                                <td class="font-bold">{{__('Personas')}}</td>
                                <td class="font-bold">{{__('Fecha')}}</td>
                                <td class="font-bold">{{__('Hora')}}</td>
                                <td class="font-bold">{{__('Presupuesto')}}</td>
                                <td class="font-bold">{{__('Reserva')}}</td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            @foreach ($eventos as $evento)
                                    <tr>
                                        <td>{{ \App\Models\User::where(['id' => $evento->idUser])->pluck('name')->first() }}</td>
                                        <td>{{ __($evento->tipo) }}</td>
                                        <td>{{ $evento->personas }}</td>
                                        <td>{{ $evento->fecha }}</td>
                                        <td>{{ $evento->hora }}</td>
                                        <td>{{ number_format($evento->presupuesto, 2, '.', '') }} €</td>
                                        <td>
                                            @if ($evento->reservado == "true")
                                                <form method="post" action="{{ route('eventos.eventono', $evento->id) }}">
                                                    @csrf
                                                    <button id="pagado" class="hover:text-white px-4 py-2 rounded-md" style="border-color:green; border-style:solid; border-width:1px;">{{__('RESERVADO')}}</button>
                                                </form>
                                            @elseif ($evento->reservado == "false")
                                                <form method="post" action="{{ route('eventos.eventosi', $evento->id) }}">
                                                    @csrf
                                                    <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{__('DENEGADO')}}</button>
                                                </form>
                                            @else
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <form method="post" action="{{ route('eventos.eventosi', $evento->id) }}">
                                                                @csrf
                                                                <button id="pagado" class="hover:text-white px-4 py-2 rounded-md" style="border-color:green; border-style:solid; border-width:1px;">{{__('ACEPTAR')}}</button>
                                                            </form>
                                                        </td>
                                                        <td>
                                                            <form method="post" action="{{ route('eventos.eventono', $evento->id) }}">
                                                                @csrf
                                                                <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{__('DENEGAR')}}</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                </table>
                                            @endif
                                        </td>
                                    </tr>
                            @endforeach
                        </table>
            </div>
        @else
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

            @if (isset($_GET['totalpresupuesto']))
                <p class="text-center">{{__('*Al reservar mesa para un cumpleaños o un evento, se hace un 5% de descuento al coste total del pedido.')}}</p>
                <br>
            @endif
            @if (!isset($_GET['totalpresupuesto']))
            <div class="text-center">
                <form action="{{ route('eventos.index') }}" method="get">
                    @csrf
                    <input type="hidden" value="{{ Cart::getTotal() * 0.95 }}" id="totalpresupuesto" name="totalpresupuesto">
                    <input type="hidden" value="esconder" id="esconder" name="esconder">
                    <button type="submit" class="px-6 py-2 text-sm  rounded shadow" style="background-color:gold;">{{__('Calcula el presupuesto para tu evento')}}</button>
                </form>
            </div>
            @endif
            <br><br>
            <p class="text-center">{{__('*Sólo se pueden realizar un máximo de 10 reservas al mismo tiempo.')}}</p>
            <br><br>
            <table class="mx-auto" style="border-collapse: separate; border-spacing: 70px 0;">
                <tr>
                    <td>
                        <div id="cumple" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                            <a href="#contenido">
                                <img class="rounded-t-lg" src="img/globo.png" alt="" onclick="mostrar(cumple)"
                                    height="300px" width="300px" />
                            </a>
                            <div class="p-5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center"
                                    style="color: red;">{{__('Cumpleaños')}}</h5>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div id="evento" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                            <a href="#contenido">
                                <img class="rounded-t-lg" src="img/evento.jpg" alt="" onclick="mostrar(evento)"
                                    height="300px" width="300px" />
                            </a>
                            <div class="p-5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center"
                                    style="color: red;">{{__('Evento')}}</h5>
                            </div>
                        </div>
                    </td>
                    @if (!isset($_GET['esconder']))
                        <td>
                            <div id="cena" class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                                <a href="#contenido">
                                    <img class="rounded-t-lg" src="img/cena.jpg" alt="" onclick="mostrar(cena)"
                                        height="300px" width="300px" />
                                </a>
                                <div class="p-5">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center"
                                        style="color: red;">{{__('Cena')}}</h5>
                                </div>
                            </div>
                        </td>
                    @endif
                </tr>
            </table>
            <br><br>
            <form action="{{ route('eventos.addEvento') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div id="contenido" style="display: none;">
                    <div class="text-center">
                        @if (isset($_GET['totalpresupuesto']))
                            <input type="hidden" id="presupuesto" name="presupuesto" value="{{ $_GET['totalpresupuesto'] }}">
                        @endif
                        <input type="hidden" id="tipo" name="tipo" value="">
                        @error('personas')
                            <span class="text-danger" style="color:red;">{{__($message)}}</span>
                            <br>
                        @enderror
                        {{__('Nº Personas:')}} <input type="number" id="personas" name="personas" value="{{ old('personas') }}">
                        <br><br>
                        @error('fecha')
                            <span class="text-danger" style="color:red;">{{__($message)}}</span>
                            <br>
                        @enderror
                        {{__('Fecha:')}} <input type="date" name="fecha" id="fecha" value="{{ old('fecha') }}">
                        <br><br>
                        @error('hora')
                            <span class="text-danger" style="color:red;">{{__($message)}}</span>
                            <br>
                        @enderror
                        {{__('Hora:')}} <input type="time" name="hora" id="hora" min="20:30" max="23:30" value="{{ old('hora') }}">
                        @if (isset($_GET['totalpresupuesto']))
                            <br><br><br>
                            <p style="font-weight:bolder;">{{__('Presupuesto:')}} {{ number_format($_GET['totalpresupuesto'], 2, '.', '') }} €</p>
                        @endif
                        <br><br><br>
                        <button type="submit"
                            class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500">{{__('Reservar')}}</button>
                    </div>
                </div>
            </form>
            <br><br>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden sm:rounded-lg" x-data="{ mostrar:false }">
                    <div style="text-align: center;">
                        <button class="px-6 py-2 text-sm rounded shadow" style="background-color:antiquewhite;" x-on:click="mostrar = !mostrar" x-text="mostrar ? '{{__('OCULTAR MIS RESERVAS') }}' : '{{__('MOSTRAR MIS RESERVAS') }}'"></button>
                    </div>
                    <div class="p-6 text-gray-900 h-screen flex items-center justify-center" id="misreservas"
                        x-show="mostrar">
                        <table class="table-auto w-full">
                            <tr>
                                <td class="font-bold">{{__('Tipo')}}</td>
                                <td class="font-bold">{{__('Personas')}}</td>
                                <td class="font-bold">{{__('Fecha')}}</td>
                                <td class="font-bold">{{__('Hora')}}</td>
                                <td class="font-bold">{{__('Presupuesto')}}</td>
                                <td class="font-bold">{{__('Reserva')}}</td>
                            </tr>
                            <tr>
                                <td><br></td>
                            </tr>
                            @foreach ($eventos as $evento)
                                @if ($evento->idUser == Auth::user()->id)
                                    <tr>
                                        <td>{{ __($evento->tipo) }}</td>
                                        <td>{{ $evento->personas }}</td>
                                        <td>{{ $evento->fecha }}</td>
                                        <td>{{ $evento->hora }}</td>
                                        <td>{{ number_format($evento->presupuesto, 2, '.', '') }} €</td>
                                        <td>
                                            @if ($evento->reservado == "true")
                                                <p>{{__('Reservado')}}</p>
                                            @elseif ($evento->reservado == "false")
                                                <p>{{__('Lo sentimos, no es posible realizar su reserva')}}</p>
                                            @else
                                                <p>{{__('Reserva en curso')}}</p>
                                            @endif
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <br><br><br><br><br><br><br><br>

    <footer
        class="fixed bottom-0 left-0 z-20 w-full p-4 border-t border-gray-300 shadow md:flex md:items-center md:justify-between md:p-6" style="background-color:white;">
        <span class="text-sm text-gray-500 sm:text-center">{{__('© 2023 Pizzería Brenda™. Todos los derechos reservados.')}}
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0">
            <li>
                <a href="{{ route('whoarewe') }}" class="mr-4 hover:underline md:mr-6">{{__('¿Quiénes somos?')}}</a>
            </li>
            <li>
                <a href="{{ route('faq') }}" class="mr-4 hover:underline md:mr-6">{{__('Preguntas frecuentes')}}</a>
            </li>
            <li>
                <a href="{{ route('contact') }}" class="mr-4 hover:underline md:mr-6">{{__('Contáctanos')}}</a>
            </li>
        </ul>
    </footer>

    <script src="{{ asset('js/reservas-script.js') }}"></script>

</x-app-layout>
