<x-app-layout>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('TEST') }}
        </h2>
        <br><br>
    </x-slot>
    <br>
    <div class="container px-12 py-8 mx-auto bg-white">
        <img id="anim" src="{{ asset('img/anim/Pizza1.gif') }}" alt="..."
            style="height:120px; width:120px; margin-left:auto; margin-right:auto;">
        <br>
        <div id="msg">
        </div>
        <br>
        <div id="botones1" style="margin:20px; display:flex; gap:20px;">
            <button type="button"
                onclick="showText('#msg', 'Hola, mundo. tengo sida terrible.', 0, 30, 'boton1-1', 'botones1')">Hola</button>
            <button type="button"
                onclick="showText('#msg', 'Hey guys diyou lkke onnow ntahat in thermas o fmale huma   n vbreddin ig and pokenkdmib n gbereddingn vaporeonois tehe vomostoccompatiublen not on lu y nsdid rhte y fukcingn sdo un tss bofs  dieiwhgbnjdnfkonfjkdsnfkjdsfnjgvkjdfjnl.', 0, 30, 'boton1-2', 'botones1')">fsdfsdfa</button>
        </div>
        <div id="botones2" style="margin:20px; display:none; gap:20px;">
            <button type="button"
                onclick="showText('#msg', 'pos nos vamos atras.', 0, 30, 'boton2-1', 'botones2')">atras</button>
        </div>
    </div>

    <br><br><br><br>

    <footer
        class="fixed bottom-0 left-0 z-20 w-full p-4 border-t border-gray-300 shadow md:flex md:items-center md:justify-between md:p-6"
        style="background-color:red;">
        <span class="text-sm sm:text-center"
            style="color: white;">{{ __('© 2023 Pizzería Brenda™. Todos los derechos reservados.') }}
        </span>
        <ul class="hidden flex-wrap items-center mt-3 text-sm font-medium sm:mt-0 sm:flex" style="color: white;">
            <li>
                <a href="{{ route('whoarewe') }}" class="mr-4 hover:underline md:mr-6">{{ __('¿Quiénes somos?') }}</a>
            </li>
            <li>
                <a href="{{ route('faq') }}" class="mr-4 hover:underline md:mr-6">{{ __('Preguntas frecuentes') }}</a>
            </li>
            <li>
                <a href="{{ route('contact') }}" class="mr-4 hover:underline md:mr-6">{{ __('Contáctanos') }}</a>
            </li>
            <li>
                <a href="{{ route('privacy') }}"
                    class="mr-4 hover:underline md:mr-6">{{ __('Política de privacidad') }}</a>
            </li>
        </ul>
    </footer>

    {{--
    <script src="{{ asset('js/pruebatexto.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#anim').on('click', function(event) {
                event.preventDefault();
                alert("{{__('Ey. ¿En qué puedo ayudarte?')}}");
            });
        });
    </script>
    --}}

</x-app-layout>
