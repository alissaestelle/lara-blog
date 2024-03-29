<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        
        <title>Lara-Blog</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
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
