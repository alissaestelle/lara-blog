<article class="bg-gray-100 border border-black border-opacity-5 rounded-xl">
    <div class="px-5 py-6 flex flex-col gap-y-4 base:flex-row base:flex-wrap">
        <div class="flex-1 base:self-center">
            <a href="/posts/{{ $post->url }}">
                <div class="base:pr-6 lg:pr-8">
                    <img src="../images/moon-castle.png"
                         alt="Moon Castle"
                         class="h-40 w-full object-cover object-bottom rounded-xl xs:h-48 base:h-52" />
                </div>
            </a>
        </div>

        <div class="flex-1 flex flex-col">
            <header class="md:mt-0">
                {{-- Tags --}}
                <div class="space-x-2">
                    <a href="/search?tag={{ $post->tag->url }}"
                       class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                       style="font-size: 10px">
                        {{ $post->tag->name }}
                    </a>
                    <a href="#"
                       class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                       style="font-size: 10px">
                        Updates
                    </a>
                </div>

                {{-- Title x Date --}}
                <div class="mt-4">
                    <a href="/posts/{{ $post->url }}">
                        <h1 class="text-lg font-medium md:text-lg lg:text-2xl">
                            {{ $post->title }}
                        </h1>
                    </a>

                    <span class="block mt-2 text-gray-400 text-xs md:mt-1">
                        Published
                        <time datetime="{{ $post->published }}">
                            {{ date('F jS, Y', strtotime($post->published)) }}
                        </time>
                        {{-- <time>
                            {{ $post->created_at->diffForHumans() }}
                        </time> --}}
                    </span>
                </div>
            </header>

            {{-- Excerpt --}}
            <div class="mt-2 text-sm line-clamp-3 md:line-clamp-2">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.
                </p>
                <p>
                    {{ $post->excerpt }}
                </p>
            </div>

            {{-- Footer for Mobile --}}
            <footer class="mt-4 w-full max-w-80 mx-auto xs:grid xs:grid-cols-3 xs:max-w-none base:hidden">
                <a href="/search?author={{ $post->author->url }}"
                   class="col-span-2 shrink-0">
                    <div class="mb-6 flex gap-x-3 items-center xs:mb-0">
                        <img src="../images/aew.png"
                             class="h-12 w-12"
                             alt="AE" />
                        <div class="text-sm 2xl:text-base">
                            <h5 class="font-bold">{{ $post->author->name }}</h5>
                            <h6>Text Here</h6>
                        </div>
                    </div>
                </a>
                <div
                     class="mx-auto py-1 text-center w-[60%] transition-colors duration-300 rounded-full bg-gray-200 hover:bg-gray-300 2xs:mx-auto xs:mr-0 xs:self-center xs:w-full">
                    <a href="/posts/{{ $post->url }}"
                       class="font-medium text-sm sm:text-base">
                        Read More
                    </a>
                </div>
            </footer>

            {{-- Footer for Desktop --}}
            <footer class="hidden base:mt-6 base:w-full base:flex base:justify-between">
                <a href="/search?author={{ $post->author->url }}">
                    <div class="flex items-center gap-x-4 text-sm md:gap-x-3 lg:gap-x-4"
                         class="shrink-0 block">
                        <img src="../images/aew.png"
                             class="h-12 w-12"
                             alt="AE" />
                        <div class="flex-1">
                            <h5 class="font-bold">{{ $post->author->name }}</h5>
                            <h6>Text Here</h6>
                        </div>
                    </div>
                </a>
                <div class="self-center">
                    <a href="/posts/{{ $post->url }}"
                       class="px-8 py-2 block text-nowrap transition-colors duration-300 bg-gray-200 text-sm font-medium rounded-full hover:bg-gray-300 md:px-6 lg:px-8">
                        Read More
                    </a>
                </div>
            </footer>
        </div>
    </div>
</article>