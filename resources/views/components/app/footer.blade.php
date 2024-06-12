<footer
    id="newsletter"
    class="mt-4 py-8 flex-none bg-gray-100 border border-black border-opacity-5 text-center md:px-10 md:py-16 lg:mx-8 lg:rounded-xl">
    <img src="../images/howls.png" alt="Calcifer" class="mx-auto -mb-1 w-10" />
    <h5 class="text-xl base:text-3xl">let’s stay in touch</h5>

    <div class="mt-8">
        <div class="mx-auto w-[80%] xs:w-[60%] relative inline-block">
            <form
                method="POST"
                action="/subscribe"
                class="text-sm rounded-full base:flex base:flex-row base:items-center base:justify-between base:bg-white lg:bg-gray-200">
                @csrf
                <div class="py-2 grow-0 w-fit lg:py-3 lg:pl-5">
                    <label for="email" class="hidden"></label>
                    <input
                        id="email"
                        type="text"
                        name="email"
                        placeholder="Email Address"
                        class="pl-4 rounded-full focus-within:outline-none lg:pl-2 lg:py-0 lg:bg-transparent" />
                </div>
                <button
                    type="submit"
                    class="mt-3 px-6 py-3 transition-colors duration-300 bg-blue-500 rounded-full text-xs font-semibold text-white uppercase base:mt-0 hover:bg-blue-600">
                    Subscribe
                </button>
            </form>
            @error('email')
                <p class="pt-2 text-red-500 text-xs">{{ $message }}</p>
            @enderror
        </div>
    </div>
</footer>
