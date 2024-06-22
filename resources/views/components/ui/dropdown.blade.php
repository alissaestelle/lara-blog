<div x-data="{ show: false }" class="flex-2 w-full text-left relative xs:flex-1 base:max-w-fit">
    {{-- TRIGGER --}}
    <div class="bg-gray-100 rounded-xl">
        <div @click="show = !show" @click.away="show = false">
            {{ $trigger }}
        </div>
    </div>

    {{-- EVENT --}}
    <div
        x-show="show"
        class="mt-1 py-2 bg-gray-100 absolute z-50 w-full overflow-auto max-h-[133px] rounded-xl border text-sm"
        style="display: none">
        {{ $event }}
    </div>
</div>
