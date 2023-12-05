<x-app-layout>
    <x-slot name="header">
        <br><br><br>
        <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
            {{ __('CURRÍCULUM') }}
        </h2>
        <br><br>
    </x-slot>
    <link rel="stylesheet" href="/css/curriculum.css" />
    <link rel="stylesheet" href="/css/index_product.css" />
    <br>
    <div class="container px-12 py-8 mx-auto bg-white">
        @if (Auth::user()->role == 'Jefe')
            <div style="padding:30px;">
                <div style="background-color:gray; width:100%; height:2px; border-radius:10px;"><br></div>
                <br><br>
                @foreach ($curriculums as $curriculum)
                    <div style="display:flex; align-items:center; gap:50px;">
                        @if (substr($curriculum->curriculum, -4) == '.pdf')
                            <div>
                                <a href="{{ asset('storage/' . $curriculum->curriculum) }}"
                                    class="bg-blue-500 text-white px-4 py-2 rounded-md"
                                    id="boton">{{ __('Ver currículum en PDF') }}</a>
                            </div>
                        @else
                            <div>
                                <img src="{{ asset('storage/' . $curriculum->curriculum) }}" alt="curriculum"
                                    width="200px;">
                                <br>
                                <a href="{{ asset('storage/' . $curriculum->curriculum) }}"
                                    class="bg-blue-500 text-white px-4 py-2 rounded-md"
                                    id="boton">{{ __('Ampliar imagen') }}</a>
                            </div>
                        @endif
                        <div>
                            {{--
                                @if ($curriculum->nuevo)
                                    <p></p>
                                @else
                                    <p>{{__('NUEVO')}}</p>
                                    <br>
                                @endif
                            --}}
                            <p>
                                {{ \App\Models\User::where(['id' => $curriculum->idUser])->pluck('name')->first() }}
                            </p>
                            <br>
                            <p>
                                {{ \App\Models\User::where(['id' => $curriculum->idUser])->pluck('email')->first() }}
                            </p>
                            <br>
                            <form method="post" action="{{ route('curriculum.destroy', $curriculum->id) }}">
                                @csrf
                                @method('delete')
                                <button
                                    class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('BORRAR') }}</button>
                            </form>
                        </div>
                    </div>
                    <br><br>
                    <div style="background-color:gray; width:100%; height:2px; border-radius:10px;"><br></div>
                    <br><br>
                @endforeach
            </div>
        @else
            <div class="mx-auto text-center">
                <p>{{ __('¿Quieres trabajar con nosotros?') }}<br>{{ __('Envíanos ya tu currículum.') }}</p>
            </div>
            <br>
            <div style="background-color:gray; width:100%; height:2px; border-radius:10px;"><br></div>
            <br><br>
            <div class="mx-auto text-center">
                <form action="{{ route('curriculum.addCurriculum') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @error('curriculum')
                        <span class="text-danger" style="color:red;">{{ __($message) }}</span>
                        <br>
                    @enderror
                    <input type="file" name="curriculum" id="curriculum">
                    <br><br><br>
                    <button type="submit" class="px-6 py-2 text-sm rounded shadow text-red-100 bg-blue-500"
                        id="boton">{{ __('Enviar currículum') }}</button>
                </form>
            </div>
        @endif
    </div>

    <br><br><br><br>
    <footer
        class="fixed bottom-0 left-0 z-20 w-full p-4 border-t border-gray-300 shadow md:flex md:items-center md:justify-between md:p-6"
        style="background-color:red;">
        <span class="text-sm sm:text-center"
            style="color: white; margin-right:20px;">{{ __('© 2023 Pizzería Brenda™. Todos los derechos reservados.') }}
        </span>
        <ul class="hidden flex-wrap items-center mt-3 text-sm font-medium sm:mt-0 sm:flex"
            style="color: white; justify-content:center; margin-left:auto;">
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
            <li>
                <a href="{{ route('privacy') }}"
                    class="mr-4 hover:underline md:mr-6">{{ __('Política de privacidad') }}</a>
            </li>
            <li>
                <a href="{{ route('premios') }}" class="mr-4 hover:underline md:mr-6">{{ __('Premios') }}</a>
            </li>
        </ul>
        <div style="margin-left:auto; display:flex; justify-content:center;">
            <a href="https://twitter.com/BRENDAPIZZA" target="__blank"><img src="{{ asset('img/twit.png') }}"
                    width="30px" height="30px" style="margin-right:20px;"></a>
            <a href="https://www.instagram.com/pizzeriabrenda/?hl=es" target="__blank"><img
                    src="{{ asset('img/inst.png') }}" width="30px" height="30px" style="margin-right:20px;"></a>
            <a href="https://www.tiktok.com/@pizzeriabrenda1986?lang=es" target="__blank"><img
                    src="{{ asset('img/tik.png') }}" width="30px" height="30px" style="margin-right:20px;"></a>
            <a href="https://www.facebook.com/pizzeriabrenda/?locale=es_ES" target="__blank"><img
                    src="{{ asset('img/face.png') }}" width="30px" height="30px" style="margin-right:20px;"></a>
        </div>
    </footer>

</x-app-layout>
