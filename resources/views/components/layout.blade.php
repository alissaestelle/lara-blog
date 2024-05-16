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
$message = session()->has('success') ? session()->get('success') : false  
@endphp

<body class="mx-auto flex flex-col h-screen justify-between bg-white max-w-5xl">
    <header>
        {{ $nav }}
    </header>
    <main class="px-6 mx-auto max-w-5xl lg:px-8">
        <div class="h-10 base:h-0"></div>
        {{ $main }}
    </main>
    {{ $footer }}

    @if ($message)
    <p>{{ $message }}</p>
    @endif
</body>

</html>