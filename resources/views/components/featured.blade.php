<article class="bg-gray-100 border border-black border-opacity-5 rounded-xl">
    <div class="px-5 py-6 flex flex-col gap-y-4 sm:flex-row sm:flex-wrap sm:px-5 sm:py-6">
        <div class="flex-1 sm:self-center">
            <div class="sm:pr-8">
                <img src="../images/moon-castle.png"
                     alt="Moon Castle"
                     class="h-40 w-full object-cover object-bottom rounded-xl sm:h-52" />
            </div>
        </div>

        <div class="flex-1 flex flex-col">
            <header class="md:mt-0">
                <div class="space-x-2">
                    <a href="/tag/{{ $post->tag->url }}"
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

                <div class="mt-4">
                    <a href="/posts/{{ $post->url }}">
                        <h1 class="text-lg font-medium lg:text-2xl">
                            {{ $post->title }}
                        </h1>
                    </a>

                    <span class="block mt-2 text-gray-400 text-xs">
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

            <div class="mt-2 text-sm line-clamp-3">
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

            <footer class="hidden sm:mt-6 sm:w-full sm:flex sm:justify-between">
                <div class="flex items-center gap-x-4 text-sm"
                     class="shrink-0 block">
                    <a href="/author/{{ $post->author->url }}">
                        <img src="../images/aew.png"
                             class="h-12 w-12"
                             alt="AE" />
                    </a>
                    <div class="flex-1">
                        <h5 class="font-bold">{{ $post->author->name }}</h5>
                        <h6>Text Here</h6>
                    </div>
                </div>
                <div class="self-center">
                    <a href="/posts/{{ $post->url }}"
                       class="px-8 py-2 block text-nowrap transition-colors duration-300 bg-gray-200 text-sm font-medium rounded-full hover:bg-gray-300">
                        Read More
                    </a>
                </div>
            </footer>
        </div>
        <div class="sm:hidden">
            <footer class="mt-4 xs:grid xs:grid-cols-3">
                <div class="mb-8 col-span-2 flex gap-x-3 items-center xs:mb-0">
                    <a href="/author/{{ $post->author->url }}"
                       class="shrink-0">
                        <img src="../images/aew.png"
                             class="h-12 w-12"
                             alt="AE" />
                    </a>
                    <div>
                        <h5 class="font-bold">{{ $post->author->name }}</h5>
                        <h6>Text Here</h6>
                    </div>
                </div>

                <div
                     class="py-2 col-start-3 text-center transition-colors duration-300 rounded-full bg-gray-200 hover:bg-gray-300 xxs:mx-auto xxs:w-[65%] xs:mr-0 xs:self-center xs:w-full">
                    <a href="/posts/{{ $post->url }}"
                       class="font-medium xs:text-base">
                        Read More
                    </a>
                </div>
            </footer>
        </div>
    </div>
</article>