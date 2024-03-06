<x-layout>
    <x-slot:banner>
        <x-banner></x-banner>
    </x-slot>
    <x-slot:main>
        <div class="mx-auto mt-10 max-w-2xl">
            <div>
                <article
                    class="transition-colors duration-300 bg-gray-100 border border-black border-opacity-0 border-opacity-5 rounded-xl">
                    <div class="py-6 px-5 flex">
                        <div class="flex-1 self-center">
                            <img
                                src="../images/moon-castle.png"
                                alt="Featured"
                                class="h-52 w-72 object-cover object-center
                                 rounded-xl" />
                        </div>

                        <div class="flex-1 flex flex-col">
                            <header class="mt-8 md:mt-0">
                                <div class="space-x-2">
                                    <a
                                        href="#"
                                        class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                        style="font-size: 10px">
                                        Techniques
                                    </a>

                                    <a
                                        href="#"
                                        class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                                        style="font-size: 10px">
                                        Updates
                                    </a>
                                </div>

                                <div class="mt-4">
                                    <h1 class="text-lg font-medium">
                                        Featured Post
                                    </h1>

                                    <span class="mt-2 block text-gray-400 text-xs">
                                        Published
                                        <time>{{ date('M jS, Y', strtotime(now())) }}</time>
                                    </span>
                                </div>
                            </header>

                            <div class="text-sm mt-2 line-clamp-3">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                    enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                    nisi ut aliquip ex ea commodo consequat.
                                </p>

                                <p class="mt-4">
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur.
                                </p>
                            </div>

                            <footer class="mt-6">
                                <div class="flex items-end gap-x-3 text-sm">
                                    <img src="../images/aew.png" class="h-12 w-12" alt="AE" />
                                    <div >
                                        <h5 class="font-bold">AE</h5>
                                        <h6>Text Here</h6>
                                    </div>
                                </div>

                                {{-- <div class="hidden lg:block">
                                    <a
                                        href="#"
                                        class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8">
                                        Read More
                                    </a>
                                </div> --}}
                            </footer>
                        </div>
                    </div>
                </article>
            </div>

            <div
                class="py-6 px-5 grid grid-cols-2 gap-x-10 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                @foreach ($posts as $post)
                    <article class="flex max-w-80 flex-col items-start">
                        <img
                            src="../images/posts/{{ $images[$loop->index] }}"
                            class="h-52 self-stretch object-cover rounded-xl"
                            alt="" />

                        <div class="mt-2 flex items-center gap-x-4 text-xs">
                            <time
                                datetime="{{ $post->published }}"
                                {{-- class="{{ $loop->first ? 'text-fuchsia-800' : 'text-gray-500' }}" --}}>
                                {{ date('F jS, Y', strtotime($post->published)) }}
                            </time>
                            <a
                                href="/tag/{{ $post->tag->url }}"
                                class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">
                                {{ $post->tag->name }}
                            </a>
                        </div>
                        <div class="group relative">
                            <h3
                                class="{{ $loop->first ? 'text-fuchsia-800' : 'text-gray-900' }} mt-2 text-lg font-medium leading-6 group-hover:text-gray-600">
                                <a href="/posts/{{ $post->url }}">
                                    {{ $post->title }}
                                </a>
                            </h3>
                            <div class="mt-2 text-sm">
                                {{-- @dd($post->author->name) --}}
                                By
                                <a href="/author/{{ $post->author->url }}">
                                    {{ $post->author->name }}
                                </a>
                            </div>

                            <p
                                class="{{ $loop->first ? 'text-fuchsia-800' : 'text-gray-600' }} mt-5 line-clamp-3 text-sm leading-6">
                                {{ $post->excerpt }}
                            </p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </x-slot>
</x-layout>
