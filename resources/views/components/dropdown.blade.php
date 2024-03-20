<div class="flex-2 w-full text-left relative xs:flex-1 sm:max-w-fit"
     x-data="{ show: false }">
    <div class="bg-gray-100 rounded-xl">

        {{-- TRIGGER --}}

        <div @click="show = !show"
             @click.away="show = false">
            {{ $trigger }}
        </div>
    </div>

    {{-- EVENT --}}

    <div class="mt-1 py-2 bg-gray-100 absolute z-50 w-full rounded-xl border text-sm"
         x-show="show">
        {{ $slot }}
        {{-- @foreach ($tags as $t)
        <a href="/tag/{{ $t->url }}"
           class="{{ isset($tag) && $tag->is($t) ? 'bg-[#D8BFD8] text-white' : 'bg-gray-100' }} px-3 block hover:bg-[#D8BFD8] hover:text-white focus:bg-[#D8BFD8] focus:text-white">
            {{ $t->name }}
        </a>
        @endforeach --}}
    </div>
</div>