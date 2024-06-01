<div class="sm:col-start-3 sm:col-span-4">
    <div
        class="my-4 p-4 flex flex-col bg-gray-100 border border-gray-200 rounded-xl md:px-6 md:flex-row md:gap-4">
        <div class="flex gap-3 items-center md:shrink-0 md:self-start">
            <Avatar class="w-32 h-32" {...config} />
            {{-- <img src="../images/aew.png" class="h-12 w-12" alt="AE" /> --}}
            <header class="flex flex-col md:hidden">
                <p class="text-sm font-medium">{{ $comment->user->username }}</p>
                <span class="text-xs">
                    <time>Posts 8 Months Ago</time>
                </span>
            </header>
        </div>
        <div>
            <header class="hidden md:mt-1.5 md:flex md:flex-col">
                <p class="text-sm font-medium">{{ $comment->user->username }}</p>
                <span class="text-xs">
                    <time>Posts 8 Months Ago</time>
                </span>
            </header>
            <p class="text-sm mt-4 leading-5 text-gray-600 md:mb-1.5">
                {{ $comment->body }}
            </p>
        </div>
    </div>
</div>
