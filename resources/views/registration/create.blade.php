<x-auth>
    <x-slot:nav>
        <x-nav />
        </x-slot>
        <x-slot:main>
            <div class="relative w-full min-w-[300px] xs:min-w-[400px] sm:xs:min-w-[500px] lg:mb-32">
                <h2 class="mb-4 relative font-mono text-3xl text-center font-medium leading-6 text-gray-900 hover:text-gray-600 base:text-4xl"
                    style="font-family:'Courier New', Courier, monospace">register.</h2>
                <div
                     class="px-8 py-6 w-full text-sm font-medium bg-gray-50 border border-gray-200 rounded-xl sm:px-20 sm:py-10">
                    <form method="POST"
                          action="/register">
                        @csrf
                        <div class="mb-5">
                            <label for="name"
                                   class="pl-1 block text-xs uppercase tracking-wide">Name</label>
                            <input required
                                   type="text"
                                   name="name"
                                   value="{{ old('name')}}"
                                   class="mt-2 p-2 w-full border border-gray-200 rounded-xl">

                            @error('name')
                            <p class="text-red-500 text-xs mt-1 pl-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <input type="hidden"
                               name="url"
                               value="{{ old('name')}}">

                        <div class="mb-5">
                            <label for="username"
                                   class="pl-1 block text-xs uppercase tracking-wide">Username</label>
                            <input required
                                   type="text"
                                   name="username"
                                   value="{{ old('username')}}"
                                   class="mt-2 p-2 w-full border border-gray-200 rounded-xl">

                            @error('username')
                            <p class="text-red-500 text-xs mt-1 pl-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <label for="email"
                                   class="pl-1 block text-xs uppercase tracking-wide">Email</label>
                            <input required
                                   type="text"
                                   name="email"
                                   value="{{ old('email')}}"
                                   class="mt-2 p-2 w-full border border-gray-200 rounded-xl">

                            @error('email')
                            <p class="text-red-500 text-xs mt-1 pl-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <label for="password"
                                   class="pl-1 block text-xs uppercase tracking-wide">Password</label>
                            <input required
                                   type="password"
                                   name="password"
                                   class="mt-2 p-2 w-full border border-gray-200 rounded-xl">

                            @error('password')
                            <p class="text-red-500 text-xs mt-1 pl-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit"
                                    class="px-6 py-2 text-xs font-semibold text-white uppercase tracking-wide bg-blue-500 rounded-full sm:mt-1 sm:px-8 sm:text-sm sm:font-medium">Enter</button>
                        </div>
                    </form>
                </div>
            </div>
            </x-slot>
</x-auth>