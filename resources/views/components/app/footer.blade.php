@php
    $howls = 'resources/images/howls.png';
@endphp

<footer
    id="newsletter"
    class="flex-none py-8 text-center bg-gray-100 border border-black border-opacity-5 md:mx-7 md:px-10 md:py-16">
    <img src="{{ Vite::asset($howls) }}" alt="Calcifer" class="mx-auto -mb-1 w-10" />
    <h5 class="text-xl base:text-3xl">let’s stay in touch</h5>

    <div class="mt-8">
        <div class="mx-auto w-[80%] relative inline-block xs:w-[60%]">
            <form
                method="POST"
                action="/subscribe#newsletter"
                class="text-sm rounded-full base:flex base:flex-row base:items-center base:justify-between base:bg-white lg:bg-gray-200">
                @csrf
                <div
                    class="py-2 pl-4 grow flex flex-nowrap items-center max-h-[44px] text-left rounded-full bg-white lg:py-3 lg:pl-7 lg:bg-transparent">
                    <label for="email" class="hidden"></label>
                    <input
                        id="email"
                        type="text"
                        name="email"
                        placeholder="Email Address"
                        class="grow bg-transparent focus-within:outline-none" />

                    @error('email')
                        <p
                            id="email-alert"
                            class="hidden pt-0 mr-2 text-xs text-center text-red-500 md:block md:grow">
                            {{ $message }}
                        </p>
                    @enderror

                    @error('email.exists')
                        <p
                            id="email-alert"
                            class="hidden pt-0 mr-2 text-xs text-center text-blue-500 md:block md:grow">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                @error('email')
                    <p class="pt-2 text-red-500 text-xs md:hidden">
                        {{ $message }}
                    </p>
                @enderror

                @error('email.exists')
                    <p class="pt-2 text-blue-500 text-xs md:hidden">
                        {{ $message }}
                    </p>
                @enderror

                <button
                    type="submit"
                    class="mt-3 px-6 py-2.5 transition-colors duration-300 bg-blue-500 rounded-full text-xs font-semibold text-white uppercase base:mt-0 base:py-3 hover:bg-blue-600">
                    Subscribe
                </button>
            </form>
        </div>
    </div>
</footer>
