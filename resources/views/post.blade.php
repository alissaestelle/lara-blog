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
                    class="mx-auto mt-10 max-w-2xl border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    <article class="max-w-[90%]
                     flex items-center justify-center">
                        <div class="flex flex-col items-start">
                            <?= $post ?>
                        </div>

                        {{--
                            <div class="flex items-center gap-x-4 text-xs">
                            <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                            <a
                            href="/post"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">
                            Consciousness
                            </a>
                            </div>
                            <div class="group relative">
                            <h3
                            class="mt-4 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                            <a href="/post">
                            <span class="absolute inset-0"></span>
                            No. 1
                            </a>
                            </h3>
                            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
                            Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam
                            vitae illo. Non aliquid explicabo necessitatibus unde. Sed
                            exercitationem placeat consectetur nulla deserunt vel. Iusto
                            corrupti dicta.
                            </p>
                            </div>
                        --}}
                    </article>
                </div>
            </div>
        </div>
    </body>
</html>