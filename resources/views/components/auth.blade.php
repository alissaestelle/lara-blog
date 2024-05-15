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

<body class="mx-auto flex flex-col h-screen gap-y-12 bg-white max-w-5xl sm:gap-y-16">
    <header>
        {{ $nav }}
    </header>
    <main class="px-6 mx-auto max-w-5xl lg:px-8">
        {{ $main }}
    </main>
</body>

</html>