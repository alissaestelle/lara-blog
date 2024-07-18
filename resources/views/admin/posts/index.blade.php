@php
    $display = true;

    $active = 'hover:text-[#3B82F6] focus:text-[#3B82F6]';
    $selected = 'text-[#D875C7]';
@endphp

<x-app.auth>
    <x-slot:main>
        <div class="h-full p-7">
            <div class="w-full flex flex-col sm:grid sm:grid-cols-6 sm:gap-x-4">
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

                <div class="border-b border-gray-200 sm:col-span-6">
                    <p
                        class="pb-2 font-mono text-3xl font-medium"
                        style="font-family: 'Courier New', Courier, monospace">
                        Manage Posts
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

                <section class="mt-7 px-7 border border-gray-200 rounded-xl sm:col-span-5">
                    <div class="py-3">
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
                        <div class="flow-root">
                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div
                                    class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                    <table class="min-w-full divide-y divide-gray-300 rounded-xl">
                                        <thead class="bg-gray-50 rounded-xl">
                                            <tr>
                                                <th
                                                    scope="col"
                                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">
                                                    Name
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    Title
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    Status
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                    Role
                                                </th>
                                                <th
                                                    scope="col"
                                                    class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                                                    <span class="sr-only">Edit</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 bg-white">
                                            <tr>
                                                <td
                                                    class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                                                    <div class="flex items-center">
                                                        <div class="h-11 w-11 flex-shrink-0">
                                                            <img
                                                                class="h-11 w-11 rounded-full"
                                                                src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                                alt="" />
                                                        </div>
                                                        <div class="ml-4">
                                                            <div class="font-medium text-gray-900">
                                                                Lindsay Walton
                                                            </div>
                                                            <div class="mt-1 text-gray-500">
                                                                lindsay.walton@example.com
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                                                    <div class="text-gray-900">
                                                        Front-end Developer
                                                    </div>
                                                    <div class="mt-1 text-gray-500">
                                                        Optimization
                                                    </div>
                                                </td>
                                                <td
                                                    class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                                                    <span
                                                        class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">
                                                        Active
                                                    </span>
                                                </td>
                                                <td
                                                    class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                                                    Member
                                                </td>
                                                <td
                                                    class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
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

                                            <!-- More people... -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </x-slot>
    <x-slot:footer>
        <x-app.footer :$display />
    </x-slot>
</x-app.auth>
