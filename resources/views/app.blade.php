<x-layout>
    <x-slot:nav>
        <x-nav></x-nav>
    </x-slot>
    <x-slot:main>
        <x-slot:header>
            <x-header></x-header>
        </x-slot>
        <div class="mx-auto">
            <x-slot:featured>
                <x-featured></x-featured>
            </x-slot>

            <div class="pt-12 border-t border-gray-200 min-[600px]:px-5">
            <div
                class="flex flex-col gap-y-8 min-[500px]:grid min-[500px]:grid-cols-3 min-[500px]:gap-x-8 min-[500px]:gap-y-16 lg:gap-x-10">
                @foreach ($posts as $post)
                    <article class="flex flex-col items-start w-full max-w-80 mx-auto">
                        <img
                            src="../images/posts/{{ $images[$loop->index] }}"
                            class="h-32 self-stretch object-cover object-bottom rounded-xl md:h-48 md:object-center"
                            alt="" />

                        <div class="mt-2 flex items-center gap-x-4 text-xs">
                            <time
                                datetime="{{ $post->published }}"
                                {{-- class="{{ $loop->first ? 'text-fuchsia-800' : 'text-gray-500' }}" --}}>
                                {{ date('F jS, Y', strtotime($post->published)) }}
                            </time>
                            <a
                                href="/tag/{{ $post->tag->url }}"
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
        </div>
    </div>
    </x-slot>
</x-layout>
