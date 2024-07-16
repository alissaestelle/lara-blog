<x-app.auth>
    <x-slot:main>
        <div
            class="relative w-full mx-auto p-7">
            <h2
                class="relative mb-4 font-mono text-3xl leading-6 text-center font-medium text-gray-900 hover:text-gray-600 base:text-4xl"
                style="font-family: 'Courier New', Courier, monospace">
                register.
            </h2>
            <div
                class="w-full mx-auto p-8 text-sm font-medium bg-gray-50 border border-gray-200 rounded-xl sm:max-w-[400px] md:max-w-[500px]">
                <form method="POST" action="/register" class="md:w-[75%] md:mx-auto">
                    @csrf
                    <div class="mb-5">
                        <label for="name" class="pl-1 block text-xs uppercase tracking-wide">
                            Name
                        </label>
                        <input
                            required
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            class="mt-2 p-2 w-full border border-gray-200 rounded-xl" />

                        @error('name')
                            <p class="text-red-500 text-xs mt-1 pl-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="username" class="pl-1 block text-xs uppercase tracking-wide">
                            Username
                        </label>
                        <input
                            required
                            type="text"
                            name="username"
                            value="{{ old('username') }}"
                            class="mt-2 p-2 w-full border border-gray-200 rounded-xl" />

                        @error('username')
                            <p class="text-red-500 text-xs mt-1 pl-1">{{ $message }}</p>
                        @enderror
                    </div>

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
