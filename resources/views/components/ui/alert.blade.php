<!-- When there is no desire, all things are at peace. - Laozi -->

<div x-data="{ show: true }"
     x-init="setTimeout(() => show = false, 2500)">
    <p x-show="show"
       x-transition:leave.duration.1000ms
       class="mr-2 px-4 py-2 fixed top-24 right-24 text-sm text-green-600 font-medium rounded-xl bg-green-100/25 border border-green-600">
        {{ $message }}</p>
</div>