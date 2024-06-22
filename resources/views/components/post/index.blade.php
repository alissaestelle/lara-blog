@php
    $postImg = "resources/images/posts/$post->image";
@endphp

<article class="mx-auto flex flex-col items-start w-full 2xs:px-2">
    <a href="/posts/{{ $post->url }}" class="self-stretch w-full">
        <img
            src="{{ Vite::asset($postImg) }}"
            class="h-40 w-full object-cover rounded-xl xs:object-bottom xs:h-28 md:h-32 md:object-center lg:h-40"
            alt="{{ $post->title }}" />
    </a>

    <div
        class="mt-2 w-full flex items-center justify-between gap-x-4 text-xs xs:flex-col xs:gap-y-2 xs:items-start sm:flex-row sm:items-center">
        <time datetime="{{ $post->published }}">
            {{ date('F jS, Y', strtotime($post->published)) }}
        </time>
        <a
            href="/search?tag={{ $post->tag->url }}"
            class="px-3 py-1.5 relative z-10 rounded-full bg-gray-50 text-gray-600 font-medium hover:bg-gray-100 xs:order-first xs:w-full xs:text-center xs:border sm:order-none sm:w-auto">
            {{ $post->tag->name }}
        </a>
    </div>
    <div class="group relative">
        <h3
            class="mt-2 text-gray-900 text-base font-medium leading-6 group-hover:text-gray-600 xs:mt-4 sm:mt-2 sm:text-lg">
            <a href="/posts/{{ $post->url }}">
                {{ $post->title }}
            </a>
        </h3>
        <div class="mt-2 text-sm xs:hidden sm:block sm:mt-1">
            By
            <a href="/search?author={{ $post->author->url }}">
                {{ $post->author->name }}
            </a>
        </div>

        <p
            class="mt-5 text-gray-600 text-xs line-clamp-3 leading-6 xs:leading-5 sm:leading-6 xs:mt-2 sm:mt-5 sm:text-sm">
            {{ $post->excerpt }}
        </p>
    </div>
</article>
