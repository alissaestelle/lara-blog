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
            <div class="flex-none pt-7">
                <nav class="px-7">
                    <x-app.nav />
                </nav>
                {{ $header }}
            </div>
            <main class="flex-grow">
                {{ $main }}
            </main>
            {{ $footer }}
        </div>
    </body>
</html>
