@if (Auth::user()->admin)
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('EDITAR INGREDIENTE') }}
        </h2>
        <div>
            {{-- @include('partials/language_switcher') --}}
        </div>
    </x-slot>
    <br>
    <div style="text-align:center;">
        <a href="{{ route('crearpizza') }}"
        class="bg-blue-500 text-white px-4 py-2 rounded-md">{{__('VOLVER')}}</a>
    </div>
    <br>
    <div class="container px-12 py-8 mx-auto bg-white">
        <form action="{{ route('crearpizza.actualizar', $ingrediente) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @error('name')
                <span class="text-danger" style="color:red;">{{__($message)}}</span>
                <br>
            @enderror
            <label for="name">{{__('Nombre')}}</label>
            <br>
            <input type="text" id="name" name="name" size="80" value="{{ $ingrediente->name }}">
            <br><br>
            @error('price')
                <span class="text-danger" style="color:red;">{{__($message)}}</span>
                <br>
            @enderror
            <label for="price">{{__('Precio')}}</label>
            <br>
            <input type="number" id="price" name="price" step=".01" value="{{ $ingrediente->price }}"> €
            <br><br>
            <label for="type">{{__('Tipo')}}</label>
            <br>
            <select id="type" name="type">
                <option value="Base">Base</option>
                <option value="Ingrediente">{{__('Ingrediente')}}</option>
            </select>
            <br>
            <strong>{{__('Tipo actual:')}}</strong>&nbsp;{{ $ingrediente->type }}
            <br><br>
            <label for="image_ingredient">{{__('Imagen')}}</label>
            <br>
            @error('image_ingredient')
                <span class="text-danger" style="color:red;">{{__($message)}}</span>
                <br>
            @enderror
            <input type="file" name="image_ingredient" id="image_ingredient">
            <br><br>
            <input type="checkbox" id="gluten" name="gluten" value="Contiene gluten">
            <label for="gluten">{{__('Contiene gluten')}}</label><br>
            <input type="checkbox" id="crustaceos" name="crustaceos" value="Crustáceos">
            <label for="crustaceos">{{__('Crustáceos')}}</label><br>
            <input type="checkbox" id="huevos" name="huevos" value="Huevos">
            <label for="huevos">{{__('Huevos')}}</label><br>
            <input type="checkbox" id="pescado" name="pescado" value="Pescado">
            <label for="pescado">{{__('Pescado')}}</label><br>
            <input type="checkbox" id="cacahuetes" name="cacahuetes" value="Cacahuetes">
            <label for="cacahuetes">{{__('Cacahuetes')}}</label><br>
            <input type="checkbox" id="soja" name="soja" value="Soja">
            <label for="soja">{{__('Soja')}}</label><br>
            <input type="checkbox" id="lacteos" name="lacteos" value="Lácteos">
            <label for="lacteos">{{__('Lácteos')}}</label><br>
            <input type="checkbox" id="cascaro" name="cascaro" value="Frutos de cáscara">
            <label for="cascaro">{{__('Frutos de cáscara')}}</label><br>
            <input type="checkbox" id="apio" name="apio" value="Apio">
            <label for="apio">{{__('Apio')}}</label><br>
            <input type="checkbox" id="mostaza" name="mostaza" value="Mostaza">
            <label for="mostaza">{{__('Mostaza')}}</label><br>
            <input type="checkbox" id="sesamo" name="sesamo" value="Granos de sésamo">
            <label for="sesamo">{{__('Granos de sésamo')}}</label><br>
            <input type="checkbox" id="dioxido" name="dioxido" value="Dióxido de azufre y sulfitos">
            <label for="dioxido">{{__('Dióxido de azufre y sulfitos')}}</label><br>
            <input type="checkbox" id="altramuces" name="altramuces" value="Altramuces">
            <label for="altramuces">{{__('Altramuces')}}</label><br>
            <input type="checkbox" id="moluscos" name="moluscos" value="Moluscos">
            <label for="moluscos">{{__('Moluscos')}}</label>
            <br><br><br><br>
            <div class="text-center">
                <button type="submit"
                    class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500">{{__('ACTUALIZAR')}}</button>
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
