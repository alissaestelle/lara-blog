@php
    $fileName = explode('.', $post->image);
    $altText = ucfirst($fileName[0]);
@endphp

<x-app.layout>
    <x-slot:nav>
        <x-app.nav />
    </x-slot>
    <x-slot:main>
        <div class="px-6 border-t border-gray-200 lg:mx-8">
            <div class="base:mx-5 md:mx-6">
                <article
                    class="my-7 w-full flex flex-col sm:grid sm:grid-cols-6 xs:px-6 sm:px-4 sm:gap-x-8 md:px-2 lg:px-0 lg:gap-x-14">
                    <div class="w-full flex items-center justify-between gap-x-4 sm:hidden">
                        <a
                            href="/"
                            class="transition-colors duration-300 relative inline-flex items-center text-md hover:text-blue-500">
                            <svg width="20" height="30" viewBox="7 0 20 20">
                                <g fill="none" fill-rule="evenodd">
                                    <path
                                        stroke="#000"
                                        stroke-opacity=".012"
                                        stroke-width=".5"
                                        d="M21 1v20.16H.84V1z"></path>
                                    <path
                                        class="fill-current"
                                        d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                                </g>
                            </svg>
                            Back to Posts
                        </a>
                        <div class="flex flex-col gap-y-1 3xs:flex-row 3xs:gap-x-2">
                            <span
                                class="px-4 py-1 border border-blue-300 rounded-full text-xs font-medium text-blue-300 text-center">
                                <a href="/search?tag={{ $post->tag->url }}">
                                    {{ $post->tag->name }}
                                </a>
                            </span>
                            <span
                                class="px-4 py-1 border border-red-300 rounded-full text-xs font-medium text-red-300 text-center">
                                <a href="/search?tag={{ $post->tag->url }}">Updates</a>
                            </span>
                        </div>
                    </div>

                    <div
                        class="hidden sm:col-start-3 sm:col-span-4 sm:w-full sm:flex sm:items-center sm:justify-between">
                        <a
                            href="/"
                            class="transition-colors duration-300 relative inline-flex items-center text-md hover:text-blue-500">
                            <svg width="20" height="30" viewBox="7 0 20 20">
                                <g fill="none" fill-rule="evenodd">
                                    <path
                                        stroke="#000"
                                        stroke-opacity=".012"
                                        stroke-width=".5"
                                        d="M21 1v20.16H.84V1z"></path>
                                    <path
                                        class="fill-current"
                                        d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
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
                                <a href="/search?tag={{ $post->tag->url }}">Updates</a>
                            </span>
                        </div>
                    </div>

                    <div class="mt-8 md:mt-14 sm:col-span-2">
                        <img
                            src="/images/posts/{{ $post->image }}"
                            alt="{{ $post->title }}"
                            class="h-40 w-full object-cover object-center rounded-xl md:h-36 lg:h-40" />
                        <div class="mt-3 flex flex-col gap-y-1 items-end text-xs">
                            <time datetime="{{ $post->published }}" class="text-gray-500">
                                {{ date('F jS, Y', strtotime($post->published)) }}
                            </time>
                            <span class="text-xs base:text-sm">
                                By
                                <a href="/search?author={{ $post->author->url }}">
                                    {{ $post->author->name }}
                                </a>
                            </span>
                        </div>
                    </div>

                    <div class="sm:col-start-3 sm:col-span-4">
                        <div class="my-7 sm:my-14">
                            <h3
                                class="text-xl font-medium leading-6 text-gray-900 group-hover:text-gray-600 md:text-2xl">
                                {{ $post->title }}
                            </h3>

                            {{-- Use {!! !!} for Any Content Containing HTML --}}
                            {{-- {!! $post->body !!} --}}
                            <p class="mt-2 text-sm whitespace-pre-line leading-6 text-gray-600">
                                {{ $post->body }}
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </x-slot>
    <x-slot:footer>
        <x-app.footer />
    </x-slot>
</x-app.layout>
