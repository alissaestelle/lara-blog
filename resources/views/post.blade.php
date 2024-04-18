@php
$fileName = explode('.', $post->image);
$altText = ucfirst($fileName[0]);
@endphp

<x-layout>
    <x-slot:nav>
        <x-nav></x-nav>
        </x-slot>
        <x-slot:main>
            <div class="mx-auto h-full border-t border-gray-200 base:mx-5">
                <article class="my-7 w-full flex flex-col sm:grid sm:grid-cols-6 sm:grid-rows-3 sm:gap-x-12">
                    <div class="w-full flex items-center justify-between gap-x-4 sm:hidden">
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

                    <div class="sm:col-start-1 sm:col-span-2 sm:self-center">
                        <img src="/images/posts/{{ $post->image }}"
                             alt="{{ $post->title }}"
                             class="mt-7 h-40 w-full object-cover object-center rounded-xl">
                        <div class="mt-3 flex flex-col gap-y-1 items-end text-xs">

                            <time datetime="{{ $post->published }}"
                                  class="text-gray-500">
                                {{ date('F jS, Y', strtotime($post->published)) }}
                            </time>
                            <span class="text-xs base:text-sm">
                                By
                                <a href="/author/{{ $post->author->url }}">
                                    {{ $post->author->name }}
                                </a>
                            </span>
                        </div>
                    </div>

                    <div class="group relative sm:col-start-3 sm:col-span-4">
                        <div class="hidden sm:w-full sm:flex sm:items-center sm:justify-between">
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
                            class="mt-14 text-xl font-medium leading-6 text-gray-900 group-hover:text-gray-600 min-[300px]:mt-7 sm:mt-14 md:text-2xl">
                            {{ $post->title }}
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