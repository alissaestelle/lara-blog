<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge" />
    @vite('resources/css/app.css')

    <title>Lara-Blog</title>
</head>

<body class="px-6 mx-auto max-w-5xl h-screen lg:px-8">
    {{ $nav }}
    <div class="bg-white">
        {{-- {{ $slot }} --}}
        {{-- {{ $header }} --}}
        {{-- {{ $featured }} --}}
        {{ $main }}
    </div>
    {{ $footer }}
</body>

</html>