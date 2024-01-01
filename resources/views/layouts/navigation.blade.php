<link rel="stylesheet" href="/css/index.css" />
<link rel="stylesheet" href="/css/index_products.css" />
<nav x-data="{ open: false }" class="border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between"
            style="position: fixed; background-color:#141414; color:white; width: 100%; z-index: 1; right:0px; height:110px;">
            <div class="flex">
                <!-- Navigation Links -->
                {{--
                    <x-nav-link href="index" :active="request()->routeIs('index')">
                        {{ __('Index') }}
                    </x-nav-link>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                --}}
                @if (Auth::user()->admin)
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <div style="margin-top:43px;">
                            <x-nav-link :href="route('indexAnon')" style="color:white; font-size:20px; font-weight:bolder;">
                                {{ __('Inicio') }}
                            </x-nav-link>
                            @if (Route::current()->getName() == 'indexAnon')
                                <div style="background-color:#f12d2d; height:5px; border-radius:10px;">
                                    <br>
                                </div>
                            @endif
                        </div>
                        <div style="margin-top:43px;">
                            <x-nav-link :href="route('products.index')" style="color:white; font-size:20px; font-weight:bolder;">
                                {{ __('Menú') }}
                            </x-nav-link>
                            @if (Route::current()->getName() == 'products.index')
                                <div style="background-color:#f12d2d; height:5px; border-radius:10px;">
                                    <br>
                                </div>
                            @endif
                        </div>
                        <div style="margin-top:43px;">
                            <x-nav-link :href="route('crearpizza')" style="color:white; font-size:20px; font-weight:bolder;">
                                {{ __('Ingredientes') }}
                            </x-nav-link>
                            @if (Route::current()->getName() == 'crearpizza')
                                <div style="background-color:#f12d2d; height:5px; border-radius:10px;">
                                    <br>
                                </div>
                            @endif
                        </div>
                        @if (Auth::user()->role == 'Jefe' || Auth::user()->role == 'Cajero')
                            <div style="margin-top:43px;">
                                <x-nav-link :href="route('eventos.index')" style="color:white; font-size:20px; font-weight:bolder;">
                                    {{ __('Reservas') }}
                                </x-nav-link>
                                @if (Route::current()->getName() == 'eventos.index')
                                    <div style="background-color:#f12d2d; height:5px; border-radius:10px;">
                                        <br>
                                    </div>
                                @endif
                            </div>
                        @endif
                        {{--
                            @if (Auth::user()->role == 'Jefe')
                                <x-nav-link :href="route('clientes.index')" :active="request()->routeIs('clientes.index')">
                                    {{ __('Clientes') }}
                                </x-nav-link>
                            @endif
                            <x-nav-link :href="route('products.indexValoraciones')" :active="request()->routeIs('products.indexValoraciones')">
                                {{ __('Valoraciones') }}
                            </x-nav-link>
                            <x-nav-link :href="route('products.indexComentarios')" :active="request()->routeIs('products.indexComentarios')">
                                {{ __('Comentarios') }}
                            </x-nav-link>
                        --}}
                    </div>
                @else
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <div style="margin-top:43px;">
                            <x-nav-link :href="route('indexAnon')" style="color:white; font-size:20px; font-weight:bolder;">
                                {{ __('Inicio') }}
                            </x-nav-link>
                            @if (Route::current()->getName() == 'indexAnon')
                                <div style="background-color:#f12d2d; height:5px; border-radius:10px;">
                                    <br>
                                </div>
                            @endif
                        </div>
                        <div style="margin-top:43px;">
                            <x-nav-link :href="route('products.index')" style="color:white; font-size:20px; font-weight:bolder;">
                                {{ __('Menú') }}
                            </x-nav-link>
                            @if (Route::current()->getName() == 'products.index')
                                <div style="background-color:#f12d2d; height:5px; border-radius:10px;">
                                    <br>
                                </div>
                            @endif
                        </div>
                        <div style="margin-top:43px;">
                            <x-nav-link :href="route('promociones.index')" style="color:white; font-size:20px; font-weight:bolder;">
                                {{ __('Promociones') }}
                            </x-nav-link>
                            @if (Route::current()->getName() == 'promociones.index')
                                <div style="background-color:#f12d2d; height:5px; border-radius:10px;">
                                    <br>
                                </div>
                            @endif
                        </div>
                        <div style="margin-top:43px;">
                            <x-nav-link :href="route('eventos.index')" style="color:white; font-size:20px; font-weight:bolder;">
                                {{ __('Reservas') }}
                            </x-nav-link>
                            @if (Route::current()->getName() == 'eventos.index')
                                <div style="background-color:#f12d2d; height:5px; border-radius:10px;">
                                    <br>
                                </div>
                            @endif
                        </div>
                        <div style="margin-top:43px;">
                            <a href="{{ route('cart.list') }}" class="flex items-center">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                                @if (Auth::user()->inmediato)
                                    <span style="color:white; font-size:20px;">0</span>
                                @else
                                    <span style="color:white; font-size:20px;">{{ Cart::getTotalQuantity() }}</span>
                                @endif
                            </a>
                            @if (Route::current()->getName() == 'cart.list')
                                <div style="background-color:#f12d2d; height:5px; border-radius:10px;">
                                    <br>
                                </div>
                            @endif
                        </div>
                    </div>
                @endif
            </div>

            <!-- Logo -->
            <div style="margin-left:auto; margin-right:0;">
                <a href="/"><img src="{{ asset('img/logo.png') }}" alt="logo_header"
                        style="width:100px; margin-top:10px;"></a>
            </div>

            <div style="margin-left:auto; margin-right:0; margin-top:40px;" id="productos-grande-navbar">
                @include('partials/language_switcher')
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                @if (!Auth::user()->admin)
                    <p align="right" id="productos-grande-navbar">
                        {{--
                            {{__('Puntos')}}: {{ Auth::user()->puntos }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        --}}
                    <div><a href="#"
                            onclick="alert('{{ __('| Español |\n\n¿Qué son las Pizzacoins?\n\nLas pizzacoins son la moneda exclusiva de la Pizzería Brenda.\nPuedes usar estas monedas para canjearlas por promociones especiales.\nCada vez que realices un pedido de cualquier menú o producto en la página web, obtendrás Pizzacoins. Por cada € que gastes, recibirás 10 Pizzacoins.\n¡Acumula esas Pizzacoins y píllate un menú gratis!\n\n| English |\n\nWhat are Pizzacoins?\n\nPizzacoins are the exclusive currency of Pizzería Brenda.\nYou can use these coins to exchange them for special promotions.\nEach time you make an order of any menu or product on this website, you will get Pizzacoins. For each € you spend, you will receive 10 Pizzacoins.\nGather some Pizzacoins and get yourself a free menu!') }}')"><img
                                src="{{ asset('img/help.png') }}" alt="help" id="productos-grande-navbar"></div>
                    </a>
                    <div><img src="{{ asset('img/pizzacoin.png') }}" alt="coin" id="productos-grande-navbar"></div>
                    <p id="productos-grande-navbar">&nbsp;x {{ Auth::user()->puntos }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </p>
                    </p>
                @endif
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            @if (Auth::user()->admin)
                                <div style="display:flex;"><img src="{{ asset('img/user.png') }}" alt="user"
                                        width="20px" height="20px" style="margin-right:10px;">
                                    <p style="margin-right:20px;">{{ Auth::user()->name }} (Admin -
                                        {{ __(Auth::user()->role) }})</p>
                                </div>
                            @else
                                <div style="display:flex;"><img src="{{ asset('img/user.png') }}" alt="user"
                                        width="20px" height="20px" style="margin-right:10px;">
                                    <p style="margin-right:20px;">{{ Auth::user()->name }}</p>
                                </div>
                            @endif

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        @if (!Auth::user()->admin)
                            <x-dropdown-link id="productos-pequenio-navbar"
                                onclick="alert('{{ __('| Español |\n\n¿Qué son las Pizzacoins?\n\nLas pizzacoins son la moneda exclusiva de la Pizzería Brenda.\nPuedes usar estas monedas para canjearlas por promociones especiales.\nCada vez que realices un pedido de cualquier menú o producto en la página web, obtendrás Pizzacoins. Por cada € que gastes, recibirás 10 Pizzacoins.\n¡Acumula esas Pizzacoins y píllate un menú gratis!\n\n| English |\n\nWhat are Pizzacoins?\n\nPizzacoins are the exclusive currency of Pizzería Brenda.\nYou can use these coins to exchange them for special promotions.\nEach time you make an order of any menu or product on this website, you will get Pizzacoins. For each € you spend, you will receive 10 Pizzacoins.\nGather some Pizzacoins and get yourself a free menu!') }}')">
                                {{ __('Pizzacoins') }}: {{ Auth::user()->puntos }}
                            </x-dropdown-link>
                        @endif
                        @if (Auth::user()->admin)
                            @if (Auth::user()->role == 'Jefe')
                                <x-dropdown-link :href="route('clientes.index')">
                                    <p>{{ __('Clientes') }}</p>
                                    @if (Route::current()->getName() == 'clientes.index')
                                        <div style="background-color:red; height:3px; border-radius:10px;">
                                            <br>
                                        </div>
                                    @endif
                                </x-dropdown-link>
                            @endif
                            <x-dropdown-link :href="route('products.indexValoraciones')">
                                <p>{{ __('Valoraciones') }}</p>
                                @if (Route::current()->getName() == 'products.indexValoraciones')
                                    <div style="background-color:red; height:3px; border-radius:10px;">
                                        <br>
                                    </div>
                                @endif
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('products.indexComentarios')">
                                <p>{{ __('Comentarios') }}</p>
                                @if (Route::current()->getName() == 'products.indexComentarios')
                                    <div style="background-color:red; height:3px; border-radius:10px;">
                                        <br>
                                    </div>
                                @endif
                            </x-dropdown-link>
                        @endif
                        <x-dropdown-link :href="route('recibos.index')">
                            <p>{{ __('Recibos') }}</p>
                            @if (Route::current()->getName() == 'recibos.index')
                                <div style="background-color:red; height:3px; border-radius:10px;">
                                    <br>
                                </div>
                            @endif
                        </x-dropdown-link>
                        @if (Auth::user()->role == 'Jefe' || Auth::user()->role == 'Cliente')
                            <x-dropdown-link :href="route('curriculum.index')">
                                <p>{{ __('Currículum') }}</p>
                                @if (Route::current()->getName() == 'curriculum.index')
                                    <div style="background-color:red; height:3px; border-radius:10px;">
                                        <br>
                                    </div>
                                @endif
                            </x-dropdown-link>
                        @endif
                        <x-dropdown-link :href="route('profile.edit')">
                            <p>{{ __('Tu cuenta') }}</p>
                            @if (Route::current()->getName() == 'profile.edit')
                                <div style="background-color:red; height:3px; border-radius:10px;">
                                    <br>
                                </div>
                            @endif
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Cerrar sesión') }}
                                <div id="productos-pequenio-navbar" style="margin-bottom:40px;">
                                </div>
                            </x-dropdown-link>
                        </form>

                        <div id="productos-pequenio-navbar" style="position:relative; top:-20px;">
                            @include('partials/language_switcher')
                        </div>
                    </x-slot>

                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                @if (!Auth::user()->admin)
                    <p align="right" id="productos-pequenio-navbar">
                        {{--
                            {{__('Puntos')}}: {{ Auth::user()->puntos }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        --}}
                    <div><a href="#"
                            onclick="alert('{{ __('| Español |\n\n¿Qué son las Pizzacoins?\n\nLas pizzacoins son la moneda exclusiva de la Pizzería Brenda.\nPuedes usar estas monedas para canjearlas por promociones especiales.\nCada vez que realices un pedido de cualquier menú o producto en la página web, obtendrás Pizzacoins. Por cada € que gastes, recibirás 10 Pizzacoins.\n¡Acumula esas Pizzacoins y píllate un menú gratis!\n\n| English |\n\nWhat are Pizzacoins?\n\nPizzacoins are the exclusive currency of Pizzería Brenda.\nYou can use these coins to exchange them for special promotions.\nEach time you make an order of any menu or product on this website, you will get Pizzacoins. For each € you spend, you will receive 10 Pizzacoins.\nGather some Pizzacoins and get yourself a free menu!') }}')"><img
                                src="{{ asset('img/help.png') }}" alt="help" id="productos-pequenio-navbar">
                    </div>
                    </a>
                    <div><img src="{{ asset('img/pizzacoin.png') }}" alt="coin" id="productos-pequenio-navbar">
                    </div>
                    <p id="productos-pequenio-navbar">&nbsp;x {{ Auth::user()->puntos }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </p>
                    </p>
                @endif
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <a href="#">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </a>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div style="position:relative; top:60px;">
            @include('partials/language_switcher')
        </div>
        <div class="px-4" style="background-color:white; padding:10px;">
            <br><br><br>
            @if (Auth::user()->admin)
                <div class="font-medium text-base text-gray-800" style="display:flex;"><img
                        src="{{ asset('img/user.png') }}" alt="user" width="20px" height="20px"
                        style="margin-right:10px;">
                    <p>{{ Auth::user()->name }} (Admin - {{ __(Auth::user()->role) }})</p>
                </div>
            @else
                <div class="font-medium text-base text-gray-800" style="display:flex;"><img
                        src="{{ asset('img/user.png') }}" alt="user" width="20px" height="20px"
                        style="margin-right:10px;">
                    <p>{{ Auth::user()->name }}</p>
                </div>
            @endif
            {{--
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            --}}
        </div>
        @if (!Auth::user()->admin)
            <div style="background-color:white; padding:15px;">
                <a style="display:inline-block;" href="{{ route('cart.list') }}" class="flex items-center">
                    <p style="display:inline-block; margin-right:10px;">{{ __('Carrito') }}</p>
                    <svg style="display:inline-block;" class="w-5 h-5 text-green-600" fill="none"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                    @if (Auth::user()->inmediato)
                        <span class="text-red-700">0</span>
                    @else
                        <span class="text-red-700">{{ Cart::getTotalQuantity() }}</span>
                    @endif
                </a>
            </div>
        @endif
        @if (Auth::user()->admin)
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('indexAnon')">
                    <p>{{ __('Inicio') }}</p>
                    @if (Route::current()->getName() == 'indexAnon')
                        <div style="background-color:red; height:3px; border-radius:10px;">
                            <br>
                        </div>
                    @endif
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('products.index')">
                    <p>{{ __('Menú') }}</p>
                    @if (Route::current()->getName() == 'products.index')
                        <div style="background-color:red; height:3px; border-radius:10px;">
                            <br>
                        </div>
                    @endif
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('crearpizza')">
                    <p>{{ __('Ingredientes') }}</p>
                    @if (Route::current()->getName() == 'crearpizza')
                        <div style="background-color:red; height:3px; border-radius:10px;">
                            <br>
                        </div>
                    @endif
                </x-responsive-nav-link>
                @if (Auth::user()->role == 'Jefe' || Auth::user()->role == 'Cajero')
                    <x-responsive-nav-link :href="route('eventos.index')">
                        <p>{{ __('Reservas') }}</p>
                        @if (Route::current()->getName() == 'eventos.index')
                            <div style="background-color:red; height:3px; border-radius:10px;">
                                <br>
                            </div>
                        @endif
                    </x-responsive-nav-link>
                @endif
            </div>
        @else
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('indexAnon')">
                    <p>{{ __('Inicio') }}</p>
                    @if (Route::current()->getName() == 'indexAnon')
                        <div style="background-color:red; height:3px; border-radius:10px;">
                            <br>
                        </div>
                    @endif
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('products.index')">
                    <p>{{ __('Menú') }}</p>
                    @if (Route::current()->getName() == 'products.index')
                        <div style="background-color:red; height:3px; border-radius:10px;">
                            <br>
                        </div>
                    @endif
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('promociones.index')">
                    <p>{{ __('Promociones') }}</p>
                    @if (Route::current()->getName() == 'promociones.index')
                        <div style="background-color:red; height:3px; border-radius:10px;">
                            <br>
                        </div>
                    @endif
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('eventos.index')">
                    <p>{{ __('Reservas') }}</p>
                    @if (Route::current()->getName() == 'eventos.index')
                        <div style="background-color:red; height:3px; border-radius:10px;">
                            <br>
                        </div>
                    @endif
                </x-responsive-nav-link>
            </div>
        @endif

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="mt-3 space-y-1">
                @if (Auth::user()->admin)
                    @if (Auth::user()->role == 'Jefe')
                        <x-responsive-nav-link :href="route('clientes.index')">
                            <p>{{ __('Clientes') }}</p>
                            @if (Route::current()->getName() == 'clientes.index')
                                <div style="background-color:red; height:3px; border-radius:10px;">
                                    <br>
                                </div>
                            @endif
                        </x-responsive-nav-link>
                    @endif
                    <x-responsive-nav-link :href="route('products.indexValoraciones')">
                        <p>{{ __('Valoraciones') }}</p>
                        @if (Route::current()->getName() == 'products.indexValoraciones')
                            <div style="background-color:red; height:3px; border-radius:10px;">
                                <br>
                            </div>
                        @endif
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('products.indexComentarios')">
                        <p>{{ __('Comentarios') }}</p>
                        @if (Route::current()->getName() == 'products.indexComentarios')
                            <div style="background-color:red; height:3px; border-radius:10px;">
                                <br>
                            </div>
                        @endif
                    </x-responsive-nav-link>
                @endif
                <x-responsive-nav-link :href="route('recibos.index')">
                    <p>{{ __('Recibos') }}</p>
                    @if (Route::current()->getName() == 'recibos.index')
                        <div style="background-color:red; height:3px; border-radius:10px;">
                            <br>
                        </div>
                    @endif
                </x-responsive-nav-link>
                @if (Auth::user()->role == 'Jefe' || Auth::user()->role == 'Cliente')
                    <x-responsive-nav-link :href="route('curriculum.index')">
                        <p>{{ __('Currículum') }}</p>
                        @if (Route::current()->getName() == 'curriculum.index')
                            <div style="background-color:red; height:3px; border-radius:10px;">
                                <br>
                            </div>
                        @endif
                    </x-responsive-nav-link>
                @endif

            </div>
        </div>

        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('whoarewe')">
                    <p>{{ __('¿Quiénes somos?') }}</p>
                    @if (Route::current()->getName() == 'whoarewe')
                        <div style="background-color:red; height:3px; border-radius:10px;">
                            <br>
                        </div>
                    @endif
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('faq')">
                    <p>{{ __('Preguntas frecuentes') }}</p>
                    @if (Route::current()->getName() == 'faq')
                        <div style="background-color:red; height:3px; border-radius:10px;">
                            <br>
                        </div>
                    @endif
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('contact')">
                    <p>{{ __('Contáctanos') }}</p>
                    @if (Route::current()->getName() == 'contact')
                        <div style="background-color:red; height:3px; border-radius:10px;">
                            <br>
                        </div>
                    @endif
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('privacy')">
                    <p>{{ __('Política de privacidad') }}</p>
                    @if (Route::current()->getName() == 'privacy')
                        <div style="background-color:red; height:3px; border-radius:10px;">
                            <br>
                        </div>
                    @endif
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('premios')">
                    <p>{{ __('Premios') }}</p>
                    @if (Route::current()->getName() == 'premios')
                        <div style="background-color:red; height:3px; border-radius:10px;">
                            <br>
                        </div>
                    @endif
                </x-responsive-nav-link>
            </div>
        </div>

        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    <p>{{ __('Tu cuenta') }}</p>
                    @if (Route::current()->getName() == 'profile.edit')
                        <div style="background-color:red; height:3px; border-radius:10px;">
                            <br>
                        </div>
                    @endif
                </x-responsive-nav-link>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                        {{ __('Cerrar sesión') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>

        <div class="pt-4 pb-1 border-t border-gray-200" style="margin-bottom:20px;">
            <div class="mt-3 space-y-1">
                <div style="display:flex; justify-content:center; gap:30px;">
                    <a href="https://twitter.com/BRENDAPIZZA" target="__blank"><img
                            src="{{ asset('img/twit.png') }}" width="30px" height="30px" style="filter: brightness(0%);"></a>
                    <a href="https://www.instagram.com/pizzeriabrenda/?hl=es" target="__blank"><img
                            src="{{ asset('img/inst.png') }}" width="30px" height="30px" style="filter: brightness(0%);"></a>
                    <a href="https://www.tiktok.com/@pizzeriabrenda1986?lang=es" target="__blank"><img
                            src="{{ asset('img/tik.png') }}" width="30px" height="30px" style="filter: brightness(0%);"></a>
                    <a href="https://www.facebook.com/pizzeriabrenda/?locale=es_ES" target="__blank"><img
                            src="{{ asset('img/face.png') }}" width="30px" height="30px" style="filter: brightness(0%);"></a>
                </div>
            </div>
        </div>
    </div>
</nav>
