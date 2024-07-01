@php
    $authorSearch = request('author') ?? false;
    $tagSearch = request('tag') ?? false;
@endphp

<div
    class="mx-auto w-full flex flex-col text-center xs:px-2.5 xs:py-6 xs:text-left base:pt-12 lg:mx-0">
    
    <div>
        <a href="/">
            <h2
                class="font-mono mt-0 text-3xl font-medium leading-6 text-gray-900 hover:text-gray-600 base:text-4xl md:mt-3"
                style="font-family: 'Courier New', Courier, monospace">
                Untitled #777
            </h2>
        </a>
        <p class="mt-2 text-lg leading-8 text-gray-600">
            <span class="italic">exploring a garden of forking paths</span>
        </p>
    </div>

    <div
        class="mx-auto my-8 w-full max-w-80 flex flex-wrap justify-center gap-4 text-sm font-medium xs:mt-6 xs:m-0 xs:max-w-none xs:w-auto base:max-w-[60%] base:flex-nowrap base:justify-start md:max-w-[65%] lg:max-w-[50%]">

        <x-ui.tags />

        {{-- Search --}}
        <div
            class="relative flex-1 flex items-center w-full border rounded-xl base:basis-1/2 md:flex-2 lg:inline-flex">
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
