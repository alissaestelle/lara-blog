<x-app.layout>
    <x-slot:nav>
        <x-app.nav />
    </x-slot>
    <x-slot:main>
        <div class="3xs:h-20"></div>
        <x-app.header />
        @if ($posts->count())
            <div class="pb-12 w-full border-t border-gray-200 xs:px-2.5">
                <div
                    class="mx-auto flex flex-col gap-y-8 w-full max-w-80 xs:grid xs:grid-cols-3 xs:gap-x-2 xs:gap-y-16 xs:max-w-none xs:w-auto sm:gap-x-4 md:gap-x-6 lg:gap-x-8">
                    <div class="pt-10 xs:col-span-3">
                        <div class="element px-2 flex text-2xl">
                            @if ($results->count())
                                <p>Posts by</p>
                                @foreach ($results as $tag)
                                    @php
                                        $tag = Str::replace('-', ' ', $tag)
                                    @endphp

                                    @if ($loop->count === 1)
                                        <p id="single" class="value text-amber-600 left-[135px]">
                                            {{ ucwords($tag) }}
                                        </p>
                                    @elseif ($loop->even)
                                        <p id="even" class="value text-amber-600 left-[135px]">
                                            {{ ucwords($tag) }}
                                        </p>
                                    @else
                                        <p id="odd" class="value text-emerald-600 left-[135px]">
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

                    <div class="mb-5">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        @else
            <p class="p-12 text-xl text-center">No Posts Found 🥲</p>
        @endif
    </x-slot>
    <x-slot:footer>
        <x-app.footer />
    </x-slot>
</x-app.layout>
