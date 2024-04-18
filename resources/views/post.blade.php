<x-layout>
    <x-slot:nav>
        <x-nav></x-nav>
        </x-slot>
        <x-slot:main>
            <div class="mx-auto h-full border-t border-gray-200 sm:mx-5">
                <article
                         class="my-7 w-full flex flex-col min-[600px]:grid min-[600px]:grid-cols-6 min-[600px]:gap-x-12">
                    <div class="w-full flex items-center justify-between gap-x-4 min-[600px]:hidden">
                        <a href="/"
                           class="transition-colors duration-300 relative inline-flex items-center text-md hover:text-blue-500">
                            <svg width="20"
                                 height="30"
                                 viewBox="7 0 20 20">
                                <g fill="none"
                                   fill-rule="evenodd">
                                    <path stroke="#000"
                                          stroke-opacity=".012"
                                          stroke-width=".5"
                                          d="M21 1v20.16H.84V1z"></path>
                                    <path class="fill-current"
                                          d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>
                            Back to Posts
                        </a>
                        <div class="flex flex-col gap-y-1 min-[300px]:flex-row min-[300px]:gap-x-2">
                            <span
                                  class="px-4 py-1 border border-blue-300 rounded-full text-xs font-medium text-blue-300 text-center">
                                <a href="/search?tag={{ $post->tag->url }}">
                                    {{ $post->tag->name }}
                                </a>
                            </span>
                            <span
                                  class="px-4 py-1 border border-red-300 rounded-full text-xs font-medium text-red-300 text-center">
                                <a href="/search?tag={{ $post->tag->url }}">
                                    Updates
                                </a>
                            </span>
                        </div>
                    </div>

                    <div class="min-[600px]:col-start-1 min-[600px]:col-span-2 min-[600px]:self-center">
                        <img src="../images/rainbow.png"
                             alt="Rainbow"
                             class="mt-7 h-40 w-full object-cover object-bottom rounded-xl">
                        <div class="mt-3 flex flex-col gap-y-1 items-end text-xs">

                            <time datetime="{{ $post->published }}"
                                  class="text-gray-500">
                                {{ date('F jS, Y', strtotime($post->published)) }}
                            </time>
                            <span class="text-xs sm:text-sm">
                                By
                                <a href="/author/{{ $post->author->url }}">
                                    {{ $post->author->name }}
                                </a>
                            </span>
                        </div>
                    </div>

                    <div class="group relative min-[600px]:col-start-3 min-[600px]:col-span-4">
                        <div
                             class="hidden min-[600px]:w-full min-[600px]:flex min-[600px]:items-center min-[600px]:justify-between">
                            <a href="/"
                               class="transition-colors duration-300 relative inline-flex items-center text-md hover:text-blue-500">
                                <svg width="20"
                                     height="30"
                                     viewBox="7 0 20 20">
                                    <g fill="none"
                                       fill-rule="evenodd">
                                        <path stroke="#000"
                                              stroke-opacity=".012"
                                              stroke-width=".5"
                                              d="M21 1v20.16H.84V1z"></path>
                                        <path class="fill-current"
                                              d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                        </path>
                                    </g>
                                </svg>
                                Back to Posts
                            </a>
                            <div class="flex gap-x-2">
                                <span
                                      class="px-4 py-1 border border-blue-300 rounded-full text-xs font-medium text-blue-300">
                                    <a href="/search?tag={{ $post->tag->url }}">
                                        {{ $post->tag->name }}
                                    </a>
                                </span>
                                <span
                                      class="px-4 py-1 border border-red-300 rounded-full text-xs font-medium text-red-300">
                                    <a href="/search?tag={{ $post->tag->url }}">
                                        Updates
                                    </a>
                                </span>
                            </div>
                        </div>

                        <h3
                            class="mt-14 text-xl font-medium leading-6 text-gray-900 group-hover:text-gray-600 min-[300px]:mt-7 min-[600px]:mt-14 md:text-2xl">
                            {!! $post->title !!}
                        </h3>

                        {{-- Use {!! !!} for Any Content Containing HTML --}}
                        {{-- {!! $post->body !!} --}}
                        <p class="mt-7 whitespace-pre-wrap text-sm leading-6 text-gray-600">
                            {{ $post->body }}
                        </p>
                    </div>
                </article>
            </div>
            </x-slot>
            <x-slot:footer>
                <x-footer></x-footer>
                </x-slot>
</x-layout>