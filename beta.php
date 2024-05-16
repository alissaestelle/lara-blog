<?php

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;

    function name(): Attribute
    {
        /*
        Experimental Suffix Formatter
        
        $suffix = collect(['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X'])->first(
            fn ($suffix) =>
            $this->name = "{$this->name} {$suffix}"
        );

        $name = $suffix ? rtrim($this->name, $suffix) : $this->name;

        collect(explode(',', $name))->map(
            fn ($name) =>
            trim(ucwords(strtolower($name)))
        )->reverse()->implode(' ') . ' ' . $suffix;
        */

        return Attribute::make(
            get: fn ($name) => Str::of($name)->title(),
            set: fn ($name) => Str::of($name)->title()
        );
    }