@php
    $display = true;
@endphp

<x-app.auth>
    <x-slot:main>
        <x-user />
    </x-slot>
    <x-slot:footer>
        <x-app.footer :$display />
    </x-slot>
</x-app.auth>