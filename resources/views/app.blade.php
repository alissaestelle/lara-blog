<x-layout>
    <x-slot name="banner">
        <x-banner></x-banner>
    </x-slot>
    <x-slot name="main">
        <div
            class="mx-auto mt-10 grid max-w-2xl grid-cols-2 gap-x-10 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3"
        >
            @foreach ($posts as $post)
                {{-- @dd($loop) --}}
                <article class="flex max-w-80 flex-col items-start">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time
                            datetime="{{ $post->date }}"
                            class="{{ $loop->first ? 'text-sky-700' : 'text-gray-500' }}"
                        >
                            {{ date('F jS, Y', $post->date) }}
                        </time>
                        <a
                            href="#"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100"
                        >
                            {{ $post->tag }}
                        </a>
                    </div>
                    <div class="group relative">
                        <h3
                            class="mt-4 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600"
                        >
                            <a href="posts/{{ $post->url }}">
                                <span class="absolute inset-0"></span>

                                {{ $post->title }}
                            </a>
                        </h3>

                        <p
                            class="{{ $loop->first ? 'text-fuchsia-800' : 'text-gray-600' }} mt-5 line-clamp-3 text-sm leading-6"
                        >
                            {{ $post->excerpt }}
                        </p>
                    </div>
                </article>
            @endforeach
        </div>
    </x-slot>
</x-layout>
