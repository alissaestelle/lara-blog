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

    <body class="mx-auto flex flex-col gap-10 h-screen bg-white overflow-y-scroll max-w-5xl">
        <header class="px-6 relative flex-none lg:px-10">
            {{ $nav }}
        </header>
        <main class="px-6 relative flex-grow lg:px-10">
            {{ $main }}
        </main>
        <footer></footer>
    </body>
</html>