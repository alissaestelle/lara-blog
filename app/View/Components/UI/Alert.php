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
        public string $default = 'mr-2 px-4 py-2 fixed top-20 right-24 text-sm font-medium rounded-xl',
        public string $theme = ''
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