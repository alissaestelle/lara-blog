<x-layout>
    <x-slot:nav>
        <x-nav></x-nav>
        </x-slot>
        <x-slot:main>
            <div class="min-[300]:h-20"></div>
            <x-header :$tag :$tags></x-header>

            @if ($posts->count())
            <div class="mx-auto py-12 border-t border-gray-200 sm:px-5">
                <div class="flex flex-col gap-y-8 xs:grid xs:grid-cols-3 xs:gap-x-8 xs:gap-y-16 lg:gap-x-10">
                    @foreach ($posts as $post)
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