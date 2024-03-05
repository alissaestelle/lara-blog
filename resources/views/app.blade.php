<x-layout>
    <x-slot:banner>
        <x-banner></x-banner>
    </x-slot>
    <x-slot:main>
        <div
            class="mx-auto mt-10 grid max-w-2xl grid-cols-2 gap-x-10 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            @foreach ($posts as $post)
                {{-- @dd($loop) --}}
                <article class="flex max-w-80 flex-col items-start">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time
                            datetime="{{ $post->published }}"
                            {{-- class="{{ $loop->first ? 'text-fuchsia-800' : 'text-gray-500' }}" --}}>
                            {{ date('F jS, Y', strtotime($post->published)) }}
                        </time>
                        <a
                            href="/tag/{{ $post->tag->url }}"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">
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
                        <div class="mt-2 text-sm">

                            {{-- @dd($post->author->name) --}}
                            By 
                                <a href="/author/{{ $post->author->url }}">
                                    {{ $post->author->name }}
                                </a>
                        </div>

                        <p
                            class="{{ $loop->first ? 'text-fuchsia-800' : 'text-gray-600' }} mt-5 line-clamp-3 text-sm leading-6">
                            {{ $post->excerpt }}
                        </p>
                    </div>
                </article>
            @endforeach
        </div>
    </x-slot>
</x-layout>
