<article class="flex flex-col items-start w-full max-w-80 mx-auto">
    <img src="../images/rainbow.png"
         class="h-32 self-stretch object-cover object-center xs:object-bottom rounded-xl md:h-48 md:object-center"
         alt="" />

    <div class="mt-2 w-full flex items-center justify-between gap-x-4 text-xs">
        <time datetime="{{ date('M jS, Y', strtotime(now())) }}">
            {{ date('M jS, Y', strtotime(now())) }}
        </time>
        <a href="#"
           class="px-3 py-1.5 relative z-10 rounded-full bg-gray-50 text-gray-600 font-medium hover:bg-gray-100">
            Post Tag
        </a>
    </div>
    <div class="group relative">
        {{-- <h3
            class="{{ $loop->first ? 'text-fuchsia-800' : 'text-gray-900' }} mt-2 text-lg font-medium leading-6 group-hover:text-gray-600">
            --}}
            <h3 class="mt-2 text-gray-900 text-lg font-medium leading-6 group-hover:text-gray-600">
                <a href="#">
                    Post Title
                </a>
            </h3>
            <div class="mt-2 text-sm xs:hidden min-[600px]:block min-[600px]:mt-3 min-[600px]:text-sm">
                By
                <a href="#">
                    Author
                </a>
            </div>

            <p
               class="mt-5 text-gray-600 text-sm line-clamp-3 leading-6 xs:leading-5 min-[600px]:leading-6 xs:mt-3 min-[600px]:mt-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.
            </p>
    </div>
</article>