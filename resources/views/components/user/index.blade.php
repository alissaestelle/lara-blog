<div>
    <div class="base:ml-5">
        <div
            class="my-7 w-full flex flex-col sm:grid sm:grid-cols-3 sm:gap-x-6 md:gap-x-8 lg:gap-x-12">
            
            {{-- Article Nav Bar: Mobile --}}
            <div class="w-full flex items-center justify-between gap-x-4 sm:hidden">
                <a
                    href="/"
                    class="transition-colors duration-300 relative inline-flex items-center text-md whitespace-nowrap hover:text-blue-500">
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
                <div class="flex flex-wrap justify-end gap-2">
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
            {{--
                <div
                class="hidden sm:col-span-4 sm:w-full sm:flex sm:items-center sm:justify-between">
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
            --}}

            <aside class="border border-violet-200 rounded-xl">
                <div class="py-2 text-center">
                    <p
                        class="pb-2 font-mono text-2xl font-medium"
                        style="font-family: 'Courier New', Courier, monospace">
                        Side Bar
                    </p>
                </div>
            </aside>

            <section class="sm:col-span-2">
                <form
                    method="POST"
                    action="/admin/post/store"
                    enctype="multipart/form-data"
                    class="">
                    @csrf
                    <input type="hidden" name="authorID" value="{{ auth()->id() }}" />

                    {{--
                        <div class="mt-8 md:mt-12">
                        <div>
                        <div
                        class="mt-2 flex flex-col justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
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
                        for="image"
                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none hover:text-indigo-400">
                        <div id="upload-file">
                        <span>Upload a File</span>
                        <p class="text-xs leading-5">
                        or Drag and Drop
                        </p>
                        </div>
                        </label>
                        <div class="flex items-center justify-center">
                        <input
                        id="image"
                        type="file"
                        name="image"
                        accept="image/*"
                        class="hidden" />
                        </div>
                        </div>
                        <div
                        class="mt-2 flex flex-col italic text-xs leading-4 text-gray-400">
                        <p>PNG, JPG, GIF</p>
                        <p>10MB Max</p>
                        </div>
                        </div>
                        @error('image')
                        <p class="mt-2 text-xs text-red-500 text-center">
                        {{ $message }}
                        </p>
                        @enderror
                        </div>
                        </div>
                        
                        @if (isset($tags) && $tags->count() > 0)
                        <div x-cloak x-data="{ show: false }">
                        <label for="tags" type="hidden"></label>
                        <div
                        @click="show = !show"
                        @click.away="show = false"
                        class="relative mt-4 rounded-xl bg-gray-100">
                        <div
                        class="pr-10 pl-3 py-1.5 relative w-full rounded-xl text-left font-medium shadow-sm ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm sm:leading-6">
                        <span
                        id="tag-label"
                        class="block truncate text-gray-900">
                        Tags
                        </span>
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
                        
                        <ul
                        x-show="show"
                        id="tags-list"
                        class="mt-2 py-1 absolute z-10 max-h-60 w-full overflow-auto rounded-xl bg-gray-100 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm">
                        @foreach ($tags as $t)
                        <li
                        class="pr-9 pl-3 py-2 relative w-full cursor-default select-none hover:bg-[#D8BFD8] hover:text-white focus:bg-[#D8BFD8] focus:text-white">
                        <input
                        id="{{ $t->id }}"
                        type="hidden"
                        value="{{ $t->id }}" />
                        <span class="block truncate font-normal">
                        {{ $t->name }}
                        </span>
                        <span
                        class="pr-4 absolute inset-y-0 right-0 flex items-center text-gray-100">
                        <svg
                        id="checkmark"
                        class="hidden h-5 w-5"
                        viewBox="0 0 20 20"
                        fill="currentColor">
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
                        @error('tagID')
                        <p class="mt-2 pl-1 text-xs text-red-500 text-center">
                        {{ $message }}
                        </p>
                        @enderror
                        </div>
                        @endif
                        </div>
                    --}}

                    <div class="pt-2 border-b border-gray-200">
                        <p
                            class="pb-2 font-mono text-3xl font-medium"
                            style="font-family: 'Courier New', Courier, monospace">
                            User Settings
                        </p>
                    </div>

                    {{-- <div class="flex gap-10 mt-10 tracking-wide"> --}}
                    <div class="mt-10 pl-1">
                        <label
                            for="photo"
                            class="block leading-6 font-mono font-medium text-xl text-gray-900"
                            style="font-family: 'Courier New', Courier, monospace">
                            Profile Photo
                        </label>
                        <div class="mt-2 flex items-center gap-x-3">
                            <svg
                                class="h-24 w-24 text-gray-300"
                                viewBox="2 1 21 21"
                                fill="currentColor"
                                aria-hidden="true">
                                <path
                                    fill-rule="evenodd"
                                    d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <button
                                type="button"
                                class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                Change
                            </button>
                        </div>
                    </div>

                    <div class="mt-6 pl-1 grow w-full flex flex-col">
                        <label
                            for="username"
                            class="block leading-6 text-sm font-medium text-gray-900">
                            Username
                        </label>
                        <div
                            class="flex w-full h-full items-center leading-6 text-sm text-gray-600">
                            <div
                                class="py-2 flex items-center w-full h-auto border-b border-gray-200">
                                <span
                                    class="flex items-center text-gray-500 select-none sm:text-sm">
                                    workcation.com/
                                </span>
                                <input
                                    type="text"
                                    name="username"
                                    id="username"
                                    autocomplete="username"
                                    class="block w-full resize-none bg-transparent font-sans text-sm text-gray-900 placeholder:text-gray-400 placeholder:whitespace-normal placeholder:tracking-wide focus-visible:outline-none"
                                    placeholder="janesmith" />
                            </div>
                        </div>
                    </div>
                    {{-- </div> --}}

                    {{--
                        <div class="mt-10">
                        <div
                        class="font-mono text-3xl font-medium border-b border-gray-200 focus-within:outline-none"
                        style="font-family: 'Courier New', Courier, monospace">
                        <label for="title" class="hidden"></label>
                        <input
                        id="title"
                        type="text"
                        name="title"
                        value="{{ old('title') }}"
                        class="p-1 block w-full border-0 border-transparent bg-transparent text-gray-900 leading-6 placeholder:font-['Courier New'] placeholder:text-3xl placeholder:text-gray-400 placeholder:whitespace-normal focus-visible:outline-none @error('title') placeholder:text-red-500 @enderror"
                        placeholder="@error('title') {{ $message }} @else Add Title Here @enderror" />
                        <input id="url" type="hidden" name="url" />
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
                        class="px-1.5 py-1 block w-full resize-none bg-transparent font-sans text-sm text-gray-900 placeholder:text-gray-400 placeholder:font-light placeholder:tracking-wide placeholder:whitespace-normal focus-visible:outline-none @error('excerpt') placeholder:text-red-500 @enderror"
                        placeholder="@error('excerpt') {{ $message }} @elseAddan Excerpt @enderror">{{ old('excerpt') }}</textarea>
                        </div>
                        </div>
                        </div>
                        <div
                        class="mt-12 leading-6 text-gray-600 rounded-lg border border-gray-200 shadow-sm text-sm">
                        <label for="body" class="hidden"></label>
                        <div class="overflow-hidden">
                        <textarea
                        name="body"
                        rows="10"
                        class="px-1.5 py-1 block w-full resize-none bg-transparent font-sans text-gray-900 placeholder:text-gray-400 placeholder:font-light placeholder:tracking-wide placeholder:whitespace-normal focus:outline-none @error('body') placeholder:text-red-500 @enderror"
                        placeholder="@error('body') {{ $message }} @elseAddContent Here @enderror">{{ old('body') }}</textarea>
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
                    --}}
                </form>
            </section>

            {{-- Post Form --}}
        </div>
    </div>
</div>
