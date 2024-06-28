<div
    x-data="{ show: false }"
    class="relative flex w-full xs:flex-1 base:basis-1/2 md:basis-1/4">
    {{-- TRIGGER --}}
    <div @click="show = !show" @click.away="show = false" class="flex basis-full">
        {{ $trigger }}
    </div>

    {{-- EVENT --}}
    <div
        x-show="show"
        class="mt-11 absolute z-50 w-full max-h-[130px] overflow-auto rounded-xl"
        style="display: none">
        {{ $event }}
    </div>
</div>
