<?php

namespace App\View\Components\UI;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Anchor extends Component
{
    /*
    Create a new component instance.
    */

    function __construct(
        public bool $active = false,
        public string $default = 'px-3 block hover:bg-[#D8BFD8] hover:text-white focus:bg-[#D8BFD8] focus:text-white',
        public string $thisClass = 'bg-[#D8BFD8] text-white'
    ) {
    }

    /*
    Get the view/contents that represent the component.
    */

    function render(): View|Closure|string
    {
        return view('components.ui.anchor');
    }
}
