@php
    $howls = 'resources/images/howls.png';
@endphp

<nav
    class="mx-auto pt-6 flex flex-wrap items-center justify-center gap-2 base:px-2.5 base:py-6 base:justify-between base:flex-nowrap base:gap-0">
    {{-- Left Nav Links --}}
    <div
        class="flex flex-wrap items-center justify-center gap-2 text-xs font-bold uppercase base:w-auto base:flex-nowrap base:gap-3 md:gap-4">
        <div class="w-full base:w-auto base:shrink-0">
            <a href="/">
                <img
                    src="{{ Vite::asset($howls) }}"
                    alt="Calcifer"
                    class="mx-auto w-fit h-12 base:h-10" />
            </a>
        </div>
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

        <div class="flex items-center justify-center gap-2 w-full base:w-auto base:gap-3 md:gap-4">
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
                            class="px-3 py-1.5 flex flex-col text-xs font-bold uppercase text-right text-gray-400 border border-gray-300 bg-white rounded-xl">
                            <a href="/admin/post/create">Admin</a>
                            <a href="/profile">Profile</a>
                            <a href="#">Settings</a>
                            <button
                                form="logout"
                                type="submit"
                                class="text-xs font-bold uppercase text-right">
                                Log Out
                            </button>
                        </div>
                    </x-slot>
                </x-ui.dropdown>
            </div>
            <form id="logout" method="POST" action="/logout" class="mb-0 flex items-center">
                @csrf
                <button type="submit" class="text-xs font-bold uppercase text-gray-400">
                    Log Out
                </button>
            </form>
        </div>
    @else
        <div
            class="flex items-center justify-center gap-2 w-full text-xs font-bold uppercase base:w-auto base:gap-3 md:justify-end md:gap-4">
            <a href="/login">Log In</a>
            <a href="/register">Register</a>

            <a
                href="#newsletter"
                class="hidden px-4 py-2 w-auto bg-blue-500 text-xs font-semibold text-white uppercase rounded-full base:block">
                Subscribe for Updates
            </a>
        </div>
    @endauth
</nav>
