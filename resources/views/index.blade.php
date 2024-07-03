<x-app.layout>
    <x-slot:main>
        @if ($posts->count())
            <div class="p-7 md:pt-14">
                <div
                    class="flex flex-col gap-8 mx-auto pt-7 xs:grid xs:grid-cols-2 xs:gap-x-6 xs:gap-y-16 xs:pt-0 md:gap-x-8">
                    @foreach ($posts->skip(3) as $post)
                        <x-post :$post />
                    @endforeach
                </div>
                <div class="mb-5">
                    {{ $posts->links() }}
                </div>
            </div>
        @else
            <p class="p-12 text-xl text-center">No Posts Found 🥲</p>
        @endif
    </x-slot>
    <x-slot:footer>
        <x-app.footer />
    </x-slot>
</x-app.layout>