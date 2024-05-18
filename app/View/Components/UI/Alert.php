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
        public bool $active = false,
        public string $default = 'mx-auto mt-5 px-4 py-2 w-fit text-xs font-medium rounded-xl md:mr-2 md:fixed md:top-16 md:right-8 md:text-sm lg:top-20',
        public string $theme = 'text-[#C59FC5] bg-transparent border border-[#C59FC5]/50'
        )
    {
    }

    /*
    Get the view / contents that represent the component.
    */

    function render(): View|Closure|string
    {
        return view('components.ui.alert');
    }
}