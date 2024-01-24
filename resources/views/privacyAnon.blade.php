<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{__('Política de privacidad')}}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Grandstander:wght@800&display=swap"
    rel="stylesheet">

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }

        /* The navigation bar */
        .navbar {
            overflow: hidden;
            background-color: #141414;
            position: fixed;
            /* Set the navbar to fixed position */
            top: 0;
            /* Position the navbar at the top of the page */
            width: 100%;
            /* Full width */
            z-index: 1;
        }

        /* Links inside the navbar */
        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 10px;
            text-decoration: none;
            font-size: 13px;
        }

        /* Change background on mouse-over */
        .anavbar:hover {
            text-decoration: underline;
        }

        #boton:hover {
            filter: brightness(75%);
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #141414;
            color: white;
            padding: 20px;
            z-index: 1;
        }

        .afooter {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 25px 10px;
            text-decoration: none;
            font-size: 13px;
        }

        /* Change background on mouse-over */
        .afooter:hover {
            text-decoration: underline;
        }
    </style>
    <link rel="stylesheet" href="/css/index.css" />
</head>

<body class="antialiased" style="background-color:#141414; margin:20px;">
    <div style="background-color:white;">
        <div class="navbar" style="display:flex;">
            <div style="display:flex; flex:1; justify-content:center; margin-right:auto; align-items:center; gap:2vw;">
                <div id="boton_switch">
                    <a class="anavbar" href="/" style="font-size:17px; font-weight:bolder;">{{ __('Inicio') }}
                    </a>
                </div>
                <div id="boton_switch">
                    <a class="anavbar" href="cartaAnon"
                        style="font-size:17px; font-weight:bolder;">{{ __('Nuestra carta') }}
                    </a>
                </div>
            </div>
            <div style="display:flex; flex:1; justify-content:center; align-items:center;">
                <a href="/"><img src="{{ asset('img/logo.png') }}" alt="logo_header" style="width:100px;"></a>
            </div>
            @if (Route::has('login'))
                <div id="login"
                    style="display:flex; flex:1; justify-content:center; margin-left:auto; align-items:center; flex-wrap:wrap; gap:5px; margin-right:20px;">
                    <div id="boton_switch">
                        @include('partials/language_switcher')
                    </div>
                    <div>
                        @auth
                            <a href="{{ url('/products') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                                style="color:white; font-size:13px; background-color:#568c2c; padding:10px; border-radius:10px;"
                                id="boton_login">{{ __('Iniciar pedido') }}</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                                style="color:black; font-size:13px; background-color:white; padding:10px; border-radius:10px;"
                                id="boton_login">{{ __('Iniciar sesión') }}</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                                    style="color:black; font-size:13px; background-color:white; padding:10px; border-radius:10px;"
                                    id="boton_login">{{ __('Registrarse') }}</a>
                            @endif
                        @endauth
                    </div>
                    <a href="#"><img src="{{ asset('img/burger_menu.png') }}" alt="menu_hamburguesa"
                            width="40px" id="menu_hamburguesa" onclick="mostrar_hamburguesa()"
                            style="padding:5px; border-radius:10px;"></a>
                </div>
            @endif
        </div>
        {{--
        <h1 style="text-align:center; font-size:70px; font-family: 'Anton', sans-serif; color:white; text-shadow: 2px 2px 4px #000000; margin-top:200px; margin-bottom:26px; background-color:red;"
            id="logo1">
            {{ __('PIZZA ARTESANA Y NATURAL') }}
        </h1>
    --}}
        <div style="margin-top:90px;">
            <div style="background-color:#f5f0e9; color:#141414; display:none;" id="menu_responsive">
                <div style="padding:10px;">
                    @include('partials/language_switcher')
                </div>
                @if (Route::has('login'))
                    <div style="display:flex; justify-content:center; align-items:center; padding:10px; gap:25vw;">
                        @auth
                            <a href="{{ url('/products') }}"
                                style="color:white; font-size:15px; background-color:#568c2c; padding:15px; border-radius:15px; font-weight:bolder;"
                                id="boton">{{ __('Iniciar pedido') }}</a>
                        @else
                            <a href="{{ route('login') }}"
                                style="color:#141414; font-size:15px; background-color:white; padding:15px; border-radius:15px; font-weight:bolder;"
                                id="boton">{{ __('Iniciar sesión') }}</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    style="color:#141414; font-size:15px; background-color:white; padding:15px; border-radius:15px; font-weight:bolder;"
                                    id="boton">{{ __('Registrarse') }}</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <div style="background-color:#141414; height:3px; border-radius:10px;">
                    <br>
                </div>
                <a href="/">
                    <div style="padding:10px; font-weight:bolder; border-bottom:1px solid #141414;"
                        id="boton_responsive">
                        <p>{{ __('Inicio') }}</p>
                    </div>
                </a>
                <a href="cartaAnon">
                    <div style="padding:10px; font-weight:bolder; border-bottom:1px solid #141414;"
                        id="boton_responsive">
                        <p>{{ __('Nuestra carta') }}</p>
                    </div>
                </a>
                <div style="background-color:#141414; height:3px; border-radius:10px;">
                    <br>
                </div>
                <a href="whoareweAnon">
                    <div style="padding:10px; font-weight:bolder; border-bottom:1px solid #141414;"
                        id="boton_responsive">
                        <p>{{ __('¿Quiénes somos?') }}</p>
                    </div>
                </a>
                <a href="faqAnon">
                    <div style="padding:10px; font-weight:bolder; border-bottom:1px solid #141414;"
                        id="boton_responsive">
                        <p>{{ __('Preguntas frecuentes') }}</p>
                    </div>
                </a>
                <a href="contactAnon">
                    <div style="padding:10px; font-weight:bolder; border-bottom:1px solid #141414;"
                        id="boton_responsive">
                        <p>{{ __('Contáctanos') }}</p>
                    </div>
                </a>
                <a href="privacyAnon">
                    <div style="padding:10px; font-weight:bolder; border-bottom:1px solid #141414;"
                        id="boton_responsive">
                        <p>{{ __('Política de privacidad') }}</p>
                        <div style="background-color:#f12d2d; height:3px; border-radius:10px;">
                            <br>
                        </div>
                    </div>
                </a>
                <a href="premiosAnon">
                    <div style="padding:10px; font-weight:bolder; border-bottom:1px solid #141414;"
                        id="boton_responsive">
                        <p>{{ __('Premios') }}</p>
                    </div>
                </a>
                <div style="background-color:#141414; height:3px; border-radius:10px;">
                    <br>
                </div>
                <div>
                    <div
                        style="padding:10px; font-weight:bolder; border-bottom:1px solid #141414; display:flex; justify-content:center; align-items:center; gap:30px;">
                        <a href="https://twitter.com/BRENDAPIZZA" target="__blank"><img
                                src="{{ asset('img/twit.png') }}" width="30px" height="30px"
                                style="filter: brightness(0%);"></a>
                        <a href="https://www.instagram.com/pizzeriabrenda/?hl=es" target="__blank"><img
                                src="{{ asset('img/inst.png') }}" width="30px" height="30px"
                                style="filter: brightness(0%);"></a>
                        <a href="https://www.tiktok.com/@pizzeriabrenda1986?lang=es" target="__blank"><img
                                src="{{ asset('img/tik.png') }}" width="30px" height="30px"
                                style="filter: brightness(0%);"></a>
                        <a href="https://www.facebook.com/pizzeriabrenda/?locale=es_ES" target="__blank"><img
                                src="{{ asset('img/face.png') }}" width="30px" height="30px"
                                style="filter: brightness(0%);"></a>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin:30px; margin-bottom:300px; font-size:20px;">
            <div style="padding-top:30px;">
                <h2 class="text-center" style="font-size:30px; font-family: 'Alfa Slab One'">{{ __('POLÍTICA DE PRIVACIDAD') }}</h2>
            </div>
            <p style="text-align:center; padding-top:60px;">AVISO LEGAL Y CONDICIONES GENERALES DE USO</p>
            <p style="text-align:center;">www.pizzeriabrenda.com</p>
            <br><br><br>
            I. INFORMACIÓN GENERAL
            <br><br><br>
            En cumplimiento con el deber de información dispuesto en la Ley 34/2002 de Servicios de la Sociedad de
            la Información y el Comercio Electrónico (LSSI-CE) de 11 de julio, se facilitan a continuación los
            siguientes
            datos de información general de este sitio web:
            <br>
            La titularidad de este sitio web, www.pizzeriabrenda.com, (en adelante, Sitio Web) la ostenta: Manuel
            Lorenzo
            Mellado, con NIF: 12345678F, y cuyos datos de contacto son:
            <br>
            Dirección: direcciondeste7
            <br>
            Teléfono de contacto: 999888777
            <br>
            Email de contacto: pizzabrenda@medaigual.com
            <br><br><br>
            II. TÉRMINOS Y CONDICIONES GENERALES DE USO
            <br><br><br>
            El objeto de las condiciones: El Sitio Web
            <br><br>
            El objeto de las presentes Condiciones Generales de Uso (en adelante, Condiciones) es regular el acceso y
            la utilización del Sitio Web. A los efectos de las presentes Condiciones se entenderá como Sitio Web: la
            apariencia externa de los interfaces de pantalla, tanto de forma estática como de forma dinámica, es
            decir, el árbol de navegación; y todos los elementos integrados tanto en los interfaces de pantalla como en
            el árbol de navegación (en adelante, Contenidos) y todos aquellos servicios o recursos en línea que en su
            caso ofrezca a los Usuarios (en adelante, Servicios).
            <br>
            Pizzería Brenda se reserva la facultad de modificar, en cualquier momento, y sin aviso previo, la
            presentación y configuración del Sitio Web y de los Contenidos y Servicios que en él pudieran estar
            incorporados. El Usuario reconoce y acepta que en cualquier momento Pizzería Brenda pueda interrumpir,
            desactivar y/o cancelar cualquiera de estos elementos que se integran en el Sitio Web o el acceso a los
            mismos.
            <br>
            El acceso al Sitio Web por el Usuario tiene carácter libre y, por regla general, es gratuito sin que el
            Usuario
            tenga que proporcionar una contraprestación para poder disfrutar de ello, salvo en lo relativo al coste de
            conexión a través de la red de telecomunicaciones suministrada por el proveedor de acceso que hubiere
            contratado el Usuario.
            <br>
            La utilización de alguno de los Contenidos o Servicios del Sitio Web podrá hacerse mediante la suscripción
            o registro previo del Usuario.
            <br><br>
            El Usuario
            <br><br>
            El acceso, la navegación y uso del Sitio Web, así como por los espacios habilitados para interactuar entre
            los Usuarios, y el Usuario y Pizzería Brenda, como los comentarios y/o espacios de blogging, confiere la
            condición de Usuario, por lo que se aceptan, desde que se inicia la navegación por el Sitio Web, todas las
            Condiciones aquí establecidas, así como sus ulteriores modificaciones, sin perjuicio de la aplicación de la
            correspondiente normativa legal de obligado cumplimiento según el caso. Dada la relevancia de lo
            anterior, se recomienda al Usuario leerlas cada vez que visite el Sitio Web.
            <br>
            El Sitio Web de Pizzería Brenda proporciona gran diversidad de información, servicios y datos. El Usuario
            asume su responsabilidad para realizar un uso correcto del Sitio Web. Esta responsabilidad se extenderá a:
            Un uso de la información, Contenidos y/o Servicios y datos ofrecidos por Pizzería Brenda sin que sea
            contrario a lo dispuesto por las presentes Condiciones, la Ley, la moral o el orden público, o que de
            cualquier otro modo puedan suponer lesión de los derechos de terceros o del mismo funcionamiento
            del Sitio Web.
            <br>
            La veracidad y licitud de las informaciones aportadas por el Usuario en los formularios extendidos
            por Pizzería Brenda para el acceso a ciertos Contenidos o Servicios ofrecidos por el Sitio Web. En
            todo caso, el Usuario notificará de forma inmediata a Pizzería Brenda acerca de cualquier hecho que
            permita el uso indebido de la información registrada en dichos formularios, tales como, pero no solo,
            el robo, extravío, o el acceso no autorizado a identificadores y/o contraseñas, con el fin de proceder
            a su inmediata cancelación.
            <br>
            Pizzería Brenda se reserva el derecho de retirar todos aquellos comentarios y aportaciones que vulneren la
            ley, el respeto a la dignidad de la persona, que sean discriminatorios, xenófobos, racistas, pornográficos,
            spamming, que atenten contra la juventud o la infancia, el orden o la seguridad pública o que, a su juicio,
            no resultaran adecuados para su publicación.
            <br>
            En cualquier caso, Pizzería Brenda no será responsable de las opiniones vertidas por los Usuarios a través
            de comentarios u otras herramientas de blogging o de participación que pueda haber.
            <br>
            El mero acceso a este Sitio Web no supone entablar ningún tipo de relación de carácter comercial entre
            Pizzería Brenda y el Usuario.
            <br>
            Siempre en el respeto de la legislación vigente, este Sitio Web de Pizzería Brenda se dirige a todas las
            personas, sin importar su edad, que puedan acceder y/o navegar por las páginas del Sitio Web.
            <br>
            El Sitio Web está dirigido principalmente a Usuarios residentes en España. Pizzería Brenda no asegura que
            el Sitio Web cumpla con legislaciones de otros países, ya sea total o parcialmente. Si el Usuario reside o
            tiene su domiciliado en otro lugar y decide acceder y/o navegar en el Sitio Web lo hará bajo su propia
            responsabilidad, deberá asegurarse de que tal acceso y navegación cumple con la legislación local que le
            es aplicable, no asumiendo Pizzería Brenda responsabilidad alguna que se pueda derivar de dicho acceso.
            <br><br><br>
            III. ACCESO Y NAVEGACIÓN EN EL SITIO WEB: EXCLUSIÓN DE GARANTÍAS Y RESPONSABILIDAD
            <br><br><br>
            Pizzería Brenda no garantiza la continuidad, disponibilidad y utilidad del Sitio Web, ni de los Contenidos o
            Servicios. Pizzería Brenda hará todo lo posible por el buen funcionamiento del Sitio Web, sin embargo, no
            se responsabiliza ni garantiza que el acceso a este Sitio Web no vaya a ser ininterrumpido o que esté libre
            de error.
            <br>
            Tampoco se responsabiliza o garantiza que el contenido o software al que pueda accederse a través de
            este Sitio Web, esté libre de error o cause un daño al sistema informático (software y hardware) del
            Usuario. En ningún caso Pizzería Brenda será responsable por las pérdidas, daños o perjuicios de cualquier
            tipo que surjan por el acceso, navegación y el uso del Sitio Web, incluyéndose, pero no limitándose, a los
            ocasionados a los sistemas informáticos o los provocados por la introducción de virus.
            <br>
            Pizzería Brenda tampoco se hace responsable de los daños que pudiesen ocasionarse a los usuarios por un
            uso inadecuado de este Sitio Web. En particular, no se hace responsable en modo alguno de las caídas,
            interrupciones, falta o defecto de las telecomunicaciones que pudieran ocurrir.
            <br><br><br>
            IV. POLÍTICA DE ENLACES
            <br><br><br>
            Se informa que el Sitio Web de Pizzería Brenda pone o puede poner a disposición de los Usuarios medios
            de enlace (como, entre otros, links, banners, botones), directorios y motores de búsqueda que permiten a
            los Usuarios acceder a sitios web pertenecientes y/o gestionados por terceros.
            <br>
            La instalación de estos enlaces, directorios y motores de búsqueda en el Sitio Web tiene por objeto
            facilitar
            a los Usuarios la búsqueda de y acceso a la información disponible en Internet, sin que pueda considerarse
            una sugerencia, recomendación o invitación para la visita de los mismos.
            <br>
            Pizzería Brenda no ofrece ni comercializa por sí ni por medio de terceros los productos y/o servicios
            disponibles en dichos sitios enlazados.
            <br>
            Asimismo, tampoco garantizará la disponibilidad técnica, exactitud, veracidad, validez o legalidad de sitios
            ajenos a su propiedad a los que se pueda acceder por medio de los enlaces.
            <br>
            Pizzería Brenda en ningún caso revisará o controlará el contenido de otros sitios web, así como tampoco
            aprueba, examina ni hace propios los productos y servicios, contenidos, archivos y cualquier otro material
            existente en los referidos sitios enlazados.
            <br>
            Pizzería Brenda no asume ninguna responsabilidad por los daños y perjuicios que pudieran producirse por
            el acceso, uso, calidad o licitud de los contenidos, comunicaciones, opiniones, productos y servicios de los
            sitios web no gestionados por Pizzería Brenda y que sean enlazados en este Sitio Web.
            <br>
            El Usuario o tercero que realice un hipervínculo desde una página web de otro, distinto, sitio web al Sitio
            Web de Pizzería Brenda deberá saber que:
            <br>
            No se permite la reproducción —total o parcialmente— de ninguno de los Contenidos y/o Servicios del Sitio
            Web sin autorización expresa de Pizzería Brenda.
            <br>
            No se permite tampoco ninguna manifestación falsa, inexacta o incorrecta sobre el Sitio Web de Pizzería
            Brenda, ni sobre los Contenidos y/o Servicios del mismo.
            <br>
            A excepción del hipervínculo, el sitio web en el que se establezca dicho hiperenlace no contendrá ningún
            elemento, de este Sitio Web, protegido como propiedad intelectual por el ordenamiento jurídico español,
            salvo autorización expresa de Pizzería Brenda.
            <br>
            El establecimiento del hipervínculo no implicará la existencia de relaciones entre Pizzería Brenda y el
            titular del sitio web desde el cual se realice, ni el conocimiento y aceptación de Pizzería Brenda de los
            contenidos, servicios y/o actividades ofrecidas en dicho sitio web, y viceversa.
            <br><br><br>
            V. PROPIEDAD INTELECTUAL E INDUSTRIAL
            <br><br><br>
            Pizzería Brenda por sí o como parte cesionaria, es titular de todos los derechos de propiedad intelectual e
            industrial del Sitio Web, así como de los elementos contenidos en el mismo (a título enunciativo y no
            exhaustivo, imágenes, sonido, audio, vídeo, software o textos, marcas o logotipos, combinaciones de
            colores, estructura y diseño, selección de materiales usados, programas de ordenador necesarios para su
            funcionamiento, acceso y uso, etc.). Serán, por consiguiente, obras protegidas como propiedad intelectual
            por el ordenamiento jurídico español, siéndoles aplicables tanto la normativa española y comunitaria en
            este campo, como los tratados internacionales relativos a la materia y suscritos por España.
            <br>
            Todos los derechos reservados. En virtud de lo dispuesto en la Ley de Propiedad Intelectual, quedan
            expresamente prohibidas la reproducción, la distribución y la comunicación pública, incluida su modalidad
            de puesta a disposición, de la totalidad o parte de los contenidos de esta página web, con fines
            comerciales, en cualquier soporte y por cualquier medio técnico, sin la autorización de Pizzería Brenda.
            <br>
            El Usuario se compromete a respetar los derechos de propiedad intelectual e industrial de Pizzería Brenda.
            Podrá visualizar los elementos del Sitio Web o incluso imprimirlos, copiarlos y almacenarlos en el disco
            duro de su ordenador o en cualquier otro soporte físico siempre y cuando sea, exclusivamente, para su uso
            personal. El Usuario, sin embargo, no podrá suprimir, alterar, o manipular cualquier dispositivo de
            protección o sistema de seguridad que estuviera instalado en el Sitio Web.
            <br>
            En caso de que el Usuario o tercero considere que cualquiera de los Contenidos del Sitio Web suponga una
            violación de los derechos de protección de la propiedad intelectual, deberá comunicarlo inmediatamente a
            Pizzería Brenda a través de los datos de contacto del apartado de INFORMACIÓN GENERAL de este Aviso
            Legal y Condiciones Generales de Uso.
            <br><br><br>
            VI. ACCIONES LEGALES, LEGISLACIÓN APLICABLE Y JURISDICCIÓN
            <br><br><br>
            Pizzería Brenda se reserva la facultad de presentar las acciones civiles o penales que considere necesarias
            por la utilización indebida del Sitio Web y Contenidos, o por el incumplimiento de las presentes
            Condiciones.
            <br>
            La relación entre el Usuario y Pizzería Brenda se regirá por la normativa vigente y de aplicación en el
            territorio español. De surgir cualquier controversia en relación con la interpretación y/o a la aplicación
            de
            estas Condiciones las partes someterán sus conflictos a la jurisdicción ordinaria sometiéndose a los jueces
            y tribunales que correspondan conforme a derecho.
            <br>
            Este documento de Aviso Legal y Condiciones Generales de uso del sitio web ha sido creado mediante el
            generador de plantilla de aviso legal y condiciones de uso online el día 28/10/2023.
        </div>
        <div class="footer">
            <div style="text-align:center; font-size:13px;">
                <p>{{ __('© 2023 Pizzería Brenda™. Todos los derechos reservados.') }}</p>
            </div>
            <div style="display:flex; flex-wrap:wrap; justify-content:center; align-items:center;">
                <div style="display:flex; gap: 5px; align-items:center;">
                    <p style="font-size:18px; color:#568c2c; font-weight:bolder; text-transform:uppercase;">
                        {{ __('Teléfonos: ') }}
                    </p>
                    <div style="font-size:18px; font-weight:bolder;">
                        <p>956 37 11 15 | 956 37 47 36 | 627 650 605</p>
                    </div>
                </div>
                <div style="margin-left:auto; display:flex; gap:30px; text-align:center;">
                    <a class="anavbar" href="{{ route('whoareweAnon') }}"
                        style="font-size:12px;">{{ __('¿Quiénes somos?') }}</a>
                    <a class="anavbar" href="{{ route('faqAnon') }}"
                        style="font-size:12px;">{{ __('Preguntas frecuentes') }}</a>
                    <a class="anavbar" href="{{ route('contactAnon') }}"
                        style="font-size:12px;">{{ __('Contáctanos') }}</a>
                    <div>
                        <a class="anavbar" href="{{ route('privacyAnon') }}"
                            style="font-size:12px;">{{ __('Política de privacidad') }}</a>
                        <div style="background-color:#f12d2d; height:3px; border-radius:10px;">
                            <br>
                        </div>
                    </div>
                    <a class="anavbar" href="{{ route('premiosAnon') }}"
                        style="font-size:12px;">{{ __('Premios') }}</a>
                </div>
                <div style="margin-left:auto; display:flex;">
                    <a href="https://twitter.com/BRENDAPIZZA" target="__blank"><img
                            src="{{ asset('img/twit.png') }}" width="25px" height="25px"
                            style="margin-right:20px;" class="redes_sociales"></a>
                    <a href="https://www.instagram.com/pizzeriabrenda/?hl=es" target="__blank"><img
                            src="{{ asset('img/inst.png') }}" width="25px" height="25px"
                            style="margin-right:20px;" class="redes_sociales"></a>
                    <a href="https://www.tiktok.com/@pizzeriabrenda1986?lang=es" target="__blank"><img
                            src="{{ asset('img/tik.png') }}" width="25px" height="25px"
                            style="margin-right:20px;" class="redes_sociales"></a>
                    <a href="https://www.facebook.com/pizzeriabrenda/?locale=es_ES" target="__blank"><img
                            src="{{ asset('img/face.png') }}" width="25px" height="25px"
                            style="margin-right:20px;" class="redes_sociales"></a>
                </div>
                <div style="display:flex; gap: 5px; margin-left:auto; align-items:center;">
                    <p style="font-size:18px; color:#568c2c; font-weight:bolder; text-transform:uppercase;">
                        {{ __('Horario: ') }}
                    </p>
                    <div style="font-size:18px; font-weight:bolder;">
                        <p>{{ __('De lunes a domingo: 20:30 - 23:30') }}</p>
                        <p>{{ __('Domingo por la mañana: 13:30 - 15:00') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: #141414;
                color: white;
                padding: 20px;
                z-index: 1;
            }

            .anavbar:hover {
                text-decoration: underline;
            }

            #boton_login:hover {
                filter: brightness(75%);
            }

            #menu_hamburguesa:hover {
                cursor: pointer;
                background-color: white;
            }

            #boton_responsive:hover {
                background-color: white;
            }

            @media only screen and (max-width: 639px) {
                .anavbar {
                    display: none;
                }

                .redes_sociales {
                    display: none;
                }

                #boton_login {
                    display: none;
                }

                #boton_switch {
                    display: none;
                }
            }

            @media only screen and (min-width: 640px) {
                #menu_hamburguesa {
                    display: none;
                }
            }
        </style>

        <script>
            var menu_responsive = document.getElementById("menu_responsive");
            var menu_hamburguesa = document.getElementById("menu_hamburguesa");

            var mostrar_hamburguesa = function() {
                menu_responsive.style.display = "block";
                menu_hamburguesa.setAttribute("src", "{{ asset('img/burger_menu_x.png') }}");
                menu_hamburguesa.setAttribute("onclick", "ocultar_hamburguesa()");
            };

            var ocultar_hamburguesa = function() {
                menu_responsive.style.display = "none";
                menu_hamburguesa.setAttribute("src", "{{ asset('img/burger_menu.png') }}");
                menu_hamburguesa.setAttribute("onclick", "mostrar_hamburguesa()");
            };
        </script>
    </div>
</body>

</html>
