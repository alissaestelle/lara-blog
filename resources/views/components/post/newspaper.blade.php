<article
    class="bg-[#D8BFD8]/25 transition-colors duration-300 border border-fuchsia-800/20 rounded-xl hover:bg-[#D8BFD8]/50">
    <div class="px-5 py-6 flex flex-col h-full gap-y-4 xs:px-4 xs:py-5 md:px-5 md:py-6">
        <div class="md:self-stretch">
            <a href="/posts/{{ $post->url }}">
                <img
                    src="../images/posts/{{ $post->image }}"
                    alt="{{ $post->title }}"
                    class="h-40 w-full object-cover object-bottom rounded-xl xs:h-32 md:h-48 md:object-center lg:h-52" />
            </a>
        </div>

        <div class="flex flex-col h-full gap-y-4 lg:gap-y-2">
            <header>
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

                <div class="mt-4">
                    <a href="/posts/{{ $post->url }}">
                        <h1 class="text-base font-medium sm:text-lg lg:text-xl">
                            {{ $post->title }}
                        </h1>
                    </a>

                    <span class="block text-gray-400 text-xs">
                        Published
                        <time datetime="{{ $post->published }}">
                            {{ date('F jS, Y', strtotime($post->published)) }}
                        </time>
                    </span>
                </div>
            </header>

            <div class="text-xs xs:min-h-10 sm:text-sm">
                <a href="/posts/{{ $post->url }}">
                    <p class="line-clamp-3">
                        {{ $post->excerpt }}
                    </p>
                </a>
            </div>

            <footer class="hidden sm:h-full sm:flex sm:items-center sm:justify-between">
                <a href="/search?author={{ $post->author->url }}">
                    <div class="flex items-center gap-x-4 text-sm">
                        <img src="../images/aew.png" class="h-12 w-12" alt="AE" />
                        <h5 class="font-medium">{{ $post->author->name }}</h5>
                    </div>
                </a>
                <div class="hidden md:block md:self-center md:shrink-0">
                    <a
                        href="#"
                        class="px-8 py-2 transition-colors duration-300 bg-white border border-fuchsia-800/20 text-sm font-medium rounded-full hover:bg-[#D8BFD8]/25 hover:border-none md:px-6 lg:px-8">
                        Read More
                    </a>
                </div>
            </footer>
        </div>
    </div>
</article>
