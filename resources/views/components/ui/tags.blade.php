@php
    $queryStr = http_build_query(request()->except('tag'));
@endphp

{{-- ALPINE DEMO --}}
{{-- See Dropdown Component --}}
<x-ui.dropdown>
    <x-slot:trigger>
        <div class="py-2 pl-3 pr-9 mr-9 inline-flex w-full text-sm font-medium">
            {{ $tag->name ?? 'Tags' }}
            <x-ui.svg name="↓" />
        </div>
    </x-slot>

    <x-slot:event>
        <x-ui.anchor href="/">All</x-ui.anchor>
        {{-- Highlight Selection If URL ID === Current ID --}}
        @foreach ($tags as $t)
            @php
                $params = $queryStr ? "tag={$t->url}&{$queryStr}" : "tag={$t->url}"
            @endphp

            <x-ui.anchor active="{{ isset($tag) && $tag->is($t) }}" href="/search?{{ $params }}">
                {{ $t->name }}
            </x-ui.anchor>
        @endforeach
    </x-slot>
</x-ui.dropdown>
