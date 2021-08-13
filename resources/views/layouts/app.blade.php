<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles CSS + livewire -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @livewireStyles

        <style>
            [x-cloak] { display:none; }
        </style>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="bg-blueGray-800 text-gray-50">
        <div class="container mx-auto px-4">
            @include('partials.navbar')
            <livewire:flash />
            @yield('content')
        </div>

        <!-- Scripts livewire -->
        @livewireScripts
    </body>
</html>
