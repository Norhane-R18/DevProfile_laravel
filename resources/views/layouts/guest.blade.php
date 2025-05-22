<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="p-4">
            <div class="text-center mb-4">
                <a href="/">
                    <x-application-logo class="w-20 h-20" />
                </a>
            </div>

            <div class="border border-black p-4 max-w-md mx-auto">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
