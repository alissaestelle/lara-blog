{{-- @props(['tags']) --}}

<div class="mx-auto w-full flex flex-col gap-y-4 text-center sm:px-5 sm:py-6 sm:text-left lg:mx-0">
    <div>
        <a href="/">
            <h2 class="mt-3 text-3xl font-bold tracking-tight leading-6 text-gray-900 hover:text-gray-600 sm:text-4xl">
                Untitled #777
            </h2>
        </a>
        <p class="mt-2 text-lg leading-8 text-gray-600">
            <span class="italic">exploring a garden of forking paths</span>
        </p>
    </div>

    <div
         class="my-8 flex justify-center flex-wrap gap-x-4 gap-y-4 text-sm font-medium sm:mb-2 sm:flex-nowrap sm:justify-start">

        {{-- ALPINE DEMO --}}
        {{-- See < Dropdown> Component --}}
            <x-dropdown>
                <x-slot:trigger>
                    <button class="py-2 pl-3 pr-9 mr-9 inline-flex w-full text-sm text-sm font-medium">
                        {{ $tag->name ?? 'Tags' }}
                        <x-svg name='↓'>
                            {{ $slot }}
                        </x-svg>
                    </button>
                    </x-slot>
                    <x-slot:event>
                        <x-anchor href="/">
                            All
                        </x-anchor>
                        @foreach ($tags as $t)
                        <x-anchor active="{{ isset($tag) && $tag->is($t) }}"
                                  href="/tag/{{ $t->url }}">
                            {{ $t->name }}
                        </x-anchor>
                        @endforeach
                        </x-slot>
            </x-dropdown>
            <div class="min-w-28 relative flex flex-1 items-center bg-gray-100 rounded-xl sm:flex-none lg:inline-flex">
                <select class="py-2 pl-3 pr-9 flex-1 appearance-none bg-transparent">
                    <option value="category"
                            disabled
                            selected>Category</option>
                    @foreach ($tags as $tag)
                    <option value="{{ $tag->url }}">{{ $tag->name }}</option>
                    @endforeach
                </select>

                <svg class="transform -rotate-90 absolute pointer-events-none"
                     style="right: 12px"
                     width="22"
                     height="22"
                     viewBox="0 0 22 22">
                    <g fill="none"
                       fill-rule="evenodd">
                        <path stroke="#000"
                              stroke-opacity=".012"
                              stroke-width=".5"
                              d="M21 1v20.16H.84V1z"></path>
                        <path fill="#222"
                              d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                    </g>
                </svg>
            </div>

            <!-- Other Filters -->
            <div class="min-w-28 relative flex flex-1 items-center bg-gray-100 rounded-xl sm:flex-none lg:inline-flex">
                <select class="py-2 pl-3 pr-9 flex-1 appearance-none bg-transparent">
                    <option value="category"
                            disabled
                            selected>Filters</option>
                    <option value="">Option</option>
                    <option value="">Option</option>
                </select>

                <svg class="transform -rotate-90 absolute pointer-events-none"
                     style="right: 12px"
                     width="22"
                     height="22"
                     viewBox="0 0 22 22">
                    <g fill="none"
                       fill-rule="evenodd">
                        <path stroke="#000"
                              stroke-opacity=".012"
                              stroke-width=".5"
                              d="M21 1v20.16H.84V1z"></path>
                        <path fill="#222"
                              d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                    </g>
                </svg>
            </div>

            <!-- Search -->
            <div class="relative flex flex-1 items-center border rounded-xl sm:flex-none lg:inline-flex">
                <form method="GET"
                      action="#">
                    <input type="text"
                           name="search"
                           placeholder="Search"
                           class="px-3 py-2 text-gray-400 rounded-xl placeholder-gray-500" />
                </form>
            </div>
    </div>
</div>