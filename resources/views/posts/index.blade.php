@php
    $display = true;
@endphp

<x-app.layout>
    <x-slot:header>
        <x-app.header :$display />
    </x-slot>
    <x-slot:main>
        @if ($posts->count())
            <div class="p-7">
                <div class="element flex max-w-80 mx-auto pb-7 text-xl sm:max-w-none base:text-2xl">
                    @if ($results->count())
                        <p>Posts by:</p>
                        @foreach ($results as $tag)
                            @php
                                $tag = Str::replace('-', ' ', $tag)
                            @endphp

                            @if ($loop->count === 1)
                                <p id="single" class="value text-amber-600 right-0">
                                    {{ ucwords($tag) }}
                                </p>
                            @elseif ($loop->even)
                                <p id="even" class="value text-amber-600 right-0">
                                    {{ ucwords($tag) }}
                                </p>
                            @else
                                <p id="odd" class="value text-emerald-600 right-0">
                                    {{ ucwords($tag) }}
                                </p>
                            @endif
                        @endforeach
                    @endif
                </div>

                <div
                    class="flex flex-col gap-10 mx-auto sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-16 base:grid-cols-3 lg:gap-x-8">
                    @foreach ($posts as $post)
                        <x-post :$post />
                    @endforeach
                </div>
                <div class="mb-5">
                    {{ $posts->links() }}
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
