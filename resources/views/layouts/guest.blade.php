<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'AEMA') }}</title>
        <link rel="shortcut icon" href="{{asset('assets/img/logo.png')}}" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            body {
                background-image: url('{{asset("assets/images/bckk.png")}}'); /* Replace with your image URL */
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
            /* Add other CSS styles as needed for your content */
        </style>
    </head>
    <body class="font-sans bg-success">
        <div class=" flex flex-col sm:justify-center items-center pt-6 sm:pt-0" >
            <div>
                <a href="/">
                    {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                    <img src="{{ asset('assets/img/logo.png') }}" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
