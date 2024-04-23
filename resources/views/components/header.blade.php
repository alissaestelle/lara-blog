@php
$tagQuery = request('tag') ?? false;
@endphp

<div class="mx-auto w-full flex flex-col gap-y-4 text-center base:px-5 base:py-6 base:text-left lg:mx-0">
    <div>
        <a href="/">
            <h2
                class="mt-3 text-3xl font-bold tracking-tight leading-6 text-gray-900 hover:text-gray-600 base:text-4xl">
                Untitled #777
            </h2>
        </a>
        <p class="mt-2 text-lg leading-8 text-gray-600">
            <span class="italic">exploring a garden of forking paths</span>
        </p>
    </div>

    <div
         class="my-8 flex justify-center flex-wrap gap-x-4 gap-y-4 text-sm font-medium base:mb-2 base:flex-nowrap base:justify-start">

        <x-tags />

        {{-- Search --}}
        <div class="relative flex flex-1 items-center border rounded-xl base:flex-none lg:inline-flex">
            <form method="GET"
                  action="/search">
                @if ($tagQuery)
                <input type="hidden"
                       name="tag"
                       value="{{ $tagQuery }}">
                @endif
                <input type="text"
                       name="keyword"
                       placeholder="Search"
                       class="px-3 py-2 text-gray-400 rounded-xl placeholder-gray-500" />
            </form>
        </div>
    </div>
</div>