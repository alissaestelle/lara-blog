<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <title>Lara-Blog</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    @php
    $message = session()->has('success') ? session()->get('success') : false;
    @endphp

    <body class="mx-auto flex flex-col h-screen justify-between bg-white max-w-5xl">
        <header class="px-6 relative lg:px-8">
            {{ $nav }}
            @if ($message)
                <x-ui.alert active="{{ isset($message) }}">{{ $message }}</x-ui.alert>
            @endif
        </header>
        <main class="px-6 lg:px-8">
            <div class="h-10 base:h-0"></div>
            {{ $main }}
        </main>
        {{ $footer }}
    </body>
</html>
