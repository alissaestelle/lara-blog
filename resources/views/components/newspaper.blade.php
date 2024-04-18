<article
         class="bg-[#D8BFD8]/25 transition-colors duration-300 border border-fuchsia-800/20 rounded-xl hover:bg-[#D8BFD8]/50">
    <div class="px-5 py-6 flex flex-col gap-y-4 xs:px-4 xs:py-5 sm:gap-y-8 md:px-5 md:py-6">
        <div class="flex-1 md:self-stretch">
            <a href="/posts/{{ $post->url }}">
                <img src="../images/posts/{{ $post->image }}"
                     alt="{{ $post->title }}"
                     class="h-40 w-full object-cover object-bottom rounded-xl xs:h-32 md:h-48 lg:h-52" />
            </a>
        </div>

        <div class="flex-1 flex flex-col">
            <header class="md:mt-0">
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

                <div class="mt-4">
                    <a href="/posts/{{ $post->url }}">
                        <h1 class="text-lg font-medium lg:text-xl">
                            {{ $post->title }}
                        </h1>
                    </a>

                    <span class="block mt-2 text-gray-400 text-xs">
                        Published
                        <time datetime="{{ $post->published }}">
                            {{ date('F jS, Y', strtotime($post->published)) }}
                        </time>
                    </span>
                </div>
            </header>

            <div class="mt-2 text-sm line-clamp-3">
                <a href="/posts/{{ $post->url }}">
                    <p>
                        {{ $post->excerpt }}
                    </p>
                </a>
            </div>

            <footer class="hidden sm:mt-6 sm:flex sm:justify-between">
                <div class="flex items-center gap-x-4 text-sm">
                    <a href="/author/{{ $post->author->url }}">
                        <img src="../images/aew.png"
                             class="h-12 w-12"
                             alt="AE" />
                    </a>
                    <h5 class="font-bold">{{ $post->author->name }}</h5>
                </div>
                <div class="hidden md:block md:self-center">
                    <a href="#"
                       class="px-8 py-2 transition-colors duration-300 bg-gray-200 text-sm font-medium rounded-full hover:bg-gray-300">
                        Read More
                    </a>
                </div>
            </footer>
        </div>
    </div>
</article>

{{-- <article
         class="bg-[#D8BFD8]/25 transition-colors duration-300 border border-fuchsia-800/20 rounded-xl hover:bg-[#D8BFD8]/50">
    <div class="px-4 py-5 flex flex-col gap-y-4 sm:gap-y-8 sm:px-5 sm:py-6">
        <div class="flex-1 md:self-stretch">
            <img src="../images/blossoms.png"
                 alt="Cherry Blossoms"
                 class="h-40 w-full object-cover object-bottom rounded-xl xs:h-32 md:h-48 lg:h-52" />
        </div>

        <div class="flex-1 flex flex-col">
            <header class="md:mt-0">
                <div class="space-x-2">
                    <a href="#"
                       class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                       style="font-size: 10px">
                        Techniques
                    </a>

                    <a href="#"
                       class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                       style="font-size: 10px">
                        Updates
                    </a>
                </div>

                <div class="mt-4">
                    <h1 class="text-lg font-medium lg:text-xl">
                        Featured Post
                    </h1>

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
                    Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.
                </p>

                <p class="mt-4">
                    Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
            </div>

            <footer class="hidden sm:mt-6 sm:flex sm:justify-between">
                <div class="flex items-center gap-x-4 text-sm">
                    <img src="../images/aew.png"
                         class="h-12 w-12"
                         alt="AE" />
                    <div>
                        <h5 class="font-bold">AE</h5>
                        <h6>Text Here</h6>
                    </div>
                </div>
                <div class="self-center">
                    <a href="#"
                       class="px-8 py-2 transition-colors duration-300 bg-gray-200 text-sm font-medium rounded-full hover:bg-gray-300">
                        Read More
                    </a>
                </div>
            </footer>
        </div>
    </div>
</article> --}}