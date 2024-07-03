@php
    $authorSearch = request('author') ?? false;
    $tagSearch = request('tag') ?? false;
@endphp

<div
    class="relative flex flex-col gap-4 text-center sm:text-left md:mt-20">
    
    <div class="sm:pl-1">
        <a href="/">
            <h2
                class="mt-0 font-mono text-3xl leading-6 font-medium text-gray-900 hover:text-gray-600 md:text-4xl"
                style="font-family: 'Courier New', Courier, monospace">
                Untitled #777
            </h2>
        </a>
        <p class="mt-1 text-md leading-8 font-light text-gray-600 md:text-lg">
            <span class="italic">exploring a garden of forking paths</span>
        </p>
    </div>

    <div
        class="flex flex-wrap justify-center gap-2 px-3 text-sm font-medium xs:px-7 sm:justify-start sm:flex-nowrap sm:px-0 base:gap-3">

        <div class="w-full max-w-72 sm:max-w-none sm:basis-1/2 base:basis-auto base:max-w-52 md:max-w-44">
            <x-ui.tags />
        </div>

        {{-- Search --}}
        <div
            class="relative flex items-center w-full max-w-72 border rounded-xl sm:max-w-none sm:basis-1/2 base:basis-full md:max-w-80 lg:inline-flex">
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
