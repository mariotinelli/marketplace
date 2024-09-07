<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="h-full bg-white"
>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <style>
            [x-cloak] {
                display: none;
            }
        </style>

        @vite('resources/css/app.css')
    </head>
    <body
        x-cloak
        class="font-sans antialiased h-full bg-white"
        x-data="{ sidebarOpen: false }"
    >
        <livewire:app.sidebar-menu />

        <x-ui.top-navbar>
            <main class="py-10">
                <div class="mx-auto px-4 sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </main>
        </x-ui.top-navbar>

        @vite('resources/js/app.js')
        @livewireScriptConfig
    </body>
</html>
