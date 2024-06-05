<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    function user()
    {
        return $this->belongsTo(User::class, 'userID');
        // ↳ A comment belongs to a user.
    }

    function post()
    {
        return $this->belongsTo(Post::class, 'postID');
        // ↳ A comment belongs to a post.
    }
}
