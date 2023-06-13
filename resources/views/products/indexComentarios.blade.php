@if (Auth::user()->admin)
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('COMENTARIOS') }}
        </h2>
        <div>
            @include('partials/language_switcher')
        </div>
    </x-slot>
    <br>
    <div class="container px-12 py-8 mx-auto bg-white">
        <table class="table-auto w-full" style="border-collapse:separate; border-spacing:0 10px;">
            <tr>
                <td class="font-bold">{{__('Cliente')}}</td>
                <td class="font-bold">{{__('Comentario')}}</td>
                <td class="font-bold">{{__('Eliminar')}}</td>
            </tr>
            <tr><td></tr>
            @foreach ($comentarios as $comentario)
                <tr>
                    <td>{{ \App\Models\User::where(['id' => $comentario->idUser])->pluck('name')->first() }}</td>
                    <td>{{ $comentario->resenia }}</td>
                    <td>
                        <form method="post" action="{{ route('products.destroyComentarioAdmin', $comentario->id) }}">
                            @csrf
                            @method('delete')
                            <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">x</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
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
