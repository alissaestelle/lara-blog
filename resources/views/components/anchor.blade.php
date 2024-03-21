@php
$focus = 'px-3 block hover:bg-[#D8BFD8] hover:text-white focus:bg-[#D8BFD8] focus:text-white'
@endphp
<a {{
   $attributes->merge(['class' => $focus])}}>
    {{ $slot }}
</a>