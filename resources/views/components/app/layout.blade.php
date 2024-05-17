<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge" />

    <title>Lara-Blog</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

@php
$message = session()->has('success') ? session()->get('success') : '';
$theme = session()->has('theme') ? session()->get('theme') : '';
@endphp

<body class="mx-auto flex flex-col h-screen justify-between bg-white max-w-5xl">
    <x-ui.alert active="{{ isset($message) }}"
                :$theme>{{ $message }}</x-ui.alert>
    <header>
        {{ $nav }}
    </header>
    <main class="px-6 mx-auto lg:px-8">
        <div class="h-10 base:h-0"></div>
        {{ $main }}
    </main>
    {{ $footer }}
</body>

</html>