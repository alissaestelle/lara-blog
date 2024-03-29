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

    <div x-show="show"
         class="mt-1 py-2 bg-gray-100 absolute z-50 w-full rounded-xl border text-sm"
         style="display: none">
        {{ $slot }}
    </div>
</div>