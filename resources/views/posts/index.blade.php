<x-app.layout>
    <x-slot:main>
        @if ($posts->count())
            <div class="p-7">
                <div class="px-3.5 xs:px-0 md:pt-7">
                    <div class="element flex pb-7 text-xl">
                        @if ($results->count())
                            <p class="pl-1">Posts by:</p>
                            @foreach ($results as $tag)
                                @php
                                    $tag = Str::replace('-', ' ', $tag)
                                @endphp

                                @if ($loop->count === 1)
                                    <p id="single" class="value text-amber-600 right-2">
                                        {{ ucwords($tag) }}
                                    </p>
                                @elseif ($loop->even)
                                    <p id="even" class="value text-amber-600 right-2">
                                        {{ ucwords($tag) }}
                                    </p>
                                @else
                                    <p id="odd" class="value text-emerald-600 right-2">
                                        {{ ucwords($tag) }}
                                    </p>
                                @endif
                            @endforeach
                        @endif
                    </div>

                    <div
                        class="flex flex-col gap-8 mx-auto xs:grid xs:grid-cols-3 xs:gap-x-6 xs:gap-y-16">
                        @foreach ($posts as $post)
                            <x-post :$post />
                        @endforeach
                    </div>
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
