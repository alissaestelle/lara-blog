<x-app.layout>
    <x-slot:nav>
        <x-app.nav />
    </x-slot>
    <x-slot:main>
        {{-- Header --}}
        <div class="3xs:h-20"></div>
        <x-app.header />

        @if ($posts->count())
            <div class="xs:mx-2.5 md:mx-5">
                {{-- Featured Post --}}
                <div class="mx-auto w-full max-w-80 xs:max-w-none">
                    @if ($posts->count() >= 1)
                        <x-post.featured :post="$posts[0]" />
                    @endif

                    {{-- News Column Posts --}}
                    <div
                        class="pt-8 mb-12 flex flex-col gap-y-8 xs:grid xs:grid-cols-2 xs:gap-x-6 xs:gap-y-16 lg:gap-x-8">
                        @if ($posts->count() >= 2)
                            <x-post.newspaper :post="$posts[1]" />
                        @endif

                        @if ($posts->count() >= 3)
                            <x-post.newspaper :post="$posts[2]" />
                        @endif
                    </div>
                </div>
            </div>

            {{-- Posts Index --}}
            <div class="py-12 border-t border-gray-200">
                <div
                    class="flex flex-col gap-y-8 xs:px-2.5 xs:grid xs:grid-cols-3 xs:gap-x-6 xs:gap-y-16 sm:gap-x-8 md:mx-5 lg:gap-x-10">
                    @foreach ($posts->skip(3) as $post)
                        <x-post :$post />
                    @endforeach
                </div>
            </div>
            <div class="mb-5">
                {{ $posts->links() }}
            </div>
        @else
            <p class="p-12 text-xl text-center">No Posts Found 🥲</p>
        @endif
    </x-slot>
    <x-slot:footer>
        <x-app.footer />
    </x-slot>
</x-app.layout>
