<?php

namespace App\View\Components\UI;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    /*
    Create a new component instance.
    */

    function __construct(
        public string $default = 'w-fit m-auto px-4 py-2 text-xs font-medium rounded-xl md:absolute md:right-[0.5rem] md:text-sm'
    ) {
    }

    /*
    Get the view / contents that represent the component.
    */

    function render(): View|Closure|string
    {
        return view('components.ui.alert');
    }
}
