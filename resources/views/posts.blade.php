<x-layout>
    <x-slot:nav>
        <x-nav />
        </x-slot>
        <x-slot:main>
            <div class="3xs:h-20"></div>
            <x-header :$tag />
            @if ($posts->count())
            <div class="mx-auto py-12 w-full border-t border-gray-200 base:px-5">
                <div class="flex flex-col gap-y-8 xs:grid xs:grid-cols-3 xs:gap-x-8 xs:gap-y-16 lg:gap-x-10">
                    @foreach ($posts as $post)
                    <x-post :$post />
                    @endforeach
                </div>
            </div>
            @else
            <p class="p-12 text-xl text-center">
                No Posts Found 🥲
            </p>
            @endif
            </x-slot>
            <x-slot:footer>
                <x-footer />
                </x-slot>
</x-layout>