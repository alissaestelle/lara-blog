<x-layout>
    <x-slot:nav>
        <x-nav></x-nav>
        </x-slot>
        <x-slot:main>
            {{-- <x-slot:header>
                <x-header></x-header>
                </x-slot> --}}

                {{-- SITE BANNER --}}

                <div class="mx-auto px-5 py-6 flex flex-col gap-y-2 text-center sm:text-left lg:mx-0">
                    <div>
                        <a href="/">
                            <h2
                                class="mt-3 text-3xl font-bold tracking-tight leading-6 text-gray-900 hover:text-gray-600 sm:text-4xl">
                                Untitled #777
                            </h2>
                        </a>
                        <p class="mt-2 text-lg leading-8 text-gray-600">
                            <span class="italic">exploring a garden of forking paths</span>
                        </p>
                    </div>

                    <div
                         class="mt-8 flex justify-center flex-wrap gap-x-4 gap-y-4 text-sm font-medium sm:flex-nowrap sm:justify-start">
                        <div
                             class="min-w-28 relative flex flex-1 items-center bg-gray-100 rounded-xl sm:flex-none lg:inline-flex">
                            <select class="py-2 pl-3 pr-9 flex-1 appearance-none bg-transparent">
                                <option value="category"
                                        disabled
                                        selected>Category</option>
                                <option value="">Option</option>
                                <option value="">Option</option>
                            </select>

                            <svg class="transform -rotate-90 absolute pointer-events-none"
                                 style="right: 12px"
                                 width="22"
                                 height="22"
                                 viewBox="0 0 22 22">
                                <g fill="none"
                                   fill-rule="evenodd">
                                    <path stroke="#000"
                                          stroke-opacity=".012"
                                          stroke-width=".5"
                                          d="M21 1v20.16H.84V1z"></path>
                                    <path fill="#222"
                                          d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>
                        </div>

                        {{-- FILTER / SORT & SEARCH MENU --}}

                        <div
                             class="min-w-28 relative flex flex-1 items-center bg-gray-100 rounded-xl sm:flex-none lg:inline-flex">
                            <select class="py-2 pl-3 pr-9 flex-1 appearance-none bg-transparent">
                                <option value="category"
                                        disabled
                                        selected>Filters</option>
                                <option value="">Option</option>
                                <option value="">Option</option>
                            </select>

                            <svg class="transform -rotate-90 absolute pointer-events-none"
                                 style="right: 12px"
                                 width="22"
                                 height="22"
                                 viewBox="0 0 22 22">
                                <g fill="none"
                                   fill-rule="evenodd">
                                    <path stroke="#000"
                                          stroke-opacity=".012"
                                          stroke-width=".5"
                                          d="M21 1v20.16H.84V1z"></path>
                                    <path fill="#222"
                                          d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <div class="relative flex flex-1 items-center border rounded-xl sm:flex-none lg:inline-flex">
                            <form method="GET"
                                  action="#">
                                <input type="text"
                                       name="search"
                                       placeholder="Search"
                                       class="px-3 py-2 text-gray-400 rounded-xl placeholder-gray-500" />
                            </form>
                        </div>
                    </div>
                </div>

                <div class="mx-auto">
                    {{-- <x-slot:featured>
                        <x-featured></x-featured>
                        </x-slot> --}}

                        {{-- FEATURED POSTS SECTION --}}

                        <div class="mb-12 min-[600px]:px-5 min-[600px]:mt-12 lg:mt-4">
                            <x-featured></x-featured>

                            {{-- NEWSPAPER SECTION --}}
                            <div
                                 class="pt-8 flex flex-col gap-y-8 xs:grid xs:grid-cols-2 xs:gap-x-6 xs:gap-y-16 lg:gap-x-8">
                                <x-newspaper></x-newspaper>
                                <x-newspaper></x-newspaper>
                            </div>
                        </div>
                </div>

                {{-- ALL POSTS SECTION --}}

                <div class="pt-12 border-t border-gray-200 min-[600px]:px-5">
                    <div class="flex flex-col gap-y-8 xs:grid xs:grid-cols-3 xs:gap-x-8 xs:gap-y-16 lg:gap-x-10">
                        @foreach ($posts as $post)
                        <x-post></x-post>
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
                                <div
                                     class="mt-2 text-sm xs:hidden min-[600px]:block min-[600px]:mt-3 min-[600px]:text-sm">
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