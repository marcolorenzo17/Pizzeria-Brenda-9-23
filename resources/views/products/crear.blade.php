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
    <div style="text-align:center;">
        <a href="{{ route('products.index') }}"
        class="bg-blue-500 text-white px-4 py-2 rounded-md">{{__('VOLVER')}}</a>
    </div>
    <br>
    <div class="container px-12 py-8 mx-auto bg-white">
        <form action="{{ route('products.aniadir') }}" method="POST" enctype="multipart/form-data">
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
            <label for="image_product">{{__('Imagen')}}</label>
            <br>
            @error('image_product')
                <span class="text-danger" style="color:red;">{{__($message)}}</span>
                <br>
            @enderror
            <input type="file" name="image_product" id="image_product">
            <br><br>
            <table>
                <tr>
                    <td>
                        <img src="{{ asset('img/alergenos/single/gluten.png') }}" alt="gluten" height="50px" width="50px">
                    </td>
                    <td>
                        <input type="checkbox" id="gluten" name="gluten" value="Contiene gluten">
                        <label for="gluten">{{__('Contiene gluten')}}</label><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="{{ asset('img/alergenos/single/crustaceos.png') }}" alt="crustaceos" height="50px" width="50px">
                    </td>
                    <td>
                        <input type="checkbox" id="crustaceos" name="crustaceos" value="Crustáceos">
                        <label for="crustaceos">{{__('Crustáceos')}}</label><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="{{ asset('img/alergenos/single/huevos.png') }}" alt="huevos" height="50px" width="50px">
                    </td>
                    <td>
                        <input type="checkbox" id="huevos" name="huevos" value="Huevos">
                        <label for="huevos">{{__('Huevos')}}</label><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="{{ asset('img/alergenos/single/pescado.png') }}" alt="pescado" height="50px" width="50px">
                    </td>
                    <td>
                        <input type="checkbox" id="pescado" name="pescado" value="Pescado">
                        <label for="pescado">{{__('Pescado')}}</label><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="{{ asset('img/alergenos/single/cacahuetes.png') }}" alt="cacahuetes" height="50px" width="50px">
                    </td>
                    <td>
                        <input type="checkbox" id="cacahuetes" name="cacahuetes" value="Cacahuetes">
                        <label for="cacahuetes">{{__('Cacahuetes')}}</label><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="{{ asset('img/alergenos/single/soja.png') }}" alt="soja" height="50px" width="50px">
                    </td>
                    <td>
                        <input type="checkbox" id="soja" name="soja" value="Soja">
                        <label for="soja">{{__('Soja')}}</label><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="{{ asset('img/alergenos/single/lacteos.png') }}" alt="lacteos" height="50px" width="50px">
                    </td>
                    <td>
                        <input type="checkbox" id="lacteos" name="lacteos" value="Lácteos">
                        <label for="lacteos">{{__('Lácteos')}}</label><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="{{ asset('img/alergenos/single/cascara.png') }}" alt="cascara" height="50px" width="50px">
                    </td>
                    <td>
                        <input type="checkbox" id="cascara" name="cascara" value="Frutos de cáscara">
                        <label for="cascaro">{{__('Frutos de cáscara')}}</label><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="{{ asset('img/alergenos/single/apio.png') }}" alt="apio" height="50px" width="50px">
                    </td>
                    <td>
                        <input type="checkbox" id="apio" name="apio" value="Apio">
                        <label for="apio">{{__('Apio')}}</label><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="{{ asset('img/alergenos/single/mostaza.png') }}" alt="mostaza" height="50px" width="50px">
                    </td>
                    <td>
                        <input type="checkbox" id="mostaza" name="mostaza" value="Mostaza">
                        <label for="mostaza">{{__('Mostaza')}}</label><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="{{ asset('img/alergenos/single/sesamo.png') }}" alt="sesamo" height="50px" width="50px">
                    </td>
                    <td>
                        <input type="checkbox" id="sesamo" name="sesamo" value="Granos de sésamo">
                        <label for="sesamo">{{__('Granos de sésamo')}}</label><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="{{ asset('img/alergenos/single/dioxido.png') }}" alt="dioxido" height="50px" width="50px">
                    </td>
                    <td>
                        <input type="checkbox" id="dioxido" name="dioxido" value="Dióxido de azufre y sulfitos">
                        <label for="dioxido">{{__('Dióxido de azufre y sulfitos')}}</label><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="{{ asset('img/alergenos/single/altramuces.png') }}" alt="altramuces" height="50px" width="50px">
                    </td>
                    <td>
                        <input type="checkbox" id="altramuces" name="altramuces" value="Altramuces">
                        <label for="altramuces">{{__('Altramuces')}}</label><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="{{ asset('img/alergenos/single/moluscos.png') }}" alt="moluscos" height="50px" width="50px">
                    </td>
                    <td>
                        <input type="checkbox" id="moluscos" name="moluscos" value="Moluscos">
                        <label for="moluscos">{{__('Moluscos')}}</label>
                    </td>
                </tr>
            </table>
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
