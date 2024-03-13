<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        {{-- <script
            defer
            src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
        ></script> --}}
        @vite('resources/css/app.css', 'resources/js/app.js')

        <title>Lara-Blog</title>
    </head>

    <body class="h-screen bg-white">
        <main class="h-full px-6 mx-auto max-w-5xl lg:px-8">
            {{ $nav }}
            <div class="h-10 sm:h-0"></div>
            <div class="h-auto grid grid-rows-1">
                {{ $main }}
            </div>
            {{ $footer }}
        </main>
    </body>
</html>
