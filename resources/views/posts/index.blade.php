<x-layout>
    <x-slot:nav>
        <x-nav />
        </x-slot>
        <x-slot:main>
            <div class="3xs:h-20"></div>
            <x-header />
            @if ($posts->count())
            <div class="mx-auto pb-12 w-full border-t border-gray-200 base:px-5">
                <div class="mx-5 flex flex-col gap-y-8 xs:grid xs:grid-cols-3 xs:gap-x-8 xs:gap-y-16 lg:gap-x-10">
                    <div class="pt-12">
                        <div class="element flex text-xl">
                            @if ($results->count())
                            <p>Posts by</p>
                            @foreach ($results as $tag)
                            @php
                            $tag = Str::replace('-', ' ', $tag)
                            @endphp

                            @if ($loop->even)
                            <p id="even"
                               class="value text-amber-600 left-[155px]">
                                {{ ucwords($tag) }}
                            </p>
                            @else
                            <p id="odd"
                               class="value text-violet-300 left-[155px]">
                                {{ ucwords($tag) }}
                            </p>
                            @endif
                            @endforeach
                            @endif
                        </div>
                    </div>
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