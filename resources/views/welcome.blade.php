<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<link rel="stylesheet" href="/css/welcome.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.js"></script>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pizzería Brenda</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Grandstander:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Grandstander:wght@800&display=swap" rel="stylesheet">

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

        .nuestrasofertas:hover {
            filter: brightness(75%);
            cursor: pointer;
        }

        #quesonpizzacoins:hover {
            filter: brightness(75%);
            cursor: pointer;
        }

        #botoncarrusel:hover {
            filter: brightness(75%);
            cursor: pointer;
        }

        #tusmenusgratis:hover {
            filter: brightness(75%);
        }

        .pizzacoinhelp:hover {
            filter: brightness(75%);
            cursor: help;
        }

        #botonprom:hover {
            filter: brightness(75%);
            cursor: pointer;
        }

        #botonofer:hover {
            filter: brightness(75%);
            cursor: pointer;
        }

        #botonDown:hover {
            cursor: pointer;
            background-color: #274014;
        }
    </style>
    <link rel="stylesheet" href="/css/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</head>

<body class="antialiased" style="background-color:#141414; margin:20px;">
    <div style="background-color:#141414;">
        <div class="navbar" style="display:flex;">
            <div style="display:flex; flex:1; justify-content:center; margin-right:auto; align-items:center; gap:2vw;">
                <div id="boton_switch">
                    <a class="anavbar" href="/" style="font-size:17px; font-weight:bolder;">{{ __('Inicio') }}
                    </a>
                    <div style="background-color:#f12d2d; margin-top:50px; height:5px; border-radius:10px;">
                        <br>
                    </div>
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
        <div style="margin-top:130px;">
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
                        <div style="background-color:#f12d2d; height:3px; border-radius:10px;">
                            <br>
                        </div>
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
            <div style="background-color:white;">
                <br>
            </div>
        </div>
        <div class="mx-auto" style="background-color:#141414;">
            <video width="1920" height="500" autoplay muted loop>
                <source src="{{ 'vid/pizza.webm' }}" type="video/webm">
                Tu navegador no es compatible con este vídeo.
            </video>
        </div>
    </div>
    {{--
        <div>
            <br>
            <div style="display:flex; align-items:center; justify-content:center;">
                <a href="{{ route('login') }}" onclick="redirigir_promociones()">
                    @if (Lang::locale() == 'es')
                        <img src="{{ asset('img/tusmenusgratis.png') }}" alt="menusgratis" id="tusmenusgratis"
                            class="nuestrasofertas">
                    @else
                        <img src="{{ asset('img/tusmenusgratiseng.png') }}" alt="menusgratis" id="tusmenusgratis"
                            class="nuestrasofertas">
                    @endif
                </a>
                <div class="slideshow-container">
                    @foreach ($products as $product)
                        @if ($product->habilitado and $product->type == 'Promoción')
                            <div class="mySlides fade">
                                <img src="{{ asset($product->image) }}" alt="..." width="350px" height="350px"
                                    style="border:3px solid black; border-radius:10px; margin-left:auto; margin-right:auto;">
                                <div style="display:flex; justify-content:center;">
                                    @if ($product->puntos)
                                        <div class="-mr-2 flex items-center"
                                            style="font-size:20px; margin-top:10px; margin-bottom:10px;"><img
                                                src="{{ asset('img/pizzacoin.png') }}" alt="coin">
                                            {{ $product->puntos }}
                                        </div>
                                    @else
                                        <div class="-mr-2 flex items-center"
                                            style="font-size:20px; margin-top:10px; margin-bottom:10px;"><img
                                                src="{{ asset('img/pizzacoin.png') }}" alt="coin">0</div>
                                    @endif
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <div
                        style="display:flex; align-items:center; justify-content:center; margin-left:auto; margin-right:auto; height:30px; width:30px; margin-bottom:10px; gap:10px;">
                        <img src="{{ asset('img/uparrow.png') }}" alt="uparrow" id="botoncarrusel"
                            style="transform:rotate(270deg);" onclick="showSlidesLeft();">
                        <img src="{{ asset('img/uparrow.png') }}" alt="uparrow" id="botoncarrusel"
                            style="transform:rotate(90deg);" onclick="showSlides();">
                    </div>
                    <div style="text-align:center">
                        @foreach ($products as $product)
                            @if ($product->habilitado and $product->type == 'Promoción')
                                <span class="dot"></span>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div style="margin-left:100px; margin-right:100px;">
                    <div class="p-6 text-gray-900 h-screen flex items-center justify-center">
                        <img src="{{ asset('img/pizzacoin.png') }}" alt="pizzacoin" width="100px" height="100px">
                        <p style="font-weight:bolder; font-size:20px;">{{ __('¡PIZZACOINS!') }}</p>
                    </div>
                    <div class="p-6 text-gray-900 h-screen flex items-center justify-center">
                        <p style="font-weight:bolder; font-size:20px; text-align:center;" id="quesonpizzacoins"
                            onclick="pizzacoins_mostrar(flag_pizzacoins);">
                            {{ __('¿QUÉ SON LAS PIZZACOINS?') }}
                        </p>
                    </div>
                    <div style="text-align:center; display:none;" id="informacion_pizzacoins">
                        <br>
                        <p>{{ __('Las pizzacoins son la moneda exclusiva de la Pizzería Brenda.') }}</p>
                        <p>{{ __('Puedes usar estas monedas para canjearlas por promociones especiales.') }}</p>
                        <p>{{ __('Cada vez que realices un pedido de cualquier menú o producto en la página web, obtendrás Pizzacoins. Por cada € que gastes, recibirás 10 Pizzacoins.') }}
                        </p>
                        <p>{{ __('¡Acumula esas Pizzacoins y píllate un menú gratis!') }}</p>
                        <br>
                        <p>{{ __('Para empezar a utilizar Pizzacoins, primero debes iniciar sesión con una cuenta en la página web.') }}
                        </p>
                        <p>{{ __('Regístrate, y con tu primera compra superior a 10€, recibe 500 Pizzacoins gratis.') }}
                        </p>
                    </div>
                </div>
            </div>
            <br><br>
        </div>
    --}}
    <div style="background-color:#141414; display:flex;">
        <div style="color:white; flex:1; background-color:white; position: relative; border-right:5px solid white;"
            id="fondoProm">
            <div>
                <div style="background-color:white; padding:15px; border-radius:10px; margin:20px; text-align:center; color:#141414;"
                    onclick="mostrarCarruselUno()" id="botonprom">
                    <p style="font-size:50px; font-weight:bolder; font-family: 'Alfa Slab One', serif;">
                        {{ __('PROMOCIONES') }}</p>
                    <p style="font-size:23px; font-weight:bold; font-family: 'Grandstander', cursive;">
                        {{ __('¡TUS MENÚS GRATIS CANJEANDO PIZZACOINS!') }}
                    </p>
                </div>
                <img src="{{ asset('img/pizzacoin.png') }}" alt="coin" height="120px;" width="120px;"
                    style="margin-top:20px; margin-left:auto; margin-right:auto;" class="pizzacoinhelp"
                    onclick="alert('{{ __('| Español |\n\n¿Qué son las Pizzacoins?\n\nLas pizzacoins son la moneda exclusiva de la Pizzería Brenda.\nPuedes usar estas monedas para canjearlas por promociones especiales.\nCada vez que realices un pedido de cualquier menú o producto en la página web, obtendrás Pizzacoins. Por cada € que gastes, recibirás 10 Pizzacoins.\n¡Acumula esas Pizzacoins y píllate un menú gratis!\nPara empezar a utilizar Pizzacoins, primero debes iniciar sesión con una cuenta en la página web.\nRegístrate, y con tu primera compra superior a 10€, recibe 500 Pizzacoins gratis.\n\n| English |\n\nWhat are Pizzacoins?\n\nPizzacoins are the exclusive currency of Pizzería Brenda.\nYou can use these coins to exchange them for special promotions.\nEach time you make an order of any menu or product on this website, you will get Pizzacoins. For each € you spend, you will receive 10 Pizzacoins.\nGather some Pizzacoins and get yourself a free menu!\nTo start using Pizzacoins, you have to log into the webpage with an account first.\nSign up, and with your first purchase over 10€, you will receive 500 free Pizzacoins.') }}')">
            </div>
            <div style="position:absolute; bottom:0; left: 0; right: 0; margin-bottom:40px; text-align:center;">
                <a href="{{ route('login') }}" onclick="redirigir_promociones()"
                    style="font-size:33px; padding:15px; border-radius:10px; color:#568c2c; border:3px solid #568c2c; font-family: 'Concert One', sans-serif;"
                    id="botonDown">{{ __('¡CANJEA TUS PIZZACOINS!') }}
                </a>
            </div>
        </div>
        <div class="slideshow-container" style="background-color:white; padding:5px; flex:1; display:block;"
            id="carrusel_uno">
            <p
                style="text-align:center; font-size:35px; font-weight:bolder; color:#141414; font-family: 'Grandstander', cursive;">
                {{ __('PROMOCIONES') }}
            </p>
            @foreach ($products as $product)
                @if ($product->habilitado and $product->type == 'Promoción')
                    <div class="mySlides fade">
                        <img src="{{ asset($product->image) }}" alt="..." width="200px" height="200px"
                            style="margin-left:auto; margin-right:auto;">
                        <div style="display:flex; justify-content:center;">
                            @if ($product->puntos)
                                <div class="-mr-2 flex items-center"
                                    style="font-size:20px; margin-top:10px; margin-bottom:10px; font-weight:bolder;">
                                    <img src="{{ asset('img/pizzacoin.png') }}" alt="coin">
                                    {{ $product->puntos }}
                                </div>
                            @else
                                <div class="-mr-2 flex items-center"
                                    style="font-size:20px; margin-top:10px; margin-bottom:10px; font-weight:bolder;">
                                    <img src="{{ asset('img/pizzacoin.png') }}" alt="coin">0
                                </div>
                            @endif
                        </div>
                        <p
                            style="text-align:center; font-size:20px; text-transform:uppercase; font-family: 'Grandstander', cursive;">
                            {{ $product->name }}
                        </p>
                    </div>
                @endif
            @endforeach
            <div
                style="display:flex; align-items:center; justify-content:center; margin-left:auto; margin-right:auto; height:30px; width:30px; margin-bottom:10px; gap:2vw;">
                <img src="{{ asset('img/uparrow.png') }}" alt="uparrow" id="botoncarrusel"
                    style="transform:rotate(270deg);" onclick="showSlidesLeft();">
                <img src="{{ asset('img/uparrow.png') }}" alt="uparrow" id="botoncarrusel"
                    style="transform:rotate(90deg);" onclick="showSlides();">
            </div>
            <div style="text-align:center">
                @foreach ($products as $product)
                    @if ($product->habilitado and $product->type == 'Promoción')
                        <span class="dot"></span>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="slideshow-container" style="background-color:white; padding:5px; flex:1; display:none;"
            id="carrusel_dos">
            <p
                style="text-align:center; font-size:35px; font-weight:bolder; color:#141414; font-family: 'Grandstander', cursive;">
                {{ __('OFERTAS') }}</p>
            @foreach ($products as $product)
                @if ($product->habilitado and $product->type == 'Oferta')
                    <div class="mySlides2 fade">
                        <img src="{{ asset($product->image) }}" alt="..." width="249px" height="249px"
                            style="margin-left:auto; margin-right:auto;">
                        <p
                            style="text-align:center; font-size:20px; text-transform:uppercase; font-family: 'Grandstander', cursive;">
                            {{ $product->name }}
                        </p>
                    </div>
                @endif
            @endforeach
            <div
                style="display:flex; align-items:center; justify-content:center; margin-left:auto; margin-right:auto; height:30px; width:30px; margin-bottom:10px; gap:2vw;">
                <img src="{{ asset('img/uparrow.png') }}" alt="uparrow" id="botoncarrusel"
                    style="transform:rotate(270deg);" onclick="showSlidesLeft2();">
                <img src="{{ asset('img/uparrow.png') }}" alt="uparrow" id="botoncarrusel"
                    style="transform:rotate(90deg);" onclick="showSlides2();">
            </div>
            <div style="text-align:center">
                @foreach ($products as $product)
                    @if ($product->habilitado and $product->type == 'Oferta')
                        <span class="dot2"></span>
                    @endif
                @endforeach
            </div>
        </div>
        <div style="color:white; background-color:white; flex:0.7; position: relative; border-left:5px solid #568c2c;"
            id="fondoOfer">
            <div style="text-align:center;">
                <div style=" background-color:white; padding:15px; border-radius:10px; margin:20px; text-align:center; color:#141414;"
                    onclick="mostrarCarruselDos()" id="botonofer">
                    <p style="font-size:50px; font-weight:bolder; font-family: 'Alfa Slab One', serif;">
                        {{ __('OFERTAS') }}
                    </p>
                    <p style="font-size:23px; font-weight:bold; font-family: 'Grandstander', cursive;">
                        {{ __('¡ESCOGE TU MENÚ FAVORITO!') }}
                    </p>
                </div>
                <div style="position:absolute; bottom:0; left: 0; right: 0; margin-bottom:40px;">
                    <a href="{{ route('login') }}" onclick="redirigir_promociones()"
                        style="font-size:33px; padding:15px; border-radius:10px; color:#568c2c; border:3px solid #568c2c; font-family: 'Concert One', sans-serif;"
                        id="botonDown">{{ __('¡APROVECHA LAS OFERTAS!') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color:#141414;">
        {{--
            <div style="display:flex; justify-content:center; align-items:center; gap:30px;">
                <div>
                    <h1 style="text-align:center; font-size:50px; font-family: 'Anton', sans-serif; color:white;">
                        {{ __('¿QUÉ PEDIMOS?') }}
                    </h1>
                    <br><br>
                    <div style="display:flex; gap:100px; justify-content:center;">
                        <a href="cartaAnon"
                            style="color:black; font-size:25px; background-color:red; padding:15px; border-radius:15px; color:white; border:3px solid white; text-align:center;"
                            id="boton">{{ __('NUESTRA CARTA') }}
                        </a>
                        <a href="{{ route('login') }}"
                            style="color:black; font-size:25px; background-color:red; padding:15px; border-radius:15px; color:white; border:3px solid white; text-align:center;"
                            id="boton">{{ __('¡PIDE AHORA!') }}
                        </a>
                    </div>
                </div>
                <br><br>
            </div>
        --}}
        {{--
            <div style="width:100%;">
                <div style="display:flex; justify-content:center; align-items:center; gap:30px;">
                    <div>
                        @if (Lang::locale() == 'es')
                            <div style="display:block; margin-left:auto; margin-right:auto; height:500px; width:500px;">
                                <img src="{{ asset('img/nuestrasofertas.png') }}" alt="ofertas" class="nuestrasofertas"
                                    onclick="ofertas_mostrar(flag_ofertas);">
                            </div>
                        @else
                            <div>
                                <img src="{{ asset('img/nuestrasofertaseng.png') }}" alt="ofertas"
                                    class="nuestrasofertas" onclick="ofertas_mostrar(flag_ofertas);">
                            </div>
                        @endif
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4"
                    style="display:none; flex-wrap:wrap; align-items:center;" id="lista_ofertas">
                    @foreach ($products as $product)
                        @if ($product->habilitado and $product->type == 'Oferta')
                            <div class="mx-auto">
                                <img src="{{ asset($product->image) }}" alt="..." width="280px" height="280px"
                                    style="border:3px solid black; border-radius:10px;">
                                <br>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        --}}
        <div style="display:flex; justify-content:center; align-items:center; background-color:#14210b;">
            <div style="flex:1;">
                <div>
                    <img src="{{ asset('img/nuestracarta/i.jpg') }}" alt="izquierda">
                </div>
            </div>
            <div style="flex:1; text-align:center;">
                <p style="font-size:4vw; color:#568c2c; font-family: 'Titan One', sans-serif;">
                    {{ __('¡COMPARTE Y DISFRUTA!') }}</p>
            </div>
            <div style="flex:1;">
                <div>
                    <img src="{{ asset('img/nuestracarta/d.jpg') }}" alt="derecha">
                </div>
            </div>
        </div>
        <div style="display:flex; justify-content:center; align-items:center;">
            <div style="flex:1;">
                <div style="text-align:center;">
                    <a href="cartaAnon"
                        style="color:black; font-size:50px; background-color:#568c2c; padding:15px; border-radius:15px; color:white; border:3px solid white; text-align:center; font-family: 'Concert One', sans-serif;"
                        id="boton">{{ __('NUESTRA CARTA') }}
                    </a>
                    <p style="margin-top:30px; color:white; font-family: 'Grandstander', cursive; font-size:30px;">
                        {{ __('¿QUÉ PEDIMOS?') }}</p>
                </div>
            </div>
            <div style="flex:1;">
                <img src="{{ asset('img/nuestracarta/centro.jpg') }}" alt="centro">
            </div>
            <div style="flex:1;">
                <div style="text-align:center; background-color:">
                    <a href="{{ route('login') }}"
                        style="color:black; font-size:50px; background-color:#568c2c; padding:15px; border-radius:15px; color:white; border:3px solid white; text-align:center; font-family: 'Concert One', sans-serif;"
                        id="boton">{{ __('HAZ TU PEDIDO') }}
                    </a>
                    <p style="margin-top:30px; color:white; font-family: 'Grandstander', cursive; font-size:30px;">
                        {{ __('¡TE LO LLEVAMOS A CASA!') }}</p>
                </div>
            </div>
        </div>
    </div>
    {{--
        <div style="background-image:url('img/backgroundpizzared.png');">
            <h1 class="text-center"
                style="font-size:30px; padding:10px; color:white; background-color:red; font-family: 'Anton', sans-serif; text-shadow: 2px 2px 4px #000000;">
                {{ __('TELÉFONOS') }}
            </h1>
            <br>
            <p style="text-align:center; color:white; font-weight:bolder;">{{ __('Puedes hacer tu pedido por teléfono') }}
            </p>
            <div class="flex items-center justify-center"
                style="font-size:50px; gap:45px; padding:10px; color:white; font-family: 'Anton', sans-serif; text-shadow: 2px 2px 4px #000000; text-align:center;">
                <p>956 37 11 15</p>
                <p>956 37 47 36</p>
                <p>627 650 605</p>
            </div>
            <br><br>
        </div>
        <h1 class="text-center"
            style="font-size:30px; padding:10px; color:white; background-color:red; font-family: 'Anton', sans-serif; text-shadow: 2px 2px 4px #000000;">
            {{ __('HORARIO') }}
        </h1>
        <div class="container px-12 py-8 mx-auto bg-white"
            style="width: 100%; padding: 50px; background-image:url('img/backgroundpizzasmallred.png'); color:white;">
            <div style="text-align:center;">
                <div class="flex items-center justify-center">
                    <p style="font-size:20px; font-weight:bold;">{{ __('De lunes a domingo:') }}</p>
                    <p style="font-weight:bolder; font-size:30px;">&nbsp;20:30 - 23:30</p>
                </div>
                <br>
                <div class="flex items-center justify-center">
                    <p style="font-size:20px; font-weight:bold;">{{ __('Domingo por la mañana:') }}</p>
                    <p style="font-weight:bolder; font-size:30px;">&nbsp;13:30 - 15:00</p>
                </div>
                <br>
            </div>
        </div>
    --}}
    <div style="background-color:white;">
        <br>
    </div>
    <div style="background-color:#141414; padding-top:20px; padding-bottom:150px;">
        <h1 class="text-center"
            style="font-size:60px; color:white; font-family: 'Anton', sans-serif; margin-bottom:10px;">
            {{ __('VISÍTANOS') }}
        </h1>
        <div style="display:flex; justify-content:center; align-items:center; gap: 50px;">
            <div>
                <img src="{{ asset('img/fondo/maps.jpg') }}" alt="localizacion" width="600"
                    style="border:2px solid white; border-radius:20px;">
            </div>
            <div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3197.3853338265453!2d-6.438643323699105!3d36.73732087124086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0e7509d89e347d%3A0xb24751265b25b2b1!2sPizzer%C3%ADa%20Brenda!5e0!3m2!1ses!2ses!4v1698173518792!5m2!1ses!2ses"
                    width="500" height="300" style="border:5px solid white; border-radius:10px;"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="flex items-center justify-center" style="margin-top:30px;">
            <p style="color:white;">{{ __('Atención al cliente:') }}</p>
            <p style="font-weight:bolder; font-size:20px; color:white;">&nbsp;brendapizza@hotmail.com</p>
        </div>
    </div>
    <div class="footer">
        <div style="text-align:center;">
            <p>{{ __('© 2023 Pizzería Brenda™. Todos los derechos reservados.') }}</p>
        </div>
        <div style="display:flex; flex-wrap:wrap; justify-content:center; align-items:center;">
            <div style="display:flex; gap: 5px; align-items:center;">
                <p style="font-size:22px; color:#568c2c; font-weight:bolder; text-transform:uppercase;">
                    {{ __('Teléfonos: ') }}
                </p>
                <div style="font-size:18px; font-weight:bolder;">
                    <p>956 37 11 15 | 956 37 47 36 | 627 650 605</p>
                </div>
            </div>
            <div style="margin-left:auto; display:flex; gap:30px; text-align:center;">
                <a class="anavbar" href="{{ route('whoareweAnon') }}"
                    style="font-size:13px;">{{ __('¿Quiénes somos?') }}</a>
                <a class="anavbar" href="{{ route('faqAnon') }}"
                    style="font-size:13px;">{{ __('Preguntas frecuentes') }}</a>
                <a class="anavbar" href="{{ route('contactAnon') }}"
                    style="font-size:13px;">{{ __('Contáctanos') }}</a>
                <a class="anavbar" href="{{ route('privacyAnon') }}"
                    style="font-size:13px;">{{ __('Política de privacidad') }}</a>
                <a class="anavbar" href="{{ route('premiosAnon') }}"
                    style="font-size:13px;">{{ __('Premios') }}</a>
            </div>
            <div style="margin-left:auto; display:flex;">
                <a href="https://twitter.com/BRENDAPIZZA" target="__blank"><img src="{{ asset('img/twit.png') }}"
                        width="30px" height="30px" style="margin-right:20px;" class="redes_sociales"></a>
                <a href="https://www.instagram.com/pizzeriabrenda/?hl=es" target="__blank"><img
                        src="{{ asset('img/inst.png') }}" width="30px" height="30px" style="margin-right:20px;"
                        class="redes_sociales"></a>
                <a href="https://www.tiktok.com/@pizzeriabrenda1986?lang=es" target="__blank"><img
                        src="{{ asset('img/tik.png') }}" width="30px" height="30px" style="margin-right:20px;"
                        class="redes_sociales"></a>
                <a href="https://www.facebook.com/pizzeriabrenda/?locale=es_ES" target="__blank"><img
                        src="{{ asset('img/face.png') }}" width="30px" height="30px" style="margin-right:20px;"
                        class="redes_sociales"></a>
            </div>
            <div style="display:flex; gap: 5px; margin-left:auto; align-items:center;">
                <p style="font-size:22px; color:#568c2c; font-weight:bolder; text-transform:uppercase;">
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
</body>

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

<script src="{{ asset('js/welcome.js') }}"></script>
<script>
    // Original JavaScript code by Chirp Internet: www.chirpinternet.eu
    // Please acknowledge use of this code by including this header.

    var today = new Date();
    var expiry = new Date(today.getTime() + 3600 * 1000);

    var setCookie = function(name, value) {
        document.cookie = name + "=" + escape(value) + "; path=/; expires=" + expiry.toGMTString();
    };

    var storeValues = function() {
        setCookie("card_holder_name", document.forms["reservar"]["card_holder_name"].value);
        return true;
    };

    var getCookie = function(name) {
        var re = new RegExp(name + "=([^;]+)");
        var value = re.exec(document.cookie);
        return (value != null) ? decodeURI(value[1]) : null;
    };

    var expired = new Date(today.getTime() - 24 * 3600 * 1000);

    var deleteCookie = function(name) {
        document.cookie = name + "=null; path=/; expires=" + expired.toGMTString();
    };

    if (getCookie("card_holder_name")) {
        deleteCookie("card_holder_name");
    };
</script>

<script>
    anime({
        targets: '.pizzacoinhelp',
        scale: 1.1,
        duration: 723,
        delay: 200,
        loop: true,
        direction: 'alternate'
    });
</script>

<script>
    var flag_ofertas = false;

    var ofertas_mostrar = function(x) {
        if (x) {
            document.getElementById("lista_ofertas").style.display = "none";
            flag_ofertas = false;
        } else {
            document.getElementById("lista_ofertas").style.display = "flex";
            flag_ofertas = true;
        }
    };

    var flag_pizzacoins = false;

    var pizzacoins_mostrar = function(x) {
        if (x) {
            document.getElementById("informacion_pizzacoins").style.display = "none";
            flag_pizzacoins = false;
        } else {
            document.getElementById("informacion_pizzacoins").style.display = "block";
            flag_pizzacoins = true;
        }
    };

    var redirigir_promociones = function() {
        localStorage.promociones = true;
    };

    if (localStorage.promociones) {
        localStorage.removeItem("promociones");
    }
</script>

</html>
