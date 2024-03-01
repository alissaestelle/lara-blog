<x-layout>
    <x-slot:banner>
        <x-banner></x-banner>
    </x-slot>
    <x-slot:main>
        <div
            class="mx-auto mt-10 max-w-2xl border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            <article class="flex items-center justify-center">
                <div class="flex flex-col items-start">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="{{ $post->date }}" class="text-gray-500">
                            {{ date('F jS, Y', $post->date) }}
                        </time>
                        <a
                            href="#"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">
                            {{ $post->tag }}
                        </a>
                    </div>
                    <div class="group relative">
                        <h3
                            class="mt-4 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                            <span class="absolute inset-0"></span>
                            {!! $post->title !!}
                        </h3>
                        <div class="flex items-center gap-8">
                            <div>
                                {{-- Use {!! !!} for Any Content Containing HTML --}}
                                {!! $post->body !!}
                            </div>
                            <div class="min-w-fit">
                                <a
                                    href="/"
                                    class="relative z-10 rounded-full bg-fuchsia-900 px-6 py-1.5 font-medium text-white hover:border hover:bg-gray-50 hover:text-fuchsia-900">
                                    View All
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </x-slot>
</x-layout>
