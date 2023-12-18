<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<link rel="stylesheet" href="/css/cartaAnon.css" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pizzería Brenda - Carta</title>

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
            text-decoration: underline;
        }
    </style>
    <link rel="stylesheet" href="/css/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</head>

<body class="antialiased" style="background-image:url('img/fondoanon2.jpg');">
    <div class="navbar">
        <div style="position: relative; top: 15px;">
            @include('partials/language_switcher')
        </div>
        <a href="/"><img src="{{ asset('img/logo_green_sm.png') }}" alt="logo_header"
                style="width:67px; height:60px;"></a>
        <a class="anavbar" href="cartaAnon" style="position: relative; top: 15px;">{{ __('Nuestra carta') }}</a>
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
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
        style="display:flex; flex-wrap:wrap; align-items:center; text-align:center; margin-top:200px;">
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a
                href="#p1"><img src="{{ asset('img/pizzaicon.png') }}" width="70px" height="70px"
                    style="display: block; margin-left: auto; margin-right: auto;" id="filtroproducto">PIZZAS</a></div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a
                href="#p2"><img src="{{ asset('img/burgericon.png') }}" width="70px" height="70px"
                    style="display: block; margin-left: auto; margin-right: auto;"
                    id="filtroproducto">{{ __('HAMBURGUESAS') }}</a></div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a
                href="#p3"><img src="{{ asset('img/sanicon.png') }}" width="70px" height="70px"
                    style="display: block; margin-left: auto; margin-right: auto;"
                    id="filtroproducto">{{ __('SÁNDWICHES') }}</a></div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a
                href="#p4"><img src="{{ asset('img/pastaicon.png') }}" width="70px" height="70px"
                    style="display: block; margin-left: auto; margin-right: auto;" id="filtroproducto">PASTA</a></div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a
                href="#p5"><img src="{{ asset('img/riceicon.png') }}" width="70px" height="70px"
                    style="display: block; margin-left: auto; margin-right: auto;"
                    id="filtroproducto">{{ __('ARROCES') }}</a></div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a
                href="#p6"><img src="{{ asset('img/bagicon.png') }}" width="70px" height="70px"
                    style="display: block; margin-left: auto; margin-right: auto;" id="filtroproducto">BAGUETTES</a>
        </div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a
                href="#p7"><img src="{{ asset('img/saladicon.png') }}" width="70px" height="70px"
                    style="display: block; margin-left: auto; margin-right: auto;"
                    id="filtroproducto">{{ __('ENSALADAS') }}</a></div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a
                href="#p8"><img src="{{ asset('img/friesicon.png') }}" width="70px" height="70px"
                    style="display: block; margin-left: auto; margin-right: auto;"
                    id="filtroproducto">{{ __('COMPLEMENTOS') }}</a></div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a
                href="#p9"><img src="{{ asset('img/dogicon.png') }}" width="70px" height="70px"
                    style="display: block; margin-left: auto; margin-right: auto;"
                    id="filtroproducto">{{ __('PERRITOS') }}</a></div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a
                href="#p10"><img src="{{ asset('img/cervezaicon.png') }}" width="70px" height="70px"
                    style="display: block; margin-left: auto; margin-right: auto;"
                    id="filtroproducto">{{ __('CERVEZAS') }}</a></div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a
                href="#p11"><img src="{{ asset('img/vinoicon.png') }}" width="70px" height="70px"
                    style="display: block; margin-left: auto; margin-right: auto;"
                    id="filtroproducto">{{ __('VINOS') }}</a></div>
        <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
            style="background: white; padding: 10px; border: black; border-style: solid; border-radius: 10px;"><a
                href="#p12"><img src="{{ asset('img/refrescoicon.png') }}" width="70px" height="70px"
                    style="display: block; margin-left: auto; margin-right: auto;"
                    id="filtroproducto">{{ __('REFRESCOS') }}</a></div>
    </div>
    <?php
    $ides = 0;
    ?>
    <p style="margin-left:40px; font-weight:bolder; font-size:30px; color:darkgreen; margin-top:52px;" id="p1">
        {{ __('PIZZAS') }}</p>
    <div
        style="background-color:red; margin-left:40px; height:5px; width:300px; border-radius:300px; margin-bottom:52px;">
        <br>
    </div>
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
        style="display:flex; flex-wrap:wrap; align-items:center;">
        @foreach ($products as $product)
            @if ($product->type == 'Pizza')
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
                    style="border-radius:30px; border: 2px solid black;">

                    <a href="#{{ $ides }}" onclick="mostrar({{ $ides }})">
                        <img src="{{ asset($product->image) }}" class="mx-auto"
                            style="height:200px; width:200px; border-radius:30px; padding:10px;" id="imgproducto">
                    </a>
                    <div class="px-5 py-3" style="padding:15px;">
                        @if (Lang::locale() == 'es')
                            <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                        @else
                            <h3 class="text-gray-700 uppercase">{{ $product->nameen }}</h3>
                        @endif
                        <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }} €</span>
                        {{--
                    <span class="mt-2 text-gray-500">{{ $product->description }}</span>
                --}}
                    </div>
                </div>
                <?php
                $ides += 1;
                ?>
            @endif
        @endforeach
    </div>
    <div
        style="border:3px solid red; margin-left:100px; margin-right:100px; padding:10px; border-radius:20px; margin-top:52px; margin-bottom:78px;">
        <p style="text-align:center; color:red; font-weight:bold; font-size:20px;">
            {{ __('¿Quieres algo más de tu estilo?') }}</p>
        <div style="display:flex; justify-content:center;">
            <p style="color:red; font-weight:bolder; font-size:25px;">{{ __('¡') }}</p>
            <a href="{{ route('login') }}"
                style="color:darkgreen; font-weight:bolder; font-size:25px; text-decoration:underline;">{{ __('Inicia sesión') }}</a>
            <p style="color:red; font-weight:bolder; font-size:25px;">
                {{ __(', y crea tu propia pizza!') }}</p>
        </div>
    </div>
    <p style="margin-left:40px; font-weight:bolder; font-size:30px; color:darkgreen;" id="p2">
        {{ __('HAMBURGUESAS') }}</p>
    <div
        style="background-color:red; margin-left:40px; height:5px; width:300px; border-radius:300px; margin-bottom:52px;">
        <br>
    </div>
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
        style="display:flex; flex-wrap:wrap; align-items:center; margin-bottom:78px;">
        @foreach ($products as $product)
            @if ($product->type == 'Hamburguesa')
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
                    style="border-radius:30px; border: 2px solid black;">

                    <a href="#{{ $ides }}" onclick="mostrar({{ $ides }})">
                        <img src="{{ asset($product->image) }}" class="mx-auto"
                            style="height:200px; width:200px; border-radius:30px; padding:10px;" id="imgproducto">
                    </a>
                    <div class="px-5 py-3" style="padding:15px;">
                        @if (Lang::locale() == 'es')
                            <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                        @else
                            <h3 class="text-gray-700 uppercase">{{ $product->nameen }}</h3>
                        @endif
                        <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }} €</span>
                        {{--
                <span class="mt-2 text-gray-500">{{ $product->description }}</span>
            --}}
                    </div>
                </div>
                <?php
                $ides += 1;
                ?>
            @endif
        @endforeach
    </div>
    <p style="margin-left:40px; font-weight:bolder; font-size:30px; color:darkgreen;" id="p3">
        {{ __('SÁNDWICHES') }}</p>
    <div
        style="background-color:red; margin-left:40px; height:5px; width:300px; border-radius:300px; margin-bottom:52px;">
        <br>
    </div>
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
        style="display:flex; flex-wrap:wrap; align-items:center; margin-bottom:78px;">
        @foreach ($products as $product)
            @if ($product->type == 'Sándwich')
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
                    style="border-radius:30px; border: 2px solid black;">

                    <a href="#{{ $ides }}" onclick="mostrar({{ $ides }})">
                        <img src="{{ asset($product->image) }}" class="mx-auto"
                            style="height:200px; width:200px; border-radius:30px; padding:10px;" id="imgproducto">
                    </a>
                    <div class="px-5 py-3" style="padding:15px;">
                        @if (Lang::locale() == 'es')
                            <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                        @else
                            <h3 class="text-gray-700 uppercase">{{ $product->nameen }}</h3>
                        @endif
                        <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }} €</span>
                        {{--
                <span class="mt-2 text-gray-500">{{ $product->description }}</span>
            --}}
                    </div>
                </div>
                <?php
                $ides += 1;
                ?>
            @endif
        @endforeach
    </div>
    <p style="margin-left:40px; font-weight:bolder; font-size:30px; color:darkgreen;" id="p4">
        {{ __('PASTA') }}</p>
    <div
        style="background-color:red; margin-left:40px; height:5px; width:300px; border-radius:300px; margin-bottom:52px;">
        <br>
    </div>
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
        style="display:flex; flex-wrap:wrap; align-items:center; margin-bottom:78px;">
        @foreach ($products as $product)
            @if ($product->type == 'Pasta')
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
                    style="border-radius:30px; border: 2px solid black;">

                    <a href="#{{ $ides }}" onclick="mostrar({{ $ides }})">
                        <img src="{{ asset($product->image) }}" class="mx-auto"
                            style="height:200px; width:200px; border-radius:30px; padding:10px;" id="imgproducto">
                    </a>
                    <div class="px-5 py-3" style="padding:15px;">
                        @if (Lang::locale() == 'es')
                            <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                        @else
                            <h3 class="text-gray-700 uppercase">{{ $product->nameen }}</h3>
                        @endif
                        <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }} €</span>
                        {{--
                <span class="mt-2 text-gray-500">{{ $product->description }}</span>
            --}}
                    </div>
                </div>
                <?php
                $ides += 1;
                ?>
            @endif
        @endforeach
    </div>
    <p style="margin-left:40px; font-weight:bolder; font-size:30px; color:darkgreen;" id="p5">
        {{ __('ARROCES') }}</p>
    <div
        style="background-color:red; margin-left:40px; height:5px; width:300px; border-radius:300px; margin-bottom:52px;">
        <br>
    </div>
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
        style="display:flex; flex-wrap:wrap; align-items:center; margin-bottom:78px;">
        @foreach ($products as $product)
            @if ($product->type == 'Arroz')
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
                    style="border-radius:30px; border: 2px solid black;">

                    <a href="#{{ $ides }}" onclick="mostrar({{ $ides }})">
                        <img src="{{ asset($product->image) }}" class="mx-auto"
                            style="height:200px; width:200px; border-radius:30px; padding:10px;" id="imgproducto">
                    </a>
                    <div class="px-5 py-3" style="padding:15px;">
                        @if (Lang::locale() == 'es')
                            <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                        @else
                            <h3 class="text-gray-700 uppercase">{{ $product->nameen }}</h3>
                        @endif
                        <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }} €</span>
                        {{--
                <span class="mt-2 text-gray-500">{{ $product->description }}</span>
            --}}
                    </div>
                </div>
                <?php
                $ides += 1;
                ?>
            @endif
        @endforeach
    </div>
    <p style="margin-left:40px; font-weight:bolder; font-size:30px; color:darkgreen;" id="p6">
        {{ __('BAGUETTES') }}</p>
    <div
        style="background-color:red; margin-left:40px; height:5px; width:300px; border-radius:300px; margin-bottom:52px;">
        <br>
    </div>
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
        style="display:flex; flex-wrap:wrap; align-items:center; margin-bottom:78px;">
        @foreach ($products as $product)
            @if ($product->type == 'Baguette')
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
                    style="border-radius:30px; border: 2px solid black;">

                    <a href="#{{ $ides }}" onclick="mostrar({{ $ides }})">
                        <img src="{{ asset($product->image) }}" class="mx-auto"
                            style="height:200px; width:200px; border-radius:30px; padding:10px;" id="imgproducto">
                    </a>
                    <div class="px-5 py-3" style="padding:15px;">
                        @if (Lang::locale() == 'es')
                            <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                        @else
                            <h3 class="text-gray-700 uppercase">{{ $product->nameen }}</h3>
                        @endif
                        <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }} €</span>
                        {{--
                <span class="mt-2 text-gray-500">{{ $product->description }}</span>
            --}}
                    </div>
                </div>
                <?php
                $ides += 1;
                ?>
            @endif
        @endforeach
    </div>
    <p style="margin-left:40px; font-weight:bolder; font-size:30px; color:darkgreen;" id="p7">
        {{ __('ENSALADAS') }}</p>
    <div
        style="background-color:red; margin-left:40px; height:5px; width:300px; border-radius:300px; margin-bottom:52px;">
        <br>
    </div>
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
        style="display:flex; flex-wrap:wrap; align-items:center; margin-bottom:78px;">
        @foreach ($products as $product)
            @if ($product->type == 'Ensalada')
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
                    style="border-radius:30px; border: 2px solid black;">

                    <a href="#{{ $ides }}" onclick="mostrar({{ $ides }})">
                        <img src="{{ asset($product->image) }}" class="mx-auto"
                            style="height:200px; width:200px; border-radius:30px; padding:10px;" id="imgproducto">
                    </a>
                    <div class="px-5 py-3" style="padding:15px;">
                        @if (Lang::locale() == 'es')
                            <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                        @else
                            <h3 class="text-gray-700 uppercase">{{ $product->nameen }}</h3>
                        @endif
                        <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }} €</span>
                        {{--
                <span class="mt-2 text-gray-500">{{ $product->description }}</span>
            --}}
                    </div>
                </div>
                <?php
                $ides += 1;
                ?>
            @endif
        @endforeach
    </div>
    <p style="margin-left:40px; font-weight:bolder; font-size:30px; color:darkgreen;" id="p8">
        {{ __('COMPLEMENTOS') }}</p>
    <div
        style="background-color:red; margin-left:40px; height:5px; width:300px; border-radius:300px; margin-bottom:52px;">
        <br>
    </div>
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
        style="display:flex; flex-wrap:wrap; align-items:center; margin-bottom:78px;">
        @foreach ($products as $product)
            @if ($product->type == 'Complemento')
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
                    style="border-radius:30px; border: 2px solid black;">

                    <a href="#{{ $ides }}" onclick="mostrar({{ $ides }})">
                        <img src="{{ asset($product->image) }}" class="mx-auto"
                            style="height:200px; width:200px; border-radius:30px; padding:10px;" id="imgproducto">
                    </a>
                    <div class="px-5 py-3" style="padding:15px;">
                        @if (Lang::locale() == 'es')
                            <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                        @else
                            <h3 class="text-gray-700 uppercase">{{ $product->nameen }}</h3>
                        @endif
                        <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }} €</span>
                        {{--
                <span class="mt-2 text-gray-500">{{ $product->description }}</span>
            --}}
                    </div>
                </div>
                <?php
                $ides += 1;
                ?>
            @endif
        @endforeach
    </div>
    <p style="margin-left:40px; font-weight:bolder; font-size:30px; color:darkgreen;" id="p9">
        {{ __('PERRITOS') }}</p>
    <div
        style="background-color:red; margin-left:40px; height:5px; width:300px; border-radius:300px; margin-bottom:52px;">
        <br>
    </div>
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
        style="display:flex; flex-wrap:wrap; align-items:center; margin-bottom:78px;">
        @foreach ($products as $product)
            @if ($product->type == 'Perrito')
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
                    style="border-radius:30px; border: 2px solid black;">

                    <a href="#{{ $ides }}" onclick="mostrar({{ $ides }})">
                        <img src="{{ asset($product->image) }}" class="mx-auto"
                            style="height:200px; width:200px; border-radius:30px; padding:10px;" id="imgproducto">
                    </a>
                    <div class="px-5 py-3" style="padding:15px;">
                        @if (Lang::locale() == 'es')
                            <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                        @else
                            <h3 class="text-gray-700 uppercase">{{ $product->nameen }}</h3>
                        @endif
                        <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }} €</span>
                        {{--
                <span class="mt-2 text-gray-500">{{ $product->description }}</span>
            --}}
                    </div>
                </div>
                <?php
                $ides += 1;
                ?>
            @endif
        @endforeach
    </div>
    <p style="margin-left:40px; font-weight:bolder; font-size:30px; color:darkgreen;" id="p10">
        {{ __('CERVEZAS') }}</p>
    <div
        style="background-color:red; margin-left:40px; height:5px; width:300px; border-radius:300px; margin-bottom:52px;">
        <br>
    </div>
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
        style="display:flex; flex-wrap:wrap; align-items:center; margin-bottom:78px;">
        @foreach ($products as $product)
            @if ($product->type == 'Cerveza')
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
                    style="border-radius:30px; border: 2px solid black;">

                    <a href="#{{ $ides }}" onclick="mostrar({{ $ides }})">
                        <img src="{{ asset($product->image) }}" class="mx-auto"
                            style="height:200px; width:200px; border-radius:30px; padding:10px;" id="imgproducto">
                    </a>
                    <div class="px-5 py-3" style="padding:15px;">
                        @if (Lang::locale() == 'es')
                            <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                        @else
                            <h3 class="text-gray-700 uppercase">{{ $product->nameen }}</h3>
                        @endif
                        <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }} €</span>
                        {{--
                <span class="mt-2 text-gray-500">{{ $product->description }}</span>
            --}}
                    </div>
                </div>
                <?php
                $ides += 1;
                ?>
            @endif
        @endforeach
    </div>
    <p style="margin-left:40px; font-weight:bolder; font-size:30px; color:darkgreen;" id="p11">
        {{ __('VINOS') }}</p>
    <div
        style="background-color:red; margin-left:40px; height:5px; width:300px; border-radius:300px; margin-bottom:52px;">
        <br>
    </div>
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
        style="display:flex; flex-wrap:wrap; align-items:center; margin-bottom:78px;">
        @foreach ($products as $product)
            @if ($product->type == 'Vino')
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
                    style="border-radius:30px; border: 2px solid black;">

                    <a href="#{{ $ides }}" onclick="mostrar({{ $ides }})">
                        <img src="{{ asset($product->image) }}" class="mx-auto"
                            style="height:200px; width:200px; border-radius:30px; padding:10px;" id="imgproducto">
                    </a>
                    <div class="px-5 py-3" style="padding:15px;">
                        @if (Lang::locale() == 'es')
                            <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                        @else
                            <h3 class="text-gray-700 uppercase">{{ $product->nameen }}</h3>
                        @endif
                        <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }} €</span>
                        {{--
                <span class="mt-2 text-gray-500">{{ $product->description }}</span>
            --}}
                    </div>
                </div>
                <?php
                $ides += 1;
                ?>
            @endif
        @endforeach
    </div>
    <p style="margin-left:40px; font-weight:bolder; font-size:30px; color:darkgreen;" id="p12">
        {{ __('REFRESCOS') }}</p>
    <div
        style="background-color:red; margin-left:40px; height:5px; width:300px; border-radius:300px; margin-bottom:52px;">
        <br>
    </div>
    <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
        style="display:flex; flex-wrap:wrap; align-items:center; margin-bottom:300px;">
        @foreach ($products as $product)
            @if ($product->type == 'Refresco')
                <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-md shadow-md"
                    style="border-radius:30px; border: 2px solid black;">

                    <a href="#{{ $ides }}" onclick="mostrar({{ $ides }})">
                        <img src="{{ asset($product->image) }}" class="mx-auto"
                            style="height:200px; width:200px; border-radius:30px; padding:10px;" id="imgproducto">
                    </a>
                    <div class="px-5 py-3" style="padding:15px;">
                        @if (Lang::locale() == 'es')
                            <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                        @else
                            <h3 class="text-gray-700 uppercase">{{ $product->nameen }}</h3>
                        @endif
                        <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }} €</span>
                        {{--
                <span class="mt-2 text-gray-500">{{ $product->description }}</span>
            --}}
                    </div>
                </div>
                <?php
                $ides += 1;
                ?>
            @endif
        @endforeach
    </div>
    <?php
    $idesdesc = 0;
    ?>
    <div>
        @foreach ($products as $product)
            @if ($product->type == 'Pizza')
                <div id="{{ $idesdesc }}" style="display: none; margin-bottom:300px;">
                    <br><br><br><br><br>
                    <h1 class="text-center"
                        style="font-size:30px; background-color:red; padding:10px; color:white; font-family: 'Anton', sans-serif; text-shadow: 2px 2px 4px #000000;">
                        {{ __('DESCRIPCIÓN') }}
                    </h1>
                    <div style="display:flex; align-items:center; justify-content:center; background:white;">
                        <div style="margin: 0 auto; text-align:center;">
                            <br><br>
                            <img src="{{ asset($product->image) }}" class="mx-auto"
                                style="height:200px; width:200px; border-radius:30px; padding:10px; border: 2px solid gray;">
                            <br>
                            @if (Lang::locale() == 'es')
                                <h3 class="text-gray-700 uppercase" style="font-weight: bold;">{{ $product->name }}
                                </h3>
                            @else
                                <h3 class="text-gray-700 uppercase" style="font-weight: bold;">
                                    {{ $product->nameen }}</h3>
                            @endif
                            <br>
                            <span class="mt-2 text-gray-500">{{ $product->description }}</span>
                            <br>
                            <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }}
                                €</span>
                            <br><br>
                            <?php
                            $alergenoslista = explode('-', $product->alergenos);
                            ?>
                            <div
                                style="display:flex; flex-wrap:wrap; align-items:center; gap:10px; justify-content:center;">
                                @if ($product->alergenos != '')
                                    @foreach ($alergenoslista as $alergeno)
                                        <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                            width="40px" height="40px">
                                    @endforeach
                                @endif
                            </div>
                            <br><br>
                        </div>
                        <div style="margin: 0 auto; text-align:center;">
                            <img src="{{ asset('img/alergenos.jpg') }}" alt="" width="350px"
                                height="350px" class="max-h-60 mx-auto"
                                style="border: 1px solid black; border-radius:30px;">
                        </div>
                    </div>
                </div>
                <?php
                $idesdesc += 1;
                ?>
            @endif
        @endforeach
    </div>
    <div>
        @foreach ($products as $product)
            @if ($product->type == 'Hamburguesa')
                <div id="{{ $idesdesc }}" style="display: none; margin-bottom:300px;">
                    <br><br><br><br><br>
                    <h1 class="text-center"
                        style="font-size:30px; background-color:red; padding:10px; color:white; font-family: 'Anton', sans-serif; text-shadow: 2px 2px 4px #000000;">
                        {{ __('DESCRIPCIÓN') }}</h1>
                    <div style="display:flex; align-items:center; justify-content:center; background:white;">
                        <div style="margin: 0 auto; text-align:center;">
                            <br><br>
                            <img src="{{ asset($product->image) }}" class="mx-auto"
                                style="height:200px; width:200px; border-radius:30px; padding:10px; border: 2px solid gray;">
                            <br>
                            @if (Lang::locale() == 'es')
                                <h3 class="text-gray-700 uppercase" style="font-weight: bold;">{{ $product->name }}
                                </h3>
                            @else
                                <h3 class="text-gray-700 uppercase" style="font-weight: bold;">
                                    {{ $product->nameen }}</h3>
                            @endif
                            <br>
                            <span class="mt-2 text-gray-500">{{ $product->description }}</span>
                            <br>
                            <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }}
                                €</span>
                            <br><br>
                            <?php
                            $alergenoslista = explode('-', $product->alergenos);
                            ?>
                            <div
                                style="display:flex; flex-wrap:wrap; align-items:center; gap:10px; justify-content:center;">
                                @if ($product->alergenos != '')
                                    @foreach ($alergenoslista as $alergeno)
                                        <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                            width="40px" height="40px">
                                    @endforeach
                                @endif
                            </div>
                            <br><br>
                        </div>
                        <div style="margin: 0 auto; text-align:center;">
                            <img src="{{ asset('img/alergenos.jpg') }}" alt="" width="350px"
                                height="350px" class="max-h-60 mx-auto"
                                style="border: 1px solid black; border-radius:30px;">
                        </div>
                    </div>
                </div>
                <?php
                $idesdesc += 1;
                ?>
            @endif
        @endforeach
    </div>
    <div>
        @foreach ($products as $product)
            @if ($product->type == 'Sándwich')
                <div id="{{ $idesdesc }}" style="display: none; margin-bottom:300px;">
                    <br><br><br><br><br>
                    <h1 class="text-center"
                        style="font-size:30px; background-color:red; padding:10px; color:white; font-family: 'Anton', sans-serif; text-shadow: 2px 2px 4px #000000;">
                        {{ __('DESCRIPCIÓN') }}</h1>
                    <div style="display:flex; align-items:center; justify-content:center; background:white;">
                        <div style="margin: 0 auto; text-align:center;">
                            <br><br>
                            <img src="{{ asset($product->image) }}" class="mx-auto"
                                style="height:200px; width:200px; border-radius:30px; padding:10px; border: 2px solid gray;">
                            <br>
                            @if (Lang::locale() == 'es')
                                <h3 class="text-gray-700 uppercase" style="font-weight: bold;">{{ $product->name }}
                                </h3>
                            @else
                                <h3 class="text-gray-700 uppercase" style="font-weight: bold;">
                                    {{ $product->nameen }}</h3>
                            @endif
                            <br>
                            <span class="mt-2 text-gray-500">{{ $product->description }}</span>
                            <br>
                            <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }}
                                €</span>
                            <br><br>
                            <?php
                            $alergenoslista = explode('-', $product->alergenos);
                            ?>
                            <div
                                style="display:flex; flex-wrap:wrap; align-items:center; gap:10px; justify-content:center;">
                                @if ($product->alergenos != '')
                                    @foreach ($alergenoslista as $alergeno)
                                        <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                            width="40px" height="40px">
                                    @endforeach
                                @endif
                            </div>
                            <br><br>
                        </div>
                        <div style="margin: 0 auto; text-align:center;">
                            <img src="{{ asset('img/alergenos.jpg') }}" alt="" width="350px"
                                height="350px" class="max-h-60 mx-auto"
                                style="border: 1px solid black; border-radius:30px;">
                        </div>
                    </div>
                </div>
                <?php
                $idesdesc += 1;
                ?>
            @endif
        @endforeach
    </div>
    <div>
        @foreach ($products as $product)
            @if ($product->type == 'Pasta')
                <div id="{{ $idesdesc }}" style="display: none; margin-bottom:300px;">
                    <br><br><br><br><br>
                    <h1 class="text-center"
                        style="font-size:30px; background-color:red; padding:10px; color:white; font-family: 'Anton', sans-serif; text-shadow: 2px 2px 4px #000000;">
                        {{ __('DESCRIPCIÓN') }}</h1>
                    <div style="display:flex; align-items:center; justify-content:center; background:white;">
                        <div style="margin: 0 auto; text-align:center;">
                            <br><br>
                            <img src="{{ asset($product->image) }}" class="mx-auto"
                                style="height:200px; width:200px; border-radius:30px; padding:10px; border: 2px solid gray;">
                            <br>
                            @if (Lang::locale() == 'es')
                                <h3 class="text-gray-700 uppercase" style="font-weight: bold;">{{ $product->name }}
                                </h3>
                            @else
                                <h3 class="text-gray-700 uppercase" style="font-weight: bold;">
                                    {{ $product->nameen }}</h3>
                            @endif
                            <br>
                            <span class="mt-2 text-gray-500">{{ $product->description }}</span>
                            <br>
                            <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }}
                                €</span>
                            <br><br>
                            <?php
                            $alergenoslista = explode('-', $product->alergenos);
                            ?>
                            <div
                                style="display:flex; flex-wrap:wrap; align-items:center; gap:10px; justify-content:center;">
                                @if ($product->alergenos != '')
                                    @foreach ($alergenoslista as $alergeno)
                                        <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                            width="40px" height="40px">
                                    @endforeach
                                @endif
                            </div>
                            <br><br>
                        </div>
                        <div style="margin: 0 auto; text-align:center;">
                            <img src="{{ asset('img/alergenos.jpg') }}" alt="" width="350px"
                                height="350px" class="max-h-60 mx-auto"
                                style="border: 1px solid black; border-radius:30px;">
                        </div>
                    </div>
                </div>
                <?php
                $idesdesc += 1;
                ?>
            @endif
        @endforeach
    </div>
    <div>
        @foreach ($products as $product)
            @if ($product->type == 'Arroz')
                <div id="{{ $idesdesc }}" style="display: none; margin-bottom:300px;">
                    <br><br><br><br><br>
                    <h1 class="text-center"
                        style="font-size:30px; background-color:red; padding:10px; color:white; font-family: 'Anton', sans-serif; text-shadow: 2px 2px 4px #000000;">
                        {{ __('DESCRIPCIÓN') }}</h1>
                    <div style="display:flex; align-items:center; justify-content:center; background:white;">
                        <div style="margin: 0 auto; text-align:center;">
                            <br><br>
                            <img src="{{ asset($product->image) }}" class="mx-auto"
                                style="height:200px; width:200px; border-radius:30px; padding:10px; border: 2px solid gray;">
                            <br>
                            @if (Lang::locale() == 'es')
                                <h3 class="text-gray-700 uppercase" style="font-weight: bold;">{{ $product->name }}
                                </h3>
                            @else
                                <h3 class="text-gray-700 uppercase" style="font-weight: bold;">
                                    {{ $product->nameen }}</h3>
                            @endif
                            <br>
                            <span class="mt-2 text-gray-500">{{ $product->description }}</span>
                            <br>
                            <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }}
                                €</span>
                            <br><br>
                            <?php
                            $alergenoslista = explode('-', $product->alergenos);
                            ?>
                            <div
                                style="display:flex; flex-wrap:wrap; align-items:center; gap:10px; justify-content:center;">
                                @if ($product->alergenos != '')
                                    @foreach ($alergenoslista as $alergeno)
                                        <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                            width="40px" height="40px">
                                    @endforeach
                                @endif
                            </div>
                            <br><br>
                        </div>
                        <div style="margin: 0 auto; text-align:center;">
                            <img src="{{ asset('img/alergenos.jpg') }}" alt="" width="350px"
                                height="350px" class="max-h-60 mx-auto"
                                style="border: 1px solid black; border-radius:30px;">
                        </div>
                    </div>
                </div>
                <?php
                $idesdesc += 1;
                ?>
            @endif
        @endforeach
    </div>
    <div>
        @foreach ($products as $product)
            @if ($product->type == 'Baguette')
                <div id="{{ $idesdesc }}" style="display: none; margin-bottom:300px;">
                    <br><br><br><br><br>
                    <h1 class="text-center"
                        style="font-size:30px; background-color:red; padding:10px; color:white; font-family: 'Anton', sans-serif; text-shadow: 2px 2px 4px #000000;">
                        {{ __('DESCRIPCIÓN') }}</h1>
                    <div style="display:flex; align-items:center; justify-content:center; background:white;">
                        <div style="margin: 0 auto; text-align:center;">
                            <br><br>
                            <img src="{{ asset($product->image) }}" class="mx-auto"
                                style="height:200px; width:200px; border-radius:30px; padding:10px; border: 2px solid gray;">
                            <br>
                            @if (Lang::locale() == 'es')
                                <h3 class="text-gray-700 uppercase" style="font-weight: bold;">{{ $product->name }}
                                </h3>
                            @else
                                <h3 class="text-gray-700 uppercase" style="font-weight: bold;">
                                    {{ $product->nameen }}</h3>
                            @endif
                            <br>
                            <span class="mt-2 text-gray-500">{{ $product->description }}</span>
                            <br>
                            <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }}
                                €</span>
                            <br><br>
                            <?php
                            $alergenoslista = explode('-', $product->alergenos);
                            ?>
                            <div
                                style="display:flex; flex-wrap:wrap; align-items:center; gap:10px; justify-content:center;">
                                @if ($product->alergenos != '')
                                    @foreach ($alergenoslista as $alergeno)
                                        <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                            width="40px" height="40px">
                                    @endforeach
                                @endif
                            </div>
                            <br><br>
                        </div>
                        <div style="margin: 0 auto; text-align:center;">
                            <img src="{{ asset('img/alergenos.jpg') }}" alt="" width="350px"
                                height="350px" class="max-h-60 mx-auto"
                                style="border: 1px solid black; border-radius:30px;">
                        </div>
                    </div>
                </div>
                <?php
                $idesdesc += 1;
                ?>
            @endif
        @endforeach
    </div>
    <div>
        @foreach ($products as $product)
            @if ($product->type == 'Ensalada')
                <div id="{{ $idesdesc }}" style="display: none; margin-bottom:300px;">
                    <br><br><br><br><br>
                    <h1 class="text-center"
                        style="font-size:30px; background-color:red; padding:10px; color:white; font-family: 'Anton', sans-serif; text-shadow: 2px 2px 4px #000000;">
                        {{ __('DESCRIPCIÓN') }}</h1>
                    <div style="display:flex; align-items:center; justify-content:center; background:white;">
                        <div style="margin: 0 auto; text-align:center;">
                            <br><br>
                            <img src="{{ asset($product->image) }}" class="mx-auto"
                                style="height:200px; width:200px; border-radius:30px; padding:10px; border: 2px solid gray;">
                            <br>
                            @if (Lang::locale() == 'es')
                                <h3 class="text-gray-700 uppercase" style="font-weight: bold;">{{ $product->name }}
                                </h3>
                            @else
                                <h3 class="text-gray-700 uppercase" style="font-weight: bold;">
                                    {{ $product->nameen }}</h3>
                            @endif
                            <br>
                            <span class="mt-2 text-gray-500">{{ $product->description }}</span>
                            <br>
                            <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }}
                                €</span>
                            <br><br>
                            <?php
                            $alergenoslista = explode('-', $product->alergenos);
                            ?>
                            <div
                                style="display:flex; flex-wrap:wrap; align-items:center; gap:10px; justify-content:center;">
                                @if ($product->alergenos != '')
                                    @foreach ($alergenoslista as $alergeno)
                                        <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                            width="40px" height="40px">
                                    @endforeach
                                @endif
                            </div>
                            <br><br>
                        </div>
                        <div style="margin: 0 auto; text-align:center;">
                            <img src="{{ asset('img/alergenos.jpg') }}" alt="" width="350px"
                                height="350px" class="max-h-60 mx-auto"
                                style="border: 1px solid black; border-radius:30px;">
                        </div>
                    </div>
                </div>
                <?php
                $idesdesc += 1;
                ?>
            @endif
        @endforeach
    </div>
    <div>
        @foreach ($products as $product)
            @if ($product->type == 'Complemento')
                <div id="{{ $idesdesc }}" style="display: none; margin-bottom:300px;">
                    <br><br><br><br><br>
                    <h1 class="text-center"
                        style="font-size:30px; background-color:red; padding:10px; color:white; font-family: 'Anton', sans-serif; text-shadow: 2px 2px 4px #000000;">
                        {{ __('DESCRIPCIÓN') }}</h1>
                    <div style="display:flex; align-items:center; justify-content:center; background:white;">
                        <div style="margin: 0 auto; text-align:center;">
                            <br><br>
                            <img src="{{ asset($product->image) }}" class="mx-auto"
                                style="height:200px; width:200px; border-radius:30px; padding:10px; border: 2px solid gray;">
                            <br>
                            @if (Lang::locale() == 'es')
                                <h3 class="text-gray-700 uppercase" style="font-weight: bold;">{{ $product->name }}
                                </h3>
                            @else
                                <h3 class="text-gray-700 uppercase" style="font-weight: bold;">
                                    {{ $product->nameen }}</h3>
                            @endif
                            <br>
                            <span class="mt-2 text-gray-500">{{ $product->description }}</span>
                            <br>
                            <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }}
                                €</span>
                            <br><br>
                            <?php
                            $alergenoslista = explode('-', $product->alergenos);
                            ?>
                            <div
                                style="display:flex; flex-wrap:wrap; align-items:center; gap:10px; justify-content:center;">
                                @if ($product->alergenos != '')
                                    @foreach ($alergenoslista as $alergeno)
                                        <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                            width="40px" height="40px">
                                    @endforeach
                                @endif
                            </div>
                            <br><br>
                        </div>
                        <div style="margin: 0 auto; text-align:center;">
                            <img src="{{ asset('img/alergenos.jpg') }}" alt="" width="350px"
                                height="350px" class="max-h-60 mx-auto"
                                style="border: 1px solid black; border-radius:30px;">
                        </div>
                    </div>
                </div>
                <?php
                $idesdesc += 1;
                ?>
            @endif
        @endforeach
    </div>
    <div>
        @foreach ($products as $product)
            @if ($product->type == 'Perrito')
                <div id="{{ $idesdesc }}" style="display: none; margin-bottom:300px;">
                    <br><br><br><br><br>
                    <h1 class="text-center"
                        style="font-size:30px; background-color:red; padding:10px; color:white; font-family: 'Anton', sans-serif; text-shadow: 2px 2px 4px #000000;">
                        {{ __('DESCRIPCIÓN') }}</h1>
                    <div style="display:flex; align-items:center; justify-content:center; background:white;">
                        <div style="margin: 0 auto; text-align:center;">
                            <br><br>
                            <img src="{{ asset($product->image) }}" class="mx-auto"
                                style="height:200px; width:200px; border-radius:30px; padding:10px; border: 2px solid gray;">
                            <br>
                            @if (Lang::locale() == 'es')
                                <h3 class="text-gray-700 uppercase" style="font-weight: bold;">{{ $product->name }}
                                </h3>
                            @else
                                <h3 class="text-gray-700 uppercase" style="font-weight: bold;">
                                    {{ $product->nameen }}</h3>
                            @endif
                            <br>
                            <span class="mt-2 text-gray-500">{{ $product->description }}</span>
                            <br>
                            <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }}
                                €</span>
                            <br><br>
                            <?php
                            $alergenoslista = explode('-', $product->alergenos);
                            ?>
                            <div
                                style="display:flex; flex-wrap:wrap; align-items:center; gap:10px; justify-content:center;">
                                @if ($product->alergenos != '')
                                    @foreach ($alergenoslista as $alergeno)
                                        <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                            width="40px" height="40px">
                                    @endforeach
                                @endif
                            </div>
                            <br><br>
                        </div>
                        <div style="margin: 0 auto; text-align:center;">
                            <img src="{{ asset('img/alergenos.jpg') }}" alt="" width="350px"
                                height="350px" class="max-h-60 mx-auto"
                                style="border: 1px solid black; border-radius:30px;">
                        </div>
                    </div>
                </div>
                <?php
                $idesdesc += 1;
                ?>
            @endif
        @endforeach
    </div>
    <div>
        @foreach ($products as $product)
            @if ($product->type == 'Cerveza')
                <div id="{{ $idesdesc }}" style="display: none; margin-bottom:300px;">
                    <br><br><br><br><br>
                    <h1 class="text-center"
                        style="font-size:30px; background-color:red; padding:10px; color:white; font-family: 'Anton', sans-serif; text-shadow: 2px 2px 4px #000000;">
                        {{ __('DESCRIPCIÓN') }}</h1>
                    <div style="display:flex; align-items:center; justify-content:center; background:white;">
                        <div style="margin: 0 auto; text-align:center;">
                            <br><br>
                            <img src="{{ asset($product->image) }}" class="mx-auto"
                                style="height:200px; width:200px; border-radius:30px; padding:10px; border: 2px solid gray;">
                            <br>
                            @if (Lang::locale() == 'es')
                                <h3 class="text-gray-700 uppercase" style="font-weight: bold;">{{ $product->name }}
                                </h3>
                            @else
                                <h3 class="text-gray-700 uppercase" style="font-weight: bold;">
                                    {{ $product->nameen }}</h3>
                            @endif
                            <br>
                            <span class="mt-2 text-gray-500">{{ $product->description }}</span>
                            <br>
                            <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }}
                                €</span>
                            <br><br>
                            <?php
                            $alergenoslista = explode('-', $product->alergenos);
                            ?>
                            <div
                                style="display:flex; flex-wrap:wrap; align-items:center; gap:10px; justify-content:center;">
                                @if ($product->alergenos != '')
                                    @foreach ($alergenoslista as $alergeno)
                                        <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                            width="40px" height="40px">
                                    @endforeach
                                @endif
                            </div>
                            <br><br>
                        </div>
                        <div style="margin: 0 auto; text-align:center;">
                            <img src="{{ asset('img/alergenos.jpg') }}" alt="" width="350px"
                                height="350px" class="max-h-60 mx-auto"
                                style="border: 1px solid black; border-radius:30px;">
                        </div>
                    </div>
                </div>
                <?php
                $idesdesc += 1;
                ?>
            @endif
        @endforeach
    </div>
    <div>
        @foreach ($products as $product)
            @if ($product->type == 'Vino')
                <div id="{{ $idesdesc }}" style="display: none; margin-bottom:300px;">
                    <br><br><br><br><br>
                    <h1 class="text-center"
                        style="font-size:30px; background-color:red; padding:10px; color:white; font-family: 'Anton', sans-serif; text-shadow: 2px 2px 4px #000000;">
                        {{ __('DESCRIPCIÓN') }}</h1>
                    <div style="display:flex; align-items:center; justify-content:center; background:white;">
                        <div style="margin: 0 auto; text-align:center;">
                            <br><br>
                            <img src="{{ asset($product->image) }}" class="mx-auto"
                                style="height:200px; width:200px; border-radius:30px; padding:10px; border: 2px solid gray;">
                            <br>
                            @if (Lang::locale() == 'es')
                                <h3 class="text-gray-700 uppercase" style="font-weight: bold;">{{ $product->name }}
                                </h3>
                            @else
                                <h3 class="text-gray-700 uppercase" style="font-weight: bold;">
                                    {{ $product->nameen }}</h3>
                            @endif
                            <br>
                            <span class="mt-2 text-gray-500">{{ $product->description }}</span>
                            <br>
                            <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }}
                                €</span>
                            <br><br>
                            <?php
                            $alergenoslista = explode('-', $product->alergenos);
                            ?>
                            <div
                                style="display:flex; flex-wrap:wrap; align-items:center; gap:10px; justify-content:center;">
                                @if ($product->alergenos != '')
                                    @foreach ($alergenoslista as $alergeno)
                                        <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                            width="40px" height="40px">
                                    @endforeach
                                @endif
                            </div>
                            <br><br>
                        </div>
                        <div style="margin: 0 auto; text-align:center;">
                            <img src="{{ asset('img/alergenos.jpg') }}" alt="" width="350px"
                                height="350px" class="max-h-60 mx-auto"
                                style="border: 1px solid black; border-radius:30px;">
                        </div>
                    </div>
                </div>
                <?php
                $idesdesc += 1;
                ?>
            @endif
        @endforeach
    </div>
    <div>
        @foreach ($products as $product)
            @if ($product->type == 'Refresco')
                <div id="{{ $idesdesc }}" style="display: none; margin-bottom:300px;">
                    <br><br><br><br><br>
                    <h1 class="text-center"
                        style="font-size:30px; background-color:red; padding:10px; color:white; font-family: 'Anton', sans-serif; text-shadow: 2px 2px 4px #000000;">
                        {{ __('DESCRIPCIÓN') }}</h1>
                    <div style="display:flex; align-items:center; justify-content:center; background:white;">
                        <div style="margin: 0 auto; text-align:center;">
                            <br><br>
                            <img src="{{ asset($product->image) }}" class="mx-auto"
                                style="height:200px; width:200px; border-radius:30px; padding:10px; border: 2px solid gray;">
                            <br>
                            @if (Lang::locale() == 'es')
                                <h3 class="text-gray-700 uppercase" style="font-weight: bold;">{{ $product->name }}
                                </h3>
                            @else
                                <h3 class="text-gray-700 uppercase" style="font-weight: bold;">
                                    {{ $product->nameen }}</h3>
                            @endif
                            <br>
                            <span class="mt-2 text-gray-500">{{ $product->description }}</span>
                            <br>
                            <span class="mt-2 text-gray-500">{{ number_format($product->price, 2, '.', '') }}
                                €</span>
                            <br><br>
                            <?php
                            $alergenoslista = explode('-', $product->alergenos);
                            ?>
                            <div
                                style="display:flex; flex-wrap:wrap; align-items:center; gap:10px; justify-content:center;">
                                @if ($product->alergenos != '')
                                    @foreach ($alergenoslista as $alergeno)
                                        <img src="{{ asset('img/alergenos/single/' . $alergeno . '.png') }}"
                                            width="40px" height="40px">
                                    @endforeach
                                @endif
                            </div>
                            <br><br>
                        </div>
                        <div style="margin: 0 auto; text-align:center;">
                            <img src="{{ asset('img/alergenos.jpg') }}" alt="" width="350px"
                                height="350px" class="max-h-60 mx-auto"
                                style="border: 1px solid black; border-radius:30px;">
                        </div>
                    </div>
                </div>
                <?php
                $idesdesc += 1;
                ?>
            @endif
        @endforeach
    </div>
    <div style="position:fixed; bottom:100px; right:10px;">
        <a href="#">
            <img src="{{ asset('img/uparrow.png') }}" alt="uparrow" width="50px" height="50px"
                id="boton">
        </a>
    </div>
    <div class="footer">
        <div style="text-align:center;">
            <p>{{ __('© 2023 Pizzería Brenda™. Todos los derechos reservados.') }}</p>
        </div>
        <div style="display:flex; flex-wrap:wrap; justify-content:center; align-items:center;">
            <div style="display:flex; gap: 5px;">
                <p style="font-size:13px;">{{ __('Teléfonos: ') }}</p>
                <div>
                    <p style="font-size:18px; font-weight:bolder;">956 37 11 15</p>
                    <p style="font-size:18px; font-weight:bolder;">956 37 47 36</p>
                    <p style="font-size:18px; font-weight:bolder;">627 650 605</p>
                </div>
            </div>
            <div style="margin-left:auto; display:flex; gap:30px; text-align:center;">
                <a class="anavbar" href="privacyAnon"
                    style="font-size:13px;">{{ __('Política de privacidad') }}</a>
                <a class="anavbar" href="premiosAnon" style="font-size:13px;">{{ __('Premios') }}</a>
            </div>
            <div style="margin-left:auto; display:flex;">
                <a href="https://twitter.com/BRENDAPIZZA" target="__blank"><img src="{{ asset('img/twit.png') }}"
                        width="30px" height="30px" style="margin-right:20px;"></a>
                <a href="https://www.instagram.com/pizzeriabrenda/?hl=es" target="__blank"><img
                        src="{{ asset('img/inst.png') }}" width="30px" height="30px"
                        style="margin-right:20px;"></a>
                <a href="https://www.tiktok.com/@pizzeriabrenda1986?lang=es" target="__blank"><img
                        src="{{ asset('img/tik.png') }}" width="30px" height="30px"
                        style="margin-right:20px;"></a>
                <a href="https://www.facebook.com/pizzeriabrenda/?locale=es_ES" target="__blank"><img
                        src="{{ asset('img/face.png') }}" width="30px" height="30px"
                        style="margin-right:20px;"></a>
            </div>
            <div style="display:flex; gap: 5px; margin-left:auto;">
                <p style="font-size:13px;">{{ __('Horario: ') }}</p>
                <div>
                    <p style="font-size:18px; font-weight:bolder;">{{ __('De lunes a domingo: 20:30 - 23:30') }}
                    </p>
                    <p style="font-size:18px; font-weight:bolder;">{{ __('Domingo por la mañana: 13:30 - 15:00') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="{{ asset('js/productsAnon-script.js') }}"></script>

</html>
