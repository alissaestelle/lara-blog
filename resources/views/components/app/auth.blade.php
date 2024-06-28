<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <title>Lara-Blog</title>

        @vite('resources/css/app.css')
    </head>

    <body class="mx-auto flex flex-col h-screen gap-y-12 bg-white max-w-5xl">
        <header class="px-6 relative flex-none lg:px-10">
            {{ $nav }}
        </header>
        <main class="mx-auto px-6 flex-grow lg:px-10">
            <div class="h-6 base:h-0"></div>
            {{ $main }}
        </main>
    </body>
</html>