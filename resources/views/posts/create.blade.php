<x-app.layout>
    <x-slot:nav>
        <x-app.nav />
    </x-slot>
    <x-slot:main>
        <div class="px-6 border-t border-gray-200 lg:mx-8">
            <div class="base:mx-5 md:mx-6">
                {{-- Article Nav Bar: Mobile --}}
                <div
                    class="my-7 w-full flex flex-col xs:px-6 sm:px-4 sm:grid sm:grid-cols-6 sm:gap-x-8 md:px-2 lg:px-0 lg:gap-x-12">
                    <div class="w-full flex items-center justify-between gap-x-4 sm:hidden">
                        <a
                            href="/"
                            class="transition-colors duration-300 relative inline-flex items-center text-md hover:text-blue-500">
                            <svg width="20" height="30" viewBox="7 0 20 20">
                                <g fill="none" fill-rule="evenodd">
                                    <path
                                        stroke="#000"
                                        stroke-opacity=".012"
                                        stroke-width=".5"
                                        d="M21 1v20.16H.84V1z"></path>
                                    <path
                                        class="fill-current"
                                        d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                                </g>
                            </svg>
                            Back to Posts
                        </a>
                        <div class="flex gap-2">
                            <span
                                class="px-4 py-1 border border-blue-300 rounded-full text-xs font-medium text-blue-300 text-center">
                                Tag
                            </span>
                            <span
                                class="px-4 py-1 border border-red-300 rounded-full text-xs font-medium text-red-300 text-center">
                                Tag
                            </span>
                        </div>
                    </div>

                    {{-- Article Nav Bar: Desktop --}}
                    <div
                        class="hidden sm:col-start-3 sm:col-span-4 sm:w-full sm:flex sm:items-center sm:justify-between">
                        <a
                            href="/"
                            class="transition-colors duration-300 relative inline-flex items-center text-md hover:text-blue-500">
                            <svg width="20" height="30" viewBox="7 0 20 20">
                                <g fill="none" fill-rule="evenodd">
                                    <path
                                        stroke="#000"
                                        stroke-opacity=".012"
                                        stroke-width=".5"
                                        d="M21 1v20.16H.84V1z"></path>
                                    <path
                                        class="fill-current"
                                        d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                                </g>
                            </svg>
                            Back to Posts
                        </a>
                        <div class="flex gap-2">
                            <span
                                class="px-4 py-1 border border-blue-300 rounded-full text-xs font-medium text-blue-300">
                                Tag
                            </span>
                            <span
                                class="px-4 py-1 border border-red-300 rounded-full text-xs font-medium text-red-300">
                                Tag
                            </span>
                        </div>
                    </div>

                    {{-- Post Form --}}

                    <form
                        action="POST"
                        href="/admin/post/store"
                        class="sm:col-span-6 sm:grid sm:grid-cols-6 sm:gap-x-8 lg:gap-x-12">
                        @csrf
                        {{-- Left Sidebar: Image Upload x Tags --}}
                        <div class="mt-8 md:mt-12 sm:col-span-2">
                            <div>
                                <label for="image" class="hidden"></label>
                                <div
                                    class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                    <div class="text-center">
                                        <svg
                                            class="mx-auto h-12 w-12 text-gray-300"
                                            viewBox="0 0 24 24"
                                            fill="currentColor"
                                            aria-hidden="true">
                                            <path
                                                fill-rule="evenodd"
                                                d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <div
                                            class="mt-4 flex flex-col text-sm leading-5 text-gray-600">
                                            <label
                                                for="file-upload"
                                                class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none hover:text-indigo-400">
                                                <span>Upload a File</span>
                                                <input
                                                    name="file-upload"
                                                    type="file"
                                                    class="sr-only" />
                                            </label>
                                            <p class="text-xs leading-5">or Drag and Drop</p>
                                        </div>
                                        <div
                                            class="mt-2 flex flex-col italic text-xs leading-4 text-gray-400">
                                            <p>PNG, JPG, GIF</p>
                                            <p>10MB Max</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if ($tags->count() > 0)
                                <div class="mt-4 flex items-center font-medium">
                                    <div
                                        class="px-3 py-2 relative flex w-full bg-gray-100 rounded-xl">
                                        <select
                                            name="tag"
                                            class="custom-select w-full bg-transparent rounded-xl cursor-pointer text-sm focus:outline-none">
                                            <option>Tags</option>
                                            @foreach ($tags as $t)
                                                <option value="{{ $t->url }}">
                                                    {{ $t->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <x-ui.svg name="↓" />
                                    </div>
                                </div>
                            @endif

                            @if ($tags->count() > 0)
                                <div x-cloak x-data="{ show: false }">
                                    <label
                                        for="tags"
                                        {{-- id="tag-menu" --}}
                                        type="hidden"
                                        class="block text-sm font-medium leading-6 text-gray-900"></label>
                                    <div
                                        @click="show = !show"
                                        @click.away="show = false"
                                        class="relative mt-4 rounded-xl bg-gray-100">
                                        <div
                                            class="pr-10 pl-3 py-1.5 relative w-full rounded-xl text-left text-gray-900 font-medium shadow-sm ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm sm:leading-6">
                                            <span id="tag-label" class="block truncate">Tags</span>
                                            <span
                                                class="pr-2 absolute inset-y-0 right-0 flex items-center pointer-events-none">
                                                <svg
                                                    class="h-5 w-5 text-gray-900"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
                                                    aria-hidden="true">
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </div>

                                        {{--
                                            Select popover, show/hide based on select state.
                                            
                                            Entering: ""
                                            From: ""
                                            To: ""
                                            Leaving: "transition ease-in duration-100"
                                            From: "opacity-100"
                                            To: "opacity-0"
                                        --}}

                                        <ul
                                            x-show="show"
                                            id="tags-list"
                                            class="mt-2 py-1 absolute z-10 max-h-60 w-full overflow-auto rounded-xl bg-gray-100 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm">

                                            @foreach ($tags as $t)
                                                <li
                                                    class="pr-9 pl-3 py-2 relative w-full cursor-default select-none text-gray-900 hover:bg-[#D8BFD8] focus:bg-[#D8BFD8]">
                                                    <input
                                                        id=""
                                                        type="hidden"
                                                        value="{{ $t->id }}" />
                                                    <span class="block truncate font-normal hover:text-white focus:text-white">
                                                        {{ $t->name }}
                                                    </span>
                                                    <span
                                                        class="pr-4 absolute inset-y-0 right-0 flex items-center text-gray-100 hover:text-gray-100 focus:text-gray-100">
                                                        <svg
                                                            class="h-5 w-5 text-gray-100 hover:text-gray-100 focus:text-gray-100"
                                                            viewBox="0 0 20 20"
                                                            fill="currentColor"
                                                            aria-hidden="true">
                                                            <path
                                                                fill-rule="evenodd"
                                                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        </div>

                        {{-- Main Section: Title x Body --}}
                        <div class="sm:col-start-3 sm:col-span-4">
                            <div class="my-7 sm:my-12">
                                <div
                                    class="font-mono text-3xl font-medium border-b border-gray-200"
                                    style="font-family: 'Courier New', Courier, monospace">
                                    <label for="title" class="hidden"></label>
                                    <input
                                        type="text"
                                        name="title"
                                        value=""
                                        class="p-1 block w-full border-0 bg-transparent text-gray-900 leading-6 placeholder:font-['Courier New'] placeholder:text-3xl placeholder:text-gray-400 focus:outline-none"
                                        placeholder="Add Title Here" />
                                </div>
                                <div class="mt-4 flex items-center gap-4">
                                    <div id="react-user"></div>
                                    <div
                                        class="w-full leading-6 text-gray-600 rounded-lg border border-gray-200 shadow-sm">
                                        <label for="excerpt" class="hidden"></label>
                                        <div class="overflow-hidden">
                                            <textarea
                                                name="excerpt"
                                                rows="2"
                                                class="px-1.5 py-1 block w-full resize-none bg-transparent font-sans text-sm text-gray-900 placeholder:text-gray-400 placeholder:font-light placeholder:tracking-wide focus:outline-none"
                                                placeholder="Add an Excerpt"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mt-12 leading-6 text-gray-600 rounded-lg border border-gray-200 shadow-sm text-sm">
                                    {{-- <img class="h-40 w-full object-cover object-center rounded-xl md:h-36 lg:h-48" /> --}}
                                    <label for="body" class="hidden"></label>
                                    <div class="overflow-hidden">
                                        <textarea
                                            name="body"
                                            rows="10"
                                            class="px-1.5 py-1 block w-full resize-none bg-transparent font-sans text-gray-900 placeholder:text-gray-400 placeholder:font-light placeholder:tracking-wide focus:outline-none"
                                            placeholder="Add Content Here"></textarea>
                                    </div>
                                </div>
                                <div class="mt-4 pr-0.5 flex justify-end gap-4 text-sm">
                                    <button
                                        type="button"
                                        class="font-medium uppercase tracking-wider leading-6 text-gray-400">
                                        <a href="/notes">Cancel</a>
                                    </button>
                                    <button
                                        type="submit"
                                        class="px-5 py-0.5 inline-flex items-center rounded-2xl bg-transparent text-indigo-600 uppercase tracking-wider font-medium border border-rounded-xl border-indigo-600 hover:bg-violet-200/50 hover:shadow-sm">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-slot>
    <x-slot:footer>
        <x-app.footer />
    </x-slot>
</x-app.layout>

<style>
    [x-cloak] {
        display: none !important;
    }
</style>

<script type="text/javascript">
    const tagsList = document.getElementById('tags-list');

    tagsList.addEventListener('click', e => {
        const tagLabel = document.getElementById('tag-label');
        const listItem = e.target.closest("li");
        const input = listItem.children[0];
        const span = listItem.children[1].innerText;

        input.setAttribute("id", "tags");
        tagLabel.innerText = span;

        listItem.style.backgroundColor = '#D8BFD8';
        listItem.style.color = 'white';
    });

    // const options = Array.from(elements.options);

    // console.log(elements.options);
    // const options = Object.entries(Object.values(elements.options));

    // const options = [...elements.options].map((e) => e.value);
</script>
