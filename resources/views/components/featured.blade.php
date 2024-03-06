<div class="mb-12 min-[500px]:px-5 min-[600px]:mt-12">
    <article
        class="bg-gray-100 border border-black border-opacity-5 rounded-xl"
    >
        <div
            class="px-5 py-6 flex flex-col gap-y-8 sm:px-5 sm:py-6 md:flex-row md:gap-x-6 lg:gap-x-8"
        >
            <div class="flex-1">
                <img
                    src="../images/moon-castle.png"
                    alt="Featured"
                    class="h-60 w-full object-cover object-bottom rounded-xl md:object-center"
                />
            </div>

            <div class="flex-1 flex flex-col">
                <header class="md:mt-0">
                    <div class="space-x-2">
                        <a
                            href="#"
                            class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                            style="font-size: 10px"
                        >
                            Techniques
                        </a>

                        <a
                            href="#"
                            class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                            style="font-size: 10px"
                        >
                            Updates
                        </a>
                    </div>

                    <div class="mt-4">
                        <h1 class="text-lg font-medium">Featured Post</h1>

                        <span class="block mt-2 text-gray-400 text-xs">
                            Published
                            <time>
                                {{ date('M jS, Y', strtotime(now())) }}
                            </time>
                        </span>
                    </div>
                </header>

                <div class="mt-2 text-sm line-clamp-3">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat.
                    </p>

                    <p class="mt-4">
                        Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>

                <footer
                    class="mt-6 min-[500px]:flex min-[500px]:justify-between"
                >
                    <div
                        class="hidden min-[500px]:block min-[500px]:flex min-[500px]:items-center min-[500px]:gap-x-4 min-[500px]:text-sm"
                    >
                        <img
                            src="../images/aew.png"
                            class="h-12 w-12"
                            alt="AE"
                        />
                        <div>
                            <h5 class="font-bold">AE</h5>
                            <h6>Text Here</h6>
                        </div>
                    </div>
                    <div
                        class="text-center min-[500px]:text-right min-[500px]:self-center"
                    >
                        <a
                            href="#"
                            class="px-8 py-2 transition-colors duration-300 bg-gray-200 text-sm font-medium rounded-full hover:bg-gray-300"
                        >
                            Read More
                        </a>
                    </div>
                </footer>
            </div>
        </div>
    </article>
</div>

{{-- <div class="my-16"> --}}
<div
    class="py-12 flex flex-col gap-y-8 border-t border-gray-200 min-[500px]:px-5 min-[600px]:grid min-[600px]:grid-cols-2 min-[600px]:gap-x-6 min-[600px]:gap-y-16"
>
    <article class="bg-[#D8BFD8]/25 transition-colors duration-300 border border-fuchsia-800/20 rounded-xl hover:bg-[#D8BFD8]/50">
        <div
            class="px-4 py-5 flex flex-col gap-y-6 min-[500px]:px-5 min-[500px]:py-6"
        >
            <div class="flex-1 md:self-stretch">
                <img
                    src="../images/rainbow.png"
                    alt="Featured"
                    class="h-52 w-full object-cover object-bottom rounded-xl"
                />
            </div>

            <div class="flex-1 flex flex-col">
                <header class="md:mt-0">
                    <div class="space-x-2">
                        <a
                            href="#"
                            class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                            style="font-size: 10px"
                        >
                            Techniques
                        </a>

                        <a
                            href="#"
                            class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                            style="font-size: 10px"
                        >
                            Updates
                        </a>
                    </div>

                    <div class="mt-4">
                        <h1 class="text-lg font-medium">Featured Post</h1>

                        <span class="block mt-2 text-gray-400 text-xs">
                            Published
                            <time>
                                {{ date('M jS, Y', strtotime(now())) }}
                            </time>
                        </span>
                    </div>
                </header>

                <div class="mt-2 text-sm line-clamp-3">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat.
                    </p>

                    <p class="mt-4">
                        Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>

                <footer
                    class="mt-6 min-[500px]:flex min-[500px]:justify-between"
                >
                    <div
                        class="hidden min-[500px]:block min-[500px]:flex min-[500px]:items-center min-[500px]:gap-x-4 min-[500px]:text-sm"
                    >
                        <img
                            src="../images/aew.png"
                            class="h-12 w-12"
                            alt="AE"
                        />
                        <div>
                            <h5 class="font-bold">AE</h5>
                            <h6>Text Here</h6>
                        </div>
                    </div>
                    <div
                        class="text-center min-[500px]:text-right min-[500px]:self-center"
                    >
                        <a
                            href="#"
                            class="px-8 py-2 transition-colors duration-300 bg-gray-200 text-sm font-medium rounded-full hover:bg-gray-300"
                        >
                            Read More
                        </a>
                    </div>
                </footer>
            </div>
        </div>
    </article>

    <article class="bg-[#D8BFD8]/25 transition-colors duration-300 border border-fuchsia-800/20 rounded-xl hover:bg-[#D8BFD8]/50">
        <div
            class="px-4 py-5 flex flex-col gap-y-8 min-[500px]:px-5 min-[500px]:py-6"
        >
            <div class="flex-1 md:self-stretch">
                <img
                    src="../images/blossoms.png"
                    alt="Featured"
                    class="h-52 w-full object-cover object-bottom rounded-xl"
                />
            </div>

            <div class="flex-1 flex flex-col">
                <header class="md:mt-0">
                    <div class="space-x-2">
                        <a
                            href="#"
                            class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                            style="font-size: 10px"
                        >
                            Techniques
                        </a>

                        <a
                            href="#"
                            class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                            style="font-size: 10px"
                        >
                            Updates
                        </a>
                    </div>

                    <div class="mt-4">
                        <h1 class="text-lg font-medium">Featured Post</h1>

                        <span class="block mt-2 text-gray-400 text-xs">
                            Published
                            <time>
                                {{ date('M jS, Y', strtotime(now())) }}
                            </time>
                        </span>
                    </div>
                </header>

                <div class="mt-2 text-sm line-clamp-3">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat.
                    </p>

                    <p class="mt-4">
                        Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>

                <footer
                    class="mt-6 min-[500px]:flex min-[500px]:justify-between"
                >
                    <div
                        class="hidden min-[500px]:block min-[500px]:flex min-[500px]:items-center min-[500px]:gap-x-4 min-[500px]:text-sm"
                    >
                        <img
                            src="../images/aew.png"
                            class="h-12 w-12"
                            alt="AE"
                        />
                        <div>
                            <h5 class="font-bold">AE</h5>
                            <h6>Text Here</h6>
                        </div>
                    </div>
                    <div
                        class="text-center min-[500px]:text-right min-[500px]:self-center"
                    >
                        <a
                            href="#"
                            class="px-8 py-2 transition-colors duration-300 bg-gray-200 text-sm font-medium rounded-full hover:bg-gray-300"
                        >
                            Read More
                        </a>
                    </div>
                </footer>
            </div>
        </div>
    </article>
</div>
{{-- </div> --}}
