<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('CURRÍCULUM') }}
        </h2>
        <br><br>
        <div>
            @include('partials/language_switcher')
        </div>
    </x-slot>
    <link rel="stylesheet" href="/css/curriculum.css" />
    <br>
    <div class="container px-12 py-8 mx-auto bg-white">
        @if (Auth::user()->role == 'Jefe')
            <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 bg-white" style="flex-wrap:wrap; align-items:center; text-align:center; padding:30px;">
                @foreach ($curriculums as $curriculum)
                <div>
                    <div class="text-center">
                        <p>
                            {{ \App\Models\User::where(['id' => $curriculum->idUser])->pluck('name')->first() }}
                        </p>
                        <p>
                            {{ \App\Models\User::where(['id' => $curriculum->idUser])->pluck('email')->first() }}
                        </p>
                    </div>
                    <br>
                    <div class="text-center">
                        <a href="{{ asset('storage/' . $curriculum->curriculum) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">{{__('Ver currículum')}}</a>
                    </div>
                </div>
                <br><br>
                @endforeach
            </div>
        @else
            <div class="mx-auto text-center">
                <p>{{__('¿Quieres trabajar con nosotros?')}}<br>{{__('Envíanos ya tu currículum.')}}</p>
            </div>
            <br><br>
            <div class="mx-auto text-center">
                <form action="{{ route('curriculum.addCurriculum') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @error('curriculum')
                        <span class="text-danger" style="color:red;">{{__($message)}}</span>
                        <br>
                    @enderror
                    <input type="file" name="curriculum" id="curriculum">
                    <br><br><br>
                    <button type="submit" class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500" id="boton">{{__('Enviar currículum')}}</button>
                </form>
            </div>
        @endif
    </div>

    <br><br><br><br>

    <footer
        class="fixed bottom-0 left-0 z-20 w-full p-4 border-t border-gray-300 shadow md:flex md:items-center md:justify-between md:p-6" style="background-color:white;">
        <span class="text-sm text-gray-500 sm:text-center">{{__('© 2023 Pizzería Brenda™. Todos los derechos reservados.')}}
        </span>
        <ul class="hidden flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0 sm:flex" >
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
