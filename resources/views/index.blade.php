<x-app.layout>
    <x-slot:nav>
        <x-app.nav />
    </x-slot>
    <x-slot:main>
        <div>
            <div class="3xs:h-20"></div>

            <x-app.header />

            @if ($posts->count())
                <div>
                    {{-- Featured Post --}}
                    <div class="mx-auto w-full max-w-80 xs:px-2.5 xs:max-w-none xs:w-auto md:mt-2">
                        @if ($posts->count() >= 1)
                            <x-post.featured :post="$posts[0]" />
                        @endif

                        {{-- News Column Posts --}}
                        <div
                            class="mb-12 pt-10 flex flex-col gap-y-8 xs:grid xs:grid-cols-2 xs:gap-x-4 xs:gap-y-16 lg:gap-x-8">
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
                <div class="py-12 border-t border-gray-200 xs:px-2.5">
                    <div
                        class="mx-auto flex flex-col gap-y-8 w-full max-w-80 xs:max-w-none xs:w-auto xs:grid xs:grid-cols-3 xs:gap-x-4 xs:gap-y-16 md:mx-2.5 md:gap-x-6 lg:gap-x-8">
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
        </div>
    </x-slot>
    <x-slot:footer>
        <x-app.footer />
    </x-slot>
</x-app.layout>
