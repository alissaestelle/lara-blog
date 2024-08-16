@php
    $display = true;

    $active = 'hover:text-[#3B82F6] focus:text-[#3B82F6]';
    $selected = 'text-[#D875C7]';
@endphp

<x-app.auth>
    <x-slot:main>
        <div class="h-full p-7 pb-0">
            <div class="h-full w-full flex flex-col sm:grid sm:grid-cols-4 sm:grid-rows-layout sm:gap-x-4">
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
                        Manage Posts
                    </p>
                </div>

                <aside>
                    <div class="py-7">
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
                                    href="/dashboard"
                                    class="{{ request()->is('dashboard') ? $selected : $active }}">
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

                <section class="p-7 pr-0 border-l border-gray-200 sm:col-span-3">
                    <div class="">
                        {{-- <div class="sm:flex sm:items-center">
                            <div class="sm:flex-auto">
                                <h1 class="text-base font-semibold leading-6 text-gray-900">
                                    Users
                                </h1>
                                <p class="mt-2 text-sm text-gray-700">
                                    A list of all the users in your account including their name,
                                    title, email and role.
                                </p>
                            </div>
                            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                                <button
                                    type="button"
                                    class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    Add user
                                </button>
                            </div>
                        </div> --}}
                        {{-- <div class="flow-root"> --}}
                            <div class="border border-gray-200 overflow-x-auto">
                                <table class="divide-y divide-gray-300 rounded-xl">
                                    <thead class="bg-gray-50 rounded-xl">
                                        <tr class="h-12">
                                            <th
                                                scope="col"
                                                class="w-10 px-5 text-left text-sm font-semibold text-gray-900">
                                                Image
                                            </th>
                                            <th
                                                scope="col"
                                                class="w-40 px-5 text-left text-sm font-semibold text-gray-900">
                                                Title
                                            </th>
                                            <th
                                                scope="col"
                                                class="w-20 px-5 text-left text-sm font-semibold text-gray-900">
                                                Author
                                            </th>
                                            <th
                                                scope="col"
                                                class="w-20 px-5 text-left text-sm font-semibold text-gray-900">
                                                Date
                                            </th>
                                            <th
                                                scope="col">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">
                                        @if ($posts->count())
                                            @foreach ($posts as $post)
                                                <tr class="h-20">
                                                    <td
                                                        class="w-10 px-5 text-sm whitespace-nowrap">
                                                        <div class="flex items-center gap-3">
                                                            <div class="h-12 w-12 flex-shrink-0">
                                                                <img
                                                                    src="{{ Vite::image($post->image) }}"
                                                                    class="h-12 w-12 rounded-full"
                                                                    alt="{{ $post->title }}" />
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="w-20 px-5 text-sm whitespace-nowrap">
                                                        <div class="font-medium text-gray-900">
                                                            {{ $post->title }}
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="w-40 px-5 text-sm text-gray-500 whitespace-nowrap">
                                                        <div class="text-gray-900">
                                                            Front-end Developer
                                                        </div>
                                                        <div class="mt-1 text-gray-500">
                                                            Optimization
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="w-20 px-5 text-sm text-gray-500 whitespace-nowrap">
                                                        <span
                                                            class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">
                                                            Active
                                                        </span>
                                                    </td>
                                                    <td
                                                        class="w-20 px-5 text-sm text-gray-500 whitespace-nowrap">
                                                        Member
                                                    </td>
                                                    <td
                                                        class="w-20 px-5 relative text-sm font-medium whitespace-nowrap">
                                                        <a
                                                            href="#"
                                                            class="text-indigo-600 hover:text-indigo-900">
                                                            Edit
                                                            <span class="sr-only">
                                                                , Lindsay Walton
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif

                                        <!-- More people... -->
                                    </tbody>
                                </table>
                            </div>
                        {{-- </div> --}}
                    </div>
                </section>
            </div>
        </div>
    </x-slot>
    <x-slot:footer>
        <x-app.footer :$display />
    </x-slot>
</x-app.auth>
