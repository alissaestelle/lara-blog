@php
$queryStr = http_build_query(request()->except('tag'));
@endphp

{{-- ALPINE DEMO --}}
{{-- See Dropdown Component --}}
<x-dropdown>
    <x-slot:trigger>
        <button class="py-2 pl-3 pr-9 mr-9 inline-flex w-full text-sm text-sm font-medium">
            {{ $tag->name ?? 'Tags' }}
            <x-svg name='↓'>
                {{ $slot }}
            </x-svg>
        </button>
        </x-slot>
        <x-slot:event>
            <x-anchor href="/">
                All
            </x-anchor>
            {{-- Highlight Selection If URL ID === Current ID --}}
            @foreach ($tags as $t)
            @php
                $params = $queryStr ? "tag={$t->url}&{$queryStr}" : "tag={$t->url}"
            @endphp
            <x-anchor active="{{ isset($tag) && $tag->is($t) }}"
                      href="/search?{{ $params }}">
                {{ $t->name }}
            </x-anchor>
            @endforeach
            </x-slot>
</x-dropdown>