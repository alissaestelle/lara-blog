<x-layout>
    <x-slot:nav>
        <x-nav></x-nav>
        </x-slot>
        <x-slot:main>
            {{-- SITE BANNER --}}
            <div class="min-[300]:h-20"></div>
            <x-header :$tags></x-header>

            @if ($posts->count())
            <div class="mx-auto">

                {{-- FEATURED POSTS SECTION --}}
                <div class="min-[600px]:px-5">
                    @if ($posts->count() >= 1)
                    <x-featured :post="$posts[0]"></x-featured>
                    @endif

                    {{-- NEWSPAPER SECTION --}}
                    <div
                         class="pt-8 mb-12 flex flex-col gap-y-8 xs:grid xs:grid-cols-2 xs:gap-x-6 xs:gap-y-16 lg:gap-x-8">
                        @if ($posts->count() >= 2)
                        <x-newspaper :post="$posts[1]">
                        </x-newspaper>
                        @endif

                        @if ($posts->count() >= 3)
                        <x-newspaper :post="$posts[2]">
                        </x-newspaper>
                        @endif
                    </div>
                </div>
            </div>

            {{-- ALL POSTS SECTION --}}

            <div class="py-12 border-t border-gray-200">
                <div class="flex flex-col gap-y-8 xs:grid xs:grid-cols-3 xs:gap-x-8 xs:gap-y-16 lg:gap-x-10">
                    @foreach ($posts->skip(3) as $post)
                    <x-post :$post></x-post>
                    @endforeach
                </div>
            </div>
            @else
            <p class="pt-12 text-xl text-center">
                No Posts Found 🥲
            </p>
            @endif
            </x-slot>
            <x-slot:footer>
                <x-footer></x-footer>
                </x-slot>
</x-layout>