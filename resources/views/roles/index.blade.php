<x-app-layout>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <x-slot name="header">
        <div style="margin-top:110px;">
            <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight"
                style="font-size:50px; color:#568c2c; letter-spacing: 3px; font-weight:lighter; font-family: 'Alfa Slab One', serif;">
                {{ __('ROLES') }}
            </h2>
        </div>
    </x-slot>
    <link rel="stylesheet" href="/css/curriculum.css" />
    <link rel="stylesheet" href="/css/index_products.css" />
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <br>
    <div class="container px-12 py-8 mx-auto bg-white" style="margin-bottom:300px;">
        @if (Auth::user()->role == 'Jefe')
            <div>
                @foreach ($roles as $rol)
                    @if (Lang::locale() == 'es')
                        <p>{{ $rol->nombre }}</p>
                    @else
                        <p>{{ $rol->nombreen }}</p>
                    @endif
                @endforeach
            </div>
        @endif
    </div>

</x-app-layout>
