<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registration Form</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
        <style>
            body {
                font-family: Verdana, Geneva, sans-serif;
                font-size: 14px;
                background: #f2f2f2;
                }

                .clearfix:after {
                content: "";
                display: block;
                clear: both;
                visibility: hidden;
                height: 0;
                }

                .form_wrapper {
                background: #fff;
                width: 400px;
                max-width: 100%;
                box-sizing: border-box;
                padding: 25px;
                margin: 8% auto 0;
                position: relative;
                z-index: 1;
                border-top: 5px solid #f5ba1a;
                -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
                -moz-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
                box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
                -webkit-transform-origin: 50% 0%;
                transform-origin: 50% 0%;
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
                -webkit-transition: none;
                transition: none;
                -webkit-animation: expand 0.8s 0.6s ease-out forwards;
                animation: expand 0.8s 0.6s ease-out forwards;
                opacity: 0;
                }
                .form_wrapper h2 {
                font-size: 1.5em;
                line-height: 1.5em;
                margin: 0;
                }
                .form_wrapper .title_container {
                text-align: center;
                padding-bottom: 15px;
                }
                .form_wrapper h3 {
                font-size: 1.1em;
                font-weight: normal;
                line-height: 1.5em;
                margin: 0;
                }
                .form_wrapper label {
                font-size: 12px;
                }
                .form_wrapper .row {
                margin: 10px -15px;
                }
                .form_wrapper .row > div {
                padding: 0 15px;
                box-sizing: border-box;
                }
                .form_wrapper .col_half {
                width: 50%;
                float: left;
                }
                .form_wrapper .input_field {
                position: relative;
                margin-bottom: 20px;
                -webkit-animation: bounce 0.6s ease-out;
                animation: bounce 0.6s ease-out;
                }
                .form_wrapper .input_field > span {
                position: absolute;
                left: 0;
                top: 0;
                color: #333;
                height: 100%;
                border-right: 1px solid #cccccc;
                text-align: center;
                width: 30px;
                }
                .form_wrapper .input_field > span > i {
                padding-top: 10px;
                }
                .form_wrapper .textarea_field > span > i {
                padding-top: 10px;
                }
                .form_wrapper input[type=text], .form_wrapper input[type=email], .form_wrapper input[type=password] {
                width: 100%;
                padding: 8px 10px 9px 35px;
                height: 35px;
                border: 1px solid #cccccc;
                box-sizing: border-box;
                outline: none;
                -webkit-transition: all 0.3s ease-in-out;
                -moz-transition: all 0.3s ease-in-out;
                -ms-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
                }
                .form_wrapper input[type=text]:hover, .form_wrapper input[type=email]:hover, .form_wrapper input[type=password]:hover {
                background: #fafafa;
                }
                .form_wrapper input[type=text]:focus, .form_wrapper input[type=email]:focus, .form_wrapper input[type=password]:focus {
                -webkit-box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
                -moz-box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
                box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
                border: 1px solid #f5ba1a;
                background: #fafafa;
                }
                .form_wrapper input[type=submit] {
                background: #f5ba1a;
                height: 35px;
                line-height: 35px;
                width: 100%;
                border: none;
                outline: none;
                cursor: pointer;
                color: #fff;
                font-size: 1.1em;
                margin-bottom: 10px;
                -webkit-transition: all 0.3s ease-in-out;
                -moz-transition: all 0.3s ease-in-out;
                -ms-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
                }
                .form_wrapper input[type=submit]:hover {
                background: #e1a70a;
                }
                .form_wrapper input[type=submit]:focus {
                background: #e1a70a;
                }
                .form_wrapper input[type=checkbox], .form_wrapper input[type=radio] {
                border: 0;
                clip: rect(0 0 0 0);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
                }

                .form_container .row .col_half.last {
                border-left: 1px solid #cccccc;
                }

                .checkbox_option label {
                margin-right: 1em;
                position: relative;
                }
                .checkbox_option label:before {
                content: "";
                display: inline-block;
                width: 0.5em;
                height: 0.5em;
                margin-right: 0.5em;
                vertical-align: -2px;
                border: 2px solid #cccccc;
                padding: 0.12em;
                background-color: transparent;
                background-clip: content-box;
                transition: all 0.2s ease;
                }
                .checkbox_option label:after {
                border-right: 2px solid #000000;
                border-top: 2px solid #000000;
                content: "";
                height: 20px;
                left: 2px;
                position: absolute;
                top: 7px;
                transform: scaleX(-1) rotate(135deg);
                transform-origin: left top;
                width: 7px;
                display: none;
                }
                .checkbox_option input:hover + label:before {
                border-color: #000000;
                }
                .checkbox_option input:checked + label:before {
                border-color: #000000;
                }
                .checkbox_option input:checked + label:after {
                -moz-animation: check 0.8s ease 0s running;
                -webkit-animation: check 0.8s ease 0s running;
                animation: check 0.8s ease 0s running;
                display: block;
                width: 7px;
                height: 20px;
                border-color: #000000;
                }

                .radio_option label {
                margin-right: 1em;
                }
                .radio_option label:before {
                content: "";
                display: inline-block;
                width: 0.5em;
                height: 0.5em;
                margin-right: 0.5em;
                border-radius: 100%;
                vertical-align: -3px;
                border: 2px solid #cccccc;
                padding: 0.15em;
                background-color: transparent;
                background-clip: content-box;
                transition: all 0.2s ease;
                }
                .radio_option input:hover + label:before {
                border-color: #000000;
                }
                .radio_option input:checked + label:before {
                background-color: #000000;
                border-color: #000000;
                }

                .select_option {
                position: relative;
                width: 100%;
                }
                .select_option select {
                display: inline-block;
                width: 100%;
                height: 35px;
                padding: 0px 15px;
                cursor: pointer;
                color: #7b7b7b;
                border: 1px solid #cccccc;
                border-radius: 0;
                background: #fff;
                appearance: none;
                -webkit-appearance: none;
                -moz-appearance: none;
                transition: all 0.2s ease;
                }
                .select_option select::-ms-expand {
                display: none;
                }
                .select_option select:hover, .select_option select:focus {
                color: #000000;
                background: #fafafa;
                border-color: #000000;
                outline: none;
                }

                .select_arrow {
                position: absolute;
                top: calc(50% - 4px);
                right: 15px;
                width: 0;
                height: 0;
                pointer-events: none;
                border-width: 8px 5px 0 5px;
                border-style: solid;
                border-color: #7b7b7b transparent transparent transparent;
                }

                .select_option select:hover + .select_arrow, .select_option select:focus + .select_arrow {
                border-top-color: #000000;
                }

                .credit {
                position: relative;
                z-index: 1;
                text-align: center;
                padding: 15px;
                color: #f5ba1a;
                }
                .credit a {
                color: #e1a70a;
                }

                @-webkit-keyframes check {
                0% {
                    height: 0;
                    width: 0;
                }
                25% {
                    height: 0;
                    width: 7px;
                }
                50% {
                    height: 20px;
                    width: 7px;
                }
                }
                @keyframes check {
                0% {
                    height: 0;
                    width: 0;
                }
                25% {
                    height: 0;
                    width: 7px;
                }
                50% {
                    height: 20px;
                    width: 7px;
                }
                }
                @-webkit-keyframes expand {
                0% {
                    -webkit-transform: scale3d(1, 0, 1);
                    opacity: 0;
                }
                25% {
                    -webkit-transform: scale3d(1, 1.2, 1);
                }
                50% {
                    -webkit-transform: scale3d(1, 0.85, 1);
                }
                75% {
                    -webkit-transform: scale3d(1, 1.05, 1);
                }
                100% {
                    -webkit-transform: scale3d(1, 1, 1);
                    opacity: 1;
                }
                }
                @keyframes expand {
                0% {
                    -webkit-transform: scale3d(1, 0, 1);
                    transform: scale3d(1, 0, 1);
                    opacity: 0;
                }
                25% {
                    -webkit-transform: scale3d(1, 1.2, 1);
                    transform: scale3d(1, 1.2, 1);
                }
                50% {
                    -webkit-transform: scale3d(1, 0.85, 1);
                    transform: scale3d(1, 0.85, 1);
                }
                75% {
                    -webkit-transform: scale3d(1, 1.05, 1);
                    transform: scale3d(1, 1.05, 1);
                }
                100% {
                    -webkit-transform: scale3d(1, 1, 1);
                    transform: scale3d(1, 1, 1);
                    opacity: 1;
                }
                }
                @-webkit-keyframes bounce {
                0% {
                    -webkit-transform: translate3d(0, -25px, 0);
                    opacity: 0;
                }
                25% {
                    -webkit-transform: translate3d(0, 10px, 0);
                }
                50% {
                    -webkit-transform: translate3d(0, -6px, 0);
                }
                75% {
                    -webkit-transform: translate3d(0, 2px, 0);
                }
                100% {
                    -webkit-transform: translate3d(0, 0, 0);
                    opacity: 1;
                }
                }
                @keyframes bounce {
                0% {
                    -webkit-transform: translate3d(0, -25px, 0);
                    transform: translate3d(0, -25px, 0);
                    opacity: 0;
                }
                25% {
                    -webkit-transform: translate3d(0, 10px, 0);
                    transform: translate3d(0, 10px, 0);
                }
                50% {
                    -webkit-transform: translate3d(0, -6px, 0);
                    transform: translate3d(0, -6px, 0);
                }
                75% {
                    -webkit-transform: translate3d(0, 2px, 0);
                    transform: translate3d(0, 2px, 0);
                }
                100% {
                    -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
                    opacity: 1;
                }
                }
                @media (max-width: 600px) {
                .form_wrapper .col_half {
                    width: 100%;
                    float: none;
                }

                .bottom_row .col_half {
                    width: 50%;
                    float: left;
                }

                .form_container .row .col_half.last {
                    border-left: none;
                }

                .remember_me {
                    padding-bottom: 20px;
                }
                }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="form_wrapper">
                    <div class="form_container">
                      <div class="title_container">
                        @if ($errors->has('email'))
                        <div class="alert alert-danger">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                        <h2> Registration Form</h2>
                      </div>
                      <div class="row clearfix">
                        <div class="">
                          <form method="POST" enctype="multipart/form-data" action="{{ route('Register') }}">
                            <div class="input_field"> <span class="mt-1"><i class="bi bi-envelope"></i></span>
                              <input type="email" name="email" placeholder="Email" required />
                            </div>
                            @error('email')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="row clearfix">
                              <div class="col_half">
                                <div class="input_field"> <span class="mt-1"><i aria-hidden="true" class="bi bi-person-fill"></i></span>
                                  <input type="text" name="fname" placeholder="First Name" />
                                </div>
                                @error('fname')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                              <div class="col_half">
                                <div class="input_field"> <span class="mt-1"><i class="bi bi-person-fill"></i></span>
                                  <input type="text" name="lname" placeholder="Last Name" required />
                                </div>
                              </div>
                              @error('lname')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                            <div class="input_field"> </span>
                                <input type="file" name="avatar" required>
                              </div>
                              @error('avatar')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                            <div class="input_field"> <span class="mt-1"><i aria-hidden="true" class="bi bi-lock-fill"></i></span>
                                <input type="password" name="password" placeholder="Password" required />
                              </div>
                              @error('password')
                                <span class="text-danger" style="width: ">{{ $message }}</span>
                              @enderror
                            <div class="input_field"> <span class="mt-1"><i aria-hidden="true" class="bi bi-lock-fill"></i></span>
                              <input type="password" name="password_confirmation" placeholder="Confirm Password" required />
                            </div>
                            <input class="button" type="submit" value="Register" />
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>
