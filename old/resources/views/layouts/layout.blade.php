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

<body>
    <div class="bg-white py-24 base:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            @include('partials.banner')
            @yield('main')
        </div>
    </div>
</body>

</html>