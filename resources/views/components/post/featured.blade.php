@php
    $aew = 'resources/images/aew.png';
@endphp

<article class="bg-gray-100 border border-black border-opacity-5 rounded-xl">
    <div class="px-5 py-6 flex flex-col gap-4 xs:px-4 xs:py-5 sm:flex-row sm:flex-wrap md:px-5 md:py-6">
        <div class="sm:self-center sm:flex-1">
            <a href="/posts/{{ $post->url }}">
                <div class="md:pr-6 lg:pr-8">
                    <img
                        src="{{ Vite::image($post->image) }}"
                        alt="Moon Castle"
                        class="h-40 w-full object-cover rounded-xl xs:h-48 sm:h-36 lg:h-56" />
                </div>
            </a>
        </div>

        <div class="flex-1 flex flex-col">
            <header class="md:mt-0">
                {{-- Tags --}}
                <div class="space-x-2">
                    <a
                        href="/search?tag={{ $post->tag->url }}"
                        class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                        style="font-size: 10px">
                        {{ $post->tag->name }}
                    </a>
                    <a
                        href="#"
                        class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                        style="font-size: 10px">
                        Updates
                    </a>
                </div>

                {{-- Title x Date --}}
                <div class="mt-2">
                    <a href="/posts/{{ $post->url }}">
                        <h1 class="text-lg font-medium md:text-lg lg:text-2xl">
                            {{ $post->title }}
                        </h1>
                    </a>

                    <span class="block text-gray-400 text-xs md:mt-2">
                        Published
                        <time datetime="{{ $post->published }}">
                            {{ date('F jS, Y', strtotime($post->published)) }}
                        </time>
                        {{--
                            <time>
                            {{ $post->created_at->diffForHumans() }}
                            </time>
                        --}}
                    </span>
                </div>
            </header>

            {{-- Excerpt --}}
            <div class="mt-2 text-sm line-clamp-2 md:line-clamp-3">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <p>
                    {{ $post->excerpt }}
                </p>
            </div>

            {{-- Footer: Mobile --}}
            <footer
                class="mt-4 max-w-80 xs:flex xs:gap-2 xs:max-w-none base:hidden">
                <a href="/search?author={{ $post->author->url }}" class="col-span-2 shrink-0">
                    <div class="flex gap-2 items-center w-fit">
                        <img src="{{ Vite::asset($aew) }}" class="h-12 w-12" alt="AE" />
                        <div class="text-sm 2xl:text-base">
                            <h5 class="font-bold">{{ $post->author->name }}</h5>
                            <h6>Text Here</h6>
                        </div>
                    </div>
                </a>
            </footer>

            {{-- Footer: Desktop --}}
            <footer class="hidden base:mt-6 base:w-full base:flex base:justify-between">
                <a href="/search?author={{ $post->author->url }}">
                    <div
                        class="flex items-center gap-x-4 text-sm md:gap-x-3 lg:gap-x-4"
                        class="shrink-0 block">
                        <img src="{{ Vite::asset($aew) }}" class="h-12 w-12" alt="AE" />
                        <div class="flex-1">
                            <h5 class="font-bold">{{ $post->author->name }}</h5>
                            <h6>Text Here</h6>
                        </div>
                    </div>
                </a>
                <div class="self-center">
                    <a
                        href="/posts/{{ $post->url }}"
                        class="px-8 py-2 block text-nowrap transition-colors duration-300 bg-gray-200 text-sm font-medium rounded-full hover:bg-gray-300 base:px-6 lg:px-8">
                        Read More
                    </a>
                </div>
            </footer>
        </div>
    </div>
</article>
