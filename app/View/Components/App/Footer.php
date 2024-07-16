<?php

namespace App\View\Components\App;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    /*
    Create a new component instance.
    */

    public function __construct(public bool $display = false)
    {
    }

    /*
    Get the view / contents that represent the component.
    */

    public function render(): View|Closure|string
    {
        return view('components.app.footer');
    }

    /*
    Whether the component should be rendered.
    */

    public function shouldRender(): bool
    {
        return $this->display === true;
    }
}
