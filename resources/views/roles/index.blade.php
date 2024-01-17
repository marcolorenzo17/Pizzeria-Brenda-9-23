<x-app-layout>
    <x-slot name="header">
        <div style="margin-top:110px;">
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight"
                style="font-size:50px; color:#568c2c; letter-spacing: 3px; font-weight:lighter; font-family: 'Alfa Slab One', serif;">
                {{ __('ROLES') }}
            </h2>
        </div>
    </x-slot>
    <link rel="stylesheet" href="/css/index_products.css" />
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    @if (Auth::user()->admin)
        <br>
        <div style="margin-left:20px;">
            <a href="{{ route('roles.crear') }}" class="text-white px-4 py-2 rounded-md" id="boton"
                style="background-color:#568c2c;">{{ __('CREAR ROL') }}</a>
        </div>
        <br>
        <div style="background:white; margin-bottom:300px;">
            <table style="width:100%;">
                @foreach ($roles as $role)
                    <tr>
                        <td>
                            <div style="margin:20px; display:flex; gap:20px;">
                                <div>
                                    @if (Lang::locale() == 'es')
                                        <p>{{ $role->nombre }}</p>
                                    @else
                                        <p>{{ $role->nombreen }}</p>
                                    @endif
                                </div>
                                <table style="margin-left:auto; margin-right:0;" id="productos-grande">
                                    <tr>
                                        @if (!$role->primero)
                                            <td>
                                                <a href="{{ route('roles.editar', $role) }}"
                                                    class="text-white px-4 py-2 rounded-md" id="boton"
                                                    style="background-color:#568c2c;">{{ __('EDITAR') }}</a>
                                            </td>
                                            {{--
                                            <td>
                                                <form method="post" action="{{ route('roles.destroy', $role->id) }}"
                                                    onclick="return confirm('¿Estás seguro de que quieres eliminar este rol? Ten en cuenta que se borrarán también todos los usuarios que tengan este rol asignado.')">
                                                    @csrf
                                                    @method('delete')
                                                    <button
                                                        class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('BORRAR') }}</button>
                                                </form>
                                            </td>
                                        --}}
                                        @endif
                                    </tr>
                                </table>
                                <table style="margin-left:auto; margin-right:0;" id="productos-pequenio">
                                    @if (!$role->primero)
                                        <tr>
                                            <td style="padding:5px">
                                                <a href="{{ route('roles.editar', $role) }}"
                                                    class="text-white px-4 py-2 rounded-md" id="boton"
                                                    style="background-color:#568c2c;">{{ __('EDITAR') }}</a>
                                            </td>
                                        </tr>
                                        {{--
                                        <tr>
                                            <td style="padding:5px">
                                                <form method="post" action="{{ route('roles.destroy', $role->id) }}"
                                                    onclick="return confirm('¿Estás seguro de que quieres eliminar este rol? Ten en cuenta que borrarán también todos los usuarios que tengan este rol asignado.')">
                                                    @csrf
                                                    @method('delete')
                                                    <button
                                                        class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">{{ __('BORRAR') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    --}}
                                    @endif
                                </table>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endif

</x-app-layout>
