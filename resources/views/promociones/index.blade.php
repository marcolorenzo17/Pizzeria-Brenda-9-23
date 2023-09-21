<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('PROMOCIONES') }}
        </h2>
        <br><br>
        <div>
            @include('partials/language_switcher')
        </div>
    </x-slot>
    <br>
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 bg-white"
        style="flex-wrap:wrap; align-items:center; text-align:center; padding:30px;">
        @foreach ($promotions as $promotion)
            @if ($promotion->habilitado)
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="text-center">
                        @csrf
                        <input type="hidden" value="{{ $promotion->id }}" name="id">
                        <input type="hidden" value="{{ $promotion->name }}" name="name">
                        <input type="hidden" value="{{ $promotion->price }}" name="price">
                        <input type="hidden" value="{{ $promotion->puntos }}" name="puntos">
                        <input type="hidden" value="{{ $promotion->type }}" name="type">
                        <input type="hidden" value="{{ $promotion->image }}" name="image">
                        <input type="hidden" value="1" name="quantity">
                        @if (Auth::user()->puntos >= $promotion->puntos)
                            <input type="image" name="submit" src="{{ asset($promotion->image) }}" alt="submit"
                                class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
                                width="422" height="600"
                                style="border-color:black; border-style:solid; border-width:5px; border-radius:30px;">
                        @else
                            <div style="background: rgba(0, 0, 0, 0.5);">
                                <img src="{{ asset($promotion->image) }}" alt="submit"
                                    class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md" width="422"
                                    height="600"
                                    style="border-color:black; border-style:solid; border-width:5px; border-radius:30px;">
                            </div>
                        @endif
                        @if ($promotion->puntos)
                            <div class="text-center" style="font-size:20px;">{{ __('Puntos necesarios: ') }}
                                {{ $promotion->puntos }}</div>
                        @else
                            <div class="text-center" style="font-size:20px;">{{ __('Puntos necesarios: ') }} 0</div>
                        @endif
                        <br><br>
                    </div>
                </form>
            @endif
        @endforeach
    </div>

    <br><br><br><br>

    <footer
        class="fixed bottom-0 left-0 z-20 w-full p-4 border-t border-gray-300 shadow md:flex md:items-center md:justify-between md:p-6"
        style="background-color:white;">
        <span
            class="text-sm text-gray-500 sm:text-center">{{ __('© 2023 Pizzería Brenda™. Todos los derechos reservados.') }}
        </span>
        <ul class="hidden flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0 sm:flex">
            <li>
                <a href="{{ route('whoarewe') }}" class="mr-4 hover:underline md:mr-6">{{ __('¿Quiénes somos?') }}</a>
            </li>
            <li>
                <a href="{{ route('faq') }}"
                    class="mr-4 hover:underline md:mr-6">{{ __('Preguntas frecuentes') }}</a>
            </li>
            <li>
                <a href="{{ route('contact') }}" class="mr-4 hover:underline md:mr-6">{{ __('Contáctanos') }}</a>
            </li>
        </ul>
    </footer>

</x-app-layout>
