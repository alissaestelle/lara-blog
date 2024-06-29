<x-app.auth>
    <x-slot:nav>
        <x-app.nav />
    </x-slot>
    <x-slot:main>
        <div
            class="mx-auto relative w-full lg:mb-32">
            <h2
                class="mb-4 relative font-mono text-3xl text-center font-medium leading-6 text-gray-900 hover:text-gray-600 base:text-4xl"
                style="font-family: 'Courier New', Courier, monospace">
                login.
            </h2>
            <div
                class="mx-auto px-8 py-6 w-full text-sm font-medium bg-gray-50 border border-gray-200 rounded-xl 2xs:min-w-[300px] xs:min-w-0 xs:max-w-[400px] sm:px-20 sm:py-10 sm:max-w-[500px]">
                <form method="POST" action="/login">
                    @csrf
                    <div class="mb-5">
                        <label for="email" class="pl-1 block text-xs uppercase tracking-wide">
                            Email
                        </label>
                        <input
                            required
                            type="text"
                            name="email"
                            value="{{ old('email') }}"
                            class="mt-2 p-2 w-full border border-gray-200 rounded-xl" />

                        @error('email')
                            <p class="text-red-500 text-xs mt-1 pl-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="password" class="pl-1 block text-xs uppercase tracking-wide">
                            Password
                        </label>
                        <input
                            required
                            type="password"
                            name="password"
                            class="mt-2 p-2 w-full border border-gray-200 rounded-xl" />

                        @error('password')
                            <p class="text-red-500 text-xs mt-1 pl-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="text-center">
                        <button
                            type="submit"
                            class="px-6 py-2 text-xs font-semibold text-white uppercase tracking-wide bg-blue-500 rounded-full sm:mt-1 sm:px-8 sm:text-sm sm:font-medium">
                            Enter
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </x-slot>
</x-app.auth>
