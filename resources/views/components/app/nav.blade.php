<nav
    class="mx-auto pt-6 flex flex-wrap items-center justify-center gap-x-2 gap-y-2 base:justify-between xs:px-5 base:py-6 base:flex-nowrap base:gap-y-0 lg:">
    {{-- Left Nav for Mobile --}}
    <a href="/" class="w-full base:hidden">
        <img src="../images/howls.png" alt="Calcifer" class="mx-auto w-fit h-12" />
    </a>
    <a href="/" class="text-xs font-bold uppercase base:hidden">Resources</a>
    <a href="/" class="text-xs font-bold uppercase base:hidden">Archive</a>
    <a href="/" class="text-xs font-bold uppercase base:hidden">About</a>

    {{-- Right Nav for Mobile --}}
    @auth
        @php
            $name = auth()->user()->name;
            $user = explode(' ', $name)[0];
        @endphp

        <div class="flex justify-center gap-x-2 w-full base:hidden">
            <span class="text-xs font-bold uppercase text-[#D875C7]">Welcome, {{ $user }}</span>
            <form method="POST" action="/logout" class="flex">
                @csrf
                <button type="submit" class="text-xs font-bold uppercase text-gray-400">
                    Log Out
                </button>
            </form>
        </div>
    @else
        <div class="flex justify-center gap-x-2 w-full text-xs font-bold uppercase base:hidden">
            <a href="/register">Register</a>
            <a href="/">Log In</a>
        </div>
        <div class="mt-1 w-full text-center base:hidden">
            <a
                href="#"
                class="px-4 py-2 w-full bg-blue-500 text-xs font-semibold text-white uppercase rounded-full">
                Subscribe for Updates
            </a>
        </div>
    @endauth

    {{-- Left Nav for Desktop --}}
    <div class="hidden base:flex base:items-center base:gap-x-4">
        <a href="/" class="shrink-0">
            <img src="../images/howls.png" alt="Calcifer" class="w-fit h-10 base:mx-0" />
        </a>
        <a href="/" class="text-xs font-bold uppercase">Resources</a>
        <a href="/" class="text-xs font-bold uppercase">Archive</a>
        <a href="/" class="text-xs font-bold uppercase">About</a>
    </div>

    {{-- Right Nav for Desktop --}}
    <div class="hidden base:flex base:items-center base:gap-x-4">
        @auth
            @php
                $name = auth()->user()->name;
                $user = explode(' ', $name)[0];
            @endphp

            <span class="text-xs font-bold uppercase text-[#D875C7]">Welcome, {{ $user }}</span>
            <form method="POST" action="/logout" class="flex">
                @csrf
                <button type="submit" class="text-xs font-bold uppercase text-gray-400">
                    Logout
                </button>
            </form>
        @else
            <a href="/register" class="text-xs font-bold uppercase">Register</a>
            <a href="/" class="text-xs font-bold uppercase">Log In</a>
            <a
                href="#"
                class="px-4 py-2 w-full bg-blue-500 text-xs font-semibold text-white uppercase rounded-full base:flex-grow base:w-auto">
                Subscribe for Updates
            </a>
        @endauth
    </div>
</nav>
