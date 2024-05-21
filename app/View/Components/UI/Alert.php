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
        public string $default = 'mx-auto mt-5 px-4 py-2 w-fit text-xs font-medium rounded-xl md:mr-3 md:absolute md:top-16 md:right-8 md:text-sm lg:mr-5'
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
