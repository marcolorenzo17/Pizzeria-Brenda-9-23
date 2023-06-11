<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('PROMOCIONES') }}
        </h2>
        <div>
            @include('partials/language_switcher')
        </div>
    </x-slot>
    <br>
    <div class="container px-12 py-8 mx-auto bg-white">
        <br>
        @foreach ($promotions as $promotion)
            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                <div class="text-center">
                    @csrf
                    <input type="hidden" value="{{ $promotion->id }}" name="id">
                    <input type="hidden" value="{{ $promotion->name }}" name="name">
                    <input type="hidden" value="{{ $promotion->price }}" name="price">
                    <input type="hidden" value="{{ $promotion->image }}"  name="image">
                    <input type="hidden" value="1" name="quantity">
                    <input type="image" name="submit" src="{{ asset($promotion->image) }}" alt="submit" class="mx-auto" width="422" height="600" style="border-color:black; border-style:solid; border-width:5px; border-radius:30px;">
                    <br><br>
                </div>
            </form>
        @endforeach
    </div>

    <br><br><br><br>

    <footer
        class="fixed bottom-0 left-0 z-20 w-full p-4 border-t border-gray-300 shadow md:flex md:items-center md:justify-between md:p-6" style="background-color:white;">
        <span class="text-sm text-gray-500 sm:text-center">{{__('© 2023 Pizzería Brenda™. Todos los derechos reservados.')}}
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0">
            <li>
                <a href="whoarewe" class="mr-4 hover:underline md:mr-6">{{__('¿Quiénes somos?')}}</a>
            </li>
            <li>
                <a href="faq" class="mr-4 hover:underline md:mr-6">{{__('Preguntas frecuentes')}}</a>
            </li>
            <li>
                <a href="contact" class="mr-4 hover:underline md:mr-6">{{__('Contáctanos')}}</a>
            </li>
        </ul>
    </footer>

</x-app-layout>
