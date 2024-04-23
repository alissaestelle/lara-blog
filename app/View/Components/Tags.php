<?php

namespace App\View\Components;

use App\Models\Tag;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Tags extends Component
{
    /*
    Create a new component instance.
    */

    public function __construct(public Collection $tags)
    {
        $this->tags = Tag::all();
    }

    /*
    Get the view / contents that represent the component.
    */

    public function render(): View|Closure|string
    {
        return view('components.tags');
    }
}
