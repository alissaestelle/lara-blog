<div
    x-data="{ show: false }"
    class="relative flex w-full text-left xs:flex-1 base:basis-1/2 md:basis-1/4">
    {{-- TRIGGER --}}
    <div @click="show = !show" @click.away="show = false" class="flex basis-full">
        {{ $trigger }}
    </div>

    {{-- EVENT --}}
    <div
        x-show="show"
        class="basis-0 mt-1 py-2 bg-gray-100 absolute z-50 w-full overflow-auto max-h-[133px] rounded-xl border text-sm"
        style="display: none">
        {{ $event }}
    </div>
</div>
