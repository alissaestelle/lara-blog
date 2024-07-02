<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <title>Lara-Blog</title>

        @viteReactRefresh
        @vite(['resources/css/app.css', 'resources/js/app.jsx'])
    </head>

    @php
        $message = session()->has('success') ? session()->get('success') : '';
        $theme = session()->has('theme') ? session()->get('theme') : '';
    @endphp

    <body>
        <div class="flex flex-col mx-auto max-w-4xl h-screen bg-white">
            <header class="relative flex-none p-7 md:h-auto">
                <x-app.nav />
                    @if ($message)
                    <div class="relative">
                        <x-ui.alert class="{{ $theme }}">
                            {{ $message }}
                        </x-ui.alert>
                    </div>
                    @endif
                <x-app.header />
            </header>
            <div class="w-full border-t border-gray-200"></div>
            <main class="flex-grow">
                {{ $main }}
            </main>
            {{ $footer }}
        </div>
    </body>
</html>
