<x-layout>
    <x-slot:nav>
        <x-nav />
        </x-slot>
        <x-slot:main>
            <div class="relative w-full xs:min-w-[500px]">
                <h2 class="mb-4 relative font-mono text-3xl text-center font-medium leading-6 text-gray-900 hover:text-gray-600 base:text-4xl"
                    style="font-family:'Courier New', Courier, monospace">register.</h2>
                <div>
                    <form method="POST"
                          action=""
                          class="py-8 px-20 w-full text-sm text-sm font-medium bg-gray-50 border border-gray-200 rounded-xl xs:min-w-[500px]">
                        <div class="my-4">
                            <label for="name"
                                   class="pl-1 block text-xs uppercase tracking-wide">Name</label>
                            <input required
                                   type="text"
                                   name="name"
                                   class="mt-2 mb-4 p-2 w-full border border-gray-200 rounded-xl">
                            <label for="username"
                                   class="pl-1 block text-xs uppercase tracking-wide">Username</label>
                            <input required
                                   type="text"
                                   name="username"
                                   class="mt-2 mb-4 p-2 w-full border border-gray-200 rounded-xl">
                            <label for="email"
                                   class="pl-1 block text-xs uppercase tracking-wide">Email</label>
                            <input required
                                   type="text"
                                   name="email"
                                   class="mt-2 mb-4 p-2 w-full border border-gray-200 rounded-xl">
                            <label for="password"
                                   class="pl-1 block text-xs uppercase tracking-wide">Password</label>
                            <input required
                                   type="password"
                                   name="password"
                                   class="my-2 mb-4 p-2 w-full border border-gray-200 rounded-xl">
                        </div>
                        <div class="text-center">
                            <button type="submit"
                                    class="px-8 py-2 text-white uppercase tracking-wide bg-blue-500 rounded-full">Enter</button>
                        </div>
                    </form>
                </div>
            </div>
            </x-slot>
            <x-slot:footer>
                {{--
                <x-footer /> --}}
                <div class="relative h-40">
                <div class="sticky h-40"></div>
                </div>
                </x-slot>
</x-layout>