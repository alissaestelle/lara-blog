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
        $message = session()->has('success') ? session()->get('success') : '';
        $theme = session()->has('theme') ? session()->get('theme') : '';
    @endphp

    <body class="mx-auto flex flex-col h-screen bg-white max-w-5xl lg:mb-6">
        @vite(['resources/js/app.js'])
        <header class="px-6 flex-none relative lg:px-8">
            {{ $nav }}
            @if (isset($message))
                <x-ui.alert class="{{ $theme }}">
                    {{ $message }}
                </x-ui.alert>
            @endif
        </header>
        {{-- <main class="px-6 flex-grow lg:px-8"> --}}
        <main class="flex-grow">
            <div class="h-10 base:h-0"></div>
            {{ $main }}
        </main>
        {{ $footer }}
    </body>
</html>

<script>
    console.log(window)
</script>
