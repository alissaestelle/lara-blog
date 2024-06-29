@php
    $howls = 'resources/images/howls.png';
@endphp

<nav
    class="mx-auto pt-6 flex flex-wrap items-center justify-center gap-2 base:justify-between xs:px-5 base:py-6 base:flex-nowrap base:gap-y-0 md:px-2.5">
    {{-- Left Nav: Mobile --}}
    <a href="/" class="w-full base:hidden">
        <img src="{{ Vite::asset($howls) }}" alt="Calcifer" class="mx-auto w-fit h-12" />
    </a>
    <a href="/" class="text-xs font-bold uppercase base:hidden">Resources</a>
    <a href="/" class="text-xs font-bold uppercase base:hidden">Archive</a>
    <a href="/" class="text-xs font-bold uppercase base:hidden">About</a>

    {{-- Right Nav: Mobile --}}
    @auth
        @php
            $name = auth()->user()->name;
            $user = explode(' ', $name)[0];
        @endphp

        <div class="flex justify-center gap-x-2 w-full base:hidden">
            {{-- <div id="user-menu-mobile" class="relative flex">
                <x-ui.dropdown>
                    <x-slot:trigger> --}}
                        <span
                            id="welcome-mobile"
                            class="text-xs font-bold uppercase text-[#D875C7]">
                            Welcome, {{ $user }}
                            {{-- Welcome, A --}}
                        </span>
                    {{-- </x-slot>
                    <x-slot:event>
                        <div
                            class="px-3 py-1.5 flex flex-col text-xs font-bold uppercase text-right text-cyan-600/75 bg-white border border-[#D875C7]/75 rounded-xl">
                            <a href="/admin/post/create" class="hover:text-cyan-600/50">Admin</a>
                            <a href="#" class="hover:text-cyan-600/50">Profile</a>
                            <a href="#" class="hover:text-cyan-600/50">Settings</a>
                            <button
                                form="logout-mobile"
                                type="submit"
                                class="text-xs font-bold uppercase text-right hover:text-cyan-600/50">
                                Log Out
                            </button>
                        </div>
                    </x-slot>
                </x-ui.dropdown>
            </div> --}}
            <form method="POST" action="/logout" class="mb-0 flex items-center">
                @csrf
                <button type="submit" class="text-xs font-bold uppercase text-gray-400">
                    Log Out
                </button>
            </form>
        </div>
    @else
        <div class="flex justify-center gap-x-2 w-full text-xs font-bold uppercase base:hidden">
            <a href="/register">Register</a>
            <a href="/login">Log In</a>
        </div>
    @endauth

    {{-- Left Nav: Desktop --}}
    <div class="hidden base:flex base:items-center base:gap-x-4">
        <a href="/" class="shrink-0">
            <img src="{{ Vite::asset($howls) }}" alt="Calcifer" class="mx-auto w-fit h-12" />
        </a>
        <a href="/" class="text-xs font-bold uppercase">Resources</a>
        <a href="/" class="text-xs font-bold uppercase">Archive</a>
        <a href="/" class="text-xs font-bold uppercase">About</a>
    </div>

    {{-- Right Nav: Desktop --}}
    <div class="hidden base:flex base:items-center base:gap-x-4">
        @auth
            @php
                $name = auth()->user()->name;
                $user = explode(' ', $name)[0];
            @endphp

            <div id="user-menu-dt" class="relative flex">
                <x-ui.dropdown>
                    <x-slot:trigger>
                        <span id="welcome-dt" class="text-xs font-bold uppercase text-[#D875C7] cursor-pointer">
                            Welcome, {{ $user }}
                            {{-- Welcome, A --}}
                        </span>
                    </x-slot>
                    <x-slot:event>
                        <div
                            class="px-3 py-1.5 flex flex-col text-xs font-bold uppercase text-right text-gray-400 border border-gray-300 rounded-xl">
                            <a href="/admin/post/create">Admin</a>
                            <a href="/profile">Profile</a>
                            <a href="#">Settings</a>
                            <button
                                form="logout-dt"
                                type="submit"
                                class="text-xs font-bold uppercase text-right">
                                Log Out
                            </button>
                        </div>
                    </x-slot>
                </x-ui.dropdown>
            </div>
            <form id="logout-dt" method="POST" action="/logout" class="mb-0 flex items-center">
                @csrf
                <button type="submit" class="text-xs font-bold uppercase text-gray-400">
                    Log Out
                </button>
            </form>
        @else
            <a href="/register" class="text-xs font-bold uppercase">Register</a>
            <a href="/login" class="text-xs font-bold uppercase">Log In</a>
            <a
                href="#newsletter"
                class="px-4 py-2 w-full bg-blue-500 text-xs font-semibold text-white uppercase rounded-full base:flex-grow base:w-auto">
                Subscribe for Updates
            </a>
        @endauth
    </div>
</nav>
