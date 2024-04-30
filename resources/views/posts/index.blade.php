<x-layout>
    <x-slot:nav>
        <x-nav />
    </x-slot>
    <x-slot:main>
        <div class="3xs:h-20"></div>
        <x-header />
        @if ($posts->count())
            <div class="mx-auto pb-12 w-full border-t border-gray-200 base:px-5">
                <div class="pt-12 text-lg base:text-2xl">
                    <div class="element flex">
                            @if ($results->count() > 1)
                            <p>Posts by</p>
                            @foreach ($results as $tag)
                                @php
                                    $tag = Str::replace('-', ' ', $tag)
                                @endphp
                                @if ($loop->even)
                                <p id="even" class="value text-amber-600 left-[175px]">
                                    {{ ucwords($tag) }}
                                </p>
                                @else
                                <p id="odd" class="value text-violet-300 left-[175px]">
                                    {{ ucwords($tag) }}
                                </p>
                                @endif
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                {{--
                    <h2
                    class="font-mono mb-4 text-2xl font-medium leading-6 text-gray-900 hover:text-gray-600"
                    style="font-family: 'Courier New', Courier, monospace"
                    >
                    @foreach ($results as $k => $v)
                    Posts by {{ ucfirst($k) }}
                    @endforeach
                    </h2>
                --}}
                <div
                    class="flex flex-col gap-y-8 xs:grid xs:grid-cols-3 xs:gap-x-8 xs:gap-y-16 lg:gap-x-10"
                >
                    @foreach ($posts as $post)
                        <x-post :$post />
                    @endforeach
                </div>
            </div>
        @else
            <p class="p-12 text-xl text-center">No Posts Found 🥲</p>
        @endif
    </x-slot>
    <x-slot:footer>
        <x-footer />
    </x-slot>
</x-layout>
