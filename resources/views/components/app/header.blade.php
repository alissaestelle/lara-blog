@php
    $authorSearch = request('author') ?? false;
    $tagSearch = request('tag') ?? false;
@endphp

<div
    class="flex flex-col gap-4 mx-auto pt-14 pb-7 text-center 2xs:px-7 xs:px-0 xs:pb-0 xs:text-left lg:pt-20">
    
    <div>
        <a href="/">
            <h2
                class="mt-0 font-mono text-3xl leading-6 font-medium text-gray-900 hover:text-gray-600 base:text-4xl"
                style="font-family: 'Courier New', Courier, monospace">
                Untitled #777
            </h2>
        </a>
        <p class="mt-1 text-md leading-8 font-light text-gray-600 md:text-lg">
            <span class="italic">exploring a garden of forking paths</span>
        </p>
    </div>

    <div
        class="flex flex-wrap justify-center gap-3.5 text-sm font-medium xs:flex-nowrap xs:justify-start">

        <x-ui.tags />

        {{-- Search --}}
        <div
            class="relative flex items-center w-full border rounded-xl md:w-72 lg:inline-flex">
            <form method="GET" action="/search" class="mb-0 w-full">
                @if ($authorSearch)
                    <input type="hidden" name="author" value="{{ $authorSearch }}" />
                @endif

                @if ($tagSearch)
                    <input type="hidden" name="tag" value="{{ $tagSearch }}" />
                @endif

                <input
                    type="text"
                    name="keyword"
                    placeholder="Search"
                    class="px-3 py-2 w-full text-gray-400 rounded-xl placeholder-gray-500" />
            </form>
        </div>
    </div>
</div>
