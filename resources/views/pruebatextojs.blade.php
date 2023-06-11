<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('TEST') }}
        </h2>
        <div>
            @include('partials/language_switcher')
        </div>
    </x-slot>
    <br>
    <div class="container px-12 py-8 mx-auto bg-white">
        <img id="anim" src="{{ asset('img/anim/Pizza1.gif') }}" alt="..." style="height:120px; width:120px; margin-left:auto; margin-right:auto;">
        <br>
        <div id="msg">
        </div>
        <br>
        <div id="botones1" style="margin:20px; display:flex; gap:20px;">
            <button type="button" onclick="showText('#msg', 'Hola, mundo. tengo sida terrible.', 0, 30, 'boton1-1', 'botones1')">Hola</button>
            <button type="button" onclick="showText('#msg', 'Hey guys diyou lkke onnow ntahat in thermas o fmale huma   n vbreddin ig and pokenkdmib n gbereddingn vaporeonois tehe vomostoccompatiublen not on lu y nsdid rhte y fukcingn sdo un tss bofs  dieiwhgbnjdnfkonfjkdsnfkjdsfnjgvkjdfjnl.', 0, 30, 'boton1-2', 'botones1')">fsdfsdfa</button>
        </div>
        <div id="botones2" style="margin:20px; display:none; gap:20px;">
            <button type="button" onclick="showText('#msg', 'pos nos vamos atras.', 0, 30, 'boton2-1', 'botones2')">atras</button>
        </div>
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

    <script src="{{ asset('js/pruebatexto.js') }}"></script>

</x-app-layout>
