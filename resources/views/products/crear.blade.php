@if (Auth::user()->admin)
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('CREAR PLATO') }}
        </h2>
        <div>
            @include('partials/language_switcher')
        </div>
    </x-slot>
    <br>
    <div class="container px-12 py-8 mx-auto bg-white">
        <form action="{{ route('products.aniadir') }}" method="POST">
            @csrf
            @error('name')
                <span class="text-danger" style="color:red;">{{__($message)}}</span>
                <br>
            @enderror
            <label for="name">{{__('Nombre')}}</label>
            <br>
            <input type="text" id="name" name="name" size="80" value="{{ old('name') }}">
            <br><br>
            @error('price')
                <span class="text-danger" style="color:red;">{{__($message)}}</span>
                <br>
            @enderror
            <label for="price">{{__('Precio')}}</label>
            <br>
            <input type="number" id="price" name="price" step=".01" value="{{ old('price') }}"> €
            <br><br>
            <label for="description">{{__('Descripción')}}</label>
            <br>
            <input type="text" id="description" name="description" size="80" value="{{ old('description') }}">
            <br><br>
            <label for="type">{{__('Tipo')}}</label>
            <br>
            <select id="type" name="type">
                <option value="Pizza">{{__('Pizza')}}</option>
                <option value="Hamburguesa">{{__('Hamburguesa')}}</option>
                <option value="Sándwich">{{__('Sándwich')}}</option>
                <option value="Pasta">{{__('Pasta')}}</option>
                <option value="Arroz">{{__('Arroz')}}</option>
                <option value="Baguette">{{__('Baguette')}}</option>
                <option value="Ensalada">{{__('Ensalada')}}</option>
                <option value="Complemento">{{__('Complemento')}}</option>
                <option value="Perrito">{{__('Perrito')}}</option>
                <option value="Cerveza">{{__('Cerveza')}}</option>
                <option value="Vino">{{__('Vino')}}</option>
                <option value="Refresco">{{__('Refresco')}}</option>
                <option value="Promoción">{{__('Promoción')}}</option>
            </select>
            <br><br>
            <label for="image">{{__('Imagen')}}</label>
            <br>
            @error('image')
                <span class="text-danger" style="color:red;">{{__($message)}}</span>
                <br>
            @enderror
            <input type="file" name="image" id="image">
            <br><br><br><br>
            <div class="text-center">
                <button type="submit"
                    class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500">{{__('AÑADIR')}}</button>
            </div>
        </form>
    </div>

    <br><br><br><br>

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

</x-app-layout>
@endif
