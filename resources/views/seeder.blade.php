<x-app.layout>
    <x-slot:nav>
        <x-app.nav />
    </x-slot>
    <x-slot:main>
        <div class="px-6 lg:px-8">
            <div class="3xs:h-20"></div>

            <x-app.header />

            <div id="test">
                {{-- {{ $users }} --}}
            </div>
        </div>
    </x-slot>
    <x-slot:footer>
        <x-app.footer />
    </x-slot>
</x-app.layout>

<script></script>
