<x-layout>
    <x-slot:nav>
        <x-nav></x-nav>
        </x-slot>
        <x-slot:main>

            {{-- SITE BANNER --}}

            <x-header></x-header>

            <div class="mx-auto">

                {{-- FEATURED POSTS SECTION --}}

                <div class="mb-12 min-[600px]:px-5 min-[600px]:mt-12 lg:mt-4">
                    <x-featured :post="$posts[0]"></x-featured>

                    {{-- NEWSPAPER SECTION --}}
                    <div class="pt-8 flex flex-col gap-y-8 xs:grid xs:grid-cols-2 xs:gap-x-6 xs:gap-y-16 lg:gap-x-8">
                        <x-newspaper :post="$posts[1]"></x-newspaper>
                        <x-newspaper :post="$posts[2]"></x-newspaper>
                    </div>
                </div>
            </div>

            {{-- ALL POSTS SECTION --}}

            <div class="pt-12 border-t border-gray-200 min-[600px]:px-5">
                <div class="flex flex-col gap-y-8 xs:grid xs:grid-cols-3 xs:gap-x-8 xs:gap-y-16 lg:gap-x-10">
                    @foreach ($posts->skip(3) as $post)
                    <x-post :post="$post"></x-post>
                    {{-- <article class="flex flex-col items-start w-full max-w-80 mx-auto">
                        <img src="../images/posts/{{ $images[$loop->index] }}"
                             class="h-32 self-stretch object-cover object-center xs:object-bottom rounded-xl md:h-48 md:object-center"
                             alt="" />

                        <div class="mt-2 w-full flex items-center justify-between gap-x-4 text-xs">
                            <time datetime="{{ $post->published }}">
                                {{ date('F jS, Y', strtotime($post->published)) }}
                            </time>
                            <a href="/tag/{{ $post->tag->url }}"
                               class="px-3 py-1.5 relative z-10 rounded-full bg-gray-50 text-gray-600 font-medium hover:bg-gray-100">
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
                            <div class="mt-2 text-sm xs:hidden min-[600px]:block min-[600px]:mt-3 min-[600px]:text-sm">
                                By
                                <a href="/author/{{ $post->author->url }}">
                                    {{ $post->author->name }}
                                </a>
                            </div>

                            <p
                               class="{{ $loop->first ? 'text-fuchsia-800' : 'text-gray-600' }} mt-5 line-clamp-3 text-sm leading-6 xs:leading-5 min-[600px]:leading-6 xs:mt-3 min-[600px]:mt-5">
                                {{ $post->excerpt }}
                            </p>
                        </div>
                    </article> --}}
                    @endforeach
                </div>
            </div>
            </div>
            </x-slot>
            <x-slot:footer>
                <x-footer></x-footer>
                </x-slot>
</x-layout>