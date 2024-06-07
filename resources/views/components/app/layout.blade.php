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
        <div class="mx-auto flex flex-col h-screen bg-white max-w-5xl lg:mb-6">
            <header class="px-6 flex-none relative lg:px-8">
                {{ $nav }}
                @if (isset($message))
                    <x-ui.alert class="{{ $theme }}">
                        {{ $message }}
                    </x-ui.alert>
                @endif
            </header>
            <main class="flex-grow">
                <div class="h-10 base:h-0"></div>
                {{ $main }}
            </main>
            {{ $footer }}
        </div>
    </body>
</html>
