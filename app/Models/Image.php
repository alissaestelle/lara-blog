<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $index = [
        'academia.png',
        'butterfly.png',
        'dude.gif',
        'fleur.png',
        'glimmer.png',
        'legend.gif',
        'pointe.png',
        'real.png',
        'shadow.png',
        'zelda-ponyo.jpeg'
    ];

    function render()
    {
        return $this->index;
    }
}