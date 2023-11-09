<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<link rel="stylesheet" href="/css/welcome.css" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pizzería Brenda</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

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

        #logo1 {
            transition: width 0.15s, height 0.15s;
            animation-name: logo1;
            animation-duration: 1s;
        }

        @keyframes logo1 {
            from {
                font-size: 0px;
            }

            to {
                font-size: 70px;
            }
        }

        #logo2 {
            transition: width 0.15s, height 0.15s;
            animation-name: logo2;
            animation-duration: 1s;
        }

        @keyframes logo2 {
            from {
                font-size: 0px;
            }

            to {
                font-size: 50px;
            }
        }

        #iniciar1 {
            transition: width 0.15s, height 0.15s;
            animation-name: iniciar1;
            animation-duration: 1s;
        }

        /*
        @keyframes iniciar1 {
            from {
                font-size: 0px;
            }

            to {
                font-size: 15px;
            }
        }

        #iniciar2 {
            transition: width 0.15s, height 0.15s;
            animation-name: iniciar2;
            animation-duration: 1s;
        }

        @keyframes iniciar2 {
            from {
                font-size: 0px;
            }

            to {
                font-size: 15px;
            }
        }
        */

        #producto {
            transition: width 0.15s, height 0.15s;
        }

        #producto:hover {
            width: 80px;
            height: 80px;
        }

        #bottom {
            transition: width 0.15s;
        }

        #bottom:hover {
            width: 200px;
        }

        /* The navigation bar */
        .navbar {
            overflow: hidden;
            background-color: red;
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
            background: lightcoral;
            color: black;
        }

        #boton:hover {
            filter: brightness(75%);
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: red;
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
            background: lightcoral;
            color: black;
        }
    </style>
    <link rel="stylesheet" href="/css/index.css" />
</head>

<body class="antialiased">
    <div class="navbar">
        <div style="position: relative; top: 15px;">
            @include('partials/language_switcher')
        </div>
        <a href="/"><img src="{{ asset('img/logo_green_sm.png') }}" alt="logo_header"
                style="width:57px; height:50px;"></a>
        <a class="anavbar" href="whoareweAnon" style="position: relative; top: 15px;">{{ __('¿Quiénes somos?') }}</a>
        <a class="anavbar" href="faqAnon" style="position: relative; top: 15px;">{{ __('Preguntas frecuentes') }}</a>
        <a class="anavbar" href="contactAnon" style="position: relative; top: 15px;">{{ __('Contáctanos') }}</a>
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right" id="login" style="display: flex; top: -14px;">
                @auth
                    <a href="{{ url('/products') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                        style="color:black; font-size:15px; background-color:white; padding:15px; border-radius:15px;"
                        id="boton">{{ __('Iniciar pedido') }}</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                        style="color:black; font-size:15px; background-color:white; padding:15px; border-radius:15px;"
                        id="boton">{{ __('Iniciar sesión') }}</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                            style="color:black; font-size:15px; background-color:white; padding:15px; border-radius:15px;"
                            id="boton">{{ __('Registrarse') }}</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
    <br><br><br><br><br>
    <h1 style="text-align:center; font-size:70px; font-family: Copperplate, 'Copperplate Gothic Light', fantasy; color:red; text-shadow: 2px 2px 4px #000000;"
        id="logo1">
        {{ __('PIZZERÍA ARTESANAL Y NATURAL') }}</h1>
    <br>
    <div class="mx-auto" style="background-color:#4a4895;">
        <video width="859" height="464" autoplay loop>
            <source src="{{ 'vid/pizza.webm' }}" type="video/webm">
            Tu navegador no es compatible con este vídeo.
        </video>
    </div>
    <br>
    <h1 style="text-align:center; font-size:50px; font-family: Copperplate, 'Copperplate Gothic Light', fantasy; color:red; text-shadow: 2px 2px 4px #000000;"
        id="logo2">
        {{ __('¿QUÉ PEDIMOS?') }}</h1>
    <br>
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
        style="display:flex; flex-wrap:wrap; align-items:center; text-align:center;">
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a
                href="pizzasAnon"><img src="{{ asset('img/pizzaicon.png') }}" width="70px" height="70px"
                    style="display: block; margin-left: auto; margin-right: auto;" id="producto">PIZZAS</a></div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a
                href="burgersAnon"><img src="{{ asset('img/burgericon.png') }}" width="70px" height="70px"
                    style="display: block; margin-left: auto; margin-right: auto;"
                    id="producto">{{ __('HAMBURGUESAS') }}</a></div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a
                href="sandwichAnon"><img src="{{ asset('img/sanicon.jpg') }}" width="70px" height="70px"
                    style="display: block; margin-left: auto; margin-right: auto;"
                    id="producto">{{ __('SÁNDWICHES') }}</a></div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a
                href="pastasAnon"><img src="{{ asset('img/pastaicon.png') }}" width="70px" height="70px"
                    style="display: block; margin-left: auto; margin-right: auto;" id="producto">PASTA</a></div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a
                href="arrocesAnon"><img src="{{ asset('img/riceicon.png') }}" width="70px" height="70px"
                    style="display: block; margin-left: auto; margin-right: auto;"
                    id="producto">{{ __('ARROCES') }}</a></div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a
                href="baguettesAnon"><img src="{{ asset('img/bagicon.png') }}" width="70px" height="70px"
                    style="display: block; margin-left: auto; margin-right: auto;" id="producto">BAGUETTES</a></div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a
                href="ensaladasAnon"><img src="{{ asset('img/saladicon.png') }}" width="70px" height="70px"
                    style="display: block; margin-left: auto; margin-right: auto;"
                    id="producto">{{ __('ENSALADAS') }}</a></div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a
                href="complementosAnon"><img src="{{ asset('img/friesicon.png') }}" width="70px" height="70px"
                    style="display: block; margin-left: auto; margin-right: auto;"
                    id="producto">{{ __('COMPLEMENTOS') }}</a></div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a
                href="perritosAnon"><img src="{{ asset('img/dogicon.png') }}" width="70px" height="70px"
                    style="display: block; margin-left: auto; margin-right: auto;"
                    id="producto">{{ __('PERRITOS') }}</a></div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a
                href="cervezasAnon"><img src="{{ asset('img/cervezaicon.png') }}" width="70px" height="70px"
                    style="display: block; margin-left: auto; margin-right: auto;"
                    id="producto">{{ __('CERVEZAS') }}</a></div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a
                href="cervezasAnon"><img src="{{ asset('img/vinoicon.png') }}" width="70px" height="70px"
                    style="display: block; margin-left: auto; margin-right: auto;"
                    id="producto">{{ __('VINOS') }}</a></div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a
                href="cervezasAnon"><img src="{{ asset('img/refrescoicon.png') }}" width="70px" height="70px"
                    style="display: block; margin-left: auto; margin-right: auto;"
                    id="producto">{{ __('REFRESCOS') }}</a></div>
    </div>
    <br><br><br>
    <h1 class="text-center"
        style="font-size:30px; background-color:red; padding:10px; color:white; font-family: Copperplate, 'Copperplate Gothic Light', fantasy; text-shadow: 2px 2px 4px #000000;">
        {{ __('CANJEA TUS PIZZACOINS') }}</h1>
    <br>
    {{--
        <div class="p-6 text-gray-900 h-screen flex items-center justify-center">
            <table style="margin-left:auto; margin-right:auto; border-collapse: separate; border-spacing: 50px 0; text-align:center;">
                <tr>
                    <td>
                        <img src="{{ asset('img/promocion1.jpg') }}" alt="promocion1" width="300px" height="20px">
                    </td>
                    <td>
                        <img src="{{ asset('img/promocion3.png') }}" alt="promocion2" width="300px" height="20px">
                    </td>
                </tr>
            </table>
        </div>
    --}}
    <div class="slideshow-container">
        @foreach ($products as $product)
            @if ($product->habilitado and $product->type == 'Promoción')
                <div class="mySlides fade">
                    <img src="{{ asset($product->image) }}" alt="..." width="350px" height="350px"
                        style="border:3px solid black; border-radius:10px;">
                    <br>
                    <div style="display:flex; justify-content:center;">
                        @if ($product->puntos)
                            <div class="-mr-2 flex items-center" style="font-size:20px;"><img
                                    src="{{ asset('img/pizzacoin.png') }}" alt="coin"> {{ $product->puntos }}
                            </div>
                        @else
                            <div class="-mr-2 flex items-center" style="font-size:20px;"><img
                                    src="{{ asset('img/pizzacoin.png') }}" alt="coin">0</div>
                    </div>
            @endif
    </div>
    </div>
    @endif
    @endforeach
    {{--
            <div class="mySlides fade">
              <img src="{{ asset('img/premio1.jpg') }}" alt="..." width="80px" height="80px">
            </div>

            <div class="mySlides fade">
              <img src="{{ asset('img/premio2.jpg') }}" alt="..." width="80px" height="80px">
            </div>

            <div class="mySlides fade">
              <img src="{{ asset('img/premio3.jpg') }}" alt="..." width="80px" height="80px">
            </div>
        --}}
    </div>
    <br>
    <div style="text-align:center">
        @foreach ($products as $product)
            @if ($product->habilitado and $product->type == 'Promoción')
                <span class="dot"></span>
            @endif
        @endforeach
    </div>
    {{--
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
            style="display:flex; flex-wrap:wrap; align-items:center; padding:10px;">
            @foreach ($products as $product)
                @if ($product->habilitado and $product->type == 'Promoción')
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <img src="{{ asset($product->image) }}" width="200px" height="200px">
                    </div>
                @endif
            @endforeach
        </div>
    --}}
    <div class="p-6 text-gray-900 h-screen flex items-center justify-center">
        <img src="{{ asset('img/pizzacoin.png') }}" alt="pizzacoin" width="100px" height="100px">
        <p style="font-weight:bolder; font-size:20px;">{{ __('¡PIZZACOINS!') }}</p>
    </div>
    <div class="p-6 text-gray-900 h-screen flex items-center justify-center">
        <p style="font-weight:bolder; font-size:20px;">{{ __('¿QUÉ SON LAS PIZZACOINS?') }}</p>
    </div>
    <div style="text-align:center;">
        <br>
        <p>{{ __('Las pizzacoins son la moneda exclusiva de la Pizzería Brenda.') }}</p>
        <p>{{ __('Puedes usar estas monedas para canjearlas por promociones especiales.') }}</p>
        <p>{{ __('Cada vez que realices un pedido de cualquier menú o producto en la página web, obtendrás Pizzacoins. Por cada céntimo que gastes, recibirás 1 Pizzacoin.') }}
        </p>
        <p>{{ __('¡Acumula esas Pizzacoins y píllate un menú gratis!') }}</p>
        <br>
        <p>{{ __('Para empezar a utilizar Pizzacoins, primero debes iniciar sesión con una cuenta en la página web.') }}
        </p>
    </div>
    <br><br>
    <h1 class="text-center"
        style="font-size:30px; padding:10px; color:white; background-color:red; font-family: Copperplate, 'Copperplate Gothic Light', fantasy; text-shadow: 2px 2px 4px #000000;">
        {{ __('NUESTRAS OFERTAS') }}</h1>
    <br>
    <div class="slideshow-container2">
        @foreach ($products as $product)
            @if ($product->habilitado and $product->type == 'Oferta')
                <div class="mySlides2 fade2 mx-auto">
                    <img src="{{ asset($product->image) }}" alt="..." width="350px" height="350px"
                        style="border:3px solid black; border-radius:10px;">
                    <br>
            @endif
    </div>
    </div>
    @endforeach
    </div>
    <br>
    <div style="text-align:center">
        @foreach ($products as $product)
            @if ($product->habilitado and $product->type == 'Oferta')
                <span class="dot2"></span>
            @endif
        @endforeach
    </div>
    {{--
        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
            style="display:flex; flex-wrap:wrap; align-items:center; padding:10px;">
            @foreach ($products as $product)
                @if ($product->habilitado and $product->type == 'Oferta')
                    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md">
                        <img src="{{ asset($product->image) }}" width="200px" height="200px">
                    </div>
                @endif
            @endforeach
        </div>
    --}}
    <br><br>
    <div style="background-color:#f78d8d;">
        <h1 class="text-center"
            style="font-size:30px; padding:10px; color:white; background-color:red; font-family: Copperplate, 'Copperplate Gothic Light', fantasy; text-shadow: 2px 2px 4px #000000;">
            {{ __('TELÉFONOS') }}</h1>
        <br>
        <p style="text-align:center; color:white; font-weight:bolder;">{{ __('Puedes hacer tu pedido por teléfono') }}
        </p>
        <div class="flex items-center justify-center"
            style="font-size:50px; gap:45px; padding:10px; color:white; font-family: Copperplate, 'Copperplate Gothic Light', fantasy; text-shadow: 2px 2px 4px #000000;">
            <p>956 37 11 15</p>
            <p>956 37 47 36</p>
            <p>627 650 605</p>
        </div>
        <br><br>
    </div>
    <h1 class="text-center"
        style="font-size:30px; padding:10px; color:white; background-color:red; font-family: Copperplate, 'Copperplate Gothic Light', fantasy; text-shadow: 2px 2px 4px #000000;">
        {{ __('HORARIO') }}</h1>
    <div class="container px-12 py-8 mx-auto bg-white" style="width: 100%; padding: 50px;">
        <div style="text-align:center;">
            <div class="flex items-center justify-center">
                <p>{{ __('De lunes a domingo:') }}</p>
                <p style="font-weight:bolder; font-size:20px;">&nbsp;20:30 - 23:30</p>
            </div>
            <br>
            <div class="flex items-center justify-center">
                <p>{{ __('Domingo por la mañana:') }}</p>
                <p style="font-weight:bolder; font-size:20px;">&nbsp;13:30 - 15:00</p>
            </div>
            <br>
        </div>
    </div>
    <h1 class="text-center"
        style="font-size:30px; padding:10px; color:white; background-color:red; font-family: Copperplate, 'Copperplate Gothic Light', fantasy; text-shadow: 2px 2px 4px #000000;">
        {{ __('VISÍTANOS') }}</h1>
    <br>
    <div style="width:600px; margin-left:auto; margin-right:auto;">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.3853338265453!2d-6.438643323699105!3d36.73732087124086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0e7509d89e347d%3A0xb24751265b25b2b1!2sPizzer%C3%ADa%20Brenda!5e0!3m2!1ses!2ses!4v1698173518792!5m2!1ses!2ses"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <br>
        <div class="flex items-center justify-center">
            <p>{{ __('Atención al cliente:') }}</p>
            <p style="font-weight:bolder; font-size:20px;">&nbsp;brendapizza@hotmail.com</p>
        </div>
    </div>
    <br><br><br><br>
    <div class="footer">
        <div style="display:flex; flex-wrap:wrap;">
            <p style="position:relative; top:5px;">{{ __('© 2023 Pizzería Brenda™. Todos los derechos reservados.') }}
            </p>
            <a class="anavbar" href="privacyAnon"
                style="position: relative; top: 8px; margin-left:auto; font-size:13px;">{{ __('Política de privacidad') }}</a>
            <a class="anavbar" href="premiosAnon"
                style="position: relative; top: 8px; margin-left:auto; font-size:13px;">{{ __('Premios') }}</a>
            <div style="margin-left:auto; display:flex;">
                <a href="https://twitter.com/BRENDAPIZZA"><img src="{{ asset('img/twit.png') }}" width="30px"
                        height="30px" style="margin-right:20px;"></a>
                <a href="https://www.instagram.com/pizzeriabrenda/?hl=es"><img src="{{ asset('img/inst.png') }}"
                        width="30px" height="30px" style="margin-right:20px;"></a>
                <a href="https://www.tiktok.com/@pizzeriabrenda1986?lang=es"><img src="{{ asset('img/tik.png') }}"
                        width="30px" height="30px" style="margin-right:20px;"></a>
                <a href="https://www.facebook.com/pizzeriabrenda/?locale=es_ES"><img
                        src="{{ asset('img/face.png') }}" width="30px" height="30px"
                        style="margin-right:20px;"></a>
            </div>
        </div>
    </div>
</body>

<script src="{{ asset('js/welcome.js') }}"></script>

</html>
