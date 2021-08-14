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
    <body class="flex flex-col items-center justify-center min-h-screen bg-blueGray-800 text-gray-50 md:px-10 px-5">
            @include('partials.navbar')
            <main class="w-full flex flex-row bg-blueGray-800 min-h-screen">
                <div class="w-full flex flex-col">
                    <livewire:flash />
                    @yield('content')
                </div>
            </main>

        <!-- Scripts livewire -->
        @livewireScripts
    </body>
</html>
