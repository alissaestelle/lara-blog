<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        @vite('resources/css/app.css')

        <title>Lara-Blog</title>
    </head>

    <body>
        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="flex flex-col gap-y-2 mx-auto max-w-2xl lg:mx-0">
                    <div>
                        <h2
                            class="mt-3 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                            Untitled #777
                        </h2>
                        <p class="mt-2 text-lg leading-8 text-gray-600">
                            <span class="italic">exploring a garden of forking paths</span>
                        </p>
                    </div>
                    <div class="relative flex items-center gap-x-4">
                        {{--
                            <img
                            src="../images/aew.png"
                            alt="Alissa Wiley"
                            class="h-20 w-20 rounded-full bg-gray-50" />
                        --}}
                        <div class="text-sm leading-6">
                            <p class="font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    AEW
                                </a>
                            </p>
                            {{-- <p class="text-gray-600">Co-Founder / CTO</p> --}}
                        </div>
                    </div>
                </div>

                <div
                    class="mx-auto mt-10 grid max-w-2xl grid-cols-2 gap-x-10 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    <article class="flex max-w-80 flex-col items-start">
                        {{-- Add forEach Here --}}
                    </article>
                </div>
            </div>
        </div>
    </body>
</html>
