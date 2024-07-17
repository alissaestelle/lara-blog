@php
    $howls = 'resources/images/howls.png';

    $active = 'hover:bg-[#D8BFD8] hover:text-white focus:bg-[#D8BFD8] focus:text-white';
    $selected = 'bg-[#D8BFD8] text-white';

    $url = request()->is('login') ? '/register' : '/login';
    $displayText = request()->is('login') ? 'Register' : 'Login';
@endphp

<nav class="relative">
    {{-- Left Nav Links --}}
    <div
        class="flex flex-wrap items-center justify-center gap-2 text-xs font-bold uppercase md:flex-nowrap md:justify-start md:gap-3">
        <div class="w-full md:w-auto md:shrink-0">
            <a href="/">
                <img
                    src="{{ Vite::asset($howls) }}"
                    alt="Calcifer"
                    class="mx-auto w-fit h-12 base:h-10" />
            </a>
        </div>
        <div class="flex items-center justify-center gap-2">
            <a href="/">Resources</a>
            <a href="/">Archive</a>
            <a href="/">About</a>
        </div>

        {{-- Right Nav Links --}}
        @auth
            @php
                $name = auth()->user()->name;
                $user = explode(' ', $name)[0];
            @endphp

            <div class="relative flex items-center justify-center w-full gap-2 md:justify-end">
                <div id="user-menu" class="relative flex">
                    <x-ui.dropdown>
                        <x-slot:trigger>
                            <span
                                id="welcome"
                                class="text-xs font-bold uppercase text-[#D875C7] cursor-pointer">
                                Welcome, {{ $user }}
                            </span>
                        </x-slot>
                        <x-slot:event>
                            <div
                                class="py-1.5 flex flex-col text-xs font-bold uppercase text-right text-gray-400 border border-gray-300 bg-white rounded-xl">
                                <div
                                    class="{{ request()->is('admin/post/create') ? $selected : $active }} py-0.5">
                                    <a href="/admin/post/create" class="px-3">New Post</a>
                                </div>
                                <div
                                    class="{{ request()->is('profile') ? $selected : $active }} py-0.5">
                                    <a href="/profile" class="px-3">Profile</a>
                                </div>
                                <div
                                    class="{{ request()->is('settings') ? $selected : $active }} py-0.5">
                                    <a href="/settings" class="px-3">Settings</a>
                                </div>
                                <div
                                    class="{{ $active }}">
                                    <form
                                        id="logout"
                                        method="POST"
                                        action="/logout"
                                        class="mb-0 flex items-center justify-end">
                                        @csrf
                                        <button
                                            type="submit"
                                            class="px-3 py-0.5 text-xs font-bold uppercase">
                                            Log Out
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </x-slot>
                    </x-ui.dropdown>
                </div>
                <button
                    form="logout"
                    type="submit"
                    class="text-xs font-bold uppercase text-gray-400 md:hidden">
                    Log Out
                </button>
                <a
                    href="#newsletter"
                    class="hidden px-4 py-2 w-auto bg-blue-500 text-xs font-semibold text-white uppercase rounded-full md:block">
                    Subscribe for Updates
                </a>
            </div>
        @else
            <div
                class="flex items-center justify-center gap-2 w-full text-xs font-bold uppercase md:justify-end">
                <a href="{{ $url }}">{{ $displayText }}</a>
                <a
                    href="#newsletter"
                    class="hidden px-4 py-2 w-auto bg-blue-500 text-xs font-semibold text-white uppercase rounded-full md:block">
                    Subscribe for Updates
                </a>
            </div>
        @endauth
    </div>
</nav>
