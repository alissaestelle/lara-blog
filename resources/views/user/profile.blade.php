@php
    $display = true;

    $active = 'hover:text-[#3B82F6] focus:text-[#3B82F6]';
    $selected = 'text-[#D875C7]';
@endphp

<x-app.auth>
    <x-slot:main>
        <div class="h-full p-7">
            <div class="w-full flex flex-col sm:grid sm:grid-cols-4 sm:gap-x-4">
                {{--
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
                --}}

                <div class="border-b border-gray-200 sm:col-span-4">
                    <p
                        class="pb-2 font-mono text-3xl font-medium"
                        style="font-family: 'Courier New', Courier, monospace">
                        User Profile
                    </p>
                </div>

                <aside>
                    <div class="mt-7">
                        <p
                            class="mb-7 font-mono text-xl font-medium"
                            style="font-family: 'Courier New', Courier, monospace">
                            Side Bar
                        </p>

                        <ul
                            class="font-mono text-md font-medium text-justify text-left"
                            style="font-family: 'Courier New', Courier, monospace">
                            {{--
                                <li class="pb-1">
                                <a href="/">Home</a>
                                </li>
                            --}}
                            <li class="pb-1">
                                <a
                                    href="/admin/posts"
                                    class="{{ request()->is('admin/posts') ? $selected : $active }}">
                                    All Posts
                                </a>
                            </li>
                            <li class="pb-1">
                                <a
                                    href="/profile"
                                    class="{{ request()->is('profile') ? $selected : $active }}">
                                    Profile
                                </a>
                            </li>
                            <li class="pb-1">
                                <a
                                    href="/resources"
                                    class="{{ request()->is('resources') ? $selected : $active }}">
                                    Resources
                                </a>
                            </li>
                            <li class="pb-1">
                                <a
                                    href="/archive"
                                    class="{{ request()->is('archive') ? $selected : $active }}">
                                    Archive
                                </a>
                            </li>
                            <li class="pb-1">
                                <a
                                    href="/support"
                                    class="{{ request()->is('support') ? $selected : $active }}">
                                    Support
                                </a>
                            </li>
                            <li class="pb-1">
                                <a
                                    href="/contact"
                                    class="{{ request()->is('contact') ? $selected : $active }}">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>

                <section class="mt-7 px-7 border border-gray-200 rounded-xl sm:col-span-3">
                    <div class="flex flex-col items-center my-10">
                        <form
                            method="POST"
                            action="/admin/post/store"
                            enctype="multipart/form-data"
                            class="flex flex-col items-center">
                            @csrf
                            <input type="hidden" name="authorID" value="{{ auth()->id() }}" />
                            <label
                                for="photo"
                                class="w-fit leading-6 font-mono font-medium text-xl text-gray-900"
                                style="font-family: 'Courier New', Courier, monospace">
                                Avatar Photo
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
                        </form>
                    </div>

                    <div class="grow flex gap-4 w-full mb-10">
                        <form
                            method="POST"
                            action="/admin/post/store"
                            enctype="multipart/form-data"
                            class="basis-1/2">
                            @csrf
                            <input type="hidden" name="authorID" value="{{ auth()->id() }}" />
                            <div class="flex flex-col gap-4">
                                <p
                                    class="w-fit leading-6 font-mono font-medium text-xl text-gray-900"
                                    style="font-family: 'Courier New', Courier, monospace">
                                    Basic Info
                                </p>
                                <div class="flex flex-col">
                                    <label
                                        for="name"
                                        class="block p-1 leading-6 text-sm font-medium text-gray-900">
                                        Full Name
                                    </label>
                                    <div
                                        class="p-2 flex items-center w-full h-auto border border-gray-200 rounded-xl">
                                        <input
                                            id="name"
                                            name="name"
                                            type="text"
                                            autocomplete="name"
                                            class="block w-full resize-none bg-transparent font-sans text-sm text-gray-900 placeholder:text-gray-400 placeholder:whitespace-normal placeholder:tracking-wide focus-visible:outline-none"
                                            placeholder="Alissa Wiley" />
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <label
                                        for="username"
                                        class="block p-1 leading-6 text-sm font-medium text-gray-900">
                                        Username
                                    </label>
                                    <div
                                        class="p-2 flex items-center w-full h-auto border border-gray-200 rounded-xl">
                                        <input
                                            id="username"
                                            name="username"
                                            type="text"
                                            autocomplete=""
                                            class="block w-full resize-none bg-transparent font-sans text-sm text-gray-900 placeholder:text-gray-400 placeholder:whitespace-normal placeholder:tracking-wide focus-visible:outline-none"
                                            placeholder="alissa.estelle" />
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <label
                                        for="email"
                                        class="block p-1 leading-6 text-sm font-medium text-gray-900">
                                        Email
                                    </label>
                                    <div
                                        class="p-2 flex items-center w-full h-auto border border-gray-200 rounded-xl">
                                        <input
                                            id="email"
                                            name="email"
                                            type="text"
                                            autocomplete="email"
                                            class="block w-full resize-none bg-transparent font-sans text-sm text-gray-900 placeholder:text-gray-400 placeholder:whitespace-normal placeholder:tracking-wide focus-visible:outline-none"
                                            placeholder="alissa@wiley.com" />
                                    </div>
                                </div>
                                <button
                                    class="w-fit my-2 px-5 py-0.5 inline-flex items-center rounded-2xl bg-transparent text-sm text-indigo-600 uppercase tracking-wider font-medium border border-rounded-xl border-indigo-600 hover:bg-violet-200/50 hover:shadow-sm">
                                    Update
                                </button>
                            </div>
                        </form>

                        <form
                            method="POST"
                            action="/admin/post/store"
                            enctype="multipart/form-data"
                            class="basis-1/2">
                            @csrf
                            <input type="hidden" name="authorID" value="{{ auth()->id() }}" />
                            <div class="flex flex-col gap-4">
                                <p
                                    class="w-fit leading-6 font-mono font-medium text-xl text-gray-900"
                                    style="font-family: 'Courier New', Courier, monospace">
                                    Update Password
                                </p>
                                <div class="flex flex-col">
                                    <label
                                        for=""
                                        class="block p-1 leading-6 text-sm font-medium text-gray-900">
                                        Current Password
                                    </label>
                                    <div
                                        class="p-2 flex items-center w-full h-auto border border-gray-200 rounded-xl">
                                        <input
                                            id=""
                                            name=""
                                            type="text"
                                            autocomplete="current-password"
                                            class="block w-full resize-none bg-transparent font-sans text-sm text-gray-900 placeholder:text-gray-400 placeholder:whitespace-normal placeholder:tracking-wide focus-visible:outline-none"
                                            placeholder="" />
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <label
                                        for=""
                                        class="block p-1 leading-6 text-sm font-medium text-gray-900">
                                        New Password
                                    </label>
                                    <div
                                        class="p-2 flex items-center w-full h-auto border border-gray-200 rounded-xl">
                                        <input
                                            id=""
                                            name=""
                                            type="text"
                                            autocomplete="new-password"
                                            class="block w-full resize-none bg-transparent font-sans text-sm text-gray-900 placeholder:text-gray-400 placeholder:whitespace-normal placeholder:tracking-wide focus-visible:outline-none"
                                            placeholder="" />
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <label
                                        for=""
                                        class="block p-1 leading-6 text-sm font-medium text-gray-900">
                                        Confirm New Password
                                    </label>
                                    <div
                                        class="p-2 flex items-center w-full h-auto border border-gray-200 rounded-xl">
                                        <input
                                            id=""
                                            name=""
                                            type="text"
                                            autocomplete="confirm-password"
                                            class="block w-full resize-none bg-transparent font-sans text-sm text-gray-900 placeholder:text-gray-400 placeholder:whitespace-normal placeholder:tracking-wide focus-visible:outline-none"
                                            placeholder="" />
                                    </div>
                                </div>
                                <button
                                    class="w-fit my-2 px-5 py-0.5 inline-flex items-center rounded-2xl bg-transparent text-sm text-indigo-600 uppercase tracking-wider font-medium border border-rounded-xl border-indigo-600 hover:bg-violet-200/50 hover:shadow-sm">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </x-slot>
    <x-slot:footer>
        <x-app.footer :$display />
    </x-slot>
</x-app.auth>
