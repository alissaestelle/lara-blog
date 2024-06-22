<div x-cloak x-data="{ visible: false }" x-init="$nextTick(() => (visible = true))">
    <div
        x-show="visible"
        x-init="$watch('visible', () => setTimeout(() => (visible = false), 3000))"
        x-transition.duration.1000ms
        {{ $attributes->merge(['class' => $default]) }}>
        {{ $slot }}
    </div>
</div>

<style>
    [x-cloak] {
        display: none !important;
    }
</style>
