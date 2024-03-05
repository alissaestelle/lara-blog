<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $index = [
        'academia.png',
        'aura.png',
        'butterfly.png',
        'celestial.png',
        'fleur.png',
        'glimmer.png',
        'milk.png',
        'pointe.png',
        'real.png',
        'shadow.png',
    ];

    function render()
    {
        return $this->index;
    }
}