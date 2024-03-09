<x-layout>
    <x-slot:nav>
        <x-nav></x-nav>
        </x-slot>
        <x-slot:main>
            <div class="h-10"></div>
            <div class="mx-auto border-t border-gray-200 pt-10">
                <div class="">
                    <article class="grid grid-cols-6 gap-x-20">
                        <div class="col-start-1 col-span-2 self-center">
                            <div class="mt-4 flex flex-col gap-y-4 items-end text-xs">
                                <div>
                                    <time datetime="{{ $post->published }}"
                                          class="text-gray-500">
                                        {{ date('F jS, Y', strtotime($post->published)) }}
                                    </time>
                                </div>
                                <div>
                                    <span class="mr-1 text-sm">
                                        By
                                        <a href="/author/{{ $post->author->url }}">
                                            {{ $post->author->name }}
                                        </a>
                                        in
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-start-3 col-span-4 group relative">
                            <div class="w-full flex items-center justify-between gap-x-4">
                                <a href="#"
                                   class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
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
                                {{--
                                <a href="/"
                                   class="relative z-10 rounded-full bg-fuchsia-900 px-5 py-1 font-medium text-white hover:border hover:bg-gray-50 hover:text-fuchsia-900">
                                    Back
                                </a>
                                --}}
                                <span
                                      class="px-3 py-1.5 relative z-10 rounded-full bg-gray-50 text-sm font-medium border text-gray-600 hover:bg-gray-100">
                                    <a href="/tag/{{ $post->tag->url }}">
                                        {{ $post->tag->name }}
                                    </a>
                                </span>
                            </div>
                            <h3 class="mt-10 text-xl font-medium leading-6 text-gray-900 group-hover:text-gray-600">
                                {!! $post->title !!}
                            </h3>
                            <div>
                                {{-- Use {!! !!} for Any Content Containing HTML --}}
                                {{-- {!! $post->body !!} --}}
                                <p class="mt-10 line-clamp-3 text-sm leading-6 text-gray-600">
                                    {{ $post->body }}
                                </p>
                            </div>
                            <div class="mt-6">
                                <a href="/"
                                   class="relative z-10 rounded-full bg-fuchsia-900 px-5 py-1 font-medium text-white hover:border hover:bg-gray-50 hover:text-fuchsia-900">
                                    Back
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            </x-slot>
            <x-slot:footer>
                <x-footer></x-footer>
                </x-slot>
</x-layout>