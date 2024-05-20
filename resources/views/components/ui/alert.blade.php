{{-- @dd($alert) --}}

<div x-data="{ show: true }"
     {{--
     x-init="setTimeout(() => (show = false), 2500)"
     --}}>
     <div x-show="show"
          {{--
          x-transition:leave.duration.1000ms
          --}}
          {{
          $attributes->class([$default, $theme => $active]) }}>{{ $slot }}</div>
</div>