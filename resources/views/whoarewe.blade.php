<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('¿QUIÉNES SOMOS?') }}
        </h2>
    </x-slot>
    <br>
    <div class="container px-12 py-8 mx-auto bg-white">
        <h2 class="text-center">PIZZERÍA BRENDA: ARTESANAL Y NATURAL</h2>
        <br>
        <p>
            Pizzería Brenda es un negocio familiar que fundamos dos hermanos: Manuel y Federico Lorenzo
            Mellado en el año 1986, siendo la primera pizzería que se inauguró en Chipiona.<br><br>
            Comenzamos este negocio en un pequeño local familiar con mucha ilusión, pero también con
            mucha incertidumbre, ya que éramos muy jóvenes, y teníamos la idea de introducir en nuestro
            pueblo la pizza. Un producto totalmente novedoso y desconocido en nuestra localidad en aquellos
             años.
        </p>
        <br>
        <div>
            <img class="mx-auto" src="{{ asset('img/waw1.png') }}" alt="waw1">
        </div>
        <br>
        <p>
            Ya desde entonces, y hasta hoy, el lema de nuestro negocio siempre ha sido la innovación.
            Nuestra empresa fue la primera en ofrecer el servicio a domicilio y el autoservicio en el
             local, lo que nos proporcionó agilidad y rapidez en el servicio.<br>
            Nuestra especialidad son las pizzas totalmente artesanales, con masa de elaboración propia,
            y con ingredientes naturales de la mayor calidad. Nos preocupa mucho ofrecer a nuestros
            clientes un producto totalmente natural, artesanal y de calidad.<br><br>
            Esto es precisamente lo que más valoran nuestros clientes, y gracias a su aceptación y
            fidelidad, hemos podido ir agrandando y modernizando nuestro negocio, acorde a sus demandas.
        </p>
        <br>
        <div>
            <img class="mx-auto" src="{{ asset('img/waw2.png') }}" alt="waw2">
        </div>
        <div>
            <img class="mx-auto" src="{{ asset('img/waw3.png') }}" alt="waw3">
        </div>
        <br>
        <p>
            En nuestro local, además de la pizza, se puede degustar pasta italiana, arroces, ensalada,
            platos variados, baguettes y un servicio de burgers. Todo con la mejor relación calidad-precio
            de la zona.<br><br>
            La Pizzería Brenda está ubicada en el centro de Chipiona, y disponemos de una amplia terraza
             donde nuestros clientes pueden disfrutar de un buen ambiente y de un trato agradable por
              parte de nuestro joven y atento personal.<br>
            Nuestro equipo está compuesto por un grupo de jóvenes que aportan dinamismo, frescura
             y nuevas ideas para renovar los platos, por lo que continuamente se ofrecen novedades
              y promociones en la carta.
        </p>
        <br>
        <div>
            <img class="mx-auto" src="{{ asset('img/waw4.png') }}" alt="waw4">
        </div>
        <br>
        <p>
            También disponemos de servicio a domicilio para que puedas disfrutar de nuestros platos
             sin moverte de casa.<br><br>
            ¡Te esperamos! ¡Visítanos!
        </p>
    </div>

    <br><br><br><br>

    <footer class="fixed bottom-0 left-0 z-20 w-full p-4 bg-green-200 border-t border-gray-300 shadow md:flex md:items-center md:justify-between md:p-6">
        <span class="text-sm text-gray-500 sm:text-center">© 2023 Pizzería Brenda™. Todos los derechos reservados.
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0">
            <li>
                <a href="whoarewe" class="mr-4 hover:underline md:mr-6">¿Quiénes somos?</a>
            </li>
        </ul>
    </footer>

</x-app-layout>
