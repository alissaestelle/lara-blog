<x-app.layout>
    <x-slot:nav>
        <x-app.nav />
    </x-slot>
    <x-slot:main>
        <div id="test" class="px-6 border-t border-gray-200 lg:mx-8">
            <div class="base:mx-5 md:mx-6">
                {{-- Article Nav Bar: Mobile --}}
                <div
                    class="my-7 w-full flex flex-col sm:grid sm:grid-cols-6 xs:px-6 sm:px-4 sm:gap-x-8 md:px-2 lg:px-0 lg:gap-x-12">
                    <div class="w-full flex items-center justify-between gap-x-4 sm:hidden">
                        <a
                            href="/"
                            class="transition-colors duration-300 relative inline-flex items-center text-md hover:text-blue-500">
                            <svg width="20" height="30" viewBox="7 0 20 20">
                                <g fill="none" fill-rule="evenodd">
                                    <path
                                        stroke="#000"
                                        stroke-opacity=".012"
                                        stroke-width=".5"
                                        d="M21 1v20.16H.84V1z"></path>
                                    <path
                                        class="fill-current"
                                        d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                                </g>
                            </svg>
                            Back to Posts
                        </a>
                        <div class="flex flex-col gap-y-1 3xs:flex-row 3xs:gap-x-2">
                            <span
                                class="px-4 py-1 border border-blue-300 rounded-full text-xs font-medium text-blue-300 text-center">
                                <a href="/search?tag={{ $post->tag->url }}">
                                    {{ $post->tag->name }}
                                </a>
                            </span>
                            <span
                                class="px-4 py-1 border border-red-300 rounded-full text-xs font-medium text-red-300 text-center">
                                <a href="/search?tag={{ $post->tag->url }}">Updates</a>
                            </span>
                        </div>
                    </div>

                    {{-- Article Nav Bar: Desktop --}}
                    <div
                        class="hidden sm:col-start-3 sm:col-span-4 sm:w-full sm:flex sm:items-center sm:justify-between">
                        <a
                            href="/"
                            class="transition-colors duration-300 relative inline-flex items-center text-md hover:text-blue-500">
                            <svg width="20" height="30" viewBox="7 0 20 20">
                                <g fill="none" fill-rule="evenodd">
                                    <path
                                        stroke="#000"
                                        stroke-opacity=".012"
                                        stroke-width=".5"
                                        d="M21 1v20.16H.84V1z"></path>
                                    <path
                                        class="fill-current"
                                        d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                                </g>
                            </svg>
                            Back to Posts
                        </a>
                        <div class="flex gap-x-2">
                            <span
                                class="px-4 py-1 border border-blue-300 rounded-full text-xs font-medium text-blue-300">
                                <a href="/search?tag={{ $post->tag->url }}">
                                    {{ $post->tag->name }}
                                </a>
                            </span>
                            <span
                                class="px-4 py-1 border border-red-300 rounded-full text-xs font-medium text-red-300">
                                <a href="/search?tag={{ $post->tag->url }}">Updates</a>
                            </span>
                        </div>
                    </div>

                    {{-- Article --}}
                    {{-- <article> --}}
                    {{-- Left Sidebar: Image x Author x Date --}}
                    <div class="mt-8 md:mt-12 sm:col-span-2">
                        <img
                            src="/images/posts/{{ $post->image }}"
                            alt="{{ $post->title }}"
                            class="h-40 w-full object-cover object-center rounded-xl md:h-36 lg:h-48" />
                        <div class="mt-3 flex flex-col gap-y-1 items-end text-xs">
                            <time datetime="{{ $post->published }}" class="text-gray-500">
                                {{ date('F jS, Y', strtotime($post->published)) }}
                            </time>
                            <span class="text-xs base:text-sm">
                                By
                                <a href="/search?author={{ $post->author->url }}">
                                    {{ $post->author->name }}
                                </a>
                            </span>
                        </div>
                    </div>

                    {{-- Main Section: Title x Body --}}
                    <div class="sm:col-start-3 sm:col-span-4">
                        <div class="my-7 sm:my-12">
                            <h3
                                class="font-mono mt-3 text-3xl font-medium leading-6 text-gray-900 hover:text-gray-600"
                                style="font-family: 'Courier New', Courier, monospace">
                                {{ $post->title }}
                            </h3>

                            {{-- Use {!! !!} for Any Content Containing HTML --}}
                            {{-- {!! $post->body !!} --}}
                            <p class="mt-2 text-sm whitespace-pre-line leading-6 text-gray-600">
                                {{ $post->body }}
                            </p>
                        </div>
                    </div>
                    {{-- </article> --}}

                    {{-- ** React Comments Section ** --}}
                    <div class="sm:col-start-3 sm:col-span-4">
                        <p
                            class="mb-2 pl-0.5 font-mono text-xl font-medium leading-6 text-gray-900 hover:text-gray-600"
                            style="font-family: 'Courier New', Courier, monospace">
                            Comments
                        </p>
                        <div id="react-comments"></div>
                    </div>

                    {{-- Comment Form --}}
                    <div class="sm:col-start-3 sm:col-span-4">
                        <form
                            method="POST"
                            action="/posts/{{ $post->url }}/comments"
                            id="comment-form"
                            class="mb-0 relative">
                            @csrf
                            <input type="hidden" name="userID" value="{{ $userID }}" />
                            <div
                                class="mt-4 overflow-hidden rounded-xl border border-gray-300 shadow-sm focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-fuchsia-800/20">
                                <div>
                                    <label for="body" class="sr-only">Body</label>
                                    <textarea
                                        rows="3"
                                        name="body"
                                        id="body"
                                        class="px-3 py-2 block w-full resize-none border-0 text-gray-900 placeholder:text-xs placeholder:font-medium placeholder:uppercase placeholder:tracking-wide placeholder:text-gray-400 placeholder:pt-1 focus:outline-none sm:text-sm sm:leading-6"
                                        placeholder="Add a Comment"></textarea>
                                </div>
                                <div
                                    class="p-2 flex items-center justify-between space-x-3 border-t border-gray-200 sm:px-3">
                                    <div class="flex">
                                        <button
                                            type="button"
                                            class="group inline-flex gap-1 items-center rounded-full text-left text-gray-400">
                                            <svg
                                                class="h-5 w-5 group-hover:text-gray-500"
                                                viewBox="0 0 20 20"
                                                fill="currentColor"
                                                aria-hidden="true">
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span
                                                class="text-xs italic text-gray-500 group-hover:text-gray-600">
                                                Attach a File
                                            </span>
                                        </button>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <button
                                            type="submit"
                                            class="px-4 py-1 inline-flex items-center rounded-2xl bg-transparent text-[#C99BC1] text-xs uppercase tracking-wide font-medium border border border-rounded-xl border-[#D8BFD8] hover:bg-[#F6EEF5]/50 hover:shadow-sm">
                                            Post
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    {{-- Comment Validation Errs --}}
                    <div class="sm:col-start-3 sm:col-span-4">
                        @error('userID')
                            <p class="p-2 text-red-500 text-xs">{{ $message }}</p>
                        @enderror

                        @error('body')
                            <p class="p-2 text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
    <x-slot:footer>
        <x-app.footer />
    </x-slot>
</x-app.layout>

@php
    $users = $comments->map(fn ($comment) => $comment->user->username);
@endphp

<script type="text/javascript">
    window.post = @json($post);
    window.users = @json($users);
    window.postComments = @json($comments);
</script>