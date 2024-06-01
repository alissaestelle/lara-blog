<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    function posts()
    {
        return $this->HasMany(Post::class, 'tagID');
        // ↳ A tag has many posts.
    }
}
